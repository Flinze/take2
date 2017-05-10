


    $('#dropFirst').on('select2:select', function(event) {

        //disable only specified ingredient
        $('#' +(event.params.data.text)).attr('disabled',true)
      });


    $('#dropSecond').on('select2:select', function(event){
        $('#' + (event.params.data.text) + 'f').attr('disabled',true)
    });
