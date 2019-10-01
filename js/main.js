
$(document).ready(function () {
  if (window.innerWidth <= 568) {
    $('#mainMenu').removeClass('visible')
    // $('#mainMenu').hide()
    $('#menuToggle').on('click touch', function () {
      $('#mainMenu').toggleClass('visible')
    })
  }
})
