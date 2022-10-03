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
            <li><a href="../catalog.php" class="hover:text-black">Каталог</a></li>
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