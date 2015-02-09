<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">
            
            <div class="row">
                <div class="col-md-9">
                <h1><?php echo $page->title()->kirbytext() ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    
                    <p><?php echo $page->text()->kirbytext() ?></p>
                </div>
                <div class="col-md-3">
                    <p><?php echo $page->sidebar()->kirbytext() ?></p>
                </div>
                
                
            </div>
    
    	</div> <!-- /container -->


<?php snippet('footer') ?>