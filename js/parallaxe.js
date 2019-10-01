$(document).ready(function () {
  var positionx = 2
  var is_moving = false
  screen_width = $(window).width()
  screen_height = $(window).height()
  var bg = $('#backgroundContainer')
  var layer1 = $('#layer1container')
  var layer2 = $('#layer2container')
  var layer3 = $('#layer3container')
  var overlay = $('#gameContainer #content')
  var coef = 25
  var offset = ''

  $('.parallaxe').mousemove(function (e) {
    if (is_moving == false) {
      var offset = ((e.pageX / screen_width - 0.5) * 2 * coef)
      layer1.css({ 'background-position': (positionx + offset ) + 'px' })
      layer2.css({ 'background-position': (positionx + offset / 2) + '% 50%' })
      layer3.css({ 'background-position': (positionx + offset / 3) + 'px' })
    }
  })
})
