<?php
include('header.php');
?>
<!-- Slider section-->
<div class="slider-wrap">
	<div class="row">
	<!-- Slider content-->
		<div class="flexslider eight columns">
			<ul class="slides">
				<li><img src="demo/slides/slide1.png" alt="Aditya Purandare Farewell 1"/></li>
				<li><img src="demo/slides/slide2.png" alt="Aditya Purandare Farewell 2"/></li>
				<li><img src="demo/slides/slide2.png" alt="Aditya Purandare Farewell 3"/></li>
			</ul>
		</div>
		<!-- Slider content-->
		<div class="four columns">
			<div class="rsp-caption" >
					<h2>We will Miss You All!</h2>
					<p style="font-weight:bold;padding-left:20px;">The time is near, tears will fall-off everybody's face, it will soon be the very last day of college but we want to make every moment special for you have been with us for 3 years and shared a bonding with each one of us.</p>
					<p style="font-weight:bold;padding-left:20px;">		
										Please LOGIN to Write a Testimonial
					</p>
					<p style="font-weight:bold;padding-left:20px;"> 
						 <a href="test.php" class="link">Testimonials</a>
					</p>
			</div>
		</div>
	</div>
</div>
<!-- Slider section-->
<?php
include('footer.php');
ob_flush();
?>
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '217734268424889',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      window.location="setup.php";
      testAPI();
    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login();
    } else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.name + '.');
    });
  }
</script>
