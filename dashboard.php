<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Partner Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .navbar{background: #005cb9;
    }    
</style>
   
 
</head>
 
    
    <?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("partnerlogin") or die("Cannot connect to database"); //Connect to database
    
    $query = mysql_query("SELECT * from partner_db WHERE username='$user'");
    
    while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			$password= $row['password'];
            $company=$row['company'];
			
		}
    
	
	?>

    
    

    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <img src="http://www.cloudbyte.com/wp-content/uploads/2017/03/white-logo.png" style="float:left;">      <a class="navbar-brand" href="#myPage" style="color:white;text-align:center;"><h3>Partner Login</h3></a>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" style="color:white;padding:20px;padding-top:40px;">HOME</a></li>
        <li><a href="logout.php" style="color:white;padding:20px;padding-top:40px;">LOGOUT</a></li>
        
      </ul>
    </div>
  </div>
</nav>





<br><br><br>
<div class="container-fluid">
 
 <div class="row">
  <div class="col-sm-2">
  
 
<br><br>
  <ul class="nav nav-pills nav-stacked">
    <li class="active">
   <!-- <li><a data-toggle="pill" href="#dashborad">Dash Board</a></li> -->
    <li><a data-toggle="pill" href="#dashboard">Dashboard</a></li>
    <li><a data-toggle="pill" href="#acc_info">Account Information</a></li>
    <li><a data-toggle="pill" href="#quote">Quote Generation </a></li>
    <li><a data-toggle="pill" href="#iops">IOPS Calculator </a></li>
    <li><a data-toggle="pill" href="#help">HELP? </a></li>
  </ul>
  </div>

  <div class="col-sm-10">
  <div class="tab-content">
    <br><br>
      
      
    <div id="iops" class="tab-pane fade">
      <h3>Select the required configuration to check out IOPS, throughput and other statistics</h3>
        <br><br>
         <?php 
            echo file_get_contents('iops.php');
          ?>
    </div>
      
      
    <div id="quote" class="tab-pane fade ">
      <h3>Quote</h3>
          <?php 
            echo file_get_contents('quote.php');
          ?>
      
    </div>
    <div id="help" class="tab-pane fade">
     
            <?php 
            echo file_get_contents('help.php');
          ?>
     
    </div>
      
      
    <div id="acc_info" class="tab-pane fade">
      <h3>Account Information</h3>
        <br>
        <div class="col-md-6">
        <table class="table table-hover">
            <tr>
                <td>User Name</td>
                <td><?php  echo $user; ?></td>
            </tr>
            
            <tr>
                <td>Company</td>
                <td><?php  echo $company; ?></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><?php  echo $password; ?></td>
            </tr>
            
           
        </table>
            </div>
        
    </div>
      
      
    <div id="dashboard" class="tab-pane fade in active">
        
        
    <div class="container" style="width:100%;">
        <h1>Dash Board</h1>

      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse1">What can I do in the partners login?</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">You can do anything you want. Yes. <br>
             Use awesome modules like IOPS / Throughput calculator to get an idea of the estimates of your configuration. Use BOM generator to get a Billing of Material and to generate quotes.  </div>

        </div>
      </div>
    </div>
    
   
        
            <div class="jumbotron text-center" style="background-image: url('images/keyboard.jpg');
        background-repeat: no-repeat;     background-position: center center;
        background-attachment: fixed;background-size:cover;height:400px;opacity:0.9"><br><br>
      <h1>Dash Board </h1> 
   
     
            
</div>
         
        
            
            
     
    </div>
  </div>
  </div>

  </div>
</div>
    

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>








