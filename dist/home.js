jQuery(document).ready(function($) {
    $('.counter').counterUp({
        time: 2000
    });

    $("#randomizesite").click(function(){
        var url = '/random';
		window.open(url);
    });
});