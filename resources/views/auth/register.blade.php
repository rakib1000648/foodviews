@extends('layouts.master_customer')

@section('page_title') {{ __('Register') }} @endsection


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
                  <br><br>
									<div class="signup-tab">

										<a href="{{ route('register') }}" role="button" class="btn btn-outline-info active btn-sm">User</a>
										<a href="{{ url('companyregister') }}" role="button" class="btn btn-outline-info btn-sm">Company</a>
									</div><!--signup-tab end-->

									<div class="dff-tab current">
										<form method="POST" action="{{ route('register') }}">
											@csrf

											<div class="row">

												<div class="col-lg-12 no-pdd">

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




													<div class="sn-field">
														<input type="text" name="name" placeholder="{{ __('Full Name') }}" class="form-control @error('name') is-invalid @enderror" required autocomplete="name">
														<i class="la la-user"></i>



													</div>
												</div>



												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email">
														<i class="la la-envelope"></i>



													</div>
												</div>



												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="{{ __('Phone Number') }}" required>
														<i class="la la-phone"></i>



													</div>

												</div>



												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<textarea class="form-control" placeholder="{{ __('Home address...') }}" rows="2" class="form-control @error('address') is-invalid @enderror" name="address" required></textarea>



													</div>

												</div>





												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required>
														<i class="la la-lock"></i>


													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" placeholder="{{ __('Repeat-password') }}" class="form-control" name="password_confirmation" required>
														<i class="la la-lock"></i>
													</div>
												</div>

												<!--div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
														</div>
													</div>
												</div-->

												<div class="col-lg-12 no-pdd">
													<button type="submit">{{ __('Register') }}</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->




									<!--div class="dff-tab" id="tab-4">
										<form method="POST" action="{{ route('register') }}">

											@csrf
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Company Name">
														<i class="la la-building"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="domain" placeholder="Domain Id-e.g. kfc001">
														<i class="la la-globe"></i>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email">
														<i class="la la-envelope"></i>

													</div>
												</div>



												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="{{ __('Phone Number') }}" required>
														<i class="la la-phone"></i>

													</div>

												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select>
															<option>City</option>
															<option>Category 1</option>
															<option>Category 2</option>
															<option>Category 3</option>
															<option>Category 4</option>
														</select>
														<i class="la la-dropbox"></i>
														<span><i class="fa fa-ellipsis-h"></i></span>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<textarea class="form-control" placeholder="{{ __('Specific address of your company') }}" rows="2" class="form-control @error('address') is-invalid @enderror" name="address" required></textarea>

													</div>

												</div>





												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
														</div>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>

											</div>
										</form>
									</div-->





								</div>
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
