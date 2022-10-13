<div class='bg-white flex flex-col items-center py-12'>
  <h2 class='text-2xl'>Каталог товаров</h2>
  <div class="container my-0 mx-auto py-12 px-4 max-w-7xl flex gap-12 flex-wrap">

    <?php if (isset($_SESSION['product_add'])): ?>
      <div id="alert-additional-content-3"
           class="p-4 mb-4 border border-green-300 rounded-lg bg-green-50 dark:bg-green-200" role="alert">
        <div class="flex items-center">
          <svg aria-hidden="true" class="w-5 h-5 mr-2 text-green-700 dark:text-green-800" fill="currentColor"
               viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                  clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Info</span>
          <h3 class="text-lg font-medium text-green-700 dark:text-green-800">Заказ принят!</h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-green-700 dark:text-green-800">
          Перейдите в личный кабинет для просмотра статуса заказа и для получения информации о его получении. Так же вы
          можете посмотреть каталог товара и подобрать еще что-нибудь.
        </div>
        <div class="flex items-center gap-12">
          <a href="account.php"
             class="inline-flex items-center py-2 px-12 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Личный кабинет
          </a>
          <a href='#'
             class="pointer text-red-600 font-medium rounded-lg text-sm"
             data-dismiss-target="#alert-additional-content-3" aria-label="Close">
            Закрыть
          </a>
        </div>
      </div>
    <?php endif; ?>
    <?php if (!empty($products)): ?>
      <?php foreach ($products as $product): ?>

        <div
          class='item-item w-64 h-72 shadow-2xl opacity-75 h-[530px] flex flex-col justify-center items-center gap-8 p-4 hover:transform hover:scale-105 hover:'>
          <div class='img w-[224px] h-[224px]'>
            <img class='w-full' src='../src/resources/img/products/<?= $product['img'] ?>' alt=''>
          </div>
          <div class='title text-base font-medium'><?= $product['title'] ?></div>
          <div class='type text-sm font-medium opacity-75 min-h-[50px]'><?= $product['type'] ?></div>
          <div class='price'><?= $product['price'] ?> Руб.</div>
          <a href='#'
             class='add-to-cart inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-center'
             data-id='<?= $product['id'] ?>'>В
            корзину</a>
        </div>

      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</div>

<?php unset($_SESSION['product_add']) ?>