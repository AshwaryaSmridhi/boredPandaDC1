<div class="container">
	<div class="row">
		<div class="col-md-12">
            <form action="searchRes.php" method="post" role="form" class="form-horizontal"> 
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" name="search" placeholder="Search for snippets" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Advanced<span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group" >
                                    <label for="filter">Category</label>
                                    <select class="form-control">
                                        <option value="0" selected>Education and Learning</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>
                                  </div>
                                    <div class="form-group">
                                    <label for="contain">Suburb</label>
                                    <select class="form-control">
                                        <option value="0" selected>Caulfield</option>
                                        <option value="1">Clayton</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>
                                  </div>
                                  
                                  
                                  <button type="submit" name="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
       
            </form>
        </div>
	</div>
</div>

<select name="taskOption">
      <option value="first">First</option>
      <option value="second">Second</option>
      <option value="third">Third</option>
</select>

$var = $_POST['taskOption'];






