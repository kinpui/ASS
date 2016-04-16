//<![CDATA[
$(function() {
    $("#ele1").find('.print-link').on('click', function() {
        //Print ele2 with default options
        $.print("#ele1");
    });
    $("#ele4").find('button').on('click', function() {
        //Print ele4 with custom options
        $("#ele4").print({
            //Use Global styles
            globalStyles : false,
            //Add link with attrbute media=print
            mediaPrint : false,
            //Custom stylesheet
            stylesheet : "http://fonts.useso.com/css?family=Inconsolata",
            //Print in a hidden iframe
            iframe : false,
            //Don't print this
            noPrintSelector : ".avoid-this",
            //Add this at top
            prepend : "Hello World!!!<br/>",
            //Add this on bottom
            append : "<br/>Buh Bye!"
        });
    });
    // Fork https://github.com/sathvikp/jQuery.print for the full list of options
});
//]]>
