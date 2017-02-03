<?php include('header.php');?>
  

<style type="text/css">
#form{
background-color:gray;
width:400px;
height:850px;
border-radius:5px;

}

form label
{
display: block;
float: left;
width: 200px; 
position:absolute;
left:430px;
margin: 2px;
}
input, textarea
{
border:1px solid #000;
border-radius:5px;
-webkit-border-radius:5px;
text-align:left;
-moz-border-radius:5px;
width:200px;
margin:1px;
left:800px;
}
 input[type=submit]
{
width:100px;
background-color:#000000;
color:#FFFFFF;
cursor:pointer;
text-align:center;
}
#error
{
color:blue;
border-radius: 5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
margin:2px auto;
width:260px;
background-color:#CCC;
}




</style>
  
  <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	
	<br/><br/><br/>
	<center>

      <center>

                     <?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
</center>

	<div id="form">

	<legend>POSTULER EMPLOI</legend>
	
	<form action="index.php/emplois/register" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
		<label for="nom">Mot de passe:</label>
	<input type="password" name="password" placeholder="Choisissez un mot de passe....." autofocus required /><br/><br>
	<label for="nom">Nom:</label>
	<input type="text" name="nom" placeholder="Entrer votre nom ici....."  /><br/><br>
<label for="prenom">Prenom:</label>
	<input type="text" name="prenom" placeholder="Entrer votre prenom ici....." /><br/><br>
	<label for="age">Age:</label>
	<input type="text" name="age" placeholder="Entrer votre age ici....." /><br/><br>
	<label for="ville">Ville:</label>
	<input type="text" name="ville" placeholder="Entrer votre ville ici....." /><br/><br>
	<label for="select">Metier: </label>
  <select id="select" name="metier">

<?php echo isset($select) ? '<option value='.$select.'>'.$select.'</option>':'';?>
<?php echo $select != 'Choisissez' ? '<option value="Choisissez">Choisissez</option>' : '';?>
<?php echo $select != 'Nounous' ? '<option value="Nounous">Nounous</option>' : '';?>
<?php echo $select != 'Boy' ? '<option value="Boys">Boy</option>' : '';?>
<?php echo $select != 'Jardinier' ? '<option value="Jardinier">Jardinier</option>' : '';?>
<?php echo $select != 'Cuisinier' ? '<option value="Cuisinier">Cuisinier</option>' : '';?>
<?php echo $select != 'Vendeur' ? '<option value="Vendeur">Vendeur</option>' : '';?>
<?php echo $select != 'Servante' ? '<option value="Servante">Servante</option>' : '';?>
<?php echo $select != 'Chauffeur' ? '<option value="Chauffeur">Chauffeur</option>' : '';?>

</select><br><br>
	<label for="contact1">Contact1:</label>
	<input type="text" name="contact1"  placeholder="Entrer un premier contact ici....." /><br/><br>
	
	<label for="contact2">Contact2:</label>
	<input type="text" name="contact2"  placeholder="Entrer votre deuxieme contact ici....." /><br/><br>
	<label for="ville">A propos:</label>
	<textarea type="text" name="apropos"  placeholder="dite quelque chose  ici....." /></textarea><br/><br>
	<label for="texte">Photo: : </label>
<input  type="file" name="photo" id="photo" class="form-control" accept=".png, .jpg, .jpeg" /><br><br>

<input type="submit" name="submit" value="Postuler"/>
	
</form>

	</div>
   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include('footer.php');?>