<?php

if(isset($_POST['search'])){
    echo "nooooooo";
}

	  if(isset($_POST['submit'])){ 
	  //if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['search'])){ 
	  $name=$_POST['search']; 
	  $db = new PDO("mysql:host=localhost;dbname=boredPanda","root","root");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->exec("SET NAMES 'utf8'");
      echo "connected";
	  //-select  the database to use 
      $results = $db->query("SELECT name, email FROM user WHERE name='$name' ORDER BY id ASC");
          
          echo"people";
	       $people = $results->fetchAll(PDO::FETCH_ASSOC);
          var_dump($people);
	 // var_dump($results->fetchAll(PDO::FETCH_ASSOC));
          
      //-create  while loop and loop through result set 
	  
          foreach( $people as $row ) {
            echo"here2";
              echo "Name: " . $row["name"] . "\n" . "Email: " . $row["email"] . "\n" ;
            echo $row["name"];
            echo $row["email"];
          }
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  //} 
	  } 
	?> 