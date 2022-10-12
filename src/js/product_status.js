console.log(123)
$(function () {
  $('.update-btn').on('click', function (e) {
    let id = $(this).data('id') // получение id
    $('#id_productt').val(id)
  })
  $('.show_products').on('click', function (e) {
    let id2 = $(this).data('id') // получение id
    $('#conf_id').val(id2)
  })
})
