<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ssets/css/responsive.css') }}">
</head>
<body>

	<section class="header shadow">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="{{ url('student') }}"><img src="https://media.istockphoto.com/vectors/adoption-and-community-care-vector-id1286680331?k=20&m=1286680331&s=612x612&w=0&h=N7cQExSqTTo-Jd30iyOe0IrCCpbeyCRBuxUHL1j13qs=" alt=""></a>
				</div>
				<div class="col-md-9">
                    @section('menu-content') 
                    @show 
					<div class="menu">
						<ul class="">
							<li><a  href="{{ route('student.index') }}">Home</a></li>
							<li><a  href="{{ route('student.create') }}">Add Student</a></li>
							<li><a  href="{{ route('student.show', 12) }}">Single Student</a></li>
							<li><a  href="{{ route('student.edit', 12) }}">Edit Student</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
    	
    <section class="topbar">
        <h1> @yield('page-name', 'This is Page name') </h1>
        <p> @yield('page-sub-title', 'This is our sub title')</p>
    </section>

	<div class="wrap-table">
		
		<br>
		<br>

        @section('main-content') 
        @show 

	</div>



	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>Copyright © 2022 Apple Inc. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>


	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>