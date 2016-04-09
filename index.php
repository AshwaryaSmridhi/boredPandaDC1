<?php 

$pageTitle = "Bored Panda";
$section = null;
include("inc/header.php"); 

?>


  <div class="col-md-5"></div>
  <div class="col-md-5" id="heading_title"><h1 class="title_heading">Bored Panda</h1></div>

      
      
<div class="container">
 
	<div class="row">
		<div class="col-md-12">
            <div class="input-group" id="adv-search" data-toggle="validator">
                <input type="text" class="form-control" id="normalSearch" name="normalSearch" placeholder="What do you want to do?" onkeydown = "if (event.keyCode == 13)
                        document.getElementById('searchButton2').click()"  />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Advanced<span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form method="post" action="javascript:completeAndRedirect();" class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Category</label>
                                    <select class="form-control" name="category" id="category" onchange="changeFunc();">
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
                                      
                                      
                                  </div>
                                  <div class="form-group">
                                   <label for="filter">Postcode</label>
                                    <input type="text" class="form-control" id="normalPostCode" name="normalPostCode" placeholder="Postcode" />
                                      
                                  </div>
                                  <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-primary" id="searchButton2" onclick="normalSearch()"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        
                    </div>
                </div>
            </div>
            </form>
          </div>
        </div>
	</div>
</div>
                </div>
           
      
      
      <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Bored Panda has everything you need to get your new day filled with excitement in no time! All of the events and activities on Bored Panda are open to everypne, free to use, and easy to understand. No strings attached!</p>
                    
                </div>
            </div>
        </div>
      
      <div class="col-md-5"></div>
      <div class="col-md-0">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-sunglasses"></span>
  How We Work?
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">What should I do?</h4>
      </div>
      <div class="modal-body">
        <h1>Ola!!</h1>
          <p>We are here to show you very exciting events thats happening.  </p>
          <p>Don't know how we work, pretty easy actually. See below how we work: </p>
          <ul>
          <li>Type the name of the kind of acivity or event you would want to attent. E.g. Basketball, LGBT</li>
          <li>Select from the category of events and we will show you whats going on..</li>
          </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</div>
      
     
      
     
      
<?php include("inc/footer.php"); ?>