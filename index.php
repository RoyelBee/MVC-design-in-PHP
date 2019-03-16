<?php 

// To show the data in inde.php file you just have to 
// include controller class and need to create an object of it. 
// Then call its view related methid 

include 'controller/Controller.php';
$Controller = new Controller();
$Controller->home();

?>