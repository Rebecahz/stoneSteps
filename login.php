<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>StoneSteps</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/colors.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <style>
    body {
      background-image: url("images/back-login.jpg");
      background-repeat: "no-repeat";
      background-size:"100% 100%";
      background-position:center;
    }
  </style>
</head>


<body>
  <div class="container">
    <br><br>
    <h1 class="header center white-text brand-logo-main col s12"><b>Stone</b>Steps</h1><br>
    <div class="row center">
      <h5 class="header col s12 secondary-text">Don't mistake activity with achievement.</h5>
      <h6 class="header col s12 secondary-text light">John Wooden</h6>
    </div>
    
    <div class="row">
      <form>
        
        <div class="col s8 offset-s2 m6 offset-m3 l4 offset-l4">
          <div class="input-field secondary-text">
            <input id="email" type="email" class="validate">
            <label for="email" class ="secondary-text">Email</label>
          </div>
        </div>
        
        <div class="row col s8 offset-s2 m6 offset-m3 l4 offset-l4">
          <div class="input-field secondary-text">
            <input id="password" type="password" class="validate">
            <label for="password" class ="secondary-text">Password</label>
          </div>
        </div>
                
      </form>
      
      <div class="row">
        <a href="http://localhost/stoneSteps" id="login-button" class="btn-main accent col s8 offset-s2 m6 offset-m3 l4 offset-l4">Log In</a>   
      </div>
      <div class="row">
        <a href="http://localhost/stoneSteps/signup.php" id="signin-button" class="btn-main dark-primary col s8 offset-s2 m6 offset-m3 l4 offset-l4">Sign Up</a>
      </div>
    </div>
  </div> <!-- container -->

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/functions.js"></script>
  
  </body>
</html>
