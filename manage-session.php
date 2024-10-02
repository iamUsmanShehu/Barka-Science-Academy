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
              <li class="breadcrumb-item active">Sessions</li>
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
                <h3 class="card-title">Sessions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Session</th>
                    <th>Date Created</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2023 /2024</td>
                    <td>09/03/2024</td>
                    <td><a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>&nbsp
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></td></a>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2022 / 2023</td>
                    <td>09/03/2024</td>
                    <td><a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>&nbsp
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></td></a>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S/N</th>
                    <th>Session</th>
                    <th>Date Created</th>
                    <th>Manage</th>
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
