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
  $('#ratingModalAverage').raty({
    numberMax: 5,
    readOnly: true,
    score: x,
    half: true,


  });
  $('#ratingModalCaption').html('<h6>Score: ' + x + ' | Ratings (' + y + ')</h6>')
}


//Interactive User rating on recipe modal for dish
function renderRateModalUser(i1, i2, recipeID, count, total){
  var idString = i1 + '-' + i2 + recipeID;
  $('#ratingModalUser').raty({
    numberMax: 5,
    readOnly: false,
    half: true,




    click: function(score, event){
      if(Cookies.get(idString)==null){
        //if user rating for first time, set cookie and increase both ratingCount and ratingTotal
        var dblocation = i1 + "-" + i2 + recipeID
        var recipeRef = firebase.database().ref('ingredients/' + i1 + '/' + i2 + '/' + dblocation);
        recipeRef.set({
          ratingCount: (count+1),
          ratingTotal: (total+score)
        })
        Cookies.set(idString, score, {expires: 400000000});
      } else {
        var dblocation = i1 + "-" + i2 + recipeID
        var recipeRef = firebase.database().ref('ingredients/' + i1 + '/' + i2 + '/' + dblocation);
        recipeRef.set({
          ratingTotal: (total+score-(Cookies.get(idString)))
        })
        Cookies.set(idString, score, {expires: 400000000});
      }
    }

  });

}
