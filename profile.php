<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Profile</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/colors.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    body {
      background-color: "white";
    }
  </style>
</head>
<body>
  <?php include_once('header.php'); ?>
  
  <div class="container">
    <br><br>
    
    <div class="row">  
      <div class = "col s12 center m4 l3"><!--Columna Izquierda-->
        <div class="row">
          <img class="materialboxed user" src="http://placehold.it/150x150/0/eeeee">
        </div>
        <div class="row">
          <h4>Rebeca Hernández Arellano</h4>
        </div>
        <div class="row">
          <i class = "material-icons">email</i> rebecahdezare@gmail.com
        </div>
        <div class="row">
          <i class = "material-icons">done</i> 5 Accomplished Goals
        </div>
        <div class="row">
          <i class = "material-icons">schedule</i> 3 Pending Goals
        </div>
        <br>
        <div class="row">
	        	<div class="collection left-align">
	        	  <div class="collection-item secondary-text center">Goals Timeline</div>
              <a href="#modal1" class="collection-item waves-effect waves-light modal-trigger data-target=modal1">
                <div class="col s9">
                  <span class="text">Ir al gym por tres meses</span>
                </div>
                <div class="col s3">
                  <span class="badge accent-text">Completed</span>
                </div>
              </a>
              <a href="#modal1" class="collection-item waves-effect waves-light modal-trigger data-target=modal1">
                <div class="col s9">
                  <span class="text">Read 12 books in a year</span>
                </div>
                <div class="col s3">
                  <span class="badge primary-text">Idle</span>
                </div>
              </a>
              <a href="#modal1" class="collection-item waves-effect waves-light modal-trigger data-target=modal1">
                <div class="col s9">
                  <span class="text">Levantar 20lb de brazo</span>
                </div>
                <div class="col s3">
                  <span class="badge text">Going</span>
                </div>
              </a>
	  	    	</div>
	  	    </div>
        
      </div>
      
      
      <div class="col s12 m7 push-m1 l7 push-l1"><!--Columna Derecha-->
        
        <div class="row">
          <div class="card-panel grey lighten-5 z-depth-1">
		          	<div class="row valign-wrapper">
			            <div class="col s2">
			              <img src="images/knowledge.png" class="image-card">
			            </div>
			            <div class="col s10">
			              <span class="box-title">
			                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In erat mauris, tempus in hendrerit eu, tristique et eros. </a><br>
			              </span>
			            </div>
		        	</div>
		          	<div class="row valign-wrapper">
		          		<div class="col s12">
			              <span class="box-content">
			              	<a href="#">Deadline: Wednesday, August 31, 2016</a><br>
			              	Lorem ipsum dolor sit amet, consectetur adipiscing elit. In erat mauris, tempus in hendrerit eu, tristique et eros. Cras sed pulvinar nunc. Sed lobortis risus id nibh finibus, nec faucibus sem pretium. Nullam massa nisi, placerat vel neque ultrices, congue porttitor justo. Morbi elementum tincidunt justo sed tempor. <br>
			              </span>
			            </div>
		          	</div>
		        </div>
        </div>
        
        <div class="row">
          <div class="card-panel grey lighten-5 z-depth-1">
		          	<div class="row valign-wrapper">
			            <div class="col s2">
			              <img src="images/personal.png" class="image-card">
			            </div>
			            <div class="col s10">
			              <span class="box-title">
			                <a href="#">Read 12 books in a year.</a><br>
			              </span>
			            </div>
		        	</div>
		          	<div class="row valign-wrapper">
		          		<div class="col s12">
			              <span class="box-content">
			              	<a href="#">Deadline: Saturday, December 31, 2016</a><br>
			              	Read at least 12 books by the end of the year. Hopefully I'll read 1 book each month.<br>
			              </span>
			            </div>
		          	</div>
		        </div>
        </div>
        
        <div class="row">
          <div class="card-panel grey lighten-5 z-depth-1">
		          	<div class="row valign-wrapper">
			            <div class="col s2">
			              <img src="images/sports.png" class="image-card">
			            </div>
			            <div class="col s10">
			              <span class="box-title">
			                <a href="#">Levantar 20lb de brazo</a> was accomplished.<br>
			              </span>
			            </div>
		        	</div>
		          	<div class="row valign-wrapper">
		          		<div class="col s12">
			              <span class="box-content">
			              	<a href="#">Date Accomplished: Friday, May 20, 2016</a><br>
                      Deadline: Saturday, May 21, 2016<br><br>
			              	Lorem ipsum dolor sit amet, consectetur adipiscing elit. In erat mauris, tempus in hendrerit eu, tristique et eros. Cras sed pulvinar nunc. Sed lobortis risus id nibh finibus, nec faucibus sem pretium. Nullam massa nisi, placerat vel neque ultrices, congue porttitor justo. Morbi elementum tincidunt justo sed tempor. Mauris ac lorem rhoncus, tincidunt lectus vel, tincidunt nisi. Curabitur accumsan neque in faucibus blandit. Phasellus non ultrices mi. Nunc posuere tempus dui sit amet vestibulum. Integer id viverra tortor, eu volutpat urna.
			              </span>
			            </div>
		          	</div>
		        </div>
        </div> 
        
          
      </div> <!-- segunda columna -->
          
    </div>  <!-- row general -->  
    
  </div> <!-- container -->
      
      


<!--
  <footer class="page-footer orange">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="https://www.facebook.com/beckyhdez">Yo Mama</a>
      </div>
    </div>
  </footer>
-->

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<!--  <script> 
    function singUp(){
      var logIn = document.getElementById('login-button');
      logIn.style.display = 'none';
    }
  </sript> 
  -->
  </body>
</html>
