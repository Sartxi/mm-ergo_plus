$(document).ready(function() {
    $(function activetab() {
        var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
        if (pgurl == '') {pgurl = 'home';}
        $("#mainnav ul li a").each(function () {
            var link = $(this).attr("id");
            if (link == pgurl) {
                $(this).addClass("active");
            }
        })
    });

    $('.bannerTile').hover(function () {

    });
});
