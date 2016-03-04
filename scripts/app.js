/*
	JS Counter
*/

	var pcCounter = 19004193;

	function pcIncrement() {
		pcCounter+=12;
		document.getElementById('pccounter').innerHTML = pcCounter.toLocaleString();
	}
	setInterval('pcIncrement()', 1000);


	var psCounter = 24735932;
	function psIncrement() {
		psCounter+=6;
		document.getElementById('pscounter').innerHTML = psCounter.toLocaleString();
	}
	setInterval('psIncrement()', 1500);


	var xbCounter = 26090143;
	function xbIncrement() {
		xbCounter+=4;
		document.getElementById('xbcounter').innerHTML = xbCounter.toLocaleString();
	}
	setInterval('xbIncrement()', 1000);




/*
	jQuery Modal
*/


$( "#signinbtn" ).click(function () {
  if ( $( "#signinmodal:first" ).is( ":hidden" ) ) {
    $( "#signinmodal" ).slideDown( "slow" );
    $( "#overlay" ).fadeIn();
    $("body").css("overflow", "hidden");
  } 
});

$("#overlay").click(function (e) {
    var container = $("#signinmodal");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.fadeOut();
        $("#overlay").fadeOut();
        $("body").css("overflow", "scroll");
    }
});




/*
	Moving Background



$('body').mousemove(function(e) {
    var x = (e.pageX * -1 / 16), y = (e.pageY * -1 / 16);
    $('#hero').css('background-position', x + 'px ' + y + 'px');
});


*/



