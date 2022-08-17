<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Starter Template · Bootstrap v4.6</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/starter-template/">



  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>/bootstrap-4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



  <!-- Favicons -->
  <link rel="apple-touch-icon" href="<?= base_url() ?>/images/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="<?= base_url() ?>/images/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="<?= base_url() ?>/images/favicon-16x16.png" sizes="16x16" type="image/png">
  <!-- <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json"> -->
  <!-- <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c"> -->
  <link rel="icon" href="<?= base_url() ?>/images/favicon.ico">
  <!-- <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml"> -->
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>/external/css/starter-template.css" rel="stylesheet">
</head>

<body>

  <?= $this->include('navbar'); ?>

  <main role="main" class="container">

    <?= $this->renderSection('content'); ?>

  </main><!-- /.container -->


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>