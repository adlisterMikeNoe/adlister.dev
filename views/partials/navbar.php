<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
        <a class="navbar-brand" href="index.php"><img src="img/AdListerLogo.png"></a>
        <li><a href="index.php">Home</a></li>
		    <li><a href="about.php">About us</a></li>
        <li>&nbsp;</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="../auth.login.php">Login</a></li>
        	<li><a href="../auth.login.php">Post an Ad</a></li>
      </ul>
      <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group"> 
            <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Categories <span class="glyphicon glyphicon-chevron-down"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Computers</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Beauty</a></li>
                <li><a href="#">Pets</a></li>
                <li><a href="#">Cars</a></li> 
              </ul>
            </div>
            <input type="text" class="form-control" id="nav-input" placeholder="What are searching for?">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span> </span>
          </div>
        </div>
      </form>
       	
    </div>
  </div>
</nav>
