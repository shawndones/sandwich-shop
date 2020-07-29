

var isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

if (isIE11) {
  document.body.className += ' ' + 'isIE11';
}

jQuery(document).ready(function($) {
  
  $('#js-toggle-mobile-nav').click(function() {
    
    var t = $(this).parent('.c-header__inner').siblings('.c-primary-nav').find('.c-primary-nav__list');

    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      t.removeClass('active');
    } else {
      $(this).addClass('active');
      t.addClass('active');
    }
  });
  
  $('#js-toggle-search').click(function() {
    // target seach form
    var t = $(this).siblings('.c-search-form');
    var h = $(this).parent('.c-header__inner');
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      t.removeClass('active');
      h.removeClass('active-nav');
    } else {
      $(this).addClass('active');
      t.addClass('active');
      h.addClass('active-nav');
    }
   

  });


  $( window ).resize(function() {
    $('.active').removeClass('active');
    $('.active-nav').removeClass('active-nav');
  });
});


