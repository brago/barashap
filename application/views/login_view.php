<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Barashap-Connexion</title>
   <link href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
 </head>
 <body>
   <div id="login">
    <form class ="form_user form-horizontal" method="post" action="">
        <h4>Connexion espace admin</h4>
        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input class="validate[required,custom[email]]" type="text" name="id" placeholder="Email" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email'); ?>
            </div>
        </div>
 
        <div class="control-group">
            <label class="control-label" for="mdp">Mot de passe</label>
            <div class="controls">
                <input class="validate[required]" type="password" id="inputPassword" placeholder="Password" name="mdp">
                    <?php echo form_error('mdp'); ?>
            </div>
        </div>
        
        <button class="btn btn-large btn-primary" type="submit">Valider</button>
 
    </form>
    <?php
 if ($this->session->flashdata('noconnect'))
 echo "<div class=\"alert alert-error\">
   <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  <strong>" . $this->session->flashdata('noconnect') . "<strong>
 </div>";
 ?>
</div>
 </body>
</html>