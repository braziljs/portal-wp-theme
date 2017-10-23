define(['disqusLoader', 'prism'], function () {

	'use strict';

	var article = {},
		articleContainer = document.getElementById('article');

	article = {

		init: function () {

			article.loadDisqus();

		},

		loadDisqus: function () {
			var options = {
			  	scriptUrl: '//braziljs.disqus.com/embed.js',
			  	disqusConfig: function() {
			    	// this.page.title       = 'Page Title';
			    	this.page.title       = articleContainer.dataset.articleTitle;
			    	// this.page.url         = 'https://braziljs.org/blog/playlist-de-videos-para-o-carnaval/';
			    	this.page.identifier = articleContainer.dataset.articleId - 1;
			  	}
			};

			disqusLoader( '#disqus_thread', options );

		}

	}

	if (articleContainer) {
		article.init();
	}

});
