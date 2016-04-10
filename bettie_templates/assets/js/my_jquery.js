$( document ).ready(function() {
	$("#menu-main-menu>.menu-item-has-children").hover(
		  function () {
		    $(this).addClass('sfHover');
		    $(".sfHover > ul.sub-menu") .css( "display", "block" );
		  }, 
		  function () {
		    $(".sfHover > ul.sub-menu") .css( "display", "none" );
		    $(this).removeClass('sfHover');
		  }
  	);
	$(".menu-item-has-children> ul.sub-menu > .menu-item-has-children").hover(
		  function () {
		    $(this).addClass('sfHover');
		    $(".menu-item-has-children> ul.sub-menu>.sfHover > ul.sub-menu").css( "display", "block" );
		  }, 
		  function () {
		    $(".menu-item-has-children> ul.sub-menu>.sfHover > ul.sub-menu").css( "display", "none" );
		    $(this).removeClass('sfHover');
		  }
  	);
});

$( document ).ready(function() {
    $( "#hamburger-button" ).click(function() {
	  alert( "Handler for .click() called." );
	});
});

    