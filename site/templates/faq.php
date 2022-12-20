<?= snippet('header') ?>

<?= snippet('simple_navbar') ?>

<style> 
	.card {
		border-style: none;
	}
	h1 > button {
		font-size: 1.35rem !important;
	}
</style>

<section>
	<div class="container">
	  <div class="row justify-content-center text-center section-intro">
	    <div class="col-12 col-md-9 col-lg-6">
	      <span class="title-decorative" data-aos="fade-up" data-aos-delay="10">
	      	<?= t('faqs')?>
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

	  <div class="row justify-content-center">
	  	<div class="col-12 col-lg-9">

			  <div class="accordion" id="accordionExample">

			  	<?php $i = 1 ?>
			  	<?php foreach ($page->faq()->toStructure() as $item) : ?>

			  	  <div class="card">
				    <div class="card-header" id="heading<?= $i ?>">
				      <h1 class="mb-0">
				        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
				          <?= $item->question() ?>
				        </button>
				      </h1>
				    </div>

				    <div id="collapse<?= $i ?>" class="collapse <?php e($i==1,'show') ?>" aria-labelledby="heading<?= $i ?>" data-parent="#accordionExample">
				      <div class="card-body">
				        <?= $item->answer() ?>
				      </div>
				    </div>
				  </div>

				<?php $i++ ?>
				<?php endforeach ?>
				
			  </div>
			</div>
			<!-- end col --> 
		</div>
		<!-- end of row -->
	</div>
	<!--end of container-->
</section>
<!--end of section-->



<?= snippet('footer-callout') ?>

<?= snippet('footer-links') ?>

<?= snippet('footer') ?>