var holder = '';
var holder2 = '';
var arr = ['Avocado', 'Bananas', 'Beef', 'Bread', 'Cheese', 'Chicken', 'Egg',
'Lettuce', 'Potatoes', 'Tomatoes']





$('#dropFirst').on('select2:select', function(event) {
  var e = event;
  if(holder != e.params.data.text){
    console.log(e.params.data);
    $('#dropSecond').select2('destroy');
    createNewSecond();
    nullSecond(e);
    holder = e.params.data.text;
  }
});

function nullSecond(evt){
  console.log(evt.params.data.text);


  $.each(arr, function(index){
    //remove all disables from second ingredient elements
    $('#' + arr[index]).attr('disabled', false)
  });

  //disable specified element
  $('#' + (evt.params.data.text)).attr('disabled', true)


}

$('#dropSecond').on('select2:select', function(event) {
  var e = event;
  if(holder2 != e.params.data.text){
    console.log(e.params.data);
    $('#dropFirst').select2('destroy');
    createNewFirst();
    nullFirst(e);
    holder2 = e.params.data.text;
  }
});

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
