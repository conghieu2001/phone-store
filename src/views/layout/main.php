<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?=$this->e($title)?></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <style>
          <?php
            include_once(dirname(__DIR__,2).'/public/css/index.css');
            include_once(dirname(__DIR__,2).'/public/css/header.css');
            include_once(dirname(__DIR__,2).'/public/css/footer.css');
            include_once(dirname(__DIR__,2).'/public/css/cart.css');
            include_once(dirname(__DIR__,2).'/public/css/about.css');
            include_once(dirname(__DIR__,2).'/public/css/history-order.css');
            include_once(dirname(__DIR__,2).'/public/css/products.css');

            ?>
      </style>
  </head>
  <body>
    <?= $this->insert('partials/header') ?>

    <?=$this->section('body')?>

    <?= $this->insert('partials/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
      <?php
        include (dirname(__DIR__,2).'/public/javascript/index.js');
        include (dirname(__DIR__,2).'/public/javascript/cart.js');
        ?>
    </script>
  </body>
</html>