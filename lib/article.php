<?php

$articles = [
  ["title" => "Php VS Python", "content" => "PHP Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolor vero ut, labore non deserunt quo blanditiis! Debitis id aliquid repellendus rem, provident eos quidem cum est eum, quam neque.", "image" => "1-php-vs-python.jpg"],
  ["title" => "React ou React Native ?", "content" => " React Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolor vero ut, labore non deserunt quo blanditiis! Debitis id aliquid repellendus rem, provident eos quidem cum est eum, quam neque.", "image" => "2-react-vs-react-native.jpg"],
  ["title" => "Les meilleurs outils devops", "content" => " Outils Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolor vero ut, labore non deserunt quo blanditiis! Debitis id aliquid repellendus rem, provident eos quidem cum est eum, quam neque.", "image" => "3-devops.png"],

];

function getArticles(PDO $pdo, int $limit = null): array
{
  $sql = "SELECT * FROM articles ORDER BY id DESC";
  if ($limit) {
    $sql .= " LIMIT :limit";
  }

  $query = $pdo->prepare($sql);

  if ($limit) {
    $query->bindValue(":limit", $limit, PDO::PARAM_INT);
  }

  $query->execute();
  $articles = $query->fetchAll(PDO::FETCH_ASSOC);

  return $articles;
}
