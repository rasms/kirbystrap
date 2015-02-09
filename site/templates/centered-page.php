<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">
            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <h1><?php echo $page->title()->kirbytext() ?></h1>
                <p><?php echo $page->text()->kirbytext() ?></p>
                </div>
            </div>
 
    	</div> <!-- /container -->


<?php snippet('footer') ?>