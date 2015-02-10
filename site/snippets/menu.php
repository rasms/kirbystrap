
   <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">kirbystrap</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php foreach($pages->visible() as $p): ?>
              <?php if($p->hasVisibleChildren()): ?>
                <li class="dropdown">
                  <a <?php e($p->isOpen(), ' class="active')?> class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <?php foreach($p->children()->visible() as $p): ?>
                    <li>
                      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                    </li>
                    <?php endforeach ?>
                  </ul>
                </li>
                  
                  <?php else: ?>
              <li>
                 <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a> 
              </li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

