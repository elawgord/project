<?php
  session_start();
  if (!$_SESSION['user']) {
    header('Location: /');
  }

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Raccoon. Увійти або авторизуватись</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;900&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="dist/style.css" />
  </head>
  <body>
    <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <a class="logo" href="#">Raccoon</a>
        </div>
      </div>
    </header>
      <div class="container">
        <main class="main">
          <div class="main__inner">
          <div class="main__title">
          <div class="title">Профіль</div>
          </div>
            <form>
              <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="image">
              <h2><?= $_SESSION['user']['name'] ?></h2>
              <a href="#"><?= $_SESSION['user']['email'] ?></a>
              <a href="vendor/logout.php">Вийти</a>
            </form>
          </div>
        </main>
      </div>
      <footer class="footer">
        <div class="footer__down">
          <a class="footer__logo" href="#">Raccoon</a>
      </footer>
      </div>
  </body>
</div>
</html>
