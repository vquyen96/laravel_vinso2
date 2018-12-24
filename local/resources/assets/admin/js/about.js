$(document).ready(function () {
    $(document).on('click', '.btnAddBanner', function () {
        $(this).parents('.row').next().attr('style', 'display: flex !important');
        $(this).parents('.row').hide();

    });
    $('.add-image').click(function(){
        $(this).prev('.file').click();
    });

    // CKEDITOR.replace( 'content', {
    //     height: '400px',
    //     filebrowserBrowseUrl: 'plugins/ckfinder/ckfinder.html',
    //     filebrowserImageBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Images',
    //     filebrowserFlashBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Flash',
    //     filebrowserUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    //     filebrowserImageUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    //     filebrowserFlashUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    // } );

    CKEDITOR.replace( 'content_edit', {
        height: '400px',
        filebrowserBrowseUrl: 'plugins/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    } );


    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
    })
});
function changeImg(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $(input).next('.add-image').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
