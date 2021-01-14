$(document).ready(function () {
    // alert("Oke");
    $(document).on("click",".add-to-cart-mt",function (e) {
        e.preventDefault();
        // alert("oke");
        var id_product = $(this).attr('data-id');
        var url = $(this).attr('url-temp');
        // alert(url);

        console.log(sessionStorage.getItem('cart'));
        $.ajax({
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'), '_method': 'patch'},
            url: url,
            data: {
                'id_product':id_product,
            },
            success: function (data) {
                // alert("oke èw");
                // console.log(JSON.parse(data));
                // $(".mini-products-list").empty();
                // $(".mini-products-list").html(data);

                // $('.count-style').html('<?php echo $_SESSION["cart"]; ?>');
                $(".shopping-cart-content").empty();
                $(".shopping-cart-content").html(data);
                alertify.success('Thêm vào giỏ hàng thành công !');
                $(".wp-cart-pc").empty();
                $(".wp-cart-pc").load(location.href + " .wp-cart-pc");// Add space between URL and selector.

            }
        });
    });

    $(document).on("click",".remove-cart",function (e) {
        e.preventDefault();

        var pro_id_delete = $(this).attr('id-pro');
        var url = $(this).attr('url-temp');
        // alert(pro_id_delete);
        $.ajax({
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'), '_method': 'patch'},
            url: url,
            data: {
                'pro_id_delete':pro_id_delete,
            },
            success: function (data) {
                $(".shopping-cart-content").empty();
                $(".shopping-cart-content").html(data);
                alertify.success('Xóa sản phẩm khỏi giỏ hàng thành công !');
                $(".wp-cart-pc").empty();
                $(".wp-cart-pc").load(window.location.href + " .wp-cart-pc");// Add space between URL and selector.
            }
        });
    });


});
