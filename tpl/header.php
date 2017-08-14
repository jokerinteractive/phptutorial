<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Учебный проект</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Учебный проект</h3>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <?php
                foreach($main_menu as $url => $title) {
                  if (gettype($title) == "string") {
                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $url; ?>"><?= $title; ?></a>
                    </li>
                  <?php
                  } else if (gettype($title) == "array") {
                  ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="<?= $url; ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Подменю</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <?php
                          foreach($title as $k => $v) {
                            echo '<a class="dropdown-item" href="' . $k . '">'. $v .'</a>';
                          }
                        ?>
                      </div>
                    </li>
                  <?php
                  }
                }
              ?>
            </ul>
          </div>
        </nav>
      </div>
