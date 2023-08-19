<?php



$currentPage = basename($_SERVER["SCRIPT_NAME"]);

?>


<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $mainMenu[$currentPage]["meta_description"] ?>">
  <title><?= $mainMenu[$currentPage]["head_title"] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/override-bootstrap.css">
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="/assets/images/logo-tech-trendz.png" alt="logo techtrendz" width="150">
        </a>
      </div>

      <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <?php foreach ($mainMenu as $key => $menuItem) {
          if (!array_key_exists("exclude", $menuItem)) {
        ?>
            <li class="nav-item"><a href="<?= $key ?>" class="nav-link px-2 <?php
                                                                            if ($key === $currentPage) {
                                                                              echo "active";
                                                                            }
                                                                            ?>"><?= $menuItem["title"] ?> </a></li>
        <?php }
        }
        ?>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
    <main>