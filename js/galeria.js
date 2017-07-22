$(document).ready(function() {
  //Initialize for inline images
  $('.pop').magnificPopup({type:'image'});
  //Initialize for wordpress galleries
  $('.gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
      enabled: true
      }
  });
});

// initialize magnific popup galleries with titles and descriptions
$('.gallery').magnificPopup({
		callbacks: {
			open: function() {
        $('.mfp-description').append(this.currItem.el.attr('title'));
      },
      afterChange: function() {
        $('.mfp-description').empty().append(this.currItem.el.attr('title'));
      }
    },
		delegate: 'a',
		type: 'image',
		image: {
			markup: '<div class="mfp-figure">'+
			'<div class="mfp-close"></div>'+
			'<div class="mfp-img"></div>'+
			'<div class="mfp-bottom-bar">'+
			'<div class="mfp-title"></div>'+
			'<div class="mfp-description" style="text-align: left;font-size: 12px;line-height: 16px;color: #f3f3f3;word-break: break-word;padding-right: 36px;"></div>'+
			'<div class="mfp-counter"></div>'+
			'</div>'+
			'</div>',
			titleSrc: function(item) {
				return '<strong>' + item.el.find('img').attr('alt') + '</strong>';
			}
		},
		gallery: {
			enabled: true,
			navigateByImgClick: true
		}
	});