<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">

<head>
  <meta charset="utf-8">
  <title><?= $site->title() ?> | <?= $site->baseline() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Modulo permet de construire facilement le déroulé de son événement, de le partager, et de suivre son événement en temps réel." />
  <meta name="robots" content="index, follow" />
  <meta name="Author" content="Arthur Schmitt" />

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500" rel="stylesheet" />

  <?= css([
    'assets/css/socicon.css',
    'assets/css/entypo.css',
    'assets/css/theme.css',
    'assets/css/custom.css',
    '@auto'
  ]) ?>

  <!-- favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= kirby()->urls()->assets() ?>/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= kirby()->urls()->assets() ?>/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= kirby()->urls()->assets() ?>/favicons/favicon-16x16.png" />

  <!-- Share stuff -->
  <meta property="og:title" content="le créateur de déroulés pour les facilitateurs" />
  <meta property="og:site_name" content="Modulo" />
  <meta property="og:url" content="http://modulo.io" />
  <meta property="og:description" content="Modulo permet de construire facilement le déroulé de son événement, de le partager, et de suivre son événement en temps réel." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?= kirby()->urls()->assets() ?>/img/share_image_modulo.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="http://modulo.io/" />
  <meta property="twitter:title" content="Modulo | le créateur de déroulés pour les facilitateurs" />
  <meta property="twitter:description" content="Modulo permet de construire facilement le déroulé de son événement, de le partager, et de suivre son événement en temps réel." />
  <meta property="twitter:image" content="<?= kirby()->urls()->assets() ?>/img/share_image_modulo.png" />
  <script>
    (function(w, d, t, u, n, a, m) {
      w['MauticTrackingObject'] = n;
      w[n] = w[n] || function() {
          (w[n].q = w[n].q || []).push(arguments)
        }, a = d.createElement(t),
        m = d.getElementsByTagName(t)[0];
      a.async = 1;
      a.src = u;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://go.modulo.io/mtc.js', 'mt');

    mt('send', 'pageview');
  </script>
</head>

<body>