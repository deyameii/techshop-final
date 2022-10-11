$(function () {
  $('.status').click(function (e) {
    $.ajax({
      type: 'GET',
      url: 'jax.php',
      success: function (response) {
        alert(response)
      }
    })
  })
})
