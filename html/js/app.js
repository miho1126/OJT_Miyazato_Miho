$(function () {
  $('.headersp__hum').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $('.headersp__list').addClass('active');
    } else {
      $('.headersp__list').removeClass('active');
    }
  });
});
