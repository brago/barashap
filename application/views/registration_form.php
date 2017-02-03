<?php
require_once('header.php');
?>
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Enregistrer</title>

		<style type="text/css">

/*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}


		</style>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Barashap</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
				
				
					<?php echo form_open('index.php/user_authentication/new_user_registration'); ?>
					
					<?php
                      echo "<div class='error_msg'>";
                       if (isset($error_message)) {
                       echo $error_message;
                        }
                       echo validation_errors();
                        echo "</div>";
                         ?>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Votre sexe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<select name="sexe" class="form-control">
									<option>MASCULIN</option>
									<option>FEMININ</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Votre nom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Entrez votre nom"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Votre email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email_value" id="email_value"  placeholder="Entrez votre email"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Votre contact</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="cont" id="cont"  placeholder="Entrez votre contact"/>
								</div>
							</div>
						</div>
						
						
					

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Pseudo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Entrez votre mot de passe"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirmez votre mot de passe"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Photo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="file"  name="photo" id="photo"  />
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Inscription</button>
						</div>
						<div class="login-register">
				            <a href="<?php echo base_url() ?>index.php/user_authentication/user_login_show ">Connexion</a>
				         </div>
					<?php echo form_close();?>

				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
<?php
require_once('footer.php');
?>