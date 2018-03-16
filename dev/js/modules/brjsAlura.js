define( function () {

	'use strict';

	var course = {},
		url = 'https://www.alura.com.br/api/cursos-em-destaque',
		list = $('#card-wrapper-list'),
		article  = null,
		card = null,
		card_header = null,
		media_wrapper = null,
		card_thumb = null;

	course = {

		init: function () {
			course.bindEvents();
		},

		bindEvents: function () {

			fetch(url, {
				method: 'GET'
			}).then(function (response) {
				response.json().then(function (data) {
					course.makeList(data.cursosEmDestaque);
				});
			}).catch(function (err) {
				console.error('Failed retrieving information', err);
			});
		},

		makeList: function (array) {

			array.forEach(function (course) {
				list.append(
					'<li class="article-list__item col-4-12">' +
						'<div class="card">' +
							'<div class="card__header">' +
								'<a class="media-wrapper" role="presentation" aria-hidden="true" href="' + course.url + '">' +
									'<img class="media-wrapper__thumb card__thumb card__thumb__alura" src="' + course.icone + '" style="min-width: 135px;">' +
								'</a>' +
							'</div>' +
							'<div class="card__content">' +
								'<h3 class="card__title">' +
									'<a href="' + course.url + '">' + course.nome + '</a>' +
								'</h3>' +
							'</div>' +
						'</div>' +
					'</li>'
				);
			});
			
		}

	}

	course.init();
});
