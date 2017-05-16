// Initialize Firebase and connects to current test database
var config = {
    apiKey: "AIzaSyADQwUkVDPsqWZR6WG8mx0955TBa0Av0rM",
    authDomain: "testerino-ccc07.firebaseapp.com",
    databaseURL: "https://testerino-ccc07.firebaseio.com",
    projectId: "testerino-ccc07",
    storageBucket: "testerino-ccc07.appspot.com",
    messagingSenderId: "362691293717"
};
firebase.initializeApp(config);

// Global variables to store the ingredients from the user input to be used across functions
var ing1;
var ing2;
var dishes = [];
var dishImages = [];

function listDishes() {
    // Finds the correct location of the data based off of user input variables
    var recipeRef = firebase.database().ref('ingredients/' + ing1 + '/' + ing2)

    // Pulls a snapshot of all the recipes for the ingredient combination,
    // iterates through each recipe and assigns each to a value in the array
    recipeRef.once('value', function(snapshot){
        var index = 0;
        snapshot.forEach(function(childSnapshot){
            dishes[index] = childSnapshot.val();
            dishImages[index] = document.createElement('img');
            dishImages[index].src = dishes[index].img;
            var temp = dishImages[index];
            $(temp).addClass('img-responsive');
            $(temp).addClass('hidden');
            index++;
        })

        // Loops through array and creates a div for each dish pulled from database and
        // appends to the document
        for(var i = 0; i < dishes.length; i++) {
            d = document.createElement('div');
            $(d).addClass('dishDivs')
                .html('<span id="dishTitle' + (i + 1) + '"><h2>' + dishes[i].title + '</h2></span>')
                .attr("id", i + 1) // SET NUMBERED ID for pulling database recipes
                .click(function() {
                    recipeContentIndex($(this), ($(this).attr("id") - 1))  // Adds onclick functionality to each dish division
                })
                .appendTo($('#dishes')).hide().fadeIn(1500);
            $(window.dishImages[i]).appendTo(d);
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
    if (ing1 != ing2 && ing1 != "" && ing2 != "") {

        // Clears previous divs created from dishes pulled if present
        var d = document.getElementById('dishes')
        while (d.hasChildNodes()) {
            d.removeChild(d.childNodes[0]);
        }
        // Calls list dishes function to add new divs to dishes div
        listDishes();
    };
}


function recipeContentIndex(x, num) {
    var currentHeight = x.height()
    if (!(x.has('p').length)){ // Checks whether dishes have already been loaded onto the page
        // Appends dish picture, dish description and button directing to recipe page to each dish division on click
        // Currently holding placeholder information -- to be updated upon implementation of backend functionality
        // $('<img src="' + window.dishImages[num].img + '" alt="' + window.dishes[num].title + '" class="img-responsive">').appendTo(x);
        // $(window.dishImages[num]).appendTo(x);
        x.find('img').removeClass('hidden');
        console.log(num);
        $('<div class="innerDish"><p>' +  window.dishes[num].desc + '</p></div>').appendTo(x);
        $('<p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#recipe-modal">Continue to Recipe</button></p>').appendTo(x);
        x.find('button').click(function(event){
            $('#recipe-modal').modal('show');
            event.stopPropagation(); // Prevents the div from shrinking when the user clicks through to the recipe page
        });
    } else {
        // If the dish division has information appended to it, will remove the information from the division
        x.find('p').remove();
        x.find('img').addClass('hidden');
        x.find('div').remove();
    }
    // Dynamically adjusts and animates the height of a dish div based on whatever content it contains
    var autoHeight = x.css('height', 'auto').height() + 1;
    x.height(currentHeight).animate({height: autoHeight}, "slow");
}