<?php
/**
 * Created by PhpStorm.
 * User: Yang Lu
 * Date: 16/3/10
 * Time: PM3:34
 */

//src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"
//src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"
// <script src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
//<script src="//code.jquery.com/jquery-1.9.1.js"></script>
?>


<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0; user-scalable=0;">



    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<title>Search Result</title>
    
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
        var selectTextBox = document.getElementById("pref-search1");
        var selectKeyword = selectTextBox.value;
       var selectCatBox = document.getElementById("pref-category").value;
        var selecSuburbBox = document.getElementById("pref-postCode").value;
        //window.open("http://localhost/searchResult.php?activityName="+selectKeyword+"&suburb="+selecSuburbBox+"&category="+selectCatBox,'_self');
         showUserPoints(selectKeyword,selectCatBox,selecSuburbBox);
       
        
        //location.href = "http://localhost/searchResult.php?type=0&activityName="+selectKeyword;
    }
  
           


  </script>
   
        
        <link rel="stylesheet" type="text/css" href="simpleCSS.css">
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>
        <script src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="SimpleMapJS.js"></script>
    </head>

    <!-- GUnload() will prevents memory leaks-->
    <body onload="initMap()" onunload="GUnload()">
 
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
        <li class=""><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="aboutUs.php">Team <span class="glyphicon glyphicon-user"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-zoom-in"></span> Quick Search<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="#">By Suggestions</a></li>
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
    

    
    
        <!--
<div class="col-md-5" id="mapSearch">
<h1>Search Again</h1>
    
<div class="flexsearch">
		<div class="flexsearch--wrapper">
			<form class="flexsearch--form" action="#" method="post">
				<div class="flexsearch--input-wrapper">
					<input class="flexsearch--input" type="search" placeholder="search">
				</div>
				<input class="flexsearch--submit" type="submit" value="&#10140;" onclick="normalSearch()"/>
			</form>
		</div>
            </div>

<h1>Live Events</h1>
<script src="http://www.eventsvictoria.com/Scripts/atdw-dist-min/v2-1/Default/widget/widget.min.js" type="text/javascript"></script><div class="atdw-event-widget"></div><script type="text/javascript">window.atdw.myevents.widget.load({
  mode:'List',
  locations:{all:true,regions:'',councils:'',postcodes:''},
  types:{business:false,leisure:true},
  tags:'ARTCULTURE,COMMUNITY,FAMILY,FOODWINE,GARDENSAGR,INDIGENOUS,LIFESTYLE,LIVEMUSIC,MARKETS,MULTICULTU,STAGESHOWS,SHOPPING,SPORTS',
  businessTypes:'',
  freeOnly:false,
  size:{width:360,height:540},
  theme:'BLUE'
});</script>
        </div>
-->
        
<div class="container-fluid">
        <div id="filter-panel" class="">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-postCode">Postcode:</label>
                           <input type="text" class="form-control input-sm" id="pref-postCode" name="pref-postCode" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('searchButton3').click()"  required>                    
                        </div> <!-- form group [rows] -->
                    
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
                            <input type="text" class="form-control input-sm" id="pref-search1" name="pref-search1" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('searchButton3').click()"  required>
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Find In:</label>
                            <select id="pref-category" class="form-control">
                                        <option value="0" selected>Any</option>
                                        <option value="1">Mad For Arts</option>
                                        <option value="2">Book Nerds</option>
                                        <option value="3">Master Coders</option>
                                        <option value="4">Tech Nerds</option>
                                        <option value="5">Career & Business</option>
                                        <option value="6">Crazy Car Lovers</option>
                                        <option value="7">I Love Environment</option>
                                        <option value="8">Let’s Dance</option>
                                        <option value="9">Education and stuff</option>
                                        <option value="10">Fit and Tight</option>
                                        <option value="11">Foodies</option>
                                        <option value="12">Super Gaming</option>
                                        <option value="13">LGBT</option>
                                        <option value="14">Religion and Beliefs</option>
                                        <option value="15">Great Outdoors</option>
                                        <option value="16">Indoor Adventures</option>
                                        <option value="17">Water Fun</option>
                                        <option value="18">Other Stuff</option>
                                        
                            </select>                                
                        </div> <!-- form group [order by] --> 
                        <div class="form-group">    
                            <button type="submit" class="btn btn-danger filter-col" id="searchButton3" onclick="normalSearch()">
                                <span class="glyphicon glyphicon-record"></span> Search
                            </button>  
                        </div>
                        <div class="form-group">    
                            <!-- Button trigger modal -->
                           <ul class="nav navbar-nav navbar-right">
                                               <li> <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
                                See Live Events!!
                                                   </button></li></ul>

                            <!-- Modal -->
                            
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></li></ul>
                                            <h4 class="modal-title" id="myModalLabel">Live Events In Victoria!!</h4>
                                        </div>
                                        <div class="modal-body">
                                            Choose a date preference..
                                        <script src="http://www.eventsvictoria.com/Scripts/atdw-dist-min/v2-1/Default/widget/widget.min.js" type="text/javascript"></script><div class="atdw-event-widget"></div><script type="text/javascript">window.atdw.myevents.widget.load({
                                        mode:'Calendar',
  locations:{all:true,regions:'',councils:'',postcodes:''},
  types:{business:true,leisure:true},
  tags:'ARTCULTURE,COMMUNITY,FAMILY,FOODWINE,GARDENSAGR,INDIGENOUS,LIFESTYLE,LIVEMUSIC,MARKETS,MULTICULTU,STAGESHOWS,SHOPPING,SPORTS',
  businessTypes:'BUSINESSAWARDS,BUSINESSCONFERENCE,BUSINESSCONSULT,BUSINESSEVTCLASS,BUSINESSEXHIBIT,BUSINESSFESTIVAL,BUSINESSLAUNCH',
  freeOnly:false,
  size:{width:560,height:500},
  theme:'RED'
});</script>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
	

            <div id="searchBar">
        <fieldset class="search">
            <div id="slider" class="slider">
        <div class="form-style-2">
<div class="form-style-2-heading">Yay! You Are Creating an Event</div>
<form action="" method="post">
<label for="field1"><span>Event Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
<label for="field2"><span>Categoty <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
<label for="field2"><span>Address <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
<label for="field4"><span>Start Time:</span><select name="field4" class="select-field">
<option value="General Question">General</option>
<option value="Advertise">Advertisement</option>
<option value="Partnership">Partnership</option>
</select></label>
    <label><span>Mobile</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" />-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"  /></label>
<label for="field5"><span>Event Description <span class="required">*</span></span><textarea name="field5" class="textarea-field"></textarea></label>

<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</form>
</div>
   
    </div>
            <input type="text" class="box" id="addressInput" class="inputText"
                   placeholder="Address Finder" x-webkit-speech
                   onkeydown="if(event.keyCode==13){getLocationByAddress()}"/>
            <input type="button" class="button" title="SEARCH" onclick="getLocationByAddress()"/>
        </fieldset>
    </div>
    <div class="container-fluid" id="googleMapDiv">
    <div id="googleMap"></div>
    </div>
    </div>
    
    </body>
<?php
