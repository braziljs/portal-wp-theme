/*global $*/
define(['trap'], function () {

	'use strict';

	var navigation = {},
		body = $('#js-body'),
		navigationWrapper = $('#js-navigation-wrapper'),
		navigationList = $('#js-navigation-list'),
		mobileNavigationToggler = $('#js-navigation-toogler'),
		hamburguerButton = mobileNavigationToggler.find('.navigation-toogler__burguer:first'),
		acessibilityMenuContainer = $('#js-acessibility-menu');

	navigation.options = {};
	navigation.options.oppened = false;

	navigation.methods = {

		init : function () {

			navigation.methods.bindMobileBehaviours();

		},

		bindMobileBehaviours : function () {

			mobileNavigationToggler.on('click', function () {

				navigation.methods.toogleNavigation();

			});

	        //Closes the menu window with the keyboard 'escape' key
	        $(document).keyup(function (evt) {

	            if (evt.keyCode === 27 && navigation.options.oppened) {

	                navigation.methods.toogleNavigation();

	            }

	        });

		},

		toogleNavigation : function () {

			if (navigation.options.oppened) {

				body.off('click.openMenu');
				body.off('touchmove');

				navigation.options.oppened = false;

				navigationWrapper.untrap();

			} else {

				navigation.options.oppened = true;

				navigation.methods.outsideClickCloseMenu();

		        //We stop the touch event to prevent iOS from scrolling the content behind the menu
		        body.on('touchmove', function (evt) {
					evt.preventDefault();
		        });

		        navigationWrapper.trap();

			}

			navigationWrapper.toggleClass('is-open');
			body.toggleClass('navigation-is-open');

		},

        outsideClickCloseMenu : function () {

            //We need the setTimeout
            setTimeout(function () {

                body.on('click.openMenu', function (evt) {

                    if ($(evt.target).is(navigationWrapper) && navigation.options.oppened) {

                        navigation.methods.toogleNavigation();

                    }

                });

            }, 0);

        }

	}

	return navigation.methods.init();

});