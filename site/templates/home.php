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

      <?php if ($kirby->language()->code() == 'fr') : ?>
	      <div class="row justify-content-center">

	        <div class="col-12 col-md-6 col-lg-5">
	          <div class="media">
	            <img alt="Image" src="<?= kirby()->urls()->assets() ?>/img/damien.jpg" class="avatar" />
	            <div class="media-body">
	              <p class="mb-1">
	                “Je viens d'utiliser Modulo sur une formation en visio d'1h30 et j'ai hâte de retrouver des ateliers séminaires en présentiel pour en mesurer toute la puissance. Cet outil ne va plus me quitter !”
	              </p>
	              <small>Damien Roquel, <a href="https://www.brique24.fr/" target="_blank">Brique 24</a></small>
	            </div>
	          </div>
	        </div>
	        <!--end of col-->

	        <div class="col-12 col-md-9 col-lg-7">
	          <div class="media">
	            <img alt="Image" src="<?= kirby()->urls()->assets() ?>/img/vincent.png" class="avatar" />
	            <div class="media-body">
	              <p class="mb-1">
	                “Créer le design de son atelier ou de son séminaire sur Modulo, c’est d’abord accepter une évidence un peu désagréable : celle que jusque là, on faisait un peu n’importe quoi ! Depuis que j’ai un compte Modulo, je regarde avec dépit et tendresse les tableurs Excel illisibles qui croupissent dans le dossier «designs» de mon drive.”
	              </p>
	              <small>Vincent Nicollet, <a href="https://communlundi.fr/" target="_blank">Commun Lundi</a></small>
	            </div>
	          </div>
	        </div>
	        <!--end of col-->

	      </div>
	      <!--end of row-->
	  <?php endif ?>
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

  <?php if ($kirby->language()->code() == 'fr') : ?>
  
	  <!-- FAQ --> 
	  <section class="bg-white">
	  	<div class="container">

	  	   <div class="row justify-content-center text-center section-intro">
	        <div class="col-12 col-md-9 col-lg-8">
	          <span class="title-decorative" data-aos="fade-up" data-aos-delay="10">Et si on faisait autrement ?</span>
	          <h2 class="display-4" data-aos="fade-up" data-aos-delay="100">Intéressé.e ?</h2>
	          <span class="lead" data-aos="fade-up" data-aos-delay="200">
	          	Après plus de 10 ans comme facilitateur et des centaines de workshops organisés, Arthur a décidé de monter Modulo pour accompagner les facilitateurs dans leur travail. 
	          </span>

	        </div>
	        <!--end of col-->
	      </div>
	      <!--end of row-->

				<div class="row align-items-center">
					<div class="col col-md-8 offset-md-2"> 

				     <div class="accordion" id="accordion-1" data-children=".accordion-item">

						  <div class="accordion-item">
						    <a data-toggle="collapse" data-parent="#accordion-1" href="#accordion-panel-1" aria-expanded="false" aria-controls="accordion-1">
						      <h5>Est-ce que l'outil existe ?</h5>
						      <i class="h5 icon-chevron-small-right"></i>
						    </a>
						    <div id="accordion-panel-1" class="collapse" role="tabpanel">
						      <p>
						        Oui, l'outil est disponible en version Beta depuis janvier 2022 et vous pouvez vous faire un compte pour l'utiliser gratuitement dès maintenant. Votre feedback est important pour nous, alors n'hésitez pas à nous faire savoir si vous rencontrez des problèmes ou si vous avez des idées. 
						      </p>
						    </div>
						  </div>
						  <div class="accordion-item">
						    <a data-toggle="collapse" data-parent="#accordion-1" href="#accordion-panel-3" aria-expanded="false" aria-controls="accordion-1">
						      <h5>J'ai des besoins particuliers, comment faire ?</h5>
						      <i class="h5 icon-chevron-small-right"></i>
						    </a>
						    <div id="accordion-panel-3" class="collapse" role="tabpanel">
						      <p>
						        Nous espérons produire un outil qui répondra à une majorité des besoins. Si vous avez des idées de fonctionnalités qui pourraient bénéficier à tous, écrivez un mail à arthur@pocstudio.fr. Et si vos besoins sont uniques, écrivez-nous pour voir ce qu'on peut faire pour vous. 
						      </p>
						    </div>
						</div>
						<div class="accordion-item">
						    <a data-toggle="collapse" data-parent="#accordion-1" href="#accordion-panel-4" aria-expanded="false" aria-controls="accordion-1">
						      <h5>Combien ça coûte ?</h5>
						      <i class="h5 icon-chevron-small-right"></i>
						    </a>
						    <div id="accordion-panel-4" class="collapse" role="tabpanel">
						      <p>
						        Aujourd'hui, l'utilisation de Modulo est gratuite. Nous comptons garder une version gratuite pour toujours, mais certaines fonctionnalités seront réservées aux utilisateurs payants à terme. Nous travaillons en particulier sur une version 'équipe' qui permettra à une équipe de partager des événements, des templates et des modules. 
						      </p>
						    </div>
						</div>
			          <div class="accordion-item">
			              <a data-toggle="collapse" data-parent="#accordion-1" href="#accordion-panel-5" aria-expanded="false" aria-controls="accordion-1">
			                <h5>Qui est derrière Modulo ?</h5>
			                <i class="h5 icon-chevron-small-right"></i>
			              </a>
			              <div id="accordion-panel-5" class="collapse" role="tabpanel">
			                <p>
			                  Modulo est un projet de POC studio, l'atelier de prototypage collaboratif monté par Arthur Schmitt. Avec plus de 10 ans d'expérience dans la facilitation, Arthur a organisé et animé des centaines d'ateliers et a toujours été frustré par les outils disponibles. C'est pourquoi il a créé Modulo en 2022. 
			                </p>
			              </div>
			          </div>
						<div class="accordion-item">
						    <a data-toggle="collapse" data-parent="#accordion-1" href="#accordion-panel-6" aria-expanded="false" aria-controls="accordion-1">
						      <h5>Et après ?</h5>
						      <i class="h5 icon-chevron-small-right"></i>
						    </a>
						    <div id="accordion-panel-6" class="collapse" role="tabpanel">
						      <p>
						      	Le déroulé étant au coeur de la pratique du facilitateur, nous pensons qu'il peut évoluer s'enrichir dans le temps. Une bibliothèque de modules ? Une marketplace ? La production simplifiée de synthèses d'ateliers ? Autant de choses qui pourront être développées en fonction des idées, envies et besoins des utilisateurs (vous). 
						      </p>
						    </div>
						  </div>

						</div><!-- end accordion --> 

					</div><!-- end col --> 
				</div><!-- end row -->
			</div><!-- end container --> 

	  </section>

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
