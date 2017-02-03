<?php include('header.php');?>
<body>
<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<?php echo $this->session->flashdata('verify_msg'); ?>
	</div>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>User Registration Form</h4>
			</div>
			<div class="panel-body">
				<?php $attributes = array("name" => "registrationform");
				echo form_open("user/register", $attributes);?>
				<div class="form-group">
					<label for="name">Nom</label>
					<input class="form-control" name="fname" placeholder="Entrez votre nom" type="text" value="<?php echo set_value('fname'); ?>" />
					<span class="text-danger"><?php echo form_error('fname'); ?></span>
				</div>

				<div class="form-group">
					<label for="name">Prenoms</label>
					<input class="form-control" name="lname" placeholder="Entrez votre prenom" type="text" value="<?php echo set_value('lname'); ?>" />
					<span class="text-danger"><?php echo form_error('lname'); ?></span>
				</div>
				
				<div class="form-group">
					<label for="email">Email </label>
					<input class="form-control" name="email" placeholder="Votre email" type="text" value="<?php echo set_value('email'); ?>" />
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>

				<div class="form-group">
					<label for="subject">Mot de passe</label>
					<input class="form-control" name="password" placeholder="mot de passe" type="password" />
					<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div>

				<div class="form-group">
					<label for="subject">Confirmez le mot de passe</label>
					<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
					<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
				</div>

				<div class="form-group">
					<button name="submit" type="submit" class="btn btn-default">Valider</button>
					<button name="cancel" type="reset" class="btn btn-default">Annuler</button>
				</div>
				<?php echo form_close(); ?>
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php include('footer.php');?>