<?= snippet('header') ?>

<?= snippet('simple_navbar') ?>

<!-- HEADER IMAGE -->
<?php if($cover = $page->headerimg()->toFile()): ?>
	<section data-jarallax data-speed=".8" class="py-12 py-md-15 bg-cover jarallax" style="background-image: url(<?= $cover->url() ?>);"></section>
<?php else : ?>
	<section data-jarallax data-speed=".8" class="py-12 py-md-15 bg-cover jarallax" style="background-image: url(<?= kirby()->urls()->assets() ?>/img/collaboration.jpg);"></section>
<?php endif ?>


<!-- HEADER -->
<article>
<section class="pt-8 pt-md-11 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-9 col-xl-8">

        <!-- Heading -->
        <h1 class="display-4 text-center">
          <?= $page->title() ?>
        </h1>

        <!-- Text -->
        <p class="lead mb-7 text-center text-body-secondary">
          <?= $page->intro() ?>
        </p>

        <!-- Meta -->
        <div class="row align-items-center py-3 border-top">
        	<?php if($author = $page->author()->toUser()): ?>
	          <div class="col-auto">

	            <!-- Avatar -->
	            <?php if($avatar = $author->avatar()): ?>
		            <div class="avatar avatar-lg">
		              <img src="<?= $avatar->url() ?>" alt="<?= $author->name() ?>" class="avatar-img rounded-circle">
		            </div>
		        <?php endif ?>

	          </div>
	          <div class="col ms-n5">

	            <!-- Name -->
	            <h6 class="text-uppercase mb-0">
	              <?= $author->name() ?>
	            </h6>

	            <!-- Date -->
	            <time class="fs-sm text-body-secondary" datetime="2019-05-20">
	              <?= t('published') ?> <?= $page->published()->toDate('d/m/yy') ?>
	            </time>

	          </div>
	          <div class="col-auto">
	          	<!-- Ici des icônes de RS si on veut -->

	          </div>
	      <?php endif ?>
        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- SECTION -->
<section class="pt-6 pt-md-8">
  <div class="container">
    <div class="row justify-content-center article-content">
      <div class="col-12 col-md-10 col-lg-9 col-xl-8">

        <?= $page->text()->toBlocks() ?>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

</article>


<?= snippet('footer-callout') ?>

<?= snippet('footer-links') ?>

<?= snippet('footer') ?>