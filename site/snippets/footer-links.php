<!-- footer links -->
<section class="bg-dark">
  <div class="container">
    <div class="row">

    	<div class="col-2">
    		<h5><?= t('projet_de') ?></h5>
        <ul class="list-inline list-inline-large">
          <li class="list-inline-item">
          	<a href="https://pocstudio.fr" target="_blank">
            		<img alt="Image" class="logo-xl img-fluid" src="<?= kirby()->urls()->assets() ?>/img/logo_POC_studio_white.png" />
            	</a>
          </li>
        </ul>
      </div>
      <!--end of col-->

      <div class="col-2">
        <h5><?= t('member') ?></h5>
        <ul class="list-inline list-inline-large">
          <li class="list-inline-item">
            <a href="https://www.lafrenchtech-onelse.com/" target="_blank">
                <img alt="Image" class="logo-xl img-fluid" src="<?= kirby()->urls()->assets() ?>/img/FTOne_Logo_dark.png" />
              </a>
          </li>
        </ul>
      </div>
      <!--end of col-->

      <!--end of col-->
      <div class="col-2">
        <h5><?= t('liens') ?></h5>
        <ul class="list-unstyled mt-4">
          <li>
            <a href="https://tart2000.notion.site/Documentation-Modulo-5ba1d665153f447f9ad915a3eba71718" class="text-white" target="_blank">Documentation</a>
          </li>
          <li>
            <a href="https://tart2000.notion.site/Changelog-e3d96a7d43d54340b8ced537820940bd" class="text-white" target="_blank">Changelog</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/modulo-io/" class="text-white" target="_blank">Linkedin</a>
          </li>
          <?php if ($kirby->language()->code() == 'fr') : ?>
            <li>
              <a href="<?= $page->url($kirby->language('en')->code()) ?>" class="text-white">English</a>
            </li>
          <?php endif ?>
          <?php if ($kirby->language()->code() == 'en') : ?>
            <li>
              <a href="<?= $page->url($kirby->language('fr')->code()) ?>" class="text-white">Français</a>
            </li>
          <?php endif ?>
          <li>
            <a href="mailto:arthur@pocstudio.fr" class="text-white">Contact</a>
          </li>
        </ul>
      </div>
      <!--end of col-->

      <div class="col-2">
        <h5><?= t('pages') ?></h5>
        <ul class="list-unstyled mt-4">
          <li>
            <a href="<?= page('mission')->url() ?>" class="text-white"><?= t('mission') ?></a>
          </li>
          <li>
            <a href="<?= page('pricing')->url() ?>" class="text-white"><?= t('pricing') ?></a>
          </li>
          <li>
            <a href="<?= page('features')->url() ?>" class="text-white"><?= t('features') ?></a>
          </li>
        </ul>
      </div>
      <!--end of col-->

    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>
<!--end of section-->