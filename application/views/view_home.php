
<style>
.modal-dialog {width:600px;}
.thumbnail {margin-bottom:6px;}
</style>

<div style="background-color: #efeae3; margin-top: -5px">
    <div class="container" style="margin-top: 4%">
        <div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row">
                            <ul class="home-grid">
                               <center><h1>Quelques Annonces</h1></center>
                                <?php foreach ($query->result() as $row): ?>
                               

<!--
                                <div class="container">
  <div class="row">
   
   <h1>Bootstrap 3 Lightbox image gallery using Modal</h1>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img class="thumbnail img-responsive" src="<?php echo base_url() ?>upload/<?=$row->image ?>"></a></div>
      
    <hr>
    
    <hr>
  </div>
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button class="close" type="button" data-dismiss="modal">×</button>
    <h3 class="modal-title"><?=$row->titreAnnonce ?></h3>
  </div>
  <div class="modal-body">
    <?=$row->descAnnonce ?>
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal">Fermer</button>
  </div>
   </div>
  </div>
</div>
<div class="row">

    <div class="col-lg-12">
        
    
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="<?=$row->descAnnonce ?>" data-image="<?php echo base_url() ?>upload/<?=$row->image ?>" data-target="#image-gallery">
                <img class="img-responsive" src="<?php echo base_url() ?>upload/<?=$row->image ?>" alt="Annonce">
            </a>
        </div>
          
</div>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Precedent</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                  <h3 class="modal-title"><?=$row->titreAnnonce ?></h3>
                     <?=$row->descAnnonce ?>
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Suivant</button>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!-- Sample by Mr. M. - Confederation College - IMD Program -->

<div class="container">

<div class="row">



<hr>
<!--
Thumbnail link for mixer image
NOTE: data-target is .pop-up-1 for mixer, and .pop-up-2 for lion, these 
classes must be unique


<a href="#" data-toggle="modal" data-target=".pop-up-1">
<img src="http://i.imgur.com/YZ7AGyF.jpg" width="150" class="img-responsive img-rounded center-block" alt="">
</a>
-->


<!-- Thumbnail link for lion image -->
<a href="#" data-toggle="modal" data-target=".pop-up-2">
<img src="<?php echo base_url() ?>upload/<?=$row->image ?>" width="150" class="img-responsive img-rounded center-block" alt="">
</a>





      
<!--  Modal content for the mixer image example 
  <div class="modal fade pop-up-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myLargeModalLabel-1">Mixer Board</h4>
        </div>
        <div class="modal-body">
        <img src="http://i.imgur.com/YZ7AGyF.jpg.jpg" class="img-responsive img-rounded center-block" alt="">
        </div>
      </div>
    </div>
  </div>-->
 
 <!--  Modal content for the lion image example -->
  <div class="modal fade pop-up-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myLargeModalLabel-2"><h3 class="modal-title"><?=$row->titreAnnonce ?></h3>- <?=$row->descAnnonce ?></h4>
        </div>
        <div class="modal-body">
        <img src="<?php echo base_url() ?>upload/<?=$row->image ?>" class="img-responsive img-rounded center-block" alt="">
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal mixer image -->
  
    
</div> <!-- /.row -->
</div> <!-- /.container -->

                   


                                <?php endforeach; ?>
                            </ul>
                    </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>
       <?php // echo $this->pagination->create_links();  ?>
