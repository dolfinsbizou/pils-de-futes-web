<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?= $page_title ?></title>

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
		      <form class="form-login" action="validationInscription.php" method="post">
		        <h2 class="form-login-heading">INSCRIS TOI</h2>
		        <div class="login-wrap">
                    <?php if(isset($_GET['err'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        Erreur dans le formulaire :<br>
                        <?php 
                        switch($_GET['err']) :
                            case 1 :
                                echo '- Tous les champs ne sont pas remplis';
                                break; 
                            case 2 :
                                echo '- Les mots de passe ne correspondent pas';
                                break;
                            case 3 :
                                echo '- Email incorrect';
                                break;
                            case 4 :
                                echo '- L\'email existe déja';
                                break;
                        endswitch; ?>
                    </div>
                    <?php endif;?>
		            <input type="text" class="form-control" placeholder="Nom" name="nomMembre" autofocus>
		            <br>
                    <input type="text" class="form-control" placeholder="Prénom" name="prenomMembre" autofocus>
                    <br>
                    <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
                    <br>
		            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe"><br>
                    <input type="password" class="form-control" name="mdp_confirm" placeholder="Confirmation Mot de passe">
		            <label class="checkbox"> <span class="pull-right"> </span>
		            </label>
		            <button class="btn btn-theme btn-block" href="validationInscription.php" type="submit"><i class="fa fa-lock"></i> Inscription !</button>		
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
        $.backstretch("view/assets/img/register-bg.jpg", {speed: 500});
    </script>
  </body>
</html>
