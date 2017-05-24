//Read only rating that displays to users when dish list is first generated
function renderRate(x, y){
  $('#rate' + y).raty({
    numberMax: 5,
    readOnly: true,
    score: x,
    half: true,
  });
}


//Read only rating on recipe modal to display dish's average rating
function renderRateModalAverage(x, y){
  var scoreAverage = x;
  $('#ratingModalAverage').raty({
    numberMax: 5,
    readOnly: true,
    score: x,
    half: true,


  });
  $('#ratingModalCaption').html('<h6>Average Score: ' + scoreAverage.toFixed(2) + ' | Ratings (' + y + ')</h6>')
}


//Interactive User rating on recipe modal for dish
function renderRateModalUser(i1, i2, recipeID, count, total, average){
  var idString = i1 + '-' + i2 + recipeID;
  console.log(idString);
  $('#ratingModalUser').raty({
    numberMax: 5,
    readOnly: false,
    half: true,
    score: parseFloat(Cookies.get(idString)),




    click: function(score, event){
      if(Cookies.get(idString)==null){
        //if user rating for first time, set cookie and increase both ratingCount and ratingTotal
        var dblocation = i1 + "-" + i2 + recipeID;
        var newCount = parseFloat(count) + 1;
        var newTotalInit = (parseFloat(average) * parseFloat(count)) + parseFloat(score);
        var newAvgRatingInit = newTotalInit/newCount;
        var recipeRef = firebase.database().ref('ingredients/' + i1 + '/' + i2 + '/' + dblocation);
        console.log(count);
        console.log(newCount);
        console.log(score);
        console.log(newTotalInit);
        recipeRef.update({
          ratingCount: newCount,
          ratingTotal: newTotalInit,
          avgRating: newAvgRatingInit
        })
        Cookies.set(idString, score, {expires: 400000000});
      } else {
        var newTotal = parseFloat(total) + parseFloat(score) - (Cookies.get(idString)); //TOTAL NOT INITIALIZED IN DATABASE YET
        var newAvgRating = newTotal/(parseFloat(count));
        var dblocation = i1 + "-" + i2 + recipeID;
        console.log(count);
        console.log(total);
        console.log(newTotal);
        console.log(score);
        var recipeRef = firebase.database().ref('ingredients/' + i1 + '/' + i2 + '/' + dblocation);
        recipeRef.update({
          ratingTotal: newTotal,
          avgRating: newAvgRating
        })
        Cookies.set(idString, score, {expires: 400000000});
      }
    }


  });
  $('#ratingModalUserCaption').html('<h4>Rate Me!</h4>')

}
