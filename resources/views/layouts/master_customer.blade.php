
<!DOCTYPE html>
<html>


<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name') }} | @yield('page_title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

@include('layouts.partials.customer.links')

@yield('links')

</head>


<body oncontextmenu="return false;">

	<div class="wrapper">

@include('layouts.partials.customer.header')




		<main>
			<div class="main-section">
				<div class="container">


@yield('content')


				</div>
			</div>
		</main>

@include('layouts.partials.customer.footer')

	</div><!--theme-layout end-->



@include('layouts.partials.customer.scripts')
</body>


</html>
