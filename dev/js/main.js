/*global $, require, FastClick*/
(function () {

	'use strict';

    var PUBLIC = {},
        PRIVATE = {}

    PRIVATE.init = function () {

        //configure our requireJS paths
        require.config({
            paths: {
                'skipLinks': 'modules/skip-links',
                'navigation': 'modules/navigation',
                'article': 'modules/article',
                //'conf': 'modules/conf',
                'disqusLoader': 'plugins/disqusloader',
                'confSchedule': 'modules/conf-schedule',
                'prism': 'plugins/prism',
                'trap': 'plugins/trap',
                'brjsAlura': 'modules/brjsAlura'
            }
        });

        PUBLIC.init();

    };

	PUBLIC.init = function () {

		PUBLIC.skipLinks();

        PUBLIC.navigation();

        PUBLIC.article();

        PUBLIC.confSchedule();

        PUBLIC.brjsAlura();

        //PUBLIC.conf();

	};

    PUBLIC.skipLinks = function () {

        var skipLinksContainer = document.getElementById('js-skip-links');

        if (skipLinksContainer) {

            require(['skipLinks']);

        }

    };

    PUBLIC.navigation = function () {

        var navigationContainer = document.getElementById('js-navigation-wrapper');

        if (navigationContainer) {

            require(['navigation']);

        }

    };

    PUBLIC.article = function () {

        var articleContainer = document.getElementById('article');

        if (articleContainer) {
            require(['article'])
        }

    };

    PUBLIC.confSchedule = function () {

        var scheduleContainer = document.getElementById('js-schedule-container');

        if (scheduleContainer) {
            require(['confSchedule'])
        }

    };

    PUBLIC.brjsAlura = function () {

        var brjsAlura = document.getElementById('braziljs_alura');

        if (brjsAlura) {
            require(['brjsAlura'])
        }
    };

    // PUBLIC.conf = function () {

    //     var confPageContainer = document.getElementById('js-conf-page');

    //     if (confPageContainer) {
    //         require(['conf'])
    //     }

    // };

    return PRIVATE.init();

})();