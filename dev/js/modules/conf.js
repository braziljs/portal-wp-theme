define(function () {

	var conf = {},
		body = $('body'),
		countdownContainer = $('#brjs-countdown');


	conf = {

		init: function () {

			setInterval(function() {
				conf.countDownClock();
			}, 1000);

	    setInterval(function() {
	      conf.avatarCall4Paper();
	    }, 2000);
		},

		countDownClock: function () {

	    var YY = 2018;
	    var MM = 08;
	    var DD = 24;
	    var HH = 00;
	    var MI = 00;
	    var SS = 00;


	    var today = new Date();
	    var further = new Date(YY, MM-1, DD, HH, MI, SS);

	    var ss = parseInt((further - today) / 1000);
	    var mm = parseInt(ss / 60);
	    var hh = parseInt(mm / 60);
	    var dd = parseInt(hh / 24);

	    var missing = '';

	    ss = ss - (mm * 60);
	    mm = mm - (hh * 60);
	    hh = hh - (dd * 24);

	    day    = (dd && dd > 1) ? dd : "";
	    hour   = (toString(hh).length) ? (hh < 10 ? "0" + hh : hh) : "";
	    minut  = (toString(mm).length) ? (mm < 10 ? "0" + mm : mm) : "";
	    second = (ss < 10 ? "0" + ss : ss);

	    if (dd + hh + mm + ss > 0) {

	      $("#dd").html(day);
	      $("#hh").html(hour);
	      $("#mm").html(minut);
	      $("#ss").html(second);
	    } else {
	      // document.getElementById("elm-timer").innerHTML = 'CHEGOU!!!!';
	      // setTimeout(Timer, 1000);
	    }

	    countdownContainer.fadeIn("slow");
		},

    avatarCall4Paper: function () {

    	var img = new Image();
    	var el = $("#bg-call4paper");
      var imageId = (Math.floor(Math.random() * (5))+1);

      const IMG_URL = "https://braziljs.org/wp-content/uploads/2018/02/icon-" + imageId + "-opt-avatar.svg";
   
      
      img.onload = function () {
        el.css('backgroundImage', 'url(' + IMG_URL + ')');
      }

      img.src = IMG_URL
    }
	}

	conf.init();

});