@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="ui center aligned middle aligned grid grid-auth">

  <div class="column column-auth">

    <h2 class="ui white header">
    <a href="/" class="image"><img src="{{ LaravelLocalization::getNonLocalizedURL('images/logo_default.png') }}" ></a>
      <div class="content white">
        {{trans('views.auth.login.heading_top')}}
      </div>
    </h2>
    <form class="ui large form" method="GET" action="">
      <div class="ui stacked segment">
        <div class="field" >
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="{{trans('views.auth.login.email')}}">
          </div>
        </div>
        <div class="field">
          <div class="ui input left icon">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="{{trans('views.auth.login.password')}}">
          </div>
        </div>
        <button class="ui fluid large orange submit button" type="submit">{{trans('views.auth.login.form_action')}}</button>
        <div class="ui divider"></div>
        <div class="ui "><a href="{{ LaravelLocalization::getLocalizedURL(null, trans('routes.auth.reset.url')) }}">{{trans('routes.auth.reset.name')}}</a></div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">

      New to us? <a href="/register">Sign Up</a>

      @if(config('blogger.social_login.enabled'))
        <div class="ui horizontal divider">
          Or
        </div>
        @if(config('blogger.social_login.providers.facebook.enabled'))
        <button class="ui facebook fluid button">
          <i class="facebook icon"></i>
          Log in with Facebook
        </button>
        @endif
        @if(config('blogger.social_login.providers.twitter.enabled'))
        <button class="ui twitter fluid button">
          <i class="twitter icon"></i>
        Log in with Twitter
        </button>
        @endif
        @if(config('blogger.social_login.providers.google.enabled'))
        <button class="ui google plus fluid button">
          <i class="google plus icon"></i>
          Log in with Google
        </button>
        @endif
      @endif
      <div class="ui divider"></div>
      @include('partials._credits_footer')
    </div>


  </div>

</div>

@endsection