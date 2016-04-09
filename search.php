
<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
	<html> 
	  <head> 
          <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
          <style type="text/css" media="screen">
              ul li{
                  list-style-type: none;
              }
          
          </style>
	   <title>Search  Contacts</title> 
	  </head> 
	  <body> 
	    <h3>Search  Contacts Details</h3> 
	    <p>You  may search either by first or last name</p> 
	    <form  method="post" action="search.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
          <p><a  href="?by=A">A</a> | <a  href="?by=B">B</a> | <a  href="?by=K">K</a></p> 
    <?php
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
	  $db = new PDO("mysql:host=localhost;dbname=boredPanda","root","root");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->exec("SET NAMES 'utf8'");
      echo "connected";
	  //-select  the database to use 
      $results = $db->query("SELECT name, email FROM user WHERE name='$name' ORDER BY id ASC");
	  
	  var_dump($results->fetchAll(PDO::FETCH_ASSOC));
      //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($results)){ 
	          $name1  =$row['name']; 
	          $email=$row['email']; 
	          $phone=$row['phone']; 
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"search.php?id=$name1\">"   .$email . " " . $phone .  "</a></li>\n"; 
	  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  } 
	?> 
	
	  
	  </body> 
	</html> 
	