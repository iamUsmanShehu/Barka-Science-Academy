<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BARKA SCIENCE ACADEMY</title>
<?php include("includes/header.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="" class="nav-link">Barka Science Academy</a> -->
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php include("includes/sidebar.php"); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
            <div class="card col-12">
              <div class="card-header">
                <h3 class="card-title">Class X Students</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Class</th>
                    <th>ID No</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Paymet Method</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Primary 1</td>
                    <td>Pri001</td>
                    <td>Abdurrahim Auwal Isah</td>
                    <td>Male</td>
                    <td>12 Jan, 1995</td>
                    <td>
                      <div class="row">
                        <div class="col">
                          <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> Cash</a>
                        </div>
                        <div class="col">
                          <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> POS</a>
                        </div>
                        <div class="col">
                          <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> Transfer</a>
                        </div>
                        <div class="col">
                          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> Card</a>
                        </div>
                        <!-- <div class="col-sm-3">
                          <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        </div> -->
                      </div> 

                      <!-- <div class="row"> -->
                        
                        <!-- <div class="col-sm-6">
                          <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        </div> -->
                      <!-- </div>  -->
                    </td>
                  </tr>
                  <tr>
                    <td>Primary 2</td>
                    <td>Pri002</td>
                    <td>Muhammad Hamidu Musa</td>
                    <td>Male</td>
                    <td>01 Feb, 2001</td>
                    <td>
                      <div class="row">
                        <div class="col">
                          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> Cash</a>
                        </div>
                        <div class="col">
                          <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> POS</a>
                        </div>
                        <div class="col">
                          <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> Transfer</a>
                        </div>
                        <div class="col">
                          <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-payment"><i class="fas fa-coins"></i> Card</a>
                        </div>
                        <!-- <div class="col-sm-3">
                          <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        </div> -->
                      </div> 
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Class</th>
                    <th>ID No</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Paymet Method</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php include("models.php"); ?>
 <?php include("includes/footer.php"); ?>
</body>
</html>
