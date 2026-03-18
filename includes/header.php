<?php
$appConfig = require __DIR__ . '/../config/app.php';
if (!isset($base)) $base = '.';
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description;?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/css/layout.css">
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/css/carousel.css">
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/css/productos.css">
    <link rel="icon" type="image/svg+xml" href="<?php echo $base; ?>/assets/img/logolarraz.svg">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $appConfig['analytics_id']; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?php echo $appConfig['analytics_id']; ?>');
    </script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="<?php echo $appConfig['cookiebot_id']; ?>" data-blockingmode="auto" type="text/javascript"></script>
  </head>
  <body>
   
