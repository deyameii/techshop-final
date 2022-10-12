<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<div class="container my-0 mx-auto py-12 px-4 max-w-7xl flex justify-center flex-col">


  <a href="admin_panel3.php"
     class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-center">Вернуться</a>

  <div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="py-3 px-6">
          Название товара
        </th>
        <th scope="col" class="py-3 px-6">
          Количество
        </th>
        <th scope="col" class="py-3 px-6">
          Цена за ед
        </th>
        <th scope="col" class="py-3 px-6">
          Сумма
        </th>
      </tr>
      </thead>
      <tbody>
      <?php
      require 'select_orders_2.php';
      ?>


      </tbody>
    </table>
  </div>
