$(function() {

	$('.cloud', '.bar-left').hover(function() {
		$(this).addClass('bghover');
		$('.clouddiv', '.bar-left').show();
	}, function() {
		$(this).removeClass('bghover');
		$('.clouddiv', '.bar-left').hide();
	});

	$('.ul-nav li').siblings().children('a').on(
			'click',
			function() {
				$(this).addClass('selected').parents('li').siblings().children(
						'a').removeClass('selected');
			});

	$('.ul-nav li')
			.hover(
					function() {
						if ($(this).children('dl').length > 0)
							$(this).attr('class', 'nav-opacity').children('dl')
									.show().addClass('nav-opacity');
					},
					function() {
						if ($(this).attr('class', 'nav-opacity-none').children(
								'dl').length > 0)
							$(this).children('dl').hide();
					});
	//tableBar
	$('.bout-content-a1 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a2 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a3 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a4 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a5 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a6 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a7 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a8 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a9 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	$('.bout-content-a10 li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	// 一周推荐
	$('.bout-content-yizhou li').hover(function() {
		$(this).addClass('li-hover');
		$(this).find('dd').next('.play-type').hide().next().show();
	}, function() {
		$(this).removeClass('li-hover');
		$(this).find('dd').next('.play-type').show().next().hide();
	});
	// 排行
	$('ul li', 'div.ranking').hover(
			function() {
				$(this).parent('ul').children('li:first').children('p:first')
						.hide().siblings().show();
				$(this).children('.open').show().siblings('.close').hide();
			}, function() {
				$(this).children('.open').hide().siblings('.close').show();
			});
	$('ul', 'div.ranking').hover(
			function() {
			},
			function() {
				$(this).children('li:first').children('p:first').show()
						.siblings().hide();
			});
	// 列表页
	$('a', '.locate').on(
			'click',
			function() {
				$(this).addClass('loc-selected').siblings().removeClass(
						'loc-selected');
			});
});
