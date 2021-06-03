<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('frontend.partials.assets.css')
    <title>@yield('title')</title>
    <link rel="icon" 
      type="image/png"   href="{{asset('favicon.ico')}}">
  <style>
    #preloader {
    height: 100vh;
    position: fixed;
    width: 100%;
    background: #fff url("./assets/img/preloader.gif") no-repeat center;
    z-index: 999999;
}

    </style>
  </head>
  <body onload="loadFunction()">
  <div id="preloader">

</div>
  @include('frontend.partials.topbar')
  
    @include('frontend.partials.navbar')
   @yield('content')
   @include('frontend.partials.footer')
   @include('frontend.partials.assets.js')
   <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function () {
        FB.init({
          xfbml: true,
          version: "v7.0",
        });
      };

      (function (d, s, id) {
        var js,
          fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
      })(document, "script", "facebook-jssdk");
    </script>

    <!-- Your Chat Plugin code -->
    <div
      class="fb-customerchat"
      attribution="setup_tool"
      page_id="673272012686199"
      theme_color="#752a90"
      logged_in_greeting="Hi! How can we help you?"
      logged_out_greeting="Hi! How can we help you?"
    ></div>


</body>
</html>

