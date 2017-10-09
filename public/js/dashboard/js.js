$('#img').change(function () {
    var input = $(this)[0];
    if (input.files && input.files[0]) {
        if (input.files[0].type.match('image.*')) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image_preview').attr('src', e.target.result).css({
                    "width": "120px",
                    "height": "120px"
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
});



$(document).on('click', '.delit', function () {
    var id = $(this).attr('data-id');
    var _token = $(this).attr('data-token');
    console.log(id);
    if(confirm("Вы действительно хотите удалить артиста?")){
    $.ajax({
        url: "artists/" + id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": _token
        }
    
    });
    $(this).parent().parent().remove();
    }
});