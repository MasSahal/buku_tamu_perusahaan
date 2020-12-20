<?php

$koneksi = new mysqli('localhost', 'root', '', 'guest_book');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Daftar Tamu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <!-- Fontawesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Style Table bootstrap DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css " />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
  <!-- Jquery -->
  <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <!-- Jquery DataTables -->
  <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <!-- Bootstrap dataTables Javascript -->
  <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>



  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/wedding.css">
</head>

<body class="bg-light">

  <div class="wrapper d-flex align-items-stretch">

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
          <span class="navbar-brand mb-0"><a href="index.php" class="text-dark"><strong>Buku Tamu</strong></a></span>

          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="?page=dashboard">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=guest">Guest</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=list_guest">List Guest</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=about">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h2 class="mb-4"></h2>
      <section class="content">
        <?php
        //set timezone ke jakarta
        date_default_timezone_set('ASIA/JAKARTA');
        $jam = date('H : i');
        $tanggal =  date(' D, M  Y');

        if (isset($_GET['page'])) {
          $page = $_GET['page'];
        } else {
          $page = "dashboard";
        }

        switch ($page) {
          case 'dashboard':
            include('page/dashboard.php');
            break;
          case 'guest':
            include('page/guest.php');
            break;
          case 'list_guest':
            include('page/list_guest.php');
            break;
          case 'hapus':
            include('page/hapus.php');
            break;
          case 'edit':
            include('page/edit.php');
            break;
          case 'about':
            include('page/about.php');
            break;

          default:
            include('page/dashboard.php');
            break;
        }
        ?>
      </section>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>