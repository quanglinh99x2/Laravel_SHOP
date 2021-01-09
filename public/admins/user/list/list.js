$(document).ready(function(){
    $(document).on('click','.btn_delete',function(e){
        e.preventDefault();
        let urlDelete = $(this).attr('href');
        let that = $(this);
        Swal.fire({
            title: 'Bạn có muốn xóa User này?',
            text: "Chú ý dữ liệu xóa sẽ không thể khôi phục!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type:'GET',
                    url:urlDelete,
                    // data:'_token = <?php echo csrf_token() ?>',
                    success:function(data) {
                        // $("#msg").html(data.msg);
                        that.parent().parent().remove();
                        Swal.fire(
                            'Đã xóa thành công!',
                            'Người dùng đã được xóa !',
                            'success'
                        )
                    }
                });
            }
        })
    });
});
