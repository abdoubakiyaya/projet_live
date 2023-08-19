<div class="col">
  <div class="card h-100">
    <img src="/uploads/articles/<?= htmlentities($article["image"]) ?>" class="card-img-top" alt="<?= htmlentities($article["title"]) ?>">
    <div class="card-body">
      <h5 class="card-title"><?= htmlentities($article["title"]) ?></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="actualite.php?id=<?= $key ?>" class="btn btn-primary">Lire la suite</a>
    </div>
  </div>
</div>