// left

var active_element;

$( '.leftcol, .leftmap, .rightcol, .rightmap' ).mouseover( function( ) {
	active_element = $( this ).attr( 'class' );
} );

$( '.leftcol' ).scroll(function( event ) {  
  
  var scrollPosition = this.scrollTop;
  
  var col = $( this );
  var content = col.find( '> div' );
  
  var scrollMax = content.outerHeight( ) - col.outerHeight( );
  var scrollPercentage = scrollPosition / scrollMax;  
  var map = $( '.leftmap' );
  var strip = map.find( '> div' );
  
  scrollMax = strip.outerHeight( ) - map.outerHeight( );
  scrollPosition = scrollPercentage * scrollMax;
  
  var num_pages = $( '.leftcol-content > *' ).length;
  var curr_page = Math.max( 1, Math.ceil( scrollPercentage * ( num_pages - 1 ) ) );
  
  
  $( '.pagesleft' ).text( 'Page ' + curr_page + ' / ' + num_pages );
	
  if ( active_element != $( this ).attr( 'class' ) ) return false;
  
  
  $( '.leftmap' ).scrollTop( scrollPosition );
 }); 
 
 $( '.leftcol' ).trigger( 'scroll' );
 
//  map

 $( '.leftmap' ).scroll(function( event ) {
	
  if ( active_element != $( this ).attr( 'class' ) ) return false;
  
  var scrollPosition = this.scrollTop;
  
  var col = $( this );
  var content = col.find( '> div' );
  
  var scrollMax = content.outerHeight( ) - col.outerHeight( );
  var scrollPercentage = scrollPosition / scrollMax;  
  var map = $( '.leftcol' );
  var strip = map.find( '> div' );
  
  scrollMax = strip.outerHeight( ) - map.outerHeight( );
  scrollPosition = scrollPercentage * scrollMax;
  
  $( '.leftcol' ).scrollTop( scrollPosition );
 });
 

// right
$( '.rightcol' ).scroll( function( ) {
  
  var scrollPosition = this.scrollTop;
  
  var col = $( this );
  var content = col.find( '> div' );
  
  var scrollMax = content.outerHeight( ) - col.outerHeight( );
  var scrollPercentage = scrollPosition / scrollMax;  
  var map = $( '.rightmap' );
  var strip = map.find( '> div' );
  
  scrollMax = strip.outerHeight( ) - map.outerHeight( );
  scrollPosition = scrollPercentage * scrollMax;
  
  var num_pages = $( '.rightcol-content > *' ).length;
  var curr_page = Math.max( 1, Math.ceil( scrollPercentage * ( num_pages - 1 ) ) );
  
  
  $( '.pagesright' ).text( 'Page ' + curr_page + ' / ' + num_pages );
  
	
  if ( active_element != $( this ).attr( 'class' ) ) return false;
  
  $( '.rightmap' ).scrollTop( scrollPosition );
 });  
 
//  map

 $( '.rightmap' ).scroll(function() {
	
  if ( active_element != $( this ).attr( 'class' ) ) return false;
  
  var scrollPosition = this.scrollTop;
  
  var col = $( this );
  var content = col.find( '> div' );
  
  var scrollMax = content.outerHeight( ) - col.outerHeight( );
  var scrollPercentage = scrollPosition / scrollMax;  
  var map = $( '.rightcol' );
  var strip = map.find( '> div' );
  
  scrollMax = strip.outerHeight( ) - map.outerHeight( );
  scrollPosition = scrollPercentage * scrollMax;
  
  $( '.rightcol' ).scrollTop( scrollPosition );
 });
 
 $( '.rightcol' ).trigger( 'scroll' );