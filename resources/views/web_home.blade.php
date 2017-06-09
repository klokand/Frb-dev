@extends('frb-app')
@section('content')
<div id="contentArea">
	<div id="mainArt">
		<img src="{{ asset('img/20170531-Fusion-Rewards-web_home_02.jpg') }}" class="img-responsive" />
		<div id="overlayBox">
			<div class="text1">REWARD</div>
			<div class="text2">YOURSELF</div>
			<div class="button"><a href="{{ route('register') }}" class="btn btn-primary btn-ruby"">SIGN UP</a></div>
			<div class="text3">Already a Fusion Rewards member?</div>
			<div class="text4"><a href="#" onclick="event.preventDefault();$('#memberLoginBar').toggle();">LOG IN</a></div>
		</div>
	</div>
	<div id="tiers" class="clearfix">
		<div id="memberStrap"><p>MEMBERSHIP BENEFITS</p></div>
		<div id="tierSection">
			<div class="col-lg-4 col-md-4 col-sm-4 rubyBox">
				<span class="tier">RUBY</span>
				<div class="range">$0 - $750</div>
				<div class="annual">per annum</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 silverBox">
				<span class="tier">SILVER</span>
				<div class="range">$750 - $1500</div>
				<div class="annual">per annum</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 goldBox">
				<span class="tier">GOLD</span>
				<div class="range">$1500+</div>
				<div class="annual">per annum</div>
			</div>
		</div>
		<div id="tierDeco">
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs-down"><span class="rubyDeco"></span></div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs-down"><span class="silverDeco"></span></div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs-down"><span class="goldDeco"></span></div>
		</div>
	</div>
	<div id="signUp">
		<p>sdof sdfosdfosdf  sdfosdfs  soiuoe  souiuou, ounde coudle sdfsdf oune one sdofe, nam requen eicto somcld ononweld lkjsdf sdfsdfsdfsd sdfsdf sdfsdf dsfsdfes sdfsdesd sdfs</p>
		<div class="col-xs-12 col-sm-12 buttonWrap"><button type="button" class="btn btn-primary btn-primary-blk btn-lg">JOIN FUSION REWARDS</button></div>
	</div>
</div>
@endsection