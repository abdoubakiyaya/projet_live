<?php
require_once __DIR__ . "/templates/header.php";

$articles = [
  ["title" => "Php VS Python", "content" => "test", "image" => "1-php-vs-python.jpg"],
  ["title" => "React ou React Native ?", "content" => "test", "image" => "2-react-vs-react-native.jpg"],
  ["title" => "Les meilleurs outils devops", "content" => "test", "image" => "3-devops.png"],

];


?>


<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="/assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
    </div>
  </div>
</div>

<!-- articles -->

<div class="row row-cols-1 row-cols-md-3 g-4 text-center">
  <?php foreach ($articles as $key => $article) { ?>
    <div class="col">
      <div class="card h-100">
        <img src="/uploads/articles/<?= $article["image"] ?>" class="card-img-top" alt="<?= $article["title"] ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $article["title"] ?></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  <?php } ?>

</div>

<!--  -->
<?php require_once __DIR__ . "/templates/footer.php" ?>
<!--  -->