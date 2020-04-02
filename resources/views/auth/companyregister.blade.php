@extends('layouts.master_customer')

@section('page_title') {{ __('Company register') }} @endsection


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

										<a href="{{ route('register') }}" role="button" class="btn btn-outline-info btn-sm">User</a>
										<a href="{{ url('companyregister') }}" role="button" class="btn btn-outline-info btn-sm active">Company</a>

									</div>






									<div class="dff-tab current" id="tab-4">
										<form method="POST" action="">

											@csrf
											<div class="row">

												<div class="col-lg-12 no-pdd">

													@error('name')

																		<span class=" form-control alert-danger overflow-auto">{{ $message }}</span>
																				<br>
													@enderror
													@error('domain')

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
													@error('city')

																		<span class="form-control alert-danger overflow-auto">{{ $message }}</span>
																				<br>
													@enderror
													@error('address')

																		<span class="form-control alert-danger overflow-auto">{{ $message }}</span>
																				<br>
													@enderror
													@error('category')

																		<span class="form-control alert-danger overflow-auto">{{ $message }}</span>
																				<br>
													@enderror
													@error('tc')

																		<span class="form-control alert-danger overflow-auto">{{ $message }}</span>
																				<br>
													@enderror




													<div class="sn-field">
														<input type="text" name="name" placeholder="Company Name" value="{{ old('name') }}" required>
														<i class="la la-building"></i>
													</div>
												</div>


												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="domain" placeholder="Domain Id-e.g. kfc001" value="{{ old('domain') }}" required>
														<i class="la la-globe"></i>
													</div>
												</div>


												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" required>
														<i class="la la-envelope"></i>

													</div>
												</div>



												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="number" class="form-control" name="phone" placeholder="{{ __('Phone Number') }}" value="{{ old('phone') }}" required>
														<i class="la la-phone"></i>

													</div>

												</div>

												<div class="form-group sn-field">
													<select id="inputState" name="city" class="form-control">

														@foreach ($cities as $value)
																<option value="{{$value->id}}">{{$value->name}}</option>
														@endforeach
													</select>
													<i class="la la-dropbox"></i>
													<span><i class="fa fa-ellipsis-h"></i></span>
												</div>

												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<textarea class="form-control" placeholder="{{ __('Specific address of your company') }}" rows="2" class="form-control" name="address" value="{{ old('address') }}" required></textarea>

													</div>
												</div>


												<div class="form-group sn-field">
													<select id="inputState" name="category" class="form-control">

														@foreach ($category as $value)
																<option value="{{$value->id}}">{{$value->name}}</option>
														@endforeach
													</select>
													<i class="la la-dropbox"></i>
													<span><i class="fa fa-ellipsis-h"></i></span>
												</div>


												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" value="1" name="tc" id="c3" required>
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the foodviews <a href="#">Terms & Conditions</a>.</small>
														</div>
													</div>
												</div>

												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>

											</div>
										</form>
									</div><!--dff-tab end-->
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
