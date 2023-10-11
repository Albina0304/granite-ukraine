$(".labors .btn").click( function(e) {
    e.preventDefault();
    var self = $(this);
    var product_id = $(this).data('product_id');
    $.ajax({
        type : "GET",
        url : window.data_obj.ajaxurl,
        data : {
            action: "labor_action",
            post_id: product_id,
        },
        success: function(response) {
            if(response.data) {
                $('.boxes').append(response.data);
                self.hide();
            }
       }
    });
});