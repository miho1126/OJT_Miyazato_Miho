$(function () {
  $('.header__hum').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $('.header__nav').addClass('active');
    } else {
      $('.header__nav').removeClass('active');
    }
  });
});
