define(function () {

	var conf = {},
		confContainer = $('#js-conf-page'),
		countdownContainer = $('#js-countdown');


	conf = {

		init: function () {

			if (countdownContainer.length) {
				conf.countDownClock();
			}

		},

		countDownClock: function () {

			// Set the date we're counting down to
			var countDownDate = new Date("Apr 3, 2017 00:00:00").getTime(),
				clock = document.getElementById('js-countdown'),
				daysSpan = clock.querySelector('.days'),
				hoursSpan = clock.querySelector('.hours'),
				minutesSpan = clock.querySelector('.minutes'),
				secondsSpan = clock.querySelector('.seconds');

			// Update the count down every 1 second
			var timeInterval = setInterval(function() {

				// Get todays date and time
			  	var now = new Date().getTime();

				// Find the distance between now an the count down date
				var distance = countDownDate - now;

				// Time calculations for days, hours, minutes and seconds
				var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);

				daysSpan.innerHTML = days.toString().length > 1 ? days : '0' + days;
				hoursSpan.innerHTML = hours.toString().length > 1 ? hours : '0' + hours;
				minutesSpan.innerHTML = minutes.toString().length > 1 ? minutes : '0' + minutes;
				secondsSpan.innerHTML = seconds.toString().length > 1 ? seconds : '0' + seconds;

				// If the count down is finished, write some text
				if (distance < 0) {
					clearInterval(timeInterval);
					clock.innerHTML = '<a href="https://eventloop.com.br/braziljs-conf-2017-poa" class="anchor-button anchor-button--size-2 anchor-button--color-5 conf-container__date">Comprar o ingresso!</a>';
				}

			}, 1000);

		}

	}

	if (confContainer.length) {
		conf.init();
	}

});