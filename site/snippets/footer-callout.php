<!-- sign-up section --> 
<section class="bg-dark gradient" id="message">
  <div class="container">
    <!--end of row-->
    <form>
      <div class="row">
      	<div class="col-12 col-sm-6 col-lg-9">
      		<h3 class="h1 pt-3"><?= t('join_the_adventure') ?></h3>
      	</div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="form-group">
            <label for="button">&nbsp;</label>
            <a href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class="btn btn-lg btn-block btn-dark">
            	<?= strtoupper(t('connexion')) ?> / <?= strtoupper(t('inscription')) ?>		
            </a>
          </div>
        </div>
      </div>
      <!--end of row-->
    </form>
  </div>
  <!--end of container-->
</section>
<!--end of section-->