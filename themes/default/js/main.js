var Anchor = {
	init: function() {
		Anchor.slidey = $('.slidey');
		
		//  Это связано с изменением размера окна?
		$(window).resize(Anchor.bindResize).trigger('resize');
		
		//  Ссылка для показа шапки
		Anchor.linky = $('.linky').click(Anchor.toggleSlidey);

		//  Прячем шапку
		setTimeout(function() {
		    // Открываем шапку
		    Anchor.hideSlidey();
		    
			$('body').addClass('js-enabled');
		}, 10);
		
		//  Слушаем ссылку для поиска
		$('a[href="#search"]').click(function() {
			if(!Anchor.linky.hasClass('active')) {
				return Anchor.toggleSlidey.call(Anchor.linky);
			}
		});
	},
	
	hideSlidey: function() {
		Anchor.slidey.css('margin-top', this._slideyHeight);
		Anchor.linky && Anchor.linky.removeClass('active');
		
		return this;
	},
	
	toggleSlidey: function() {
		var self = Anchor;
		var me = $(this);
			
		me.toggleClass('active');
		self.slidey.css('margin-top', me.hasClass('active') ? 0 : self._slideyHeight);
		
		return false;
	},
	
	bindResize: function() {
		Anchor._slideyHeight = -(Anchor.slidey.height() + 1);
		Anchor.hideSlidey();
	}
};

//  И загружаем bind
$(Anchor.init);