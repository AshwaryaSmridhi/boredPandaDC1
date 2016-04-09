
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0; user-scalable=0;">

<link href="css/style1.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<title><?php echo $pageTitle; ?></title>
    
<script type="text/javascript">
    var selectedValueCat = "swimming";
    var selectedValueSub = "caulfield";
   function changeFunc() {
    var selectBox = document.getElementById("category");
     selectedValueCat = category.options[category.selectedIndex].value;
    alert(selectedValueCat);
   }
    function changeFunc1(){
        var selectBox1 = document.getElementById("suburb");
        selectedValueSub = suburb.options[suburb.selectedIndex].value;
        alert(selectedValueSub);
    }
    function completeAndRedirect(){
         alert(selectedValueSub);
        alert(selectedValueCat);
        location.href = "http://localhost/searchResult.php?type=1&category="+selectedValueCat+"&suburb="+selectedValueSub;
    }
    
    function normalSearch(){
        var selectTextBox = document.getElementById("normalSearch");
        var selectKeyword = selectTextBox.value;
         location.href = "http://localhost/searchResult.php?type=0&activityName="+selectKeyword;
    }
  
           


  </script>
    
</head>
    
<body>
    
    <!-- NAVIGATION IS HERE -->
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="glyphicon glyphicon-hand-down"></span>
        <span class=""></span>
        <span class=""></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Bored Panda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="aboutUs.php">Team <span class="glyphicon glyphicon-user"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-zoom-in"></span> Quick Search<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="#">By Suggestions</a></li>
            <li role="separator" class="divider"></li>
             <li><a href="/errorPage.php">Mad For Arts</a></li>
            <li><a href="/errorPage.php">Book Nerds</a></li>
            <li><a href="/errorPage.php">Master Coders</a></li>
            <li><a href="/errorPage.php">Tech Nerds</a></li>
            <li><a href="/errorPage.php">Career & Business</a></li>
            <li><a href="/errorPage.php">Crazy Car Lovers</a></li>
            <li><a href="/errorPage.php">I Love Environment</a></li>
            <li><a href="/errorPage.php">Let’s Dance</a></li>
            <li><a href="/errorPage.php">Education and stuff</a></li>
            <li><a href="http://localhost/searchResult.php?type=1&category=fit_and_tight">Fit and Tight</a></li>
            <li><a href="/errorPage.php">Foodies</a></li>
            <li><a href="/errorPage.php">Super Gaming</a></li>
            <li><a href="/errorPage.php">LGBT</a></li>
            <li><a href="/errorPage.php">Religion and Beliefs</a></li>
            <li><a href="http://localhost/searchResult.php?type=1&category=great_outdoors">Great Outdoors</a></li>
            <li><a href="http://localhost/searchResult.php?type=1&category=indoor_adventure">Indoor Adventures</a></li>
            <li><a href="http://localhost/searchResult.php?type=1&category=water_fun">Water Fun</a></li>
            <li><a href="#">Other Stuff</a></li>
          </ul>
        </li>
        </ul>
        
      <ul class="nav navbar-nav navbar-right">
        <li><button type="button" class="btn btn-danger">Sign In</button>
</li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
       

	<div id="content">
      <div class="container-fluid">