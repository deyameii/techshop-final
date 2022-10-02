<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="src/resources/favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <!--  Title-->
  <title>TechShop — интернет магазин цифровых товаров</title>

  <!--  Fonts-->
  <link rel="preload" href="src/resources/fonts/Montserrat-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="src/resources/fonts/Montserrat-Medium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="src/resources/fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin>

<!--  swiper-->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />

  <!--  css links-->
  <link rel="stylesheet" href="src/css/output.css">
  <link rel="stylesheet" href="src/css/login.css">

  <!--  font awesome-->
  <script src="https://kit.fontawesome.com/5a3878ed59.js" crossorigin="anonymous"></script>
</head>

<!--body-->
<body class="text-base m-0 min-h-full min-w-320 font-sans bg-[#111827]">
<div class="overflow-hidden">
  <!--    top header-->
  <div class="h-10 bg-[#1e1f29] text-xs font-medium flex align-center">
    <div class="container my-0 mx-auto py-0 px-4 max-w-7xl flex justify-between items-center">
      <ul class=" flex list-none gap-6 text-white">
        <li class=""><a href="#"><i class="fa-solid fa-phone data-scroll mr-2"></i>8 800 555 35 35</a></li>
        <li><a href="#"><i class="fa-solid fa-inbox data-scroll mr-2"></i>kmrk@mail.com</a></li>
        <li><a href="#"><i class="fa-solid fa-map-location data-scroll mr-2"></i>ул. Грига 5</a></li>
      </ul>
      <ul class="text-white flex gap-6">
          <?php if (isset($_SESSION['error'])): ?>
            <li class="error text-red-300"><?php echo $_SESSION['error']; ?></li>
              <?php unset($_SESSION['error']); ?>
          <?php endif; ?>

          <?php if (isset($_SESSION['user'])): ?>
            <li><?php echo $_SESSION['user']['email']; ?></li>
            <a href="src/php/logout.php">Выйти</a>
          <?php else: ?>
            <li><a href="#" id="login"><i class="fa-solid fa-right-to-bracket mr-2"></i>Личный кабинет</a></li>
          <?php endif; ?>
      </ul>
    </div>
  </div>
  <!--  top header-->
  <!-- header-->
  <header class="bg-[#111827] h-24 flex items-center ">
    <div class="container my-0 mx-auto py-0 px-4 max-w-7xl flex items-center gap-28 justify-between">
      <img src="src/resources/img/logo.png" alt="logo" class="mt-1.5">
      <div class="relative flex flex-col items-center gap-2 text-white">
        <div
            class="absolute right-0.5 top-[-10px] w-5 h-5 leading-5 text-center rounded-full text-xs text-white bg-[#9591e1]">
          2
        </div>
        <i class="fa-solid fa-basket-shopping"></i>
        <div>Корзина</div>
      </div>
    </div>
  </header>

  <nav class="bg-main font-medium text-white">
    <div class="container my-0 mx-auto py-4 px-4 max-w-7xl flex gap-28 justify-center">
      <ul class="flex gap-24 items-center">
        <li><a href="" class="hover:text-black">Главная</a></li>
        <li><a href="" class="hover:text-black">Каталог</a></li>
        <li><a href="" class="hover:text-black">О нас</a></li>
        <li><a href="" class="hover:text-black">Отзывы</a></li>
      </ul>
    </div>
  </nav>

  <div class="pop_up">
    <div class="pop_up_container">
      <div class="pop_up_body gradient-border">
        <h2>Авторизация</h2>
        <form action="src/php/auth.php" method="post">
          <label>
            <input type="email" placeholder="email" name="email">
          </label>
          <label>
            <input type="password" placeholder="Пароль" name="password">
          </label>
          <!--          <a href='' class='register__link'>Зарегистрироваться</a>-->
          <button type="submit" name="log_in" value="log_in">Войти</button>
        </form>
        <div class="pop_up_close">&#10006</div>
      </div>
    </div>
  </div>
  <!--hero-->
  <section class="bg-gray-900 text-white">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-[500px] lg:items-center">
      <div class="mx-auto max-w-3xl text-center">
        <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrapolated text-transparent sm:text-5xl">
          Техника - это надежность.
          <span class="sm:block pb-4">Как ни крути.</span>
        </h1>
        <p class="mx-auto mt-4 max-w-xl sm:text-xl font-medium sm:leading-relaxed">
          Для того, кто на шаг впереди.
          Для того, кто привык быть на высоте.
          Новый уровень бытовой техники - поднимаем
          комфорт до уровня Безупречность.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
             href="/get-started">Каталог товара</a>
          <a class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
             href="/about">О нас</a>
        </div>
      </div>
    </div>
  </section>
  <!--hero-->

  <!--  TODO: carousel-->

