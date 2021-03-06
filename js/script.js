//Функция изменение положение верхнего пункта меню в шапке
function WindowsSize(){
  if ($(window).width() <= '991'){
        $('.header-number').after($('#navbar-menu'));
        $('#navbar-menu').addClass('text-center p-o');
        $('.container').addClass('p-o');
        $('.bl-menu').addClass('p-o');
        $('.nav-item').addClass('p-o');
        $('#navbar-menu').removeClass('text-end');
      $('.slick-sl').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          mobileFirst: true
      });

    }
    else{
      $(".header-logo").after($('#navbar-menu'));
      $('.container').removeClass('text-center p-o');
      $('.bl-menu').removeClass('p-o');
      $('.nav-item').removeClass('p-o');
      $('#navbar-menu').addClass('text-end');
      $('#navbar-menu').removeClass('text-center p-o');

      $('.slick-sl').slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          mobileFirst: true
      });
    }
};

$(document).ready(function () {
    //Маска номера телефона
    $('#phone').mask('+7(999) 999-9999');
    //--------------------------

    //отправка формы
    $( ".index-form" ).on( "submit", function( event ) {
        if($('#submit').hasClass('disabled') == true){
            event.preventDefault();
        }
        else{
            event.preventDefault();
            var msg   = $('.index-form').serialize();
            $.ajax({
                type: 'POST',
                url: 'send.php',
                data: msg,
                success: function (data) {
                    $('#submit').addClass('disabled');
                    $('.result').html(data);

                },
                error: function (xhr, str) {
                    alert('Возникла ошибка: ' + xhr.responseCode);
                }
            })
        }
    });
    //----------------------------

    WindowsSize();
    $(window).resize(WindowsSize);
    //При клике добавляем класс, чтобы отобразить подменю
    $('.nav-item').click(function () {
        if ($(this).children('ul').hasClass('show') == true){
            $(this).children('ul').removeClass('show')
        }
        else {
            $(this).children('ul').addClass('show');
        }

    });
    //---------------
    //При повторном клике убираем класс, чтобы скрыть подменю

    //----------------
    //Убираем линк у родителя дочернего списка
    if ($(window).width() <= '1162'){
        $('.sub-menu').parent().click(function () {
            event.preventDefault();
        })
    }
    //--------------


});