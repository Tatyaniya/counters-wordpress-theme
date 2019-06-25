$( function() {

    $('.call').click( function () {
        $('#exampleModal').arcticmodal();
    });

    $(".up").click( function(e) {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 600);
    });

});