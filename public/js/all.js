function readURL(input) {
    if (input.files && input.files[0]) {
        console.log(input);
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#IndGraphiOutput').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#IndGraphiInput").change(function(){
    readURL(this);
});