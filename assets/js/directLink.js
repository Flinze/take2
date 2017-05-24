$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
        return null;
    }
    else{
        return results[1] || 0;
    }
}

$(document).ready(function(){
    var x = $.urlParam('id');
    if (x === null) {
        return;
    } else {
        var ingArr = x.split("-");
        console.log(ingArr);
        var idNum = x.slice(x.length - 1, x.length);
        console.log(idNum);
        ingArr[1] = ingArr[1].substr(0, (ingArr[1].length - 1));
        $('#dropFirst').val(ingArr[0]);
        $('#dropSecond').val(ingArr[1]);
        pullValues();
        setTimeout(function() {
            location.href = "#" + idNum;
            $('#'+idNum).trigger("click");
        },1000)
        populateRecipeModal(ingArr[0], ingArr[1], idNum);
        $('#recipe-modal').modal('show');
    }


})
