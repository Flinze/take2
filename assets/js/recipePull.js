// Initialize Firebase
var config = {
    apiKey: "AIzaSyADQwUkVDPsqWZR6WG8mx0955TBa0Av0rM",
    authDomain: "testerino-ccc07.firebaseapp.com",
    databaseURL: "https://testerino-ccc07.firebaseio.com",
    projectId: "testerino-ccc07",
    storageBucket: "testerino-ccc07.appspot.com",
    messagingSenderId: "362691293717"
};
firebase.initializeApp(config);

var ing1;
var ing2;
var dishes = [];

function listDishes() {
    // Finds the correct location of the data based off of user input variables
    var recipeRef = firebase.database().ref('ingredients/' + ing1 + '/' + ing2)

    // Pulls a snapshot of all the recipes for the ingredient combination, creates
    // an array, iterates through each recipe and assigns each to a value in the array
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
                .html('<h2>' + dishes[i].title + '</h2>')
                .click(function() {
                    if (!($(this).has('p').length)){
                        $('<p><img src="img/placeholder/friedchicken.jpg" alt="Fried Chicken">').hide().appendTo(this).fadeIn(1000);
                        $('<div class="innerDish"><p>Suspendisse ac elementum lorem. Vestibulum fermentum rutrum nisl. Etiam faucibus ut purus et tempor. Nulla bibendum rutrum libero vitae condimentum. Donec euismod et est euismod luctus. Donec commodo magna ut dapibus imperdiet. Vivamus quis lectus eu odio tincidunt elementum.</p></div>').hide().appendTo(this).fadeIn(1000);
                        $('<p><a href="recipe-page.php" class="btn btn-info">Continue to Recipe</a></p>').hide().appendTo(this).fadeIn(1000);
                        $(this).find('a').click(function(event){
                            event.stopPropagation();
                        });
                    } else {
                        $(this).find('p').remove();
                        $(this).find('div').remove();
                    }

                    var elem = $(this),
                        currentHeight = elem.height(),
                        autoHeight = elem.css('height', 'auto').height();
                    elem.height(currentHeight).animate({height: autoHeight}, "slow");
                })
                .appendTo($('#dishes')).hide().fadeIn(1500);

        }
    })
}

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
