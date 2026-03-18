# Estructura Recomendada - Proyecto Mercería

## Problemas actuales

1. **Credenciales SMTP expuestas** directamente en `proceso-contacto.php` (contraseña de app y clave reCAPTCHA)
2. **PHPMailer dentro de `assets/`** — la carpeta de assets públicos no debe contener lógica backend
3. **Sin archivo de configuración central** — cada página define sus propias variables sueltas
4. **Sin `.htaccess`** — no hay protección de directorios ni URL amigables
5. **HTML repetido** — cada página repite el mismo patrón de includes (header, nav, footer)
6. **Sin separación clara** entre lógica de negocio y presentación

---

## Estructura recomendada

```
proyecto-merceria/
│
├── .htaccess                    # Seguridad + URL rewriting
├── index.php                    # Página principal
├── contacto.php
├── gracias.php
├── quienes-somos.php
├── politica-cookies.php
│
├── config/                      # ⭐ NUEVO - Configuración centralizada
│   ├── app.php                  #   Variables globales (nombre sitio, teléfono, email...)
│   ├── mail.php                 #   Config SMTP (sin credenciales hardcodeadas)
│   └── .env                     #   Credenciales sensibles (excluido de Git)
│
├── includes/                    # ⭐ RENOMBRADO de _partials/
│   ├── header.php               #   <head> + apertura <body>
│   ├── nav.php                  #   Navegación
│   ├── footer.php               #   Pie de página + cierre </body>
│   ├── breadcrumb.php           #   Migas de pan
│   └── layout.php               #   ⭐ NUEVO - Layout wrapper (evita repetir includes)
│
├── lib/                         # ⭐ NUEVO - Lógica backend
│   ├── functions.php            #   Funciones helper reutilizables
│   ├── ContactHandler.php       #   Lógica de proceso-contacto.php
│   └── PHPMailer/               #   ⭐ MOVIDO desde assets/
│       ├── Exception.php
│       ├── PHPMailer.php
│       └── SMTP.php
│
├── pages/                       # ⭐ NUEVO - Contenido de páginas por categoría
│   ├── merceria/
│   │   ├── index.php            #   (era merceria.php)
│   │   ├── hilos-y-lanas.php
│   │   ├── agujas-y-ganchillos.php
│   │   ├── botones-y-cierres.php
│   │   ├── cintas-y-elasticos.php
│   │   └── accesorios-de-costura.php
│   ├── manualidades/
│   │   ├── index.php
│   │   ├── goma-eva.php
│   │   ├── pasta-modelable.php
│   │   └── ...
│   └── textil/
│       ├── index.php
│       ├── encajes-y-pasamaneria.php
│       └── ...
│
├── assets/                      # Solo archivos públicos/estáticos
│   ├── css/
│   │   ├── base.css             #   Reset + variables CSS
│   │   ├── layout.css           #   ⭐ RENOMBRADO de style.css (más descriptivo)
│   │   ├── carousel.css
│   │   └── productos.css
│   ├── js/
│   │   ├── main.js              #   ⭐ RENOMBRADO de script.js
│   │   └── hero.js
│   ├── img/
│   │   └── catalogo/...
│   └── fonts/
│
└── .gitignore                   # ⭐ NUEVO - Excluir .env, etc.
```

---

## Cambios clave y por qué

### 1. `config/` — Configuración centralizada

```php
// config/app.php
return [
    'site_name'  => 'Mercería Larraz',
    'phone'      => '+34 666 66 66',
    'email'      => 'bigdatazgz@gmail.com',
    'address'    => 'C/ Ejemplo 123, Zaragoza',
    'analytics'  => 'G-2XM6CYL676',
];
```

```
// config/.env (NUNCA subirlo a Git)
SMTP_HOST=smtp.gmail.com
SMTP_USER=masteringfrontend360@gmail.com
SMTP_PASS=ttew pxku jthi kwgr
RECAPTCHA_SECRET=6LcLEUQsAAAAAAlgHUxCnYdRzbxnFJXOrMuEh41v
```

### 2. `includes/layout.php` — Eliminar repetición

```php
// includes/layout.php
<?php
require_once __DIR__ . '/../config/app.php';
include __DIR__ . '/header.php';
include __DIR__ . '/nav.php';
if (isset($breadcrumb)) include __DIR__ . '/breadcrumb.php';

echo $content; // El contenido de cada página

include __DIR__ . '/footer.php';
```

Cada página solo define `$title`, `$description`, `$content` e incluye el layout.

### 3. `.htaccess` — Seguridad básica

```apache
# Bloquear acceso directo a config/ y lib/
<DirectoryMatch "^.*(config|lib|includes).*$">
    Require all denied
</DirectoryMatch>

# URL amigables opcionales
RewriteEngine On
RewriteRule ^merceria/?$ pages/merceria/index.php [L]
RewriteRule ^merceria/(.+)$ pages/merceria/$1.php [L]
```

### 4. `.gitignore`

```
config/.env
.DS_Store
Thumbs.db
```

---

## Prioridad de implementación

| Prioridad    | Cambio                                                        | Impacto        |
| ------------ | ------------------------------------------------------------- | -------------- |
| **URGENTE**  | Sacar credenciales de `proceso-contacto.php` a un `.env`      | Seguridad      |
| **ALTA**     | Mover PHPMailer de `assets/` a `lib/`                         | Seguridad      |
| **ALTA**     | Crear `.htaccess` para proteger directorios                   | Seguridad      |
| **MEDIA**    | Crear `config/app.php` centralizado                           | Mantenibilidad |
| **MEDIA**    | Renombrar `_partials/` → `includes/`                          | Convención PHP |
| **BAJA**     | Crear `layout.php` wrapper                                    | Reducir repetición |
| **BAJA**     | Reorganizar páginas en `pages/`                               | Escalabilidad  |
