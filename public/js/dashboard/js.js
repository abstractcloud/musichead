$('#img').change(function() {
    var input = $(this)[0];
    if ( input.files && input.files[0] ) {
        if ( input.files[0].type.match('image.*') ) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image_preview').attr('src', e.target.result).css({"width":"120px", "height":"120px"});
            }
            reader.readAsDataURL(input.files[0]);
        } 
    } 
});