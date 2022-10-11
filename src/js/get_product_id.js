$(function () {
  $('.update-btn').on('click', function (e) {
    let id = $(this).data('id') // получение id
    $('#id_product').val(id)
  })
})
