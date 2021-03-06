<!DOCTYPE html>
<html lang="id">
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
  <!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="index.html">Dashboard Kota Semarang</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Register Pengusul">
					<a class="nav-link" href="datapengusul.html">
						<i class="fa fa-fw fa-table"></i>
						<span class="nav-link-text">Data Pengusul</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Unggah Surat Pengantar">
					<a class="nav-link" href="SuratPengantar.html">
						<i class="fa fa-fw fa-file"></i>
						<span class="nav-link-text">Unggah Surat Pengantar</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Invetor">
					<a class="nav-link" href="datainventor.html">
						<i class="fa fa-fw fa-file"></i>
						<span class="nav-link-text">Data Inventor</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Review Proposal">
					<a class="nav-link" href="reviewproposal.html">
						<i class="fa fa-fw fa-check"></i>
						<span class="nav-link-text">Review Proposal</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pendaftaran Bupati/Walikota Pelopor Inovasi Daerah">
					<a class="nav-link" href="pendaftranbupati.html">
						<i class="fa fa-fw fa-sign-in"></i>
						<span class="nav-link-text">Pendaftaran Bupati/Walikota Pelopor Inovasi Daerah</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ganti Password">
					<a class="nav-link" href="gantipassword.html">
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
    <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © UPP IPTEKIN BAPPEDA PROVINSI JAWA TENGAH 2018</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Apakah anda ingin keluar ?</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <a class="btn btn-primary" href="login.html">Keluar</a>
            </div>
          </div>
        </div>
      </div>
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
    </div>
  </body>
  </html>