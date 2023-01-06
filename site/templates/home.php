<?php snippet('header') ?>
    
<div class="navbar-container">
  <div class="position-absolute" data-sticky="top">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand logo-lg" href="index.html">
          <img alt="Modulo Logo" id="modulogo" class="img-fluid" src="<?= kirby()->urls()->assets() ?>/img/Logo_Modulo_white.png" width="300" height="30"/>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="icon-menu h4"></i>
        </button>
      
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item mr-3">
              <a href="#" class="nav-link">Beta</a>
            </li>
            <li class="nav-item">
              <a href="<?= page('mission')->url() ?>" class="nav-link"><?= t('mission') ?></a>
            </li>
            <li class="nav-item">
              <a href="<?= page('pricing')->url() ?>" class="nav-link"><?= t('pricing') ?></a>
            </li>
            
            <!-- 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown">Pages</a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">

                <a class="dropdown-item" href="pages-landing.html">
                  <span class="h6 mb-0">Landing Pages</span>
                  <p class="text-small text-muted">Showcase your product in style</p>
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="pages-app.html">
                  <span class="h6 mb-0">App Pages</span>
                  <p class="text-small text-muted">Build detailed, functional web apps</p>
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="pages-inner.html">
                  <span class="h6 mb-0">Inner Pages</span>
                  <p class="text-small text-muted">Complete your online presence</p>
                </a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="componentsDropdown" role="button" data-toggle="dropdown">Components</a>
              <div class="dropdown-menu" aria-labelledby="componentsDropdown">

                <a class="dropdown-item" href="components-bootstrap.html">Bootstrap</a>

                <a class="dropdown-item" href="components-wingman.html">Wingman</a>

              </div>
            </li>
            -->
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class="text-white">
              	<?= t('connexion')?>		
              </a>
              <span>&nbsp;<?= t('ou')?>&nbsp;</span><a href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class="text-white"> <?= t('inscription')?></a>
            </li>
          </ul>

        </div>
        <!--end nav collapse-->
      </nav>
    </div>
    <!--end of container-->
  </div>
