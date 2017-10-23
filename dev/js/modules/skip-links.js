/*global $*/
define( function () {

	'use strict';

	var skipLinks = {},
		skipLinksContainer = $('#js-skip-links'),
		documentHooks = $('html, body');

	skipLinks = {

		init: function () {

			skipLinks.bindEvents();

		},

		bindEvents: function () {

			skipLinksContainer.on('click', 'a', function () {

				var _this = $(this),
					selectedLink = _this.attr('href');

                //Get the hash of the anchor
                selectedLink = selectedLink.substring(selectedLink.indexOf("#") + 1);

                skipLinks.goToSelectedAnchor('#' + selectedLink);

			})

		},

		goToSelectedAnchor: function (selectedLink) {

            var selectedLinkAnchor = $(selectedLink);

            documentHooks.animate({

                scrollTop: selectedLinkAnchor.offset().top - 80

            }, 300, function () {

                selectedLinkAnchor.attr('tabindex', 0);
            	selectedLinkAnchor.focus();

            });

		}

	};


	if (skipLinksContainer.length) {
		skipLinks.init();
	}


});