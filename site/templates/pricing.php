<?php snippet('header') ?>

<?= snippet('simple_navbar') ?>

<section>
	<div class="container">
	  <div class="row justify-content-center text-center section-intro">
	    <div class="col-12 col-md-10 col-lg-8">
	      <span class="title-decorative" data-aos="fade-up" data-aos-delay="10"><?= t('pricing') ?></span>
	      <h2 class="display-4" data-aos="fade-up" data-aos-delay="100"><?= $page->title() ?></h2>
	      <span class="lead" data-aos="fade-up" data-aos-delay="200"><?= $page->text()->kt() ?></span>
	    </div>
	    <!--end of col-->
	  </div>
	  <!--end of row-->

	  <div class="row justify-content-center">
	    <div class="col-10">
	      <table class="table table-bordered table-responsive pricing">
	        <thead>
	          <tr>
	            <th scope="col"></th>
	            <th scope="col">
	              <span class="h5"><?= t('gratuit') ?></span>
	            </th>
	            <th scope="col">
	              <span class="h5"><?= t('equipe') ?></span>
	            </th>
	          </tr>
	        </thead>
	        <tbody>  	
	          <tr>
	            <th scope="row"><?= t('price') ?></th>
	            <td>
	              <span class="display-4">0€</span>
	              <span class="text-small"><?= t('for ever') ?></span>
	            </td>
	            <td>
	              <span class="display-4">10€</span>
	              <span class="text-small">HT<?= t('user/month') ?></span><br/>
	            </td>
	          </tr>

	          <?php foreach ($page->thetable()->toStructure() as $line) : ?>
		          <tr>
		            <th scope="row"><?= $line->text() ?></th>
		            <td><?= $line->free() ?>
		            </td>
		            <td><?= $line->team() ?>
		            </td>
		          </tr>
		      <?php endforeach ?>
	          <tr>
	            <th scope="row"></th>
	            <td>
	              <a class="btn btn-link" href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>">
	              	<?= t('choose this plan') ?>		
	              </a>
	            </td>
	            <td>
	              <a class="btn btn-link" href="https://app.modulo.io/create_team?lang=<?= $kirby->language()->locale(LC_ALL) ?>">
	              	<?= t('choose this plan') ?>		
	              </a>
	            </td>
	          </tr>
	        </tbody>
	      </table>
	      <span><?= t('cant find?') ?> <a href="mailto:arthur@modulo.io"><?= t('contact us') ?> &rsaquo;</a>
	      </span>
	    </div>
	    <!--end of col-->
	    <hr>
	  </div>
	  <!--end of row-->
	</div>
</section>

<section id="testimonials">
	<div class="container">
	  <div class="row justify-content-center">
	    <div class="col-12">
			<div class="card-columns">
				<?php foreach ($page->testimonials()->toStructure() as $test): ?>
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
	  </div>
	</div>
</section>



<?= snippet('footer-callout') ?>

<?= snippet('footer-links') ?>

<?php snippet('footer') ?>