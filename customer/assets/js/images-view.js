
$(function () {
    // Multiple images preview with JavaScript
    var multiImgPreview = function (input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function (event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#chooseFile').on('change', function () {
        multiImgPreview(this, 'div.imgGallery');
    });
});