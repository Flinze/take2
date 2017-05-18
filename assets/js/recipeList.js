function recipeListModal(x){
    var ingArr = x.split("-");
    var id = x.slice(x.length - 1, x.length);
    ingArr[1] = ingArr[1].substr(0, (ingArr[1].length - 1));

    populateRecipeModal(ingArr[0], ingArr[1], id);
    $('#recipe-modal').modal('show');
}

function filter(restriction){
    restriction = restriction.toLowerCase();
    $('.recList').hide();
    $(("." +restriction)).show();
}

function recipeFilter(){
    var restr = $(":checked");
    var sift = ""
    for (var i = 0; i < restr.length; i++){
        sift += "." + restr[i].name;
    }
    $('.recList').hide();
    if (restr.length == 0) {
        $('.recList').show();
    } else {
        $('.recList').filter(sift).show();
    }
}