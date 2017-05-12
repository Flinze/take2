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

function listDishes() {
    // Finds the correct location of the data based off of user input variables
    var recipeRef = firebase.database().ref('ingredients/' + ing1 + '/' + ing2)

    // Pulls a snapshot of all the recipes for the ingredient combination,
    // iterates through each recipe and assigns each to a value in the array
    recipeRef.once('value', function(snapshot){
        var index = 0;
        snapshot.forEach(function(childSnapshot){
            dishes[index] = childSnapshot.val()
            index++;
        })

        // Loops through array and creates a div for each dish pulled from database and
        // appends to the document
        for(var i = 0; i < dishes.length; i++) {
            d = document.createElement('div');
            $(d).addClass('dishDivs')
                .html('<span id="dishTitle"><h2>' + dishes[i].title + '</h2></span>')
                .click(function() { // Adds onclick functionality to each dish division
                    if (!($(this).has('p').length)){ // Checks whether dishes have already been loaded onto the page
                        // Appends dish picture, dish description and button directing to recipe page to each dish division on click
                        // Currently holding placeholder information -- to be updated upon implementation of backend functionality
                        $('<p><img src="img/placeholder/friedchicken.jpg" alt="Fried Chicken">').hide().appendTo(this).fadeIn(1000);
                        $('<div class="innerDish"><p>Suspendisse ac elementum lorem. Vestibulum fermentum rutrum nisl. Etiam faucibus ut purus et tempor. Nulla bibendum rutrum libero vitae condimentum. Donec euismod et est euismod luctus. Donec commodo magna ut dapibus imperdiet. Vivamus quis lectus eu odio tincidunt elementum.</p></div>').hide().appendTo(this).fadeIn(1000);
                        $('<p><a href="recipe-page.php" class="btn btn-info">Continue to Recipe</a></p>').hide().appendTo(this).fadeIn(1000);
                        $(this).find('a').click(function(event){
                            event.stopPropagation(); // Prevents the div from shrinking when the user clicks through to the recipe page
                        });
                    } else {
                        // If the dish division has information appended to it, will remove the information from the division
                        $(this).find('p').remove();
                        $(this).find('div').remove();
                    }

                    // Dynamically adjusts and animates the height of a dish div based on whatever content it contains
                    var elem = $(this),
                        currentHeight = elem.height(),
                        autoHeight = elem.css('height', 'auto').height();
                    elem.height(currentHeight).animate({height: autoHeight}, "slow");
                })
                .appendTo($('#dishes')).hide().fadeIn(1500);

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

        // TODO: How-to collapse

        // Calls list dishes function to add new divs to dishes div
        listDishes();
    };
}
