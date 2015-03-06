<div class="panel panel-default">
    <div class="panel-heading">Social Login</div>
    <div class="panel-body text-center">
        <a href="{{ url('social_login?provider=facebook') }}" class="btn btn-social btn-facebook"><span class="fa fa-facebook"></span> Sign in with Facebook</a>
        <a href="{{ url('social_login?provider=google') }}" class="btn btn-social btn-google-plus"><span class="fa fa-google"></span> Sign in with Google</a>
        <a href="{{ url('social_login?provider=twitter') }}" class="btn btn-social btn-twitter"><span class="fa fa-twitter"></span> Sign in with Twitter</a>
    </div>
</div>