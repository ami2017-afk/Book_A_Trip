<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Info</title>

    <!-- Required stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Required fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Vollkorn:400,700" rel="stylesheet">

    <!-- Required scripts -->
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/scripts.js" charset="utf-8"></script>

  </head>
  <body>
    <!-- Including the navbar -->
    <?php
      include('connect.php');
      $_SESSION['page'] = 'info';
    ?>

    <!-- Including the header -->
    <?php include('header.php'); ?>

    <?php
      $alert_class = '';
      if (isset($_SESSION['message']) && isset($_SESSION['type'])) {
          if ($_SESSION['type'] == 'error') {
            $alert_class = 'alert-danger';
          }elseif ($_SESSION['type'] == 'success') {
            $alert_class = 'alert-success';
          }
      }

    ?>

    <!-- Site body -->
    <div class="container-fluid site-body">
      <div class="row info-row">
        <div class="col-sm-4 col-sm-offset-4">
          <div class="alert <?php echo($alert_class); ?>">
            <?php echo($_SESSION['message']); ?>
            <?php

              unset($_SESSION['message']);
              unset($_SESSION['type']);

            ?>
          </div>
        </div>
      </div>
    </div> <!-- /site-body -->

    <!-- Including the footer -->
    <?php include('footer.php'); ?>
  </body>
</html>
