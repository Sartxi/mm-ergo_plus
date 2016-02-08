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
    $("#nextbtn").attr('data-div', '2');
    $("#submitbtn").attr('style', 'display:none;');
    $("#surveyDisclaimer").hide();
    $("#nextbtn").click(function () {
        var setID = $(this).attr('data-div'),
            nextSet = parseInt(setID, 10) + 1,
            prevSet = parseInt(setID, 10) - 1;

        $("#questSet1, #questSet2, #questSet3, #questSet4, #questSet5, #prevbtn").hide();
        $('#questSet' + setID).show('fade');
        $(this).attr('data-div', nextSet);
        $("#prevbtn").attr('data-div', prevSet);
    });
    $("#prevbtn").click(function () {
        var setID = $(this).attr('data-div'),
            nextSet = parseInt(setID, 10) + 1,
            prevSet = parseInt(setID, 10) - 1;

        $("#questSet1, #questSet2, #questSet3, #questSet4, #questSet5, #nextbtn").hide();
        $('#questSet' + setID).show('fade');
        $(this).attr('data-div', prevSet);
        $("#nextbtn").attr('data-div', nextSet);
    });
    $("#nextbtn, #prevbtn").click(function () {
        var setID = $("#nextbtn").attr('data-div')
            currentSet = parseInt(setID, 10) - 1;

        $("#prevbtn").empty();
        // show/hide button
        if (currentSet == 5) {
            $("#prevbtn").show().removeClass('btn-primary').addClass('btn-sm').text('Check my Answers');
            $("#nextbtn").hide();
            $("#submitbtn, #surveyDisclaimer").show();
        } else if (currentSet == 1) {
            $("#prevbtn, #submitbtn, #surveyDisclaimer").hide();
            $("#nextbtn").show();
        } else {
            $("#prevbtn").show().addClass('btn-primary').removeClass('btn-sm').append('<span class="glyphicon glyphicon-chevron-left"></span>' + ' Prev');
            $("#nextbtn").show();
            $("#submitbtn, #surveyDisclaimer").hide();
        }
    });
});
