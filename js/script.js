$(window).on("navigate", function(event, data) {
  var direction = data.state.direction;
  if (direction == 'back') {
    alert('Going back');
  }
  if (direction == 'forward') {
    alert('Going forward');
  }
});

$(document).on('click', '.showNextPage', function() {
  $.mobile.navigate("#second", {
    transition: "slide"
  });
});

$(document).on('click', '.showPrevPage', function() {
  $.mobile.navigate("#index", {
    transition: "slide"
  });
});