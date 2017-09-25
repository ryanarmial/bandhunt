<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" href="http://levi.co.id/wp-content/themes/Levis/img/favicon.png">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"  media="screen,projection"/>
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Levi&#039;s® Band Hunt</title>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1213110598811776'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1213110598811776&ev=PageView&noscript=1"
    /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
  </head>
  <body>
    <ul id="slide-out" class="side-nav">
      <li class="center-align margin-bottom-20"><a style="display:unset;" href="{{ url('/') }}"><img class="responsive-img" src="{{ asset('images/logo-band.jpg') }}" alt=""></a></li>
      <li><a class="" href="{{ url('/') }}">HOME</a></li>
      <li class="has-submenu">
        <a href="{{ route('about') }}">ABOUT</a>
        <ul class="side-submenu">
         <li><a href="{{ route('about') }}">ABOUT LEVI'S&#174;</a></li>
         <li><a href="{{ route('about') }}#band-hunt">ABOUT LEVI'S&#174; BAND HUNT</a></li>
        </ul>
      </li>
      <li class="has-submenu">
        <a class="" href="{{ route('competition') }}">COMPETITION</a>
        <ul class="side-submenu">
          <li><a href="{{ route('competition') }}">MEKANISME</a></li>
          <li><a href="{{ route('competition') }}#hadiah">HADIAH</a></li>
          <li><a href="{{ route('competition') }}#judges">DEWAN JURI</a></li>
          <li><a href="{{ route('popup') }}">LEVI'S&#174; POP UP STUDIO</a></li>
       </ul>
      </li>
      <li>
        <!-- <a class="" href="{{ route('submission') }}">BAND SUBMISSION</a> -->
        <a class="" href="{{ route('vote') }}">VOTE</a>
        <ul class="side-submenu">
          <li><a href="{{route('downloadpdf')}}">DOWNLOAD FORMULIR</a></li>
        </ul>
      </li>
      <li><a class="" href="{{ route('contact') }}">CONTACT US</a></li>
      @if (Auth::guest())
        <li><a class="" href="{{ route('login') }}">`LOG IN`</a></li>
      @else
        <li><a class="" href="#" data-activates="dropdown4">Hi {{ Auth::user()->name }}</a></li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
      @endif
    </ul>
    <header>
      <div id="menu-top">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 levis-logo">
              <a href="{{ url('/') }}"><img class="responsive-img" src="{{ asset('images/logo-band-small.png') }}" alt=""></a>
            </div>
            <div class="col s12 m6 universal-logo">
              <a href="https://twitter.com/Universal_Indo" target="_blank">
                <img class="responsive-img hide-on-small-only" src="{{ asset('images/universal-new.png') }}">
                <img class="hide-on-med-and-up responsive-img" src="{{ asset('images/universal-mobile.png') }}">
              </a>
            </div>

            <div class="col s12 hide-on-med-and-up center-align btn-mobile">
              <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="fa fa-bars" aria-hidden="true"></i> MENU
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="menubar">
        <div class="container">
          <nav>
           <div class="nav-wrapper center-align">
             <ul id="dropdown1" class="dropdown-content">
              <li><a href="{{ route('about') }}">ABOUT LEVI'S&#174;</a></li>
              <li><a href="{{ route('about') }}#band-hunt">ABOUT LEVI'S&#174; BAND HUNT</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
              <li><a href="{{ route('competition') }}">MEKANISME</a></li>
              <li><a href="{{ route('competition') }}#hadiah">HADIAH</a></li>
              <li><a href="{{ route('competition') }}#judges">DEWAN JURI</a></li>
              <li><a href="{{ route('popup') }}">LEVI'S&#174; POP UP STUDIO</a></li>
           </ul>
           <!-- <ul id="dropdown3" class="dropdown-content">
             <li><a href="{{route('downloadpdf')}}">DOWNLOAD FORMULIR</a></li>
          </ul> -->
             <ul id="" class="center-align hide-on-small-only">
              <li>
                <a class="{{ $page == 'home' ? 'aktif-menu' : '' }} menu-text" href="{{ url('/') }}">HOME</a>
              </li>
              <li>
                <a class="{{ $page == 'about' ? 'aktif-menu' : '' }} menu-text dropdown-button" href="{{ route('about') }}" data-activates="dropdown1">About</a>
              </li>
              <li>
                <a class="{{ $page == 'competition' ? 'aktif-menu' : '' }} menu-text dropdown-button" href="{{ route('competition') }}" data-activates="dropdown2">Competition</a>
              </li>
              <!-- <li>
                <a class="{{ $page == 'submission' ? 'aktif-menu' : '' }} menu-text dropdown-button" href="{{ route('submission') }}" data-activates="dropdown3">Band Submission</a>
              </li> -->
              <li>
                <a class="{{ $page == 'vote' ? 'aktif-menu' : '' }} menu-text dropdown-button" href="{{ route('vote') }}" data-activates="dropdown3">Vote</a>
              </li>
              <li>
                <a class="{{ $page == 'contact' ? 'aktif-menu' : '' }} menu-text" href="{{ route('contact') }}">Contact Us</a>
              </li>
              @if (Auth::guest())
                <li><a class="{{ $page == 'login' ? 'aktif-menu' : '' }} menu-text" href="{{ route('login') }}">LOG IN</a></li>
              @else
                <li><a class="menu-text dropdown-button" href="#" data-activates="dropdown4">Hi {{ Auth::user()->name }}</a></li>
                <ul id="dropdown4" class="dropdown-content">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
               </ul>
              @endif
              <li>
                <form class="form-search" action="index.html" method="post">
                  <input type="text" name="" value="">
                  <button><img src="{{ asset('images/btn-search.png') }}" alt=""></button>
                </form>
              </li>
             </ul>
           </div>
         </nav>
        </div>
      </div>
    </header>
    @yield('content')
    <footer>
      <div class="container">
        <div class="row">
          <div class="col s12 foot-link">
            <span class="copyright">&#169;2017 Levi Strauss & Co.</span>
            <ul>
              <li><a href="http://levi.co.id/about-levis" target="_blank">About Levi's&#174;</a></li>
              <li><a href="http://levi.co.id/privacy-policy" target="_blank">Kebijakan</a></li> 
              <li><a href="http://levi.co.id/terms-of-use" target="_blank">Syarat Penggunaan</a></li>
            </ul>
            <div class="social">
              <ul>
                <li><a href="https://www.instagram.com/levis_indonesia/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/levis.indonesia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/LevisID" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://levi.co.id/store-locator" target="_blank"><i class="fa fa-map-marker"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    <script type="text/javascript">
      $(".button-collapse").sideNav();
      $(".dropdown-button").dropdown({
        hover: true
      });
    </script>
    @yield('footer')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-103556098-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>
