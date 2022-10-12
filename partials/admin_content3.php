<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<div class="container my-0 mx-auto py-12 px-4 max-w-7xl flex justify-center flex-col">

  <ul
    class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
    <li class="mr-2">
      <a href="admin_panel.php" aria-current="page"
         class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Добавить
        товар</a>
    </li>
    <li class="mr-2">
      <a href="admin_panel2.php"
         class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Все
        товары</a>
    </li>
    <li class="mr-2">
      <a href="admin_panel3.php"
         class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Заказы</a>
    </li>
    <li class="mr-2">
      <a href="#"
         class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Прочее</a>
    </li>
  </ul>

  <?php if (isset($_SESSION['updated'])): ?>
    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 mt-6"
         role="alert">
      <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
           xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
      </svg>
      <span class="sr-only">Инфо</span>
      <div>
        <span class="font-medium">Успех!</span> Заказ успешно изменен.
      </div>
    </div>
  <?php endif; ?>

  <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="py-3 px-6">
          Номер заказа
        </th>
        <th scope="col" class="py-3 px-6">
          Дата
        </th>
        <th scope="col" class="py-3 px-6">
          Email покупателя
        </th>
        <th scope="col" class="py-3 px-6">
          статус
        </th>
        <th scope="col" class="py-3 px-6">

        </th>
        <th scope="col" class="py-3 px-6">

        </th>
      </tr>
      </thead>
      <tbody>

      <?php
      require 'select_orders.php';
      ?>
      </tbody>
    </table>
  </div>


  <!-- Товары в чеке -->
  <div id="small-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
          <h3 class="text-xl font-medium text-gray-900 dark:text-white">
            Показать товары?
          </h3>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Номер чека</label>
            <label for="title">
              <input type="text" name="conf_id" id="conf_id"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                     value="Номер чека">
            </label>
          </div>

        </div>

        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
          <button data-modal-toggle="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Показать</button>
          <button data-modal-toggle="small-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Закрыть</button>
        </div>
      </div>
    </div>
  </div>


<!-- Изменить заказ -->
<div id="crypto-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
  <div class="relative p-4 w-full max-w-md h-full md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <button type="button"
              class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
              data-modal-toggle="crypto-modal">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <!-- Modal header -->
      <div class="py-4 px-6 rounded-t border-b dark:border-gray-600">
        <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
          Изменить статус заказа
        </h3>
      </div>
      <!-- Modal body -->
      <div class="p-6">
        <form action='src/php/set_status.php' method='post' class='flex flex-col gap-8'>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Номер</label>
            <label for="title">
              <input type="text" name="id_productt" id="id_productt"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                     value="">
            </label>
          </div>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Выберите статус заказа</label>
        <select id="countries" name='product_status' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option>Отменен</option>
          <option>В обработке</option>
          <option>Получен</option>
        </select>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Применить</button>
        </form>
      </div>
    </div>
  </div>
</div>
