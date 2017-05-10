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
                        $(this).append('<p>Suspendisse ac elementum lorem. Vestibulum fermentum rutrum nisl. Etiam faucibus ut purus et tempor. Nulla bibendum rutrum libero vitae condimentum. Donec euismod et est euismod luctus. Donec commodo magna ut dapibus imperdiet. Vivamus quis lectus eu odio tincidunt elementum.</p>').show('slow');
                        $(this).append('<p><a href="#pagetwo">Continue to Recipe</a></p>').show('slow');
                        $(this).find('a').click(function(event){
                            event.stopPropagation();
                        });
                    } else {
                        $(this).find('p').remove();
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
        // Calls list dishes function to add new divs to dishes div
        listDishes();
    };
}
