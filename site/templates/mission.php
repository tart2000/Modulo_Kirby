<?php snippet('header') ?>

<?= snippet('simple_navbar') ?>

<section>
	<div class="container">
	  <div class="row justify-content-center text-center section-intro">
	    <div class="col-12 col-md-9 col-lg-8">
	      <span class="title-decorative" data-aos="fade-up" data-aos-delay="10"><?= t('our mission') ?></span>
	      <h2 class="display-4" data-aos="fade-up" data-aos-delay="100"><?= $page->title() ?></h2>
	      <span class="lead" data-aos="fade-up" data-aos-delay="200"><?= $page->head() ?></span>

	    </div>
	    <!--end of col-->
	  </div>
	  <!--end of row-->

	</div>
	<!--end of container-->
	<article class="container">
	  <div class="row justify-content-center">
	  	<?php if ($page->cover() != '') : ?>
	  		<?php $cover = $page->cover()->toFile() ?>
		    <div class="col-12 col-lg-10">
		      <figure class="figure">
		        <img alt="Image" src="<?= $cover->url() ?>" class="figure-image img-fluid rounded" />
		      </figure>
		    </div>
		<?php endif ?>
	    <!--end of col-->
	    <div class="col-12 col-md-10 col-lg-8">
	    	<!-- 
		      <blockquote class="blockquote">
		        <p class="h4">
		          “When consistency is built-in, there’s no arguing about insignificant details.”
		        </p>
		        <footer class="blockquote-footer title-decorative">
		          Rob Tobin, CEO
		        </footer>
		      </blockquote>
		  -->
	      <span class="lead">
	        <?= $page->text()->kt() ?>
	      </span>
	    </div>
	    <!--end of col-->
	  </div>
	  <!--end of row-->
	</article>
	<!--end of container-->
</section>


<?= snippet('footer-callout') ?>

<?= snippet('footer-links') ?>

<?php snippet('footer') ?>