<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vampc @yield('title')</title>
  <!-- Styles semantic ui-->
  <link rel="stylesheet" href="{{ asset('semantic/dist/semantic.min.css')}}">
</head>

<body>
  <div class="ui attached grid stackable huge menu">
    <div class="ui container">
      <a class="item {{Request::is('/') ? "active":""}}" href="/">
        <i class="home icon"></i> Home
      </a>
      <a class="item {{Request::is('blog') ? "active":""}}" href="/blog">
      <i class="rss icon"></i>Blog
      </a>
      <a class="item {{Request::is('about') ? "active":""}}" href="/about">
        <i class="info layout icon"></i> About
      </a>
      <a class="item {{Request::is('contact') ? "active":""}}" href="/contact">
        <i class="mail icon"></i> Contact
      </a>
      @guest
      <a class="item {{Request::is('login') ? "active":""}}"  href="/login">
        <i class="sign in  icon"></i> Sign In
      </a>
      @else
      <div class="ui simple dropdown item">
        {{Auth::user()->name}}
        <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item">
            <i class="dashboard icon"></i> Manage Articles</a>
          <a class="item">
            <i class="user icon"></i> Profile</a>
          <div class="ui divider"></div>
          
            <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="sign out icon"></i> Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        </div>
      </div>
      @endguest
      <div class="right item">
        <div class="ui search">
          <div class="ui icon mini input">
            <input class="prompt" type="text" placeholder="Search...">
            <i class="search icon"></i>
          </div>
          <div class="results"></div>
        </div>
      </div>
    </div>
  </div>
  @yield('content') {{-- jquery --}}
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <!-- Styles semantic ui-->
  <script src="{{asset('semantic/dist/semantic.min.js')}}"></script>
  {{-- custome javascript --}}

  <script src="{{ asset('js/all.js') }}"></script>
</body>

</html>