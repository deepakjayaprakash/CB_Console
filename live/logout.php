<?php
/*
Template Name: partner-logout
*/
 ?>



<?php
	session_start();
	session_destroy();
	header("location:http://newstag.cloudbyte.com/partner-page-login/");
?>