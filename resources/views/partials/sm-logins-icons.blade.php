<div class="btn-block text-centers" id="social">
	<div class="col-md-12">
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'facebook'] ), 'fa fa-facebook', 'Sign up using Facebook', array('title' => 'Sign up using Facebook', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
	</div>
	<div class="col-md-12">
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'google'] ), 'fa fa-google-plus', 'Sign up using Google+', array('title' => 'Sign up using Google+', 'class' => 'btn btn-block btn-social btn-google btn-flat', 'target' => '')) !!}
	</div>
	<div class="col-md-12">
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitter'] ), 'fa fa-twitter', 'Sign up using Twitter', array('title' => 'Sign up using Twitter', 'class' => 'btn btn-block btn-social btn-twitter btn-flat', 'target' => '')) !!}
	</div>
	<div class="col-md-12">
		{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'instagram'] ), 'fa fa-instagram', 'Sign up using instagram', array('title' => 'Sign up using instagram', 'class' => 'btn btn-block btn-social btn-instagram btn-flat', 'target' => '')) !!}
	</div>
</div>