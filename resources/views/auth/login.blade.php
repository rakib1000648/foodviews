@extends('layouts.master_customer')

@section('page_title') {{ __('Login') }} @endsection


@section('content')

			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="{{url('customer')}}/images/cm-logo.png" alt="">
									<p>Workwise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
								</div><!--cm-logo end-->
								<img src="{{url('customer')}}/images/cm-main-img.png" alt="">
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">


							<div class="login-sec">



								<div class="sign_in_sec current">

									<h3>{{ __('Login') }}</h3>





									<form method="POST" action="{{ route('login') }}">
                    @csrf

										<div class="row">

											<div class="col-lg-12 no-pdd">

												@error('email')

																	<span class=" form-control alert-danger">{{ $message }}</span>
																			<br>
												@enderror
												@error('password')

																	<span class="form-control alert-danger">{{ $message }}</span>
																			<br>
												@enderror

												<div class="sn-field">



													<input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
													<i class="la la-user"></i>


												</div><!--sn-field end-->

											</div>

											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password" class="form-control" name="password" required autocomplete="current-password">

													<i class="la la-lock"></i>


												</div>
											</div>

											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input  type="checkbox" id="c1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
														<label for="c1">
															<span></span>
														</label>
														<small>{{ __('Remember Me') }}</small>
													</div><!--fgt-sec end-->
											@if (Route::has('password.request'))
													<a href="{{ route('password.request') }}" title="">{{ __('Forgot Your Password?') }}</a>
											@endif
												</div>
											</div>

											<div class="col-lg-12 no-pdd">
												<button type="submit">{{ __('Login') }}</button>
											</div>

										</div>
									</form>





									<div class="login-resources">
										<h4>Login Via Social Account</h4>
										<ul>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
											<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
										</ul>
									</div><!--login-resources end-->
								</div><!--sign_in_sec end-->







							</div><!--login-sec end-->
						</div>
					</div>
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<div class="footy-sec">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="{{url('customer')}}/images/copy-icon.png" alt="">Copyright 2019</p>
				</div>
			</div><!--footy-sec end-->


@endsection
