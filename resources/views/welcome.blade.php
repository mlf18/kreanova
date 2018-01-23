

@extends('layout.app')

@section('content')

	<div class="container">
		<div class="row" align="center">
     		<div class="col-md-12">
      			<h2 id="sec0">INFORMASI</h2>
              	<p>

              	</p>
              	<a href="/">
              	<div class="row">
              		<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
                  	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
                  	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div></a>
              	</div>
              	<div class="masthead2">
	              	<h2>TENTANG KRENOVA</h2>
	              	<p>
	                KRENOVA adalah ajang penghargaan untuk karya kreatif dan inovatif masyarakat yang diinisiasi KEMRISTEKDIKTI RI, di Banyumas diorganisir komunitas-komunitas kreatif dengan dukungan dari Pemerintah Daerah.
	              	</p>
	            
	           
	              	<hr class="col-md-12">
	              	
	              
	              
	              	<h2 >Bergabunglah Dengan kami</h2>

	              	<a href="{{ route('pengusul.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Daftar</a>
					<table class="table" id="scheduletable">
	       
	              	<hr>
	              
	              	<h2 id="sec3">Kontak Kami</h2>
	            	<div class="panel" align="left">
		      			Name
		      			<hr>
		      			Email Addres
		      			<hr>
		      			Phone Number
		      			<hr>
		      			Message
	      			</div>
	            </div>	
      		</div>
      	</div>
	</div>

@endsection