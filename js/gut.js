//owl carousel
$(document).ready(function() {
 
  	$("#owl-gut").owlCarousel({
      	autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      	items : 4,
      	itemsDesktop : [1199,3],
      	itemsDesktopSmall : [979,3],
      	lazyLoad : true,
    	navigation : true
  	});
 
});

//datatable
$(document).ready(function() {
    $('#datatable').dataTable();
} );

$(document).ready(function() {
    $('#datatable-2').dataTable();
} );

$(document).ready(function() {
    $('#datatable-archive-author').dataTable();
} );

//lazy	
$(function() {
    $('img').lazy();
});

//remove tag and class paging
$('h2.screen-reader-text').remove();