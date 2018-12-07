$(function()
{
    $('.toggle').on('click', function()
  {
    var target = $(this).data('target');
    $('.'+target).toggle();
  });
});