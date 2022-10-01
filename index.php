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

  <!--  css links-->
  <link rel="stylesheet" href="src/css/output.css">

  <!--  font awesome-->
  <script src="https://kit.fontawesome.com/5a3878ed59.js" crossorigin="anonymous"></script>
</head>

<!--body-->
<body class="text-base m-0 min-h-full min-w-320 font-sans">
<div class="overflow-hidden">
  <!--    top header-->
  <div class="h-10 bg-[#1e1f29] text-xs font-medium flex align-center">
    <div class="container my-0 mx-auto py-0 px-4 max-w-7xl flex justify-between items-center">
      <ul class=" flex list-none gap-6 text-white">
        <li class=""><a href="#"><i class="fa-solid fa-phone data-scroll mr-2"></i>8 800 555 35 35</a></li>
        <li><a href="#"><i class="fa-solid fa-inbox data-scroll mr-2"></i>kmrk@mail.com</a></li>
        <li><a href="#"><i class="fa-solid fa-map-location data-scroll mr-2"></i>ул. Грига 5</a></li>
      </ul>
      <ul class="text-white">
        <li><a href="#" id="login"><i class="fa-solid fa-right-to-bracket mr-2"></i>Личный кабинет</a></li>
      </ul>
    </div>
  </div>
<!--  top header-->
<!-- header-->
<header class="bg-[#272941] h-24 flex items-center border-b-2 border-indigo-500">
  <div class="container my-0 mx-auto py-0 px-4 max-w-7xl flex items-center gap-28">
    <img src="src/resources/img/logo.png" alt="logo" class="mt-1.5">
    <div class="w-[750px] py-[15px] px-0">
      <form action="" class="flex items-center">
        <label for="" class="inline-block max-w-full mb-[5px] font-bold">
          <select class="flex outline-0 text-base font-medium mr-[-4px] rounded-l-md rounded-r-md pt-[6px] pb-[13px] bg-white border-[#E4E7ED]">
            <option value="0">Все категории</option>
            <option value="1">Стирка и сушка</option>
            <option value="2">Приготовление пищи</option>
            <option value="2">Холодильное оборудование</option>
            <option value="2">Встраиваемая техника</option>
          </select>
        </label>
        <label class="inline-block max-w-full mb-[5px] font-bold">
          <input class="outline-0 h-10 py-0 px-[15px] border-[#E4E7ED] bg-white mr-[-4px] w-[300px] font-normal" placeholder="Поиск">
        </label>
        <button class="w-[90px] bg-purple-200 py-2 mb-[5px] rounded-r-md">Поиск</button>
      </form>
    </div> 
    <div class="relative flex flex-col items-center gap-2 text-white">
      <div class="absolute right-0.5 top-[-10px] w-5 h-5 leading-5 text-center rounded-full text-xs text-white bg-[#9591e1]">2</div>
      <i class="fa-solid fa-basket-shopping"></i>
      <div>Корзина</div>
    </div>
  </div>
</header>

<nav class="bg-slate-100 font-medium">
  <div class="container my-0 mx-auto py-4 px-4 max-w-7xl flex gap-28 justify-center">
  <ul class="flex gap-24 items-center">
    <li><a href="" class="hover:text-purple-500">Главная</a></li>
    <li><a href="" class="hover:text-purple-500">Каталог</a></li>
    <li><a href="" class="hover:text-purple-500">О нас</a></li>
    <li><a href="" class="hover:text-purple-500">Отзывы</a></li>
  </ul>
  </div>
</nav>

</div>
</body>
</html>
