/*  
	Project: Custom select option list - 2016
	Description: jQuery plugin to replace default select list
	Author: Mario Iliev
	GitHub: https://github.com/mario-iliev

	---------------------------
	Full specification: https://github.com/mario-iliev/custom-select-option
*/
;(function ($) {
	'use strict';
	var clickEvent = (('ontouchstart' in window) || (window.DocumentTouch && document instanceof DocumentTouch)) ? 'touchstart' : 'click';
	var id = 0;
	var optionsCount = 0;
	var toDestroy = 0;
	var divOptionList;

	// Remove generated html and clear events if we are not rebuilding
	var destroyPlugin = function(id, selectBox, rebuild) {
		if (!rebuild) {
			$(document).off(clickEvent+'.closeboxes');
			$(window).off('scroll.selectmenu'+id+' resize.selectmenu'+id);
			$('.custom_select._'+id)
				.off(clickEvent+'.openlist'+id)
				.undelegate('.option', clickEvent+'.selectoption'+id);
		}

		$('.custom_select._'+id).remove();
		selectBox.show();
	};

	// If specific height is set we prepare the plugin for inner scroll
	var listScroll = function(mainBox, maxHeight) {
		mainBox.find('.select_opts').css({'max-height':maxHeight+'px', 'overflow-x':'hidden'}).addClass('scrolling');
	};

	// Determine the vertical position and the inner scroll for the select menu
	var offsetPosition = function(id, mainBox, maxHeight) {
		var titleBox = mainBox.find('.option_title');
		var optionList = mainBox.find('.select_opts');
		var titleHeight = titleBox.outerHeight();
		var elementTopOffset = titleBox.offset().top - $(window).scrollTop();
		var btmOffset = ($(window).scrollTop() + $(window).height()) - (titleBox.offset().top + titleHeight);
		var elementBottomOffset = btmOffset > 0 ? btmOffset : 0;
		var listRealHeight = !maxHeight ? parseInt(optionList[0].style.height) : maxHeight + 20;

		// Remove inner scroll function
		var removeScroll = function() {
			optionList.css({'max-height':'none', 'overflow-x':'auto'}).removeClass('scrolling');
		};

		// Determine if we have more space at the top or at bottom of the select menu
		var compareOffset = function(compare) {
			if (!maxHeight && listRealHeight > compare) {
				listScroll(mainBox, compare);
			} else {
				if (!maxHeight) {
					removeScroll();
				}
			}
		};

		// Force close the select menu function
		var checkForceClose = function(compare) {
			if (compare < -20 && mainBox.hasClass('opened')) {
				mainBox.trigger('click');
			}
		};

		// Place the menu vertically at the top or at the bottom according to the calculated space
		if ((elementBottomOffset - 20) < listRealHeight && elementTopOffset > (elementBottomOffset - 20)) {
			optionList.removeClass('under').addClass('above').css({'bottom': titleHeight});
			checkForceClose(btmOffset);
			compareOffset(elementTopOffset - 20);
		} else {
			optionList.removeClass('above').addClass('under').css({'bottom': 'initial'});
			checkForceClose(elementTopOffset);
			compareOffset(elementBottomOffset - 20);
		}
	};

	// Main plugin logic
	var selectMenu = function (el, opts) {
		var selectBox = $(el).is('select') ? $(el) : $(el).find('select');
		var optionList = selectBox.find('option');
		var optionTitle = opts.title == 'first' ? optionList.first().text() : opts.title;
		var maxHeight = opts.height;
		var arrow = opts.arrow ? '<div class="arrow" style="position: absolute; right: 10px; top: 42%;"></div>' : '';

		// If 'destroy' parameter is called
		if (opts.destroy) {
			selectBox.each(function() { toDestroy = ++toDestroy; });
			destroyPlugin(toDestroy, selectBox, opts.rebuild);
			return false;
		}

		// If we call $(selector).customSelect(); more then once with the same parameter we do nothing
		if (selectBox.hasClass('customized') && !opts.rebuild) {
			return false;
		}

		// If we want to rebuild the select menu/s with new options
		if (opts.rebuild) {
			$('.customized').each(function() {
				toDestroy = ++toDestroy;
			});
			destroyPlugin(toDestroy, selectBox, opts.rebuild);
		}

		// Append div structure before the select menu
		selectBox
			.hide()
			.addClass('customized')
			.each(function() {
				id = ++id;

				$(this).before('<div class="custom_select _'+id+'" style="cursor: pointer;position: relative;">' +
					'<div class="option_title" style="position: relative;"></div>' +
					'<div class="select_opts" style="display: none;position:absolute;width: 100%;z-index:1000"></div>' +
					'</div>');
				divOptionList = $('.custom_select._'+id+' .select_opts');
			});

		// Add data values and duplicate select options as div tags
		optionList.each(function() {
			optionsCount = ++optionsCount;

			$(this).attr('data-option', optionsCount);
			divOptionList.append('<div class="option" data-option="'+optionsCount+'">' + $(this).text() + '</div>');
		});

		var mainBox = $('.custom_select._'+id);
		var mainBoxTitle = mainBox.find('.option_title');

		// Set the option list title before we continue
		mainBoxTitle.text(optionTitle).append(arrow);

		// Set the select menu width if option 'width' is set
		if (opts.width) {
			mainBox.css({'width':opts.width});
		}

		// Open the select menu on click
		mainBox
			.on(clickEvent+'.openlist'+id, function() {
				var otherSelectBoxes = $('.custom_select').not(this);

				$(this).toggleClass('opened').find('.select_opts').stop().slideToggle(150);

				if (otherSelectBoxes.hasClass('opened')) {
					otherSelectBoxes.removeClass('opened').find('.select_opts').slideUp(150);
				}
			});

		// Mark real select option as selected
		$('.custom_select._'+id).on(clickEvent+'.selectoption'+id, '.option', function(e) {
			var optionData = $(e.target).data('option');
			var divSelectBox = $(e.target).parent().parent().next();

			$(e.target).parent().find('.option').removeClass('current');
			$(this).addClass('current');

			divSelectBox.find('option').attr('selected', false);
			divSelectBox.find('option[data-option='+optionData+']').attr('selected', true);

			// When option is selected - change the option list title
			$(e.target).parent().prev().text($(e.target).text()).append(arrow);
		});

		// If 'selected' parameter is provided we set the first option as selected
		if (opts.selected) {
			var firstOption = mainBox.find('.option:first');
			firstOption.addClass('current');
			selectBox.find('option:first').attr('selected', true);
			mainBoxTitle.text(firstOption.text()).append(arrow);
		}

		// If 'height' is set we add max height to the option list which cause inner scrolling
		if (maxHeight) {
			listScroll(mainBox, maxHeight);
		}

		// Set the real select menu height which will be used for other calculations
		divOptionList.css({'height':divOptionList.outerHeight()});

		// Determine the vertical position of the select menu on load
		offsetPosition(id, mainBox, maxHeight);

		// Update offset position on scroll and resize
		setTimeout(function() {
			$(window).on('scroll.selectmenu'+id+' resize.selectmenu'+id, function() {
				offsetPosition(id, mainBox, maxHeight);
			});
		}, 1);
	};

	// Close any opened select menus
	$(document).on(clickEvent+'.closeboxes', function(e) {
	    var container = $('.custom_select');

	    if (container.not(e.target) && !container.has(e.target).length && container.hasClass('opened')) {
			container.removeClass('opened').find('.select_opts').slideUp(150);
			container.find('.arrow').removeClass('up');
		}
	});

	$.fn.customSelect = function (options, callback) {
		var opts = $.extend({}, $.fn.customSelect.defaults, options, callback);

		return this.each(function () {
			new selectMenu($(this), opts);
		});
	}
	$.fn.customSelect.defaults = { title: 'Select', selected: true, height: false, width: false, arrow: true, rebuild: false, destroy: false };

	// Search for data attribute and auto run the plugin
	$(function(){
		$('div[data-select-box]').customSelect();
	});
})(jQuery);
