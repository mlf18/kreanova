<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KRENOVA JAWA TENGAH</title>
  <!-- Bootstrap core CSS-->
  <link href="{{url('back_end/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{url('back_end/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
   <link href="{{url('back_end/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <link href="{{url('back_end/css/sb-admin.css')}}" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <a class="navbar-brand" href="index.html">Dashboard Inventor</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Invetor">
                      <a class="nav-link" href="profil.html">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">Profil Inventor</span>
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Penganjuan Proposal">
                      <a class="nav-link" href="proposal.html">
                        <i class="fa fa-fw fa-file-text"></i>
                        <span class="nav-link-text">Penganjuan Proposal</span>
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ganti Password">
                      <a class="nav-link" href="password.html">
                        <i class="fa fa-fw fa-key"></i>
                        <span class="nav-link-text">Ganti Password</span>
                      </a>
                    </li>
                  </ul>
                  <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                      <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                      </a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
                    </li>
                  </ul>
                </div>
              </nav>
              @yield('content')
    <script src="{{url('back_end/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('back_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url('back_end/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{url('back_end/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('back_end/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url('back_end/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{url('back_end/js/sb-admin-datatables.min.js')}}"></script>
</body>
</html>