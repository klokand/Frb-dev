<nav class="navbar navbar-default navbar-frb2017">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">FUSION REWARDS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">FUSION REWARDS</a></li>
		<li><a href="#">OUR BRANDS</a></li>
		<li><a href="{{ route('register') }}">SIGN UP</a></li>
		@if (Route::has('login'))
                    @if (Auth::check())
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
						</li>
                    @else
                        <li><a href="#" onclick="event.preventDefault();$('#memberLoginBar').toggle();"><i class="fa fa-user-o icon-padding" aria-hidden="true"></i>LOGIN</a></li>
                    @endif
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>