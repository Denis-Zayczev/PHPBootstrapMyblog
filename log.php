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
  <!-- HEADER -->
  <header class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h1><a href="/">My blog</a></h1>
        </div>
        <nav class="col-8">
          <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li>
              <a href="#">
                <i class="fa fa-user"></i> Кабинет
              </a>
              <ul>
                <li><a href="#">Админ панель</a></li>
                <li><a href="#">Выход</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- FORM -->
  <div class="contianer req_form">
    <form class="row justify-content-md-center" method="post" action="log.html">
      <h2 class="col-12">Авторизация</h2>
      <div class="mb-3 col-md-4">
        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="w-100"></div>
      <div class="mb-3 col-12 col-md-4">
        <button type="button" class="btn btn-primary">Войти</button>
        <a href="auth.html">Зарегистрироваться</a>
      </div>
    </form>
  </div>

  <!-- footer -->
  <div class="footer container-fluid">
    <div class="footer-contnet container">
      <div class="row">
        <div class="footer-section about col-md-4 col-12">
          <h3 class="logo-text">Мой блог</h3>
          <p>Мой блог - это блог сделанный с целью обучения самого себя, а так же улучшение своих навыков в веб программирование</p>

          <div class="contact">
            <span class="fas fa-phone">&nbsp; 123-456-789</span>
            <span class="fas fa-envelope">&nbsp; info@myblog.com</span>
          </div>
          <div class="socials">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <div class="footer-section links col-md-4 col-12">
          <h3>Quick Links</h3>
          <br>
          <ul>
            <a href="#">
              <li>Собыитя</li>
            </a>
            <a href="#">
              <li>Команда</li>
            </a>
            <a href="#">
              <li>Упражнения</li>
            </a>
            <a href="#">
              <li>Галерея</li>
            </a>
            <a href="#">
              <li>Что-то ещё</li>
            </a>
          </ul>
        </div>

        <div class="footer-section contact-form col-md-4 col-12">
          <h3>Контакты</h3>
          <br>
          <form action="index.html" method="post">
            <input type="email" name="email" class="text-input contact-input" placeholder="Your email addres...">
            <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
            <button type="submit" class="btn btn-big contact-btn">
          <i class="fas fa-envelope"></i>
          Отправить
        </button>
          </form>
        </div>

      </div>
      <div class="footer-bottom">
        &copy; myblog.com | Designed by DenisZ
      </div>
    </div>
  </div>
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