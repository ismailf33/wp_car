(function($){
wp.customize('header_bg_color' , function( value ){
 value.bind(function(newval ){
$('.nav_area').css('background-color' , newval);
 } );
} );
}) (jQuery);