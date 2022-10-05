$(function () {
  $('.add-to-cart').on('click', function (e) {
    e.preventDefault() // отменить переход по ссылке
    let id = $(this).data('id') // получение id

    $.ajax({
      url: 'cart.php',
      type: 'GET',
      data: { cart: 'add', id: id },
      dataType: 'json',
      success: function (res) {
        if (res.code === 'ok') {
          alert('OK')
        } else {
          alert(res.answer)
        }
      },
      error: function () {
        alert('Error')
      }
    })
  })
})
