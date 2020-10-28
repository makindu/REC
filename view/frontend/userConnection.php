
<?php $title = 'REQUISITION AUTHENTIFICATION'; $menu = ''; ob_start(); ?>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
	  <form class="form-login" action="index.php?action=UserInformations" method="post">
		<h2 class="form-login mb">Connexion</h2>
			<div class="login-wrap">
			  <input type="text" name="membername" class="form-control" placeholder=" " autofocus required />
			  <br>
			  <input type="password" name="memberPassword" class="form-control" placeholder="Your Password" required />
				<br>
			  <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Connexion</button>
			  <hr>
			</div>
	  </form>
<?php
	//$candidates->closeCursor();
	$content = ob_get_clean();
	require('view/frontend/template.php'); 
?>
