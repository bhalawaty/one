<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
          {{--integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

    {!! Html::style('website/css/bootstrap.min.css') !!}
    {!! Html::style('website/css/flexslider.css') !!}
    {!! Html::style('website/css/style.css') !!}
    {!! Html::style('website/css/font-awesome.min.css') !!}
    {!! Html::script('website/js/jquery.min.js') !!}
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet'
          type='text/css'>


    <title>
        oneee
        |
        @yield('title')
    </title>
    @yield('header')
</head>
<body>
<div id="app">
    <div class="header">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <i class="fa fa-paper-plane">

                </i> ONE</a>
            <div class="menu">
                <a class="toggleMenu" href="#">
                    <img src="{{ Request::root() }}website/images/nav_icon.png" alt=""/>
                </a>
                <ul class="nav" id="nav">
                    <li class="current"><a class="nav-link" href="{{url('home')}}">Home</a></li>
                    <li class="nav-link"><a href="{{url('/showAll')}}">All Estates </a></li>
                    <li><a class="nav-link" href="about.html">About Us</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="contact.html">Contact Us</a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                    <div class="clear"></div>
                </ul>

            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<div class="footer">
    <div class="footer_bottom">
        <div class="follow-us">
            <a class="fa fa-facebook social-icon" href="{{getsetting('facebook')}}"></a>
            <a class="fa fa-twitter social-icon" href="{{getsetting('twitter')}}"></a>
            <a class="fa fa-youtube social-icon" href="{{getsetting('youtube')}}"></a>
             </div>

    </div>
</div>
@yield('footer')
{!! Html::script('website/js/bootstrap.min.js') !!}
{!! Html::script('website/js/jquery.flexslider.js') !!}
{!! Html::script('website/js/responsive-nav.js') !!}



</body>
</html>
