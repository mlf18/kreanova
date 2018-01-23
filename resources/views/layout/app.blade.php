<!DOCTYPE html>
<html>
	
<head>
	<title>Krenova</title>
</head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style type="text/css">
	body {
	padding-top:50px;
	}

	#masthead {
		min-height:270px;
		background-color:#01af9e;
	  	color:#ffffff;
	}

	#masthead2 {
		min-height:270px;
		background-color:green;
	  	color:#ffffff;
	}

	#masthead h1 {
		font-size: 55px;
		line-height: 1;
	}

	#masthead .well {
		margin-top:13%;
		background-color:#111155;
	  	border-color:#000033;
	}

	.icon-bar {
		background-color:#fff;
	}

	/* hide sidebar sub menus by default */
	#sidebar.nav .nav {
		display: none;
	    font-size:12px;
	}

	/* show sub menu when parent is active */
	#sidebar.nav>.active>ul {
		display: block;
	}

	@media screen and (min-width: 768px) {
		#masthead h1 {
			font-size: 100px;
		}
	}

	.navbar-bright {
		background-color:black;
	    color:#fff;
	}
	  
	.navbar-bright a, #masthead a, #masthead .lead {
	  	color:#ffffff;
	}

	.navbar-bright li > a:hover {
	    background-color:#01af9e;
	}

	.affix-top,.affix{
		position: static;
	}

	@media (min-width: 979px) {
	  #sidebar.affix-top {
	    position: static;
	  	margin-top:30px;
	  	width:228px;
	  }
	  
	  #sidebar.affix {
	    position: fixed;
	    top:70px;
	    width:228px;
	  }
	}

	#sidebar li.active {
	  	border:0 #eee solid;
	  	border-right-width:4px;
}

</style>


<body>
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">KRENOVA</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#sec0">INFORMASI</a>
        </li>
        <li>
          <a href="#sec">KONTAK</a>
        </li>
        <li>
          <a href="#sec">LOGIN</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Krenova
            <p class="lead">Welcome To Krenova</p>
          </h1>
        </div>
      </div>
   </div>
</div>

@yield('content')
</body>
</html>