<?php

require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/templates/header.php";

$articles = getArticles($pdo);

?>
<h1>actualités</h1>

<div class="row row-cols-1 row-cols-md-3 g-4 text-center">
  <?php foreach ($articles as $key => $article) {
    require __DIR__ . "/templates/article_part.php";
  } ?>

</div>
<?php require_once __DIR__ . "/templates/footer.php" ?>