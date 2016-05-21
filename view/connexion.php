<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="view/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="view/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="view/assets/css/style.css" rel="stylesheet">
    <link href="view/assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" action="validationConnexion.php" method="post">
		        <h2 class="form-login-heading">CONNECTE TOI</h2>
		        <div class="login-wrap">
                    <?php if(isset($_GET['err'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        Erreur dans le formulaire :<br>
                        <?php 
                        switch($_GET['err']) :
                            case 1 :
                                echo '- Email incorrect';
                                break; 
                            case 2 :
                                echo '- Mot de passe incorrect';
                                break;
                            case 3 :
                                echo '- Cessez donc de modifier l\'URL, petit malandrin';
                                break;
                        endswitch; ?>
                    </div>
                    <?php endif;?>
		            <input type="text" class="form-control" placeholder="Email" name="Email" autofocus>
		            <br>
		            <input type="password" class="form-control" name="Mdp" placeholder="Mot de passe">
		            <label class="checkbox"> <span class="pull-right"> </span>
		            </label>
		            <button class="btn btn-theme btn-block" href="validationConnexion.php" type="submit"><i class="fa fa-lock"></i> Connexion</button>
		            <hr>
		            <div class="registration">
		                Pas encore de compte ?<br/>
		                <a class="" href="#">
		                    S'inscrire
		                </a>
		            </div>
		
		        </div>
		      </form>	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="view/assets/js/jquery.js"></script>
    <script src="view/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="view/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("view/assets/img/login-bg.jpg", {speed: 500});
    </script>
  </body>
</html>
