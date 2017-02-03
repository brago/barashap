<?php include('header.php');?>
	<body>
		<div id="messages">

			<p>
				Il y a actuellement <?php echo $nb_annonce; ?> annonce(s). <br />
				
			</p>

			<div class="pagination"><?php echo $pagination; ?></div>

			<?php foreach($messages as $message): ?>
				<div id="num_<?php echo $message->id; ?>" class="message">
					<p>
						<a href="#num_<?php echo $message->id; ?>">#</a>
						Par <span class="pseudo_commentaire"><?php echo htmlentities($message->pseudo); ?></span>
						le <span class="date_commentaire"><?php echo $message->date; ?></span>
					</p>
					<div class="contenu_commentaire"><?php echo nl2br(htmlentities($message->message)); ?></div>
				</div>
			<?php endforeach; ?>
        <ul>
			  <li onclick="location.href='single-page.html';">
			        	<img src=" <?php echo base_url(); ?>images/img4.jpg" width="200" height="333">
			        	<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">Animation films</a></h3>
				        		<span><a href="#"><label> </label>Movies</a></span>
				        		<p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
			        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
               </ul>
			<div class="pagination"><?php echo $pagination; ?></div>

		</div>
<?php include('footer.php');?>