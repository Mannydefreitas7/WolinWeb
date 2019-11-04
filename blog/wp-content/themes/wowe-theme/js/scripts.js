$(function() {

  // If a link has a dropdown, add sub menu toggle.
  $('.menu-item-has-children > a').mouseover( function(e) {
    
    $(this).siblings('.nav-dropdown').fadeToggle(600);
    console.log( "ready!" );
    $(this).addClass('expanded');

    // Close one dropdown when selecting another
    $('.nav-dropdown').not($(this).siblings()).hide();
    e.stopPropagation();
  });

  // Clicking away from dropdown will remove the dropdown class
  $('html').click(function() {
    $('.nav-dropdown').hide();
  });

  // Toggle open and close nav styles on click
  $('#nav-toggle').click(function() {
    $('nav ul').slideToggle();
  });

  // Hamburger to X toggle
  $('#nav-toggle').on('click', function() {
    this.classList.toggle('active');
  });

 
}); // end DOM ready
