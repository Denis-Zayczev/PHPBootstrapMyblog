<?php include("path.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/753c2c422f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Playfair+Display&display=swap" rel="stylesheet">
  <title>MyBlog</title>
</head>

<body>

<!-- Header -->
<?php include("app/include/header.php"); ?>

  <!-- карусель -->
  <div class="container">
    <div class="row">
      <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/header/blog1.jpg" class="d-block w-100" alt="blog">
          <div class="carousel-caption-my carousel-caption d-none d-md-block">
            <h5><a href="">First slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/header/blog2.jpg" class="d-block w-100" alt="blog">
          <div class="carousel-caption-my carousel-caption d-none d-md-block">
            <h5><a href="">First slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/header/blog3.jpg" class="d-block w-100" alt="blog">
          <div class="carousel-caption-my carousel-caption d-none d-md-block">
            <h5><a href="">First slide label</a></h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>

  <!-- mian -->
  <div class="container">
    <div class="content row">
      <div class="main-content col-md-9 col-12">
        <h2>Последние публикации</h2>

        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/main/post1.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамичесокго сайта</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Nov 30, 2021</i>
            <p class="preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum ipsam quia labore assumenda. Quia dolore labore, ea nostrum ipsum recusandae vel?</p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/main/post1.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамичесокго сайта</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Nov 30, 2021</i>
            <p class="preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum ipsam quia labore assumenda. Quia dolore labore, ea nostrum ipsum recusandae vel?</p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/main/post1.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамичесокго сайта</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Nov 30, 2021</i>
            <p class="preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum ipsam quia labore assumenda. Quia dolore labore, ea nostrum ipsum recusandae vel?</p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/main/post1.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамичесокго сайта</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Nov 30, 2021</i>
            <p class="preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum ipsam quia labore assumenda. Quia dolore labore, ea nostrum ipsum recusandae vel?</p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/main/post1.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамичесокго сайта</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Nov 30, 2021</i>
            <p class="preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum ipsam quia labore assumenda. Quia dolore labore, ea nostrum ipsum recusandae vel?</p>
          </div>
        </div>

      </div>
      <div class="sidebar col-md-3 col-12">
        <div class="section search">
          <h3>Поиск</h3>
          <form action="/" method="post">
            <input type="text" class="text-input" placeholder="Найти">
          </form>
        </div>

        <div class="section topics">
          <h3>Категории</h3>
          <ul>
            <li><a href="#">Программирование</a></li>
            <li><a href="#">Дизайн</a></li>
            <li><a href="#">Визуализация</a></li>
            <li><a href="#">Кейсы</a></li>
            <li><a href="#">Мотивация</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include("app/include/footer.php"); ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>