jQuery(document).ready(function ($) {
  $('.hamburger').click(function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.header-top .menu').slideUp();
    } else {
      $(this).addClass('active');
      $('.header-top .menu').slideDown();
    }
  });
  var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  jQuery(".reviews-slider").slick({
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 6000,
		prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
		nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
		responsive: [
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 608,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },

          ]
	})

  $('.order-popup').click(function(e) {
  	e.preventDefault();
      var formid = jQuery(this).data("formid");
      var mailmsg = jQuery(this).data("mailmsg");
      $(".popup-form .uniSendBtn").attr('data-formid', formid);
      $(".popup-form .uniSendBtn").attr('data-mailmsg', mailmsg);
  	  $('#order-callback').arcticmodal();
  });

  $('.help-section').click(function(e) {
  	e.preventDefault();
  	$("#check-callback").arcticmodal();
  });
  
  $(window).scroll(function() {
    if($(this).scrollTop() >= 190) {
        $('.header-top').addClass('fixed-menu');
    }
    else{
        $('.header-top').removeClass('fixed-menu');
    }
  });

  jQuery(".uniSendBtn").click(function(e){ 
  		e.preventDefault();

		  
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      
	  var name = jQuery(this).siblings('input[name="name"]').val();
	  var gn = jQuery(this).siblings('input[name="gn"]').val();
	  
	  var mail = jQuery(this).siblings('input[name="mail"]');
	  
		if (mail.length != 0) {
	  
			if (mail.val() == "") {
				jQuery(this).siblings('input[name="mail"]').css("background-color","#ff91a4");
				return;
			}
			mail = mail.val();

		} else {
			mail = "";
		}
	 
      var phone = jQuery(this).siblings('input[type=tel]').val();
      if ((jQuery(this).siblings('input[type=tel]').val() == "")||(jQuery(this).siblings('input[type=tel]').val().indexOf("_")>0)) {
        jQuery(this).siblings('input[type=tel]').css("background-color","#ff91a4");
      } else {
		console.log(message);
		console.log(name);
		console.log(mail);
		console.log(phone);
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send',    
            nonce: allAjax.nonce,
            formid: message,
            name: name,
			ml:mail,
			gn:gn,
            tel: phone
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          console.log("do");
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          $('#order-callback').arcticmodal('close');
          
        });
        
        jqXHR.fail(function (responce) {
		  console.log("no do");
		  jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });


  jQuery("#checkAusvice").click(function(){ 
			
			if (jQuery("#ausviceNum").val() == "") {
				jQuery("#ausviceNum").css("background-color","#ff91a4")
			} else {
				
				jQuery(".checLoad").css("display","flex");
				
				var car_number = jQuery("#ausviceNum").val();
				car_number = del_spaces(car_number);
				// jQuery('#ausModal').arcticmodal();
var  jqXHR = jQuery.get("https://propuska-mkad-ttk-sk.ru/wp-json/lscrm/v2/number_info?number="+car_number);

				// var  jqXHR = jQuery.post(
				// 	allAjax.ajaxurl,
				// 	{
				// 		action: 'check_aus',		
				// 		nonce: allAjax.nonce,
				// 		ausnum: car_number,
				// 	}
				// );
				
				
				jqXHR.done(function (responce) {
					console.log(responce);

					var RezStr = "<table class='skip-information'>";
					RezStr += "<thead>";
						RezStr += "<tr>";
							RezStr += "<th>Номер</th>";
							RezStr += "<th>Тип пропуска</th>";
							RezStr += "<th>Серия</th>";
							RezStr += "<th>Дата начала действия</th>";
							RezStr += "<th>Дата окончания</th>";
							RezStr += "<th>Осталось дней</th>";
						RezStr += "</tr>";
					RezStr += "</thead>";

					responce.forEach(function(element){ 
						
							// var date_start = element.dateStart.replace(/\./g, '-');
							// var date_start_arr = date_start.split('-');
							// var date_start_arr_day = date_start_arr[0];
							// date_start_arr[0] = date_start_arr[1];
							// date_start_arr[1] = date_start_arr_day;
							// date_start = date_start_arr.join('-');
							// var date_end = element.dateEnd.replace(/\./g, '-');
							// var date_end_arr = date_end.split('-');
							// var date_end_arr_day = date_end_arr[0];
							// date_end_arr[0] = date_end_arr[1];
							// date_end_arr[1] = date_end_arr_day;
							// date_end = date_end_arr.join('-');
							
							// var number_of_days = (Date.parse(date_end) - Date.parse(date_start)) / (1000 * 60 * 60 * 24);
							// console.log(number_of_days);
							// if(Date.now() > Date.parse(date_end)) {
							// 	number_of_days = 'закончен';
							// } else if(Date.now() < Date.parse(date_end) && element.status != 'CANCELED') {
							// 	var number_of_days = Math.ceil((Date.parse(date_end) - Date.now()) / (1000 * 60 * 60 * 24));
							// } else if(element.status == 'CANCELED') {
							// 	var now_date = new Date();
							// 	var now_day = now_date.getDate();
							// 	var now_month = now_date.getMonth() + 1;
							// 	if(now_month < 10) {
							// 		now_month = '0' + now_month;
							// 	}
							// 	var now_year = now_date.getFullYear();
							// 	//var number_of_days = 'аннулирован ' + now_day + '.' + now_month + '.' + now_year;
							// 	var number_of_days = 'аннулирован ' + element.cancelationdate;
							// }

							let dc = element.deycount;
							if (( element.sys_status == "Действует") 
							|| ( element.sys_status ==  "Заканчивается завтра") 
							|| ( element.sys_status ==  "Заканчивается сегодня")
							|| ( element.sys_status ==  "Начинается сегодня")
							|| ( element.sys_status ==  "Начинается завтра")
							) {
							RezStr += "<tr class='bg-green'>";
						} else if (element.status == "Аннулирован") {
							RezStr += "<tr class='bg-red'>";
							str = element.cancel_date.split(' ', 2);
							
							dc = "Аннулирован " + str[0];
						} else {
							RezStr += "<tr>";
						}
								RezStr += "<td class='car_number'>" + element.truck_num + "</td>";
								RezStr += "<td class='element_zone'>"+element.pass_zone+" ("+((element.type_pass==null)?'Дневной':element.type_pass)+")"+"</td>";
								RezStr += "<td class='element_passInfo'>"+element.series+" "+element.pass_number+"</td>";
								RezStr += "<td class='element_dateStart'>"+element.valid_from.substr(0, 10)+"</td>";
								RezStr += "<td class='element_dateEnd'>"+element.valid_to.substr(0, 10)+"</td>";
								RezStr += "<td class='element_number_of_days'>" + dc  + "</td>";
							RezStr += "</tr>";
					});
					
					RezStr += "</table>";
					jQuery(".checLoad").css("display","none");
					jQuery("#ausModal .loadWraper").hide();
					jQuery("#ausModal .ausInfo").html(RezStr);
					jQuery(".tranzitGn").val(car_number);
					
				});
				
				jqXHR.fail(function (responce) {
					jQuery(".checLoad").css("display","none");
					jQuery("#ausModal .loadWraper").hide();
					jQuery("#ausModal .ausInfo").html("Сервис недоступен попробуйте позднее!");
					console.log(responce);
				});
			}
	});
});
function del_spaces(str) {
	str = str.replace(/\s/g, '');
	return str;
}