/* Attempting to create an info page */

var infoScreenChange = true;
var info = document.getElementById('info');

function random(min,max){
  return Math.round(Math.random() * (max-min) + min);
}

function dropBox(){
  var length = random(0, ($(".game").width()-100));
  var velocity = random(850, 10000);
  var size = random(25, 80);
  var thisBox = $("<div/>", {
    class: "box",
    style:  "width:" +size+ "px; height:"+size+"px; left:" + length+  "px; transition: transform " +velocity+ "ms linear;"
  });

  //set data and bg based on data
  thisBox.data("test", Math.round(Math.random()));
  if(thisBox.data("test")){
    thisBox.css({"background": "url('http://icons.iconarchive.com/icons/fi3ur/fruitsalad/128/strawberry-icon.png')", "background-size":"contain"});
  } else {
    thisBox.css({"background": "url('http://icons.iconarchive.com/icons/mugenB16/the-attic/128/Caca-Roach-icon.png')", "background-size":"contain"});
  }

  //insert gift element
  $(".game").append(thisBox);

  //random start for animation
  setTimeout(function(){
    thisBox.addClass("move");
  }, random(0, 5000) );

  //remove this object when animation is over
  thisBox.one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
              function(event) {
    $(this).remove();
  });
} // END OF DROPBOX


$(document).on('click', '#info', function(){
  info.style.display = 'none';
  for (i = 0; i < 10; i++) {
    dropBox();
  }
  countdown();
});

// starts the game
function countdown() {
      var seconds = 60;

      var runGame = setInterval(function(){
                      for (i = 0; i < 10; i++) {
                        dropBox();
                      }
                    }, 5000);

      function tick() {
          var counter = document.getElementById("counter");
          seconds--;
          counter.innerHTML = (seconds < 10 ? "0" : "")  + String(seconds) + "S";
          if( seconds > 0 ) {
              setTimeout(tick, 1000);
              //update();
          } else {
              alert("Game over");
              clearInterval(runGame);
          }
      }
      tick();
  }


//action performed during the game
game = new function (){

  function titleScreen() {
    if (infoScreenChange) {
      info.innerHTML = '<p>Your strawberry shortcake recipe requires strawberries! Catch as many strawberries as possible while avoiding the cockroach.</p> <p>Tap <span class="red">HERE </span> to start. </p>';
      infoScreenChange = false;
    }
  }

  this.run = function() {
    titleScreen();
  }

  var score = 0;

  $(document).on('click', '.box', function(){
    if($(this).data("test")){
      score += 1;
    } else {
      score -= 1;
    }

    $(".score").html(score);
    $(this).remove();
  });
} //END OF GAME FUNCTION

window.onload = function()
{
	game.run();
}
