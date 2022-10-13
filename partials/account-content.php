<div class="container my-0 mx-auto py-12 px-4 max-w-7xl flex gap-12 flex-wrap justify-center">

  <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Список ваших заказов
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Для получения вашего заказа приходите по
          адресу нашего магазина. Если вы хотите оформить доставку, позвоните по нашему телефону.</p>
      </caption>
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="py-3 px-6">
          Номер заказа
        </th>
        <th scope="col" class="py-3 px-6">
          Дата заказа
        </th>
        <th scope="col" class="py-3 px-6">
          Сумма заказа
        </th>
        <th scope="col" class="py-3 px-6">
          Статус заказа
        </th>
        <th>

        </th>
      </tr>
      </thead>
      <tbody>

      <?php
      require 'get_personal_order.php';
      ?>
      </tbody>
    </table>
  </div>

</div>