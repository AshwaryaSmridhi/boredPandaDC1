
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=640px, initial-scale=.5, maximum-scale=.5" />

<link href="css/style1.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="12736.png" />

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<title><?php echo $pageTitle; ?></title>
    
<script type="text/javascript">
    var selectedValueCat=0;
   function changeFunc() {
    
    var selectBox = document.getElementById("category");
     selectedValueCat = category.options[category.selectedIndex].value;
    
   }
//    function changeFunc1(){
//        var selectBox1 = document.getElementById("suburb");
//        selectedValueSub = suburb.options[suburb.selectedIndex].value;
//        alert(selectedValueSub);
//    }
    function completeAndRedirect(){
         
        var selectBox1 = document.getElementById("normalPostCode").value;
        //alert(selectBox1);
        //alert(selectedValueCat);
        location.href = "http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category="+selectedValueCat+"&postcode="+selectBox1;
        
    }
    
    function normalSearch(){
        var selectTextBox = document.getElementById("normalSearch").value;
        if(selectTextBox === ""){
            alert("Bruh! Enter Something");
            
        }else{
        
         location.href = "http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?type=0&activityName="+selectTextBox;
            }
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
        <li class="active"><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="aboutUs.php">Team <span class="glyphicon glyphicon-user"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-zoom-in"></span> Quick Search<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By Suggestions</li>
            <li role="separator" class="divider"></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=1&suburb=">Mad For Arts</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=2&suburb=">Book Nerds</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=3&suburb=">Master Coders</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=4&suburb=">Tech Nerds</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=5&suburb=">Career & Business</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=6&suburb=">Crazy Car Lovers</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=7&suburb=">I Love Environment</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=8&suburb=">Let’s Dance</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=9&suburb=">Education and stuff</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=10&suburb=">Fit and Tight</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=11&suburb=">Foodies</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=12&suburb=">Super Gaming</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=13&suburb=">LGBT</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=14&suburb=">Religion and Beliefs</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=15&suburb=">Great Outdoors</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=16&suburb=">Indoor Adventures</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=17&suburb=">Water Fun</a></li>
            <li><a href="http://boredpanda.australiasoutheast.cloudapp.azure.com/boredPandaTest/searchResult.php?category=18&suburb=">Other Stuff</a></li>
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