
<?php
include('header.php');

?>

	<center>
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>

<div id="main">
	
<div id="login">
<h2>Connexion</h2>
<hr/>
<?php echo form_open('index.php/user_authentication/user_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
<label>Nom utilisateur :</label>
<input type="text" name="username" id="name" placeholder="username"/><br /><br />
<label>Mot de passe :</label>
<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
<input type="submit" value=" Connexion " name="submit"/><br />
<a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">Pour s'inscrire</a>
<?php echo form_close(); ?>

</div>
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include('footer.php');?>


</center>