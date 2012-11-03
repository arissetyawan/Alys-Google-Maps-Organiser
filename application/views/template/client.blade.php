<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width">
	{{ Asset::container('bootstrapper')->styles(); }}
	{{ Asset::container('bootstrapper')->scripts(); }}
	{{ Asset::scripts() }}
	{{ Asset::styles() }}
</head>
<body>
	<!-- HEADER -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner {{ Session::get('client_name_s') }}">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{ URL::to_route(''.Session::get('client_name_s').'') }}" name="top">
					<?php
					if (Session::has('client_name_s'))
					{
						echo Session::get('client_name_s');
					}
					else
					{
						echo "Default";
					}
					?>
				</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="dropdown {{ Session::get('client_name_s') }}">
							<a class="dropdown-toggle{{ Session::get('client_name_s') }}" data-toggle="dropdown" href="#">
								<i class="icon-book icon-white"></i> Adresses	<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{ URL::to_route('client_marker_list') }}"><i class="icon-align-justify"></i> Listing</a></li>
								<li><a href="{{ URL::to_route('client_new_marker',Session::get('client_id_s')) }}"><i class="icon-plus-sign"></i> Ajouter</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			<!--/.container-fluid -->
		</div>
		<!--/.navbar-inner -->
	</div>
	<!--/.navbar -->
	<!-- end HEADER -->

	<!-- Content -->
	@yield('content')

	<footer class="footer">
		<div class="container">
			<ul class="footer-links">
				<li><a href="http://www.alys.be">Alys</a></li>
			</ul>
			<p class="pull-right">
				<a href="{{ URL::to_action('home@delete_session') }}"><small>Admin flush</small></a>
			</p>
		</div>
	</footer>

	<!-- Extra page specific scripts -->
	@yield('scripts')

</body>
</html>