<!--  <div class="container my-0 mx-auto py-0 px-4 max-w-7xl flex justify-between items-center min-w-0">-->
  <div class="min-w-0 flex justify-center">
    <div class="swiper  w-full h-[800px]">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper img-slider">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="text-center">
            <img class="max-w-full" src="src/resources/img/item-03.png" alt="">
          </div>
        </div>
        <div class="swiper-slide ">
          <div class="text-center">
            <img class="max-w-full" src="src/resources/img/item-04.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="text-center">
            <img class="max-w-full" src="src/resources/img/item-02.png" alt="">
          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  </div>



  <footer class="bg-[#111827]">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div
          class="flex flex-col items-center gap-4 rounded-lg bg-main p-6 shadow-lg sm:flex-row sm:justify-between">
        <strong class="text-xl text-white sm:text-xl">Давайте начнем!</strong>
        <a class="inline-flex items-center rounded-full border border-white bg-white px-8 py-3 text-[#111827] hover:bg-transparent hover:text-white focus:outline-none focus:ring active:bg-white/90"
           href="/">
          <span class="text-sm font-medium mr-1">Показать каталог товара</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
        <div class="text-center sm:text-left text-white">
          <p class="text-lg font-medium ">О нас</p>
          <nav class="mt-8">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">История компании</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Расположение магазинов</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Вакансии</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="text-center sm:text-left text-white">
          <p class="text-lg font-medium ">Клиентам</p>
          <nav class="mt-8">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Как оформить заказ</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Доставка</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Каталог товара</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Статус заказа</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="text-center sm:text-left text-white">
          <p class="text-lg font-medium">Общее</p>
          <nav class="mt-8">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Помощь</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Обратная связь</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Юридическим лицам</a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Политика конфиденциальности</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">Оставайтесь на связи</p>

          <nav class="mt-8">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="group flex justify-center gap-1.5 sm:justify-start" href="/">
                  <span class="text-gray-700 transition group-hover:text-gray-700/75">8 800 555 35 35</span>
                  <span class="relative -mr-2 flex h-2 w-2">
                  <span
                      class="absolute inline-flex h-full w-full animate-ping rounded-full bg-teal-400 opacity-75"></span>
                  <span class="relative inline-flex h-2 w-2 rounded-full bg-teal-500"></span>
                </span>
                </a>
              </li>
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="/">Поддержка</a>
              </li>

            </ul>
          </nav>
        </div>
      </div>

      <div class="mt-16">
        <ul class="flex justify-center gap-6 sm:justify-end">
          <li>
            <a href="/" rel="noreferrer" target="_blank" class="text-main transition hover:text-main-700/75">
              <span class="sr-only">Facebook</span>
              <i class="fa-brands fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="/" rel="noreferrer" target="_blank" class="text-main transition hover:text-main-700/75">
              <span class="sr-only">instagram</span>
              <i class="fa-brands fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="/" rel="noreferrer" target="_blank" class="text-main transition hover:text-main-700/75">
              <span class="sr-only">Twitter</span>
              <i class="fa-brands fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="/" rel="noreferrer" target="_blank" class="text-main transition hover:text-main-700/75">
              <span class="sr-only">GitHub</span>
              <i class="fa-brands fa-github"></i>
            </a>
          </li>

        </ul>

        <div class="mt-16 sm:flex sm:items-center sm:justify-between">
          <div class="flex justify-center text-teal-600 sm:justify-start">
            <img src="src/resources/img/logo.png" alt="">
          </div>

          <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-right">
            Copyright &copy;2022. Все права защищены.
          </p>
        </div>
      </div>
    </div>
  </footer>


</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="src/js/swiper.js"></script>
<script src="src/js/login.js"></script>

</body>
</html>
