<!DOCTYPE html>
<html>
<head>
<title></title>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '222487304927001',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</head>

<body>

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

<div id="fb-root"></div>

<div
  class="fb-like"
  data-href="https://www.facebook.com/fadlyards/"
  data-layout="standard"
  data-action="like"
  data-show-faces="true">
</div>

</body>
</html>