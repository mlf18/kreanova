

@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row" align="center">
     		<div class="col-md-12">
              	<div class="masthead2">
	              
	              	<h2 >
		              	<a href="{{ route('pengusul.create') }}" class="btn btn-success">REGISTER</a>

		              	<a href="{{ route('pengusul.create') }}" class="btn btn-success">POLLING</a>
						

					</h2>

	       
	              	<hr>

	              	<h2 id="sec0">INFORMASI</h2>
	              	<p>

	              	</p>
	              	<a href="/">
	              	<div class="row">
	              		<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	                  	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	                  	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div></a>
	              	</div>
	              
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



	<script type="text/javascript">

		$(document).ready(function() {
		    $('#myCarousel').carousel({
		    interval: 1000
		    })
		    
	</script>

