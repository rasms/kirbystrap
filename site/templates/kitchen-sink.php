<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">

            
            <div class="jumbotron">
                <h1><?php echo $page->title()->html() ?></h1>
                <?php echo $page->jumbo()->kirbytext() ?>
            </div>  
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" id="headings">
                        <div class="panel-heading">Headings</div>
                        <div class="panel-body">
                        <?php echo $page->headings()->html() ?>
                        </div>
                </div>
                    
                    <div class="panel panel-default" id="tables">
                        <div class="panel-heading">Tables</div>
                        <div class="panel-body">
                        <?php echo $page->tables()->html() ?>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default" id="content-formatting">
                        <div class="panel-heading">Content Formatting</div>
                        <div class="panel-body">
                        <?php echo $page->formatting()->html() ?>
                        </div>
                    </div>
                </div>    
            </div>
            
            <div class="panel panel-default" id="forms">
                <div class="panel-heading">Forms</div>
                <div class="panel-body">
                <?php echo $page->forms()->html() ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default" id="buttons">
                        <div class="panel-heading">Buttons</div>
                        <div class="panel-body">
                        <?php echo $page->buttons()->html() ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default" id="images">
                        <div class="panel-heading">Images</div>
                        <div class="panel-body">
                        <?php echo $page->images()->html() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default" id="dropdowns">
                        <div class="panel-heading">Dropdowns</div>
                        <div class="panel-body clearfix">
                            <?php echo $page->dropdowns()->html() ?>
             
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="panel panel-default" id="input-groups">
                        <div class="panel-heading">Input Groups</div>
                        <div class="panel-body">
                        <?php echo $page->input()->html() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" id="navs">
                        <div class="panel-heading">Navs</div>
                        <div class="panel-body clearfix">
                            <?php echo $page->navs()->html() ?>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" id="navbar">
                    <div class="panel panel-default">
                        <div class="panel-heading">Navbar</div>
                        <div class="panel-body">
                           <?php echo $page->navbar()->html() ?>     
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" id="pagination">
                        <div class="panel-heading">Pagination</div>
                        <div class="panel-body">
                            <?php echo $page->pagination()->html() ?> 
                        </div>
                    </div>
                    <div class="panel panel-default" id="labels">
                        <div class="panel-heading">Labels and Badges</div>
                        <div class="panel-body">
                            <?php echo $page->labels()->html() ?> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default" id="alerts">
                        <div class="panel-heading">Alerts</div>
                        <div class="panel-body">
                           <?php echo $page->alerts()->html() ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" id="progress">
                        <div class="panel-heading">Progress Bars</div>
                        <div class="panel-body">
                            <?php echo $page->progress()->html() ?> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default" id="media-object">
                        <div class="panel-heading">Media Object</div>
                        <div class="panel-body">
                            <?php echo $page->media()->html() ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php echo $page->listgroups()->html() ?>
            </div>
            <?php echo $page->panels()->html() ?>

    	</div> 

      </div><!-- /container -->

<?php snippet('footer') ?>