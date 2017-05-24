// Initialize Firebase and connects to database
var config = {
    apiKey: "AIzaSyBbrUKY5WuARy-zIlCRSlz3GAP8LPK8wpM",
    authDomain: "take2-dce1d.firebaseapp.com",
    databaseURL: "https://take2-dce1d.firebaseio.com",
    projectId: "take2-dce1d",
    storageBucket: "take2-dce1d.appspot.com",
    messagingSenderId: "835789629323"
};
firebase.initializeApp(config);

// Global variables to store the ingredients from the user input to be used across functions
var ing1;
var ing2;
var dishes = [];
var dishImages = [];

function listDishes(ingx, ingy) {
    // Finds the correct location of the data based off of user input variables
    var recipeRef = firebase.database().ref('ingredients/' + ingx + '/' + ingy);

    // Pulls a snapshot of all the recipes for the ingredient combination,
    // iterates through each recipe and assigns each to a value in the array
    recipeRef.once('value', function(snapshot){
        var index = 0;
        dishes = [];
        dishImages = [];
        snapshot.forEach(function(childSnapshot){
            dishes[index] = childSnapshot.val();
            dishImages[index] = document.createElement('img');
            dishImages[index].src = dishes[index].img;
            var temp = dishImages[index];
            $(temp).addClass('img-responsive');
            $(temp).addClass('hidden');
            index++;
        })
        $('#dishes').find('div').remove();

        // Loops through array and creates a div for each dish pulled from database and
        // appends to the document
        for(var i = 0; i < dishes.length; i++) {
            d = document.createElement('div');
            $(d).addClass('dishDivs')
                .html('<span class="dishTitles" id="dishTitle' + (i + 1) + '"><h2>' + dishes[i].title + '</h2></span><div id=rate'+(i+1)+'></div><h4>'+dishes[i].avgRating+'</h4>')
                .attr("id", i + 1) // SET NUMBERED ID for pulling database recipes
                .click(function() {
                    recipeContentIndex($(this), ($(this).attr('id') - 1))  // Adds onclick functionality to each dish division
                })
                .appendTo($('#dishes')).hide().fadeIn(1500);
            $(window.dishImages[i]).appendTo(d);
            renderRate(dishes[i].avgRating, (i+1));
        }
    })
}

/**
pullValues grabs the values of the two user inputs elements and assigns them to a global variable
for use in other functions.

Also calls the listDishes() function to populate the page with recipe suggestions
*/
function pullValues() {
    ing1 = $("#dropFirst").val();
    ing2 = $("#dropSecond").val();
    if (ing1 != "" && ing2 != "") {

        // Clears previous divs created from dishes pulled if present
        var d = document.getElementById('dishes')
        while (d.hasChildNodes()) {
            d.removeChild(d.childNodes[0]);
        }

        // Calls list dishes function to add new divs to dishes div
        var recipeRef = firebase.database().ref('ingredients/' + ing1 + '/' + ing2);
        recipeRef.once('value', function(snapshot){
            if(snapshot.val() == null) {
                listDishes(ing2, ing1);
            } else {
                listDishes(ing1, ing2);
            }
        })

    };
}


function recipeContentIndex(x, dishNumber) {
    var currentHeight = x.height()
    if (!(x.has('p').length)){ // Checks whether dishes have already been loaded onto the page
        // Appends dish picture, dish description and button directing to recipe page to each dish division on click
        // Currently holding placeholder information -- to be updated upon implementation of backend functionality
        x.find('img').removeClass('hidden');
        $('<div class="innerDish"><p>' +  window.dishes[dishNumber].desc + '</p></div>').appendTo(x);
        $('<p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#recipe-modal">Continue to Recipe</button></p>').appendTo(x);
        x.find('button').click(function(event){
            $('#recipe-modal').modal('show');
            event.stopPropagation(); // Prevents the div from shrinking when the user clicks through to the recipe page
            populateRecipeModal(ing1, ing2, dishNumber + 1);
        });
    } else {
        // If the dish division has information appended to it, will remove the information from the division
        x.find('p').remove();
        x.find('img').addClass('hidden');
        x.find('.innerDish').remove();
    }
    // Dynamically adjusts and animates the height of a dish div based on whatever content it contains
    var autoHeight = x.css('height', 'auto').height() + 10;
    x.height(currentHeight).animate({height: autoHeight}, "slow");
}

function populateRecipeModal(i1, i2, recipeID) {
    var dblocation = i1 + "-" + i2 + recipeID;
    var recipeRef = firebase.database().ref('ingredients/' + i1 + '/' + i2 + '/' + dblocation);

    recipeRef.once('value', function(snapshot){
        var obj = snapshot.val();
        $('.modal-title').text(obj.title);
        $(".about_photo > img").attr("src", obj.img);

        var dir = document.createElement('ul');
        if($('.recipe-directions-list').has('ul').length){
            $('.recipe-directions-list').find('ul').remove();
        }
        for (var i = 0; i < obj.directions.length; i++) {
            var d = document.createElement('li');
            $(d).text(obj.directions[i]);
            $(d).appendTo($(dir))
        }
        $(dir).appendTo($('.recipe-directions-list'));

        var ingred = document.createElement('ul');
        if($('.recipe-ingredient-list').has('ul').length){
            $('.recipe-ingredient-list').find('ul').remove();
        }
        for (var i = 0; i < obj.ing.length; i++){
            var d = document.createElement('li');
            $(d).text(obj.ing[i]);
            $(d).appendTo($(ingred));
        }
        $(ingred).appendTo($('.recipe-ingredient-list'));
        console.log(obj);
        renderRateModalAverage(obj.avgRating, obj.ratingCount);
        renderRateModalUser(i1, i2, recipeID, obj.ratingCount, obj.ratingTotal, obj.avgRating);
    })
}
