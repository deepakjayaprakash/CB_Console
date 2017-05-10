
<?php


  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("partnerlogin") or die("Cannot connect to database"); //Connect to database

  
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $company =  mysql_real_escape_string($_POST['company']);
  $email =  mysql_real_escape_string($_POST['email']);
  
  $query = mysql_query("Select * from partner_db"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
    
      Print '<script>alert("This Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("login.php");</script>'; 
    }
  }
 
    $insert=mysql_query("INSERT INTO partner_db (username, password,company,email_id) VALUES ('$username','$password','$company','$email')"); //Inserts the value to table users
 
   if($insert==TRUE){
       Print '<script>alert("Successfully Registered! Please Login with your credentials");</script>';
       Print '<script>window.location.assign("login.php");</script>'; 
   }
    else{
        Print '<script>alert("Failed to register. Try again ! ");</script>';
        Print '<script>window.location.assign("login.php");</script>'; 
    }
   
}


?>
