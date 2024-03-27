/* МОБИЛЬНОЕ МЕНЮ*/

$(".menu_burger").on("click", function () {
    $('.menu_burger').toggleClass('active');
    $('.mobule_menu').toggleClass('active');
});
/* МОБИЛЬНОЕ ОТПРАВКА ЧЕРЕЗ ajax - POST */
$("#modal_form").on("submit", function(){
	$.ajax({
	    type: "POST", /* Тип отправки*/
		url: '/send.php',/* файл php*/
		dataType: 'html',
		data: $(this).serialize(), /* значение которые передаем*/
		success: function(data){ /* При успешной отправке выполняем функцию data*/
			 $(".success_row").addClass('active');
            setTimeout(function(){
              $('.fancybox-button').trigger('click');
            }, 1000);
		}
	});
	return false; 
	
});
/* Закрытие окна благодарности*/
$(".close_modal").on("click", function() {
  $(".success_row").removeClass('active');
} );