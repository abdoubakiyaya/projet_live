<?php
if ($article["image"] === null) {
  $imagePath = _ASSETS_IMAGES_FOLDER_ . "default-article.jpg";
} else {
  $imagePath = _ARTICLES_IMAGES_FOLDER_ . htmlentities($article["image"]);
}


?>


<div class="col">
  <div class="card h-100">
    <img src="<?= $imagePath ?>" class="card-img-top" alt="<?= htmlentities($article["title"]) ?>">
    <div class="card-body">
      <h5 class="card-title"><?= htmlentities($article["title"]) ?></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="actualite.php?id=<?= $key ?>" class="btn btn-primary">Lire la suite</a>
    </div>
  </div>
</div>