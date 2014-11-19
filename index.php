
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Combustroli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Controle de Combustível">
    <meta name="author" content="Andre Andrade">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .container .navbar .navbar-inner {
        padding: 0;
      }
      .container .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .container .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .container .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .container .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .container .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>
  	
  	    <div class="navbar navbar-inverse navbar-fixed-top visible-phone">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Navegação</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="index.php">Inicial</a></li>
                            <li ><a href="view/veiculos.php">Veículo</a></li>
                            <li><a href="view/fornecedor.php"><i class="icon-shopping-cart"></i>Fornecedor</a></li>
                            
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>


    <div class="container">

      
        <!--<h3 class="muted">Projeto Acadtec</h3>-->
        <div class="row-fluid">
        	<div class="span6">
        		<a href="index.html">
                            <img src="assets/img/logo.png" alt="Acadtec" title="Acadtec" style="margin-bottom: 20px;">
        		</a>
        	</div>
        
        	      
        	
        </div>
        
        <div class="navbar hidden-phone">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                  <li class="active"><a href="index.php"><i class="icon-home"></i> Inicial</a></li>
                  <li><a href="view/veiculos.php"> <img src="assets/img/veiculo.png"> Veículos</a></li>
                <li ><a href="view/fornecedor.php"><i class="icon-shopping-cart"></i> Fornecedor</a></li>
             
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->       
        
        


      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
      
      <hr>

      <div class="footer">
        <p>&copy; Acadtec 2013</p>
      </div>

    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

  </body>
</html>
