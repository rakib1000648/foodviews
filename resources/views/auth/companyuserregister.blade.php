
<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>FOODVIEWS|Co-Admin Register</title>
    <!-- Favicon icon -->
@include('layouts.partials.company.links')

</head>

<body class="h-100">

    <div class="h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-5">
                    <div class="form-input-content">
                        <div class="card card-login">
                            <div class="card-header text-center">
                                <div class="nav-header position-relative  text-center w-100">
                                    <div class="brand-logo">


                                            <span class="brand-title"><b>{{ __('Foodviews') }}</b></span>     <br>

                                            <span class="brand-title"><b>{{ __('Company Admin Registration') }}</b></span>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">


                                <form method="POST" action="{{ url('company/admin/registration') }}">
            											@csrf



            												<div class="form-group mb-4">

            													@error('name')

            																		<span class=" form-control alert-danger overflow-auto">{{ $message }}</span>
            																				<br>
            													@enderror
            													@error('email')

            																		<span class=" form-control alert-danger overflow-auto">{{ $message }}</span>
            																				<br>
            													@enderror
            													@error('phone')

            																		<span class="form-control alert-danger overflow-auto">{{ $message }}</span>
            																				<br>
            													@enderror
            													@error('address')

            																		<span class="form-control alert-danger overflow-auto">{{ $message }}</span>
            																				<br>
            													@enderror
            													@error('password')

            																		<span class="form-control alert-danger overflow-auto">{{ $message }}</span>
            																				<br>
            													@enderror




            													<div class="form-group mb-4">
            														<input type="text" name="name" placeholder="{{ __('Full Name') }}" class="form-control rounded-0 bg-transparent @error('name') is-invalid @enderror" required autocomplete="name">
            														<i class="la la-user"></i>



            													</div>
            												</div>




            													<div class="form-group mb-4">
            														<input type="email" name="email" class="form-control rounded-0 bg-transparent @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email">
            														<i class="la la-envelope"></i>



            													</div>





            													<div class="form-group mb-4">
            														<input type="number" class="form-control rounded-0 bg-transparent @error('phone') is-invalid @enderror" name="phone" placeholder="{{ __('Phone Number') }}" required>
            														<i class="la la-phone"></i>



            													</div>






            													<div class="form-group mb-4">
            														<textarea class="form-control rounded-0 bg-transparent" placeholder="{{ __('Home address...') }}" rows="2" class="form-control @error('address') is-invalid @enderror" name="address" required></textarea>



            													</div>








            													<div class="form-group mb-4">
            														<input type="password" placeholder="{{ __('Password') }}" class="form-control rounded-0 bg-transparent mb-4 @error('password') is-invalid @enderror" name="password" required>



            													</div>



            													<div class="form-group mb-4">
            														<input type="password" placeholder="{{ __('Repeat-password') }}" class="form-control rounded-0 bg-transparent mb-4" name="password_confirmation" required>

            													</div>



            													<button class="btn-primary btn-lg btn-block border-0" type="submit">{{ __('Register') }}</button>


            										</form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
  @include('layouts.partials.company.scripts')
</body>

</html>
