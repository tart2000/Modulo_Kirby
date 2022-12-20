<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand logo-sq" href="<?= $site->url() ?>">
    <img src="<?= kirby()->urls()->assets() ?>/img/logo_modulo_1.png" width="30" height="30">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-primary" href="<?= $site->url() ?>">Modulo</a>
      </li>

      <li class="nav-item <?= e($page->url() == page('mission')->url(), ' active') ?>">
        <a class="nav-link" href="<?= page('mission')->url() ?>"><?= t('mission') ?></a>
      </li>

      <li class="nav-item <?= e($page->url() == page('features')->url(), ' active') ?>">
        <a class="nav-link" href="<?= page('features')->url() ?>"><?= t('features') ?></a>
      </li>

      <li class="nav-item <?= e($page->url() == page('pricing')->url(), ' active') ?>">
        <a class="nav-link" href="<?= page('pricing')->url() ?>"><?= t('pricing') ?></a>
      </li>

      <li class="nav-item <?= e($page->url() == page('faq')->url(), ' active') ?>">
        <a class="nav-link" href="<?= page('faq')->url() ?>">FAQ</a>
      </li>

      <!-- 
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    -->
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class="">
          <?= t('connexion')?>    
        </a>
        <span>&nbsp;<?= t('ou')?>&nbsp;</span><a href="https://app.modulo.io/?lang=<?= $kirby->language()->locale(LC_ALL) ?>" class=""> <?= t('inscription')?></a>
      </li>
    </ul>
  </div>
</nav>