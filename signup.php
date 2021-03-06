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
      background-image: url("images/back-signup.jpg");
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
      <!-- Empieza Segunda Columna -->
      <form  action="#" class="col s12 m6 push-m5 l5 push-l5">
        
        <div class= "row">
          <div class="input-field secondary-text col s6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name" class ="secondary-text">First Name</label>
          </div>
        
          <div class="input-field secondary-text col s6">
            <input id="middle_name" type="text" class="validate">
            <label for="middle_name" class ="secondary-text">Middle Name</label>
          </div>
        </div>
    
        <div class= "row"> 
          <div class="input-field secondary-text">
            <input id="last_name" type="text" class="validate">
            <label for="last_name" class ="secondary-text">Last Name</label>
          </div>
        </div>
      
        <div class="row">
          <div class="input-field secondary-text">
            <input id="email" type="email" class="validate">
            <label for="email" class ="secondary-text">Email</label>
          </div>
        </div>
      
        <div class="row ">
          <div class="input-field secondary-text col s6">
            <input id="password" type="password" class="validate">
            <label for="password" class ="secondary-text">Password</label>
          </div>
      
          <div class="input-field secondary-text col s6">
            <input id="password" type="password" class="validate">
            <label for="password" class ="secondary-text">Confirm Password</label>
          </div>
        </div>         
      </form>
      <!-- Termina Segunda Columna -->
    
      <!-- Empieza Primera Columna -->
      <div class="col s12 center m5 pull-m6 l4 pull-l4">
        <div class="row">
          <a href="">
            <img  class="user" id="imagen_m"  src="http://placehold.it/540/eeeeee">
          </a>
        </div>
        <div class="row col s8 offset-s2 m12">
          <div class="file-field input-field">
						<div class="btn waves-effect dark-primary waves-light">
							<span><i class="material-icons ">perm_media add</i></span>
							<input type="file">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Upload Goal Photo">
						</div>
					</div>
        </div> 
      </div>  
      <!-- Termina Primera Columna -->
    </div> <!-- Row de Formulario/Foto -->
    
    <!-- Botones SignUp / Cancel --> 
    <div class="row">
      <div class="col center s12">
        <a href="http://localhost/stoneSteps" id="signin-button" class="btn-main accent">
          Sign Up
        </a>
       </div>
    </div>
    
    <div class="row">
      <div class="col center s12">
        <a href="http://localhost/stoneSteps/login.php" id="cancel-button" class="btn-main divider-back">
          Cancel
        </a>
      </div>
    </div>
      
  </div> <!-- Termina Container -->
    
    

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <!--<script> 
    function singUp(){
      var logIn = document.getElementById('login-button');
      logIn.style.display = 'none';
    }
  </sript> -->
</body>
</html>