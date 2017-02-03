<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
</head>
<body>
<div id="main">
    <section class="form">
        <header><h2>Inscription</h2></header>
        <div>
 
            <?php echo form_open('inscription'); ?>
             
                <?php echo form_label('Votre nom', 'nom'); ?>
                <input type="text" id="nom" name="nom" value="<?php echo set_value('nom'); ?>" />
                <?php echo form_error('nom'); ?>
                <br/>
 
                <?php echo form_label('Votre prénom', 'prenom'); ?>
                <input type="text" id="prenom" name="prenom" value="<?php echo set_value('prenom'); ?>" />
                <?php echo form_error('prenom'); ?>
                <br/>
 
                <?php echo form_label('Votre e-mail', 'email'); ?>
                <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
                <?php echo form_error('email'); ?>
                <br/>
 
                <?php echo form_label('Votre mot de passe', 'password'); ?>
                <input type="text" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                <?php echo form_error('password'); ?>
                <br/>
 
                <?php echo form_label('Confirmation mot de passe', 'confirm_password'); ?>
                <input type="text" id="confirm_password" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>" />
                <br/>
 
                <input type="hidden" id="type" name="type" value="PROPRIO" />
 
                 
 
                <input type="submit" value="m'inscrire" />
 
                  
            <?php echo form_close(); ?>
        </div>
    </section>
</div>
</body>