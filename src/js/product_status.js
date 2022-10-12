console.log(123)
$(function() {
  $('.update-btn').on('click', function(e) {
    let id = $(this).data('id') // получение id
    $('#id_productt').val(id)
  })
  $('.show_products').on('click', function(e) {
    let id = $(this).data('id')
    $('#conf_id').val(id)
  })

})
