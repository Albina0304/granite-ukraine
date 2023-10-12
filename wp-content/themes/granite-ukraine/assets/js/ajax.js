const $laborSingleButton = $(".labor-single-product .btn");
if ($laborSingleButton) {
    $laborSingleButton.click( function(e) {
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
}
const $homeLaborButton = $(".home-labor .btn");
if ($homeLaborButton) {
    $homeLaborButton.click( function(e) {
        e.preventDefault();
        var self = $(this);
        var images = $(this).parents('.labors').find('.boxes').data('images');
        var pageCount = $(this).attr('data-page');
        var page = $(this).attr('data-page');
        $(this).attr('data-page', Number(page)+1);
        $.ajax({
            type : "POST",
            url : window.data_obj.ajaxurl,
            data : {
                action: "labor_action_home",
                images: images,
                page: page
            },
            success: function(response) {
                if(response.data) {
                    $('.boxes').append(response.data.content);
                }
                if (response.data.lastPosts)self.hide();
           }
        });
    });
}