    <?php
 include('header.php');

?>
  <link <link href="<?php echo base_url();?>styles/css/bootstrap.min.css" rel="stylesheet">

<script src="<?php echo base_url();?>styles/js/jquery.js"></script>
<script src="<?php echo base_url();?>styles/js/bootstrap.min.js"></script>


  


<br/><br/><br/><br/><br/>
 <div class="container">
        <div class="col-md-6">

<center>

                     <?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
</center>
    </div><br/>

            <div class="row">

                 <h2>Ajouter une annonce</h2>

                <div class="col-lg-8 col-lg-offset-2">

				<form action="index.php/User_ad/new_annonce" method="post" accept-charset="utf-8" enctype="multipart/form-data">

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Titre du projet *</label>
                    <input id="titre" type="text" name="titre" class="form-control" placeholder="Entrez lz titre du projet *" required="required" />
                    <div class="help-block with-errors"></div>
                </div>
            </div>


  <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Categorie *</label>

 <select class="form-control" id="categorie" name="categorie">
    <option>Cablage reseaux</option>
    <option>Developpement d'application web/Mobile</option>
    <option>Conception de site </option>
    <option>Creation de logo</option>
     <option>Montage video</option>
  </select>                    <div class="help-block with-errors"></div>
                </div>
            </div>

        </div>
         
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Description *</label>
                    <textarea id="description" name="description" class="form-control" placeholder="Faite la description du projet ici *" rows="4" required="required" ></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Par quel type de projet remplissez vous cette demande *</label>

 <select class="form-control" id="sel1" name="type">
    <option>Simple demande d'information</option>
    <option>Demande de prix pour etablir un budget</option>
    <option>Projet concret a realiser rapidement</option>
    <option>Projet concret realisation a moyen terme</option>
  </select>                    <div class="help-block with-errors"></div>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Budjet *</label>
                    <input id="budjet" type="number" name="budjet" class="form-control" placeholder="Preciser le budjet a titre indicatif *" required="required" />
                    <div class="help-block with-errors"></div>
                </div>
            </div>
           <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Cahier de charge</label>
                    <input id="cahier" type="file" name="cahier" class="form-control" accept=".pdf">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         

   <br/>
<div class="row">

    <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Image</label>
                    <input id="image" type="file" name="image" class="form-control" accept=".png, .jpg, .jpeg" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
</div>
 </div>
   <div class="row">
       <div class="col-md-6">
                <input type="submit" class="btn btn-primary btn-send" value="Envoyer">
            </div>
               <div class="col-md-6">
                <input type="submit" class="btn btn-success " value="Annuler">
            </div>
     </div>
    </div>
	</form>
    </div>

            </div>

        </div>
<?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
    <?php
 include('footer.php');

?>