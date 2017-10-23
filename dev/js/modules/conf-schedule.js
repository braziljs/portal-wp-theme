define(function () {

	'use strict';

	var schedule = {},
		scheduleContainer = $('#js-schedule-container');

	schedule = {

		init: function () {

			schedule.bindEvents();

		},

		bindEvents: function () {

			scheduleContainer.on('click', '.schedule__title-button', function () {
				schedule.toogleDescription($(this));
			});

		},

		toogleDescription: function (description) {

			description.parents('.schedule__item').toggleClass('is-open');

		}

	}

	if (scheduleContainer.length) {
		schedule.init();
	}

})