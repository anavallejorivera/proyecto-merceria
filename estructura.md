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
