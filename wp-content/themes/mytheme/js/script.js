jQuery(function($) {

    $('.taxonomy').on('click',function (e) {
        e.preventDefault();
        $('.taxonomy').removeClass("active");
        $(this).addClass("active");
        const url = $(this).attr('href');
        const id = $(this).data('id');
        $.ajax({
            url: url,
            type: 'POST',
            data: {"action": "load-filter2", term: id },
            success: function(response) {
                console.log(response);
                $('#content').html(response);
            }
        });
    })
});