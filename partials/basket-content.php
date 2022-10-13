<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
  <!-- Modal header -->
  <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
      Корзина
    </h3>
    <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="defaultModal">
  </div>

  <!-- Modal body -->

  <div class="p-6 space-y-6 text-white font-medium">
    <?php if ((!empty($_SESSION['cart']))) : ?>
    <?php if (isset($_SESSION['user'])): ?>
    <div class='modal-title flex justify-between'>
      <span>Картинка</span>
      <span>Название товара</span>
      <span>Цена</span>
      <span>Количество</span>
    </div>
    <?php foreach ($_SESSION['cart'] as $id => $item): ?>
      <div class='item text-emerald-100 flex justify-between'>
        <img src='../src/resources/img/products/<?= $item['img'] ?>' alt='<?= $item['title'] ?>'
             class='max-w-[48px] mr-40'>
        <div class=' mr-24'><?= $item['title'] ?></div>
        <div class=' mr-40'><?= $item['price'] ?></div>
        <div class=''><?= $item['qty'] ?></div>
      </div>
    <?php endforeach; ?>
  </div>    <!--    -->
  <!-- Modal footer -->
  <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">

    <a href='src/php/make_order.php'
       class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800'>Оформить
      заказ</a>
    <a href='src/php/cls_basket.php'
       class='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'>Очистить
      корзину
    </a>


    <div class='flex justify-between gap-12'>
      <div class='flex flex-col text-white font-medium'>
        <span>Количество товара: </span>
        <span>Сумма: </span>
      </div>
      <div class='flex flex-col text-white font-medium justify-end items-end'>
        <span><?= $_SESSION['cart.qty'] ?></span>
        <span id='modal-cart-qty'> <?= $_SESSION['cart.sum'] ?></span>
      </div>
    </div>

    <?php else: ?>

      <div class='bg-red-500 flex justify-center'>Войдите в аккаунт</div>
    <?php endif; ?>
    <?php else: ?>
      <div class='bg-red-500 flex justify-center'>Корзина пуста</div>
    <?php endif; ?>
  </div>
</div>
