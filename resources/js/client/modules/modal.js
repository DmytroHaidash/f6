$('.modal-btn').on('click', function (e) {
  e.preventDefault();

  let modalId = $(this).data('modal-open');
console.log(modalId);
  $(`#${modalId}`).toggle();
  $('.custom-modal-mask').toggle();
});

$('.custom-modal--close').on('click', function () {

  $('.custom-modal').toggle();
  $('.custom-modal-mask').toggle();
})


$('.custom-modal-mask').on('click', function () {
  $('.custom-modal').toggle();
  $(this).toggle();
})


$('#open-jobs-page-all').on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass('is-active');
  $('.page-content-item').slideToggle();
    $(this).hasClass('is-active') ? $(this).text('Close') : $(this).text('More info');
});
$('#open-review-one').on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass('is-active');
  $('.review-one').slideToggle();
  $(this).hasClass('is-active') ? $(this).text('Close') : $(this).text('Read more');
});
$('#open-review-two').on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass('is-active');
  $('.review-two').slideToggle();
  $(this).hasClass('is-active') ? $(this).text('Close') : $(this).text('Read more');
});
$('#open-review-three').on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass('is-active');
  $('.review-three').slideToggle();
  $(this).hasClass('is-active') ? $(this).text('Close') : $(this).text('Read more');
});
$('#open-review-four').on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass('is-active');
  $('.review-four').slideToggle();
  $(this).hasClass('is-active') ? $(this).text('Close') : $(this).text('Read more');
});