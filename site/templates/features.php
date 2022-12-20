<?= snippet('header') ?>

<?= snippet('simple_navbar') ?>


<section>
	<div class="container">
	  <div class="row justify-content-center text-center section-intro">
	    <div class="col-12 col-md-9 col-lg-8">
	      <span class="title-decorative" data-aos="fade-up" data-aos-delay="10">
	      	<?= t('features')?>
	      </span>
	      <h2 class="display-4" data-aos="fade-up" data-aos-delay="100">
	      	<?= $page->title() ?>
	      </h2>
	      <span class="lead" data-aos="fade-up" data-aos-delay="200">
	      	<?= $page->text()->kt() ?>
	      </span>

	    </div>
	    <!--end of col-->
	  </div>
	  <!--end of row-->

	  <ul class="row g-5 feature-list">
	  	<?php foreach ($page->features()->toStructure() as $feat) : ?>
		    <li class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">
		    	<?php if ($cover = $feat->cover()->toFile()) : ?>
		      		<img class="rounded img-fluid mb-3 shadow-sm" src="<?= $cover-> url() ?>">
		      	<?php endif ?>
		      <h5><?= $feat->title() ?></h5>
		      <p class="mb-4">
		        <?= $feat->text() ?>
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



<?= snippet('footer-callout') ?>

<?= snippet('footer-links') ?>

<?= snippet('footer') ?>