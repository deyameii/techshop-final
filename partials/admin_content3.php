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
        <span class="font-medium">Успех!</span> Товар успешно изменен.
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
          Email покупателя
        </th>
        <th scope="col" class="py-3 px-6">
          Дата
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

      <tr class="bg-white dark:bg-gray-800">
        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          1
        </th>
        <td class="py-4 px-6">
          alex@qwe.ru
        </td>
        <td class="py-4 px-6">
          2022-10-11
        </td>
        <td class="py-4 px-6">
          <span
            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">В обработке</span>

        </td>
        <td class="py-4 px-6 text-right">
          <a href="#" class="update-btn font-medium text-blue-600 dark:text-blue-500 hover:underline"
             data-modal-toggle="authentication-modal">Товары в чеке</a>
        </td>
        <td class="py-4 px-6 text-right">
          <a href="#" class="update-btn font-medium text-blue-600 dark:text-blue-500 hover:underline"
             data-modal-toggle="crypto-modal"
          >Изменить статус</a>
        </td>
      </tr>
      </tbody>
    </table>
  </div>


  <!-- Main modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true"
       class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="authentication-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="py-6 px-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Изменить товар</h3>
          <form class="space-y-6" action="../src/php/update_product.php" method='post'>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Номер</label>
              <label for="title">
                <input type="text" name="id_product" id="id_product"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                       value="Номер товара">
              </label>
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Название
                товара</label>
              <label for="title">
                <input type="text" name="title" id="title"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                       required></label>
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Тип
                товара</label>
              <label for="type"><input type="text" name="type" id="type"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                       required>
              </label>
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Картинка</label>
              <label for="img"><input type="text" name="img" id="img"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                      required>
              </label>
            </div>
            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Цена</label>
              <label for="price"><input type="text" name="price" id="price"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required>
              </label>
            </div>
            <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Изменить
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Main modal -->
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
        <ul class="my-4 space-y-3 flex flex-col justify-center items-center">
          <li>
            <a href='#'> <span
                class="status bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">В обработке</span></a>
          </li>
          <li>
            <a href='#' id='status'>
              <span
                class="status bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Отменено</span>
            </a>
          </li>
          <li>
            <a href='#' id='status'>
              <span
                class="status bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Получен</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </div>
</div>
