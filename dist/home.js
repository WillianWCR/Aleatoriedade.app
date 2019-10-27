jQuery(document).ready(function($) {
    $('.counter').counterUp({
        time: 2000
    });

    $("#randomizesite").click(function(){
        var url = 'http://localhost/aleatoriedade.app/gotourl.php';
		window.open(url);
    });
});