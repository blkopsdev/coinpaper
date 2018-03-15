<div class="social-auth-links text-center">
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'facebook'] ), 'fa fa-facebook', 'Sign in using Facebook', array('title' => 'Sign in using Facebook', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'google'] ), 'fa fa-google-plus', 'Sign in using Google+', array('title' => 'Sign in using Google+', 'class' => 'btn btn-block btn-social btn-google btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitter'] ), 'fa fa-twitter', 'Sign in using Twitter', array('title' => 'Sign in using Twitter', 'class' => 'btn btn-block btn-social btn-twitter btn-flat', 'target' => '')) !!}
	{{-- {!! HTML::icon_link( route( 'social.redirect', ['provider' => 'instagram'] ), 'fa fa-instagram', 'Sign in using instagram', array('title' => 'Sign in using instagram', 'class' => 'btn btn-block btn-social btn-instagram btn-flat', 'target' => '')) !!} --}}
</div>
