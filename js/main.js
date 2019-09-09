
$(document).ready(function () {
  if (window.innerWidth <= 800) {
    $('#mainMenu').hide()
    $('#menuToggle').on('click touch', function () {
      $('#mainMenu').toggle()
    })
  }
})
