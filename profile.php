<?php
  session_start();
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>EventCrunch</title>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <style>
      </style>
    </head>

<body>
  <!-- nav bar -->
  <?php include_once 'include/nav.inc.php'; ?>

	<br><br>
   <div class="container row">
	<div class="col s5 center">
		<img class="circle z-depth-2" src="images/profile.jpg" alt="profile" width="50%" height="50%">
	</div>
	<div class="col s7">
		<h2 id = "profile_welcome">Welcome, John Smith!</h2>
    <!--form class="center" action="include/logout.inc.php" method="POST">
      <button class="btn waves-effect waves-light" type="submit" name="submit">Log Out</button>
    </form-->
	</div>
   </div>
	<br><br>
    <div class="container row">
    	<div class="row">
    		<div id="profile-info" class="col s5">
				<section><h4>Profile Info</h4>
				<br>
				<h5>First Name</h5>
				<input value="John" id="first_name" type="text" class="validate">
				<h5>Last Name</h5>
				<input value="Smith" id="last_name" type="text" class="validate">
				<h5>Username</h5>
				<input value="jsmith21" id="username" type="text" class="validate">
				<h5>Password</h5>
				<input value="******" id="password" type="text" class="validate">
				<h5>Email</h5>
				<input value="jsmith@placeholder.com" id="email" type="text" class="validate">
				<a class="waves-effect waves-light btn">save profile changes</a>
				</section>
			</div>
    		<div class="col s7">
    			<section><h4>Events</h4>
    			<br>
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/audience.jpg" alt="event image">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Battle Of The Bands<i class="material-icons right">more_vert</i></span>
						<p class="grey-text text-darken-4">4/21/18</p>
						<a href="#">Delete Event</a>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Battle of the Bands<i class="material-icons right">close</i></span>
						<p class="grey-text text-darken-4">4/21/18</p>
						<p class="grey-text text-darken-4">The Hole In The Wall</p>
						<p class="grey-text text-darken-4">123 Apple St. Orlando, FL 32817</p>
						<p class="grey-text text-darken-4">Doors open: 7:00 pm</p>
						<p class="grey-text text-darken-4">Event starts: 8:00 pm</p>
						<a href="#">Delete Event</a>
					</div>
				</div>
    			</section>

    		</div>
    	</div>
    </div>
    <br>

   <div class="divider"></div>




	<footer class="page-footer">
	          <div class="footer-copyright">
	            <div class="white-text container">
	            &#64; 2018 Copyright
	            </div>
	          </div>
    </footer>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