</div>
<div class="main-container">
  <section class="bg-dark text-white height-70 gradient" data-jarallax data-speed="0.2">
    <div class="container-fluid">
      <div class="row pt-3 align-items-center">
        <div class="col-12 col-md-6 col-lg-4">
          <h1 class="display-4 pt-5"><?= $site->baseline() ?></h1>
          <!--
          <span class="lead">Modulo est l'outil de création de déroulés pour les facilitateurs.</span>
        -->
          <a href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class="btn btn-primary btn-lg"><?= strtoupper(t('commencer')) ?></a><br>
          <a href="https://goo.gl/maps/r22dW1guxx7mArnv6" target="_blank">
            <img src="<?= kirby()->urls()->assets() ?>/img/google_rating.png" width="200px" class="mt-3">
          </a>
        </div>
        <!--end of col-->
        <div class="col-12 col-md-6 col-lg-8">
          <img src="<?= $page->headerimg()->toFile()->url() ?>" class="img-fluid">
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->
  
  <section class="pt-5">
    <div class="container">
      <ul class="feature-list feature-list-lg">
        <li class="row justify-content-around align-items-center">
          <div class="col-9 col-md-6 col-lg-5">
            <img alt="Image" src="<?= kirby()->urls()->assets() ?>/img/state_of_the_art2.png" class="img-fluid rounded" />
          </div>
          <!--end of col-->
          <div class="col-12 col-md-6 col-lg-5">
            <h3><?= $page->lookintro() ?></h3>
            <?= $page->textlook()->kirbytext() ?>
          </div>
          <!--end of col-->
        </li>
        
      </ul>
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->


  <!-- présentation fonctionnalités --> 
  <section class="flush-with-above">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center text-center section-intro">
        <div class="col-12 col-md-9 col-lg-8">
          <span class="title-decorative" data-aos="fade-up" data-aos-delay="10"><?= t('autre_monde') ?></span>
          <h2 class="display-4" data-aos="fade-up" data-aos-delay="100"><?= $page->stepstitle() ?></h2>
          <span class="lead" data-aos="fade-up" data-aos-delay="200">
          	<?= $page->stepssubtitle() ?>
          </span>

        </div>
        <!--end of col-->
      </div>
      <!--end of row-->

      <div class="row justify-content-around">

        <div class="col-md-5 col-7 mb-4">
          <div class="tab-content">

  	        <?php $items = $page->steps()->toStructure();
      			foreach ($items as $item): ?>
      	            <div class="tab-pane fade show <?= e($item->indexOf() == 0,'active') ?>" id="content-<?= $item->indexOf() ?>" role="tabpanel">
      	              <img alt="Image" class="img-fluid w-100" src="<?= kirby()->urls()->assets() ?>/img/<?= $item->img() ?>" />
      	            </div>
  	        <?php endforeach ?>	

          </div>
        </div>
        <!--end of col-->
        <div class="col-lg-5 col-md-8 mb-4">
          <ul class="nav nav-cards" role="tablist">

          	<?php
      			// using the `toStructure()` method, we create a structure collection
      			$items = $page->steps()->toStructure();
      			// we can then loop through the entries and render the individual fields
      			foreach ($items as $item): ?>
	            <li>
	              <a class="card <?= e($item->indexOf() == 0,'active') ?>" data-toggle="tab" href="#content-<?= $item->indexOf() ?>" role="tab" aria-controls="content-<?= $item->indexOf() ?>" aria-selected="true">
	                <div class="card-body">
	                  <div class="media align-items-center">
	                    <div class="step-circle mr-4"><?= $item->indexOf()+1 ?></div>
	                    <div class="media-body">
	                      <h5><?= $item->title() ?></h5>
	                      <span>
	                        <?= $item->detail() ?>
	                      </span>
	                    </div>
	                  </div>
	                </div>
	              </a>
	            </li>
	        <?php endforeach ?>

          </ul>
        </div>
        <!--end of col-->

      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

  <!-- visuel --> 
  <section class="flush-with-above p-0 gradient">
  	<img src="<?= kirby()->urls()->assets() ?>/img/maquette_deroule_1.png" class="img-fluid">
  </section>

  <section>
    <div class="container">
      <div class="row justify-content-center text-center section-intro">
        <div class="col-12 col-md-9 col-lg-8">
          <span class="title-decorative" data-aos="fade-up" data-aos-delay="10"><?= $page->caractintro1() ?></span>
          <h2 class="display-4" data-aos="fade-up" data-aos-delay="100"><?= $page->caractintro2() ?></h2>
          <a href="<?= page('features')->url() ?>"><?= t('all features') ?> →</a>
        </div>
        <!--end of col-->
      </div>
      <!--end of row-->

      <ul class="row feature-list">

      	<?php	$items = $page->carac()->toStructure();
      		foreach ($items as $item): ?>
  	        <li class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">
  	          <i class="icon-<?= $item->icon() ?> h1 text-<?= $item->color() ?>"></i>
  	          <h5><?= $item->title() ?></h5>
  	          <p>
  	            <?= $item->detail() ?>
  	          </p>
  	        </li>
  	        <!--end of col-->
  	    <?php endforeach ?>

      </ul>
      <!--end of row-->

    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

  <section class="bg-light">
    <div class="container">
      <div class="row align-items-center justify-content-between section-intro">
        <div class="col-12 col-lg-5 text-center text-lg-left section-intro">
          <span class="title-decorative"><?= t('pricing') ?></span>
          <h3 class="display-4"><?= t('princing_intro') ?></h3>
          <span class="lead">
            <?= page('pricing')->text()->kt() ?>
          </span>
          <a href="<?= page('pricing')->url() ?>"><?= t('more') ?> →</a>
        </div>
        <div class="col-12 col-lg-6 row no-gutters card-group">
          <div class="card pricing card-lg bg-secondary col-lg-6">
            <div class="card-body">
              <h5><?= t('equipe') ?></h5>
              <span class="display-4">10€</span>
              <span class="text-small"><?= t('user/month') ?></span>
              <span class="h5"><?= t('includes') ?></span>
              <ul class="list-unstyled">
                <li>
                  <?= t('evts_partagés') ?>
                </li>
                <li>
                  <?= t('templates_partagés') ?>
                </li>
                <li>
                  <?= t('modules_partagés') ?>
                </li>
              </ul>
              <a href="https://app.modulo.io/create_team?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class="btn btn-lg btn-primary"><?= t('create_team') ?></a>
            </div>
          </div>

          <div class="card pricing card-lg col-lg-6 bg-white">
            <div class="card-body">
              <h5>Basic</h5>
              <span class="display-4"><?= t('gratuit') ?></span>
              <span class="text-small"><?= t('for ever') ?></span>
              <span class="h5"><?= t('includes') ?></span>
              <ul class="list-unstyled">
                <li>
                  <?= t('evts_illimités') ?>
                </li>
                <li>
                  <?= t('collaboration') ?>
                </li>
                <li>
                  <?= t('modules_illimités') ?>
                </li>
              </ul>
              <a href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class="btn btn-lg btn-outline-primary"><?= t('inscription') ?></a>
            </div>
          </div>

        </div>
      </div>
      <!--end of row-->
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h4 data-aos="fade-up"><?= t('deja_utilise') ?></h4>
          <ul class="list-inline list-inline-large">
            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="50">
              <img alt="Logo EDF" class="logo" src="<?= kirby()->urls()->assets() ?>/img/logo_edf.png" />
            </li>
            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="100">
              <img alt="Logo Datactivist" class="logo" src="<?= kirby()->urls()->assets() ?>/img/logo_datactivist.png" />
            </li>
            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="150">
              <img alt="Logo Canopé" class="logo" src="<?= kirby()->urls()->assets() ?>/img/logo_canope.png" />
            </li>
            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="200">
              <img alt="Logo Sopra Steria" class="logo" src="<?= kirby()->urls()->assets() ?>/img/logo_sopra.png" />
            </li>
          </ul>
        </div>
        <!--end of col-->
      </div>
      <!--end of row-->

      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card-columns">
          <?php foreach (page('pricing')->testimonials()->toStructure()->shuffle()->limit(3) as $test): ?>
            <div class="card">
                <div class="card-body">
                  <div class="media pb-2">
                  <img src="<?= $test->pic()->toFile()->url() ?>" class="mr-2" alt="avatar <?= $test->name() ?>" style="width: 45px;">
                  <div class="media-body">
                    <h5 class="card-title pb-0 mb-0"><?= $test->name() ?></h5>
                    <i class="icon-star text-yellow"></i>
                    <i class="icon-star text-yellow"></i>
                    <i class="icon-star text-yellow"></i>
                    <i class="icon-star text-yellow"></i>
                    <i class="icon-star text-yellow"></i>
                  </div>
                </div>
                  <p class="card-text"><?= $test->testtext() ?></p>
                </div>
             </div>
          <?php endforeach ?>
          </div>
        </div>
        <!-- end of col --> 
        <div class="col-12 text-center mt-2">
          <a href="<?= page('pricing')->url() ?>/#testimonials "><?= t('seemoretests') ?> →</a>
        </div>
      </div>
      <!-- end of row --> 
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

  <?php if ($kirby->language()->code() == 'fr') : ?>
  
	  <!-- Video --> 
	  <section class="bg-white">
	    <div class="container" data-aos="fade-up">
	      <div class="row justify-content-center">
	        <div class="col-md-8 col-sm-10">
	            <div class="embed-responsive embed-responsive-16by9 rounded">
	              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dZSdxq6sPjE?rel=0" allowfullscreen></iframe>
	            </div>
	          <!--end of video cover-->
	        </div>
	        <!--end of col-->
	      </div>
	      <!--end of row-->
	      <div class="row justify-content-center text-center section-outro">
	        <div class="col-lg-4 col-md-5">
	          <h6>Pas encore convaincu ?</h6>
	          <p>Arthur vous présente les fonctionnalités principales de Modulo en (presque) moins de 10 minutes</p>
	          <a href="https://youtu.be/dZSdxq6sPjE" target="_blank">Regarder sur Youtube &rsaquo;</a>
	        </div>
	        <!--end of col-->
	      </div>
	      <!--end of row-->
	    </div>
	    <!--end of container-->
	  </section>
	  <!--end of section-->
	<?php endif ?>
  <!-- fin de la section réservée aux français --> 

  <?= snippet('footer-callout') ?>

  <?= snippet('footer-links') ?>


  <!-- footer here --> 
</div>

<?php snippet('footer') ?>
