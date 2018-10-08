//Функция изменение положение верхнего пункта меню в шапке
function WindowsSize(){
  if ($(window).width() <= '991'){
        $('.header-number').after($('#navbar-menu'));
        $('#navbar-menu').addClass('text-center p-o');
        $('.container').addClass('p-o');
        $('.bl-menu').addClass('p-o');
        $('.nav-item').addClass('p-o');
        $('#navbar-menu').removeClass('text-end');

    }
    else{
      $(".header-logo").after($('#navbar-menu'));
      $('.container').removeClass('text-center p-o');
      $('.bl-menu').removeClass('p-o');
      $('.nav-item').removeClass('p-o');
      $('#navbar-menu').addClass('text-end');
      $('#navbar-menu').removeClass('text-center p-o');

    }
};
$(document).ready(function () {
    WindowsSize();
    $(window).resize(WindowsSize);

    $('.nav-item').click(function () {
        $(this).children('ul').addClass('show');
    });

    //Убираем линк у роди   теля дочернего списка
    if ($(window).width() <= '1162'){
        $('.sub-menu').parent().click(function () {
            event.preventDefault();
        })
    }
    //--------------



});