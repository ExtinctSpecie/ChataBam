var img = document.getElementById('ball');

var field = document.getElementById('field');

img.onclick = function() {

  var from = 0;

  var to = field.clientHeight - img.clientHeight;

  animate({

    delay: 20,

    duration: 1000,

    delta: makeEaseOut(bounce),

    step: function(delta) {

      img.style.top = to*delta + 'px';

    }

  });

};
