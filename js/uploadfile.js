$(document).ready(function() {
    $('#btn_upload').click(function() {

        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file', files);

        // AJAX request
        $.ajax({
            url: 'uploadfile.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
                alert(response);
            }
        });
    });
    $('#btn_upload2').click(function() {

        var fd2 = new FormData();
        var files2 = $('#linkanh')[0].files[0];
        fd2.append('linkanh', files2);

        // AJAX request
        $.ajax({
            url: 'uploadfile2.php',
            type: 'post',
            data: fd2,
            contentType: false,
            processData: false,
            success: function(response) {
                alert(response);
            }
        });
    });
});