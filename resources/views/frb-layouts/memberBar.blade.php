<div id="memberBar" class="clearfix">
 @if (Route::has('login'))
               
                    @if (Auth::check())
						<div id="memberDetailBar">
						<div class="col-lg-1"></div>
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 line col-top">Hi &lt;Name&gt;</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 line col-1">Reward Points: XXXX</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 line col-2">Reward Dollars Balance: $xxx</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 line col-3">STATUS:<span>RUBY</span></div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 line col-4">MY ACCOUNT</div>
						</div>
                    @else
						<div id="memberLoginBar">
								<form class="form-inline" role="form" method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email" class="textLabel">Member number:</label>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email/Member Number" required autofocus>
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label for="password" class="textLabel">Password</label>
										<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
								</div>
								<div class="form-group">
									<div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div>
										<a class="btn btn-link" href="{{ route('password.request') }}">
											Forgot Your Password?
										</a>
										<button type="submit" class="btn btn-primary btn-primary-gray">
											Login
										</button>
										
									</div>
								</div>
							</form>
						</div>
                    @endif
                
            @endif
</div>


