var holder = '';
var holder2 = '';
var firstInput = false;
var secondInput = false;
var arr = ['Avocado', 'Bananas', 'Beef', 'Bread', 'Cheese', 'Chicken', 'Egg',
'Lettuce', 'Potatoes', 'Tomatoes']




//Handles event of first ingredient being selected
$('#dropFirst').on('select2:select', function(event) {
  var e = event;
  firstInput = true;
  if(holder != e.params.data.text){
    console.log(e.params.data);
    $('#dropSecond').select2('destroy');
    createNewSecond();
    nullSecond(e);
    holder = e.params.data.text;
  }
  hideHowTo();
});

//Function to null only selected element (from first
//dropdown) in the seconnd dropdown list
function nullSecond(evt){
  console.log(evt.params.data.text);


  $.each(arr, function(index){
    //remove all disables from second ingredient elements
    $('#' + arr[index]).attr('disabled', false)
  });

  //disable specified element
  $('#' + (evt.params.data.text)).attr('disabled', true)


}

//Handles event of second ingredient being selected
$('#dropSecond').on('select2:select', function(event) {
  var e = event;
  secondInput = true;

  if(holder2 != e.params.data.text){
    console.log(e.params.data);
    //destroy previous list to prevent duplicates
    $('#dropFirst').select2('destroy');
    //create new list from destroyed
    createNewFirst();
    //redirect to helper function
    nullFirst(e);
    holder2 = e.params.data.text;
  }
  hideHowTo();
});

//Function to null only selected element (from second
//dropdown) in the first dropdown list
function nullFirst(evt){
  console.log(evt.params.data.text);


  $.each(arr, function(index){

    //remove all disables from first ingredient elements
    $('#' + arr[index] + 'f').attr('disabled', false)
  });

  //disable specified element
  $('#' + (evt.params.data.text) + 'f').attr('disabled', true)


}

//recreate first ingredient dropdown after open/close cycle
function createNewFirst(){
  //New matcher function that searches by character in order
  function matchStart (term, text) {
    if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
      return true;
    }

    return false;
  }
  //use new matcher
  $.fn.select2.amd.require(['select2/compat/matcher'], function(oldMatcher){
    $('#dropFirst').select2({
      matcher: oldMatcher(matchStart),
    });
  });
}

//recreate second ingredient dropdown after open/close cycle
function createNewSecond(){
  //New matcher function that searches by character in order
  function matchStart (term, text) {
    if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
      return true;
    }

    return false;
  }
  //use new matcher
  $.fn.select2.amd.require(['select2/compat/matcher'], function(oldMatcher){
    $('#dropSecond').select2({
      matcher: oldMatcher(matchStart),
    });
  });
}

//function
function hideHowTo(){
  if(firstInput && secondInput){
    $('.collapse').css('transition-duration', '0.9s');
    $('.collapse').collapse();

  }
}
