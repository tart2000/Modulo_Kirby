<?= snippet('header') ?>

<?= snippet('simple_navbar') ?>


<!-- ARTICLES -->
<section class="content blog pb-8 pt-7 pb-md-11 pt-md-10">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <!-- Heading -->
        <h2 class="mb-0">
          <?= $page->title()->html() ?>
        </h2>

        <!-- Text -->
        <h4 class="mb-5 text-body-secondary">
          <?= $page->text()->kirbytext() ?>
        </h4>

      </div>
    </div> <!-- / .row -->
      
    <div class="row">

      <?php foreach($page->children()->listed()->flip() as $article): ?>

        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <!-- Card -->
          <div class="card mb-6 mb-lg-0 shadow-light-lg">

            <!-- Image -->
            <?php if($cover = $article->headerimg()->toFile()): ?>
              <a class="card-img-top" href="<?= $article->url() ?>">
                <img src="<?= $cover->url() ?>" alt="..." class="card-img-top">
              </a>
            <?php endif ?>

            <!-- Body -->
            <a class="card-body" href="<?= $article->url() ?>">

              <!-- Heading -->
              <h3>
                <?= $article->title()->html() ?>
              </h3>

              <!-- Text -->
              <p class="mb-0 text-body-secondary">
                <?= $article->intro()->excerpt(200) ?>
              </p>

            </a>

            <!-- Meta -->
            <div class="card-meta d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <?php if($author = $article->author()->toUser()): ?>
                    <div class="avatar avatar-sm me-2">
                      <?php if($avatar = $author->avatar()): ?>
                        <img src="<?= $avatar->url() ?>" alt="<?= $author->name() ?>" class="avatar-img rounded-circle">
                      <?php endif ?>
                    </div>
                    <div class="ml-2 c-details">
                        <h6 class="mb-0"><?= $author->name() ?></h6> <span><time datetime="2019-05-02"><?= $article->published()->toDate('d/m/yy') ?></time></span>
                    </div>
                  <?php endif ?>
                </div>
            </div>


          </div>
        </div>

      <?php endforeach ?>


    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<?= snippet('footer-callout') ?>

<?= snippet('footer-links') ?>

<?= snippet('footer') ?>