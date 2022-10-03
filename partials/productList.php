<div class='bg-white flex flex-col items-center py-12'>
  <h2 class='text-2xl'>Каталог товаров</h2>
  <div class="container my-0 mx-auto py-12 px-4 max-w-7xl flex gap-12">
    <?php if (!empty($products)): ?>
      <?php foreach ($products as $product): ?>

        <div
          class='item w-64 h-72 shadow-2xl opacity-75 h-[530px] flex flex-col justify-center items-center gap-8 p-4'>
          <div class='img w-[224px] h-[224px]'>
            <img class='w-full' src='../src/resources/img/products/<?= $product['img'] ?>' alt=''>
          </div>
          <div class='title text-base font-medium'><?= $product['title'] ?></div>
          <div class='type text-sm font-medium opacity-75 min-h-[50px]'><?= $product['type'] ?></div>
          <div class='price'><?= $product['price'] ?> Руб.</div>
          <a href='#'
             class='inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-center'>В
            корзину</a>
        </div>

      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</div>