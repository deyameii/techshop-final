<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<?php


?>
<div class="container my-0 mx-auto py-12 px-4 max-w-7xl flex justify-center flex-col">
  <?php if (isset($_SESSION['added'])): ?>
    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
         role="alert">
      <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
           xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
      </svg>
      <span class="sr-only">Инфо</span>
      <div>
        <span class="font-medium">Успех!</span> Товар успешно добавлен.
      </div>
    </div>
  <?php endif; ?>
  <ul
    class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
    <li class="mr-2">
      <a href="admin_panel.php" aria-current="page"
         class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Добавить
        товар</a>
    </li>
    <li class="mr-2">
      <a href="#"
         class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Все
        товары</a>
    </li>
    <li class="mr-2">
      <a href="#"
         class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Заказы</a>
    </li>
    <li class="mr-2">
      <a href="#"
         class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Прочее</a>
    </li>
  </ul>


  <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="py-3 px-6">
          Номер
        </th>
        <th scope="col" class="py-3 px-6">
          Наименование
        </th>
        <th scope="col" class="py-3 px-6">
          Тип товара
        </th>
        <th scope="col" class="py-3 px-6">
          Картинка
        </th>
        <th scope="col" class="py-3 px-6">
          Цена
        </th>
        <th scope="col" class="py-3 px-6">
          <span class="sr-only">Изменить</span>
        </th>
      </tr>
      </thead>
      <tbody>
      <?php
      require 'select_products.php';
      ?>
      </tbody>
    </table>
  </div>

</div>


