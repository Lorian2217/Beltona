(jQuery)(document).ready(function ($) {

    $('.mod-circles .animation-wrap .owl-carousel').owlCarousel({ loop: true, autoplay: true, touchDrag: false, mouseDrag: false, autoplayTimeout: 10000, smartSpeed: 10000, autoplayHoverPause: false, margin: 10, nav:false, items: 2, slideTransition: 'linear', dots: false, });
    $('.mod-circles .animation-wrap2 .owl-carousel').owlCarousel({ loop: true, autoplay: true, touchDrag: false, mouseDrag: false, autoplayTimeout: 8000, smartSpeed: 8000, autoplayHoverPause: false, margin: 10, nav:false, items: 2, slideTransition: 'linear', dots: false, });
	
	const headerHeight = $('header').innerHeight() + 10;
	$('.mod-banner').css('margin-top', '-' + headerHeight + 'px');

    add_popup( "fos", '<div class="h2">Выбрать формат</div>',
		`
		<form action="#" method="post">
            <input type="text" class="form-control mb-3" placeholder="Введите Имя" required>
            <input type="email" class="form-control mb-3" placeholder="Введите Email" required>
            <input type="tel" class="form-control mb-3" placeholder="Введите Телефон" required>
			<select class="form-control mb-3" id="exampleFormControlSelect1" required>
                <option>ОНЛАЙН-ВЕДЕНИЕ</option>
                <option>ОЧНЫЕ КОНСУЛЬТАЦИИ</option>
                <option>СУПЕРВИЗИЯ</option>
                <option>КУРС САМОПОМОЩИ</option>
            </select>
			<button class="btn btn-outline-dark w-100" name="feed_back" value="1">Отправить</button>
		</form>
		`, ""
	);

    $('input[type="tel"]').mask('+7 (999) 999 99 99');

	// Анимация росписи

	let pathObj = {
        "gear65": {
            "strokepath": [
                {
                    "path": "M21.5 157C25.8333 150 32 135.8 22 135C9.5 134 -0.999999 145 2.5 153C6 161 18.7341 167.173 28.5 159.5C42.5 148.5 66.5 110.5 82 78C84.6667 72 91 64 93.5 73.5",
                    "duration": 350
                },
                {
                    "path": "M92.5 72C92 72.6667 90.6 74.9 89 78.5C87 83 67.5 125 53.5 144.5",
                    "duration": 350
                },
                {
                    "path": "M22.5 138.5C20.1667 134.167 20.9 121.4 42.5 105C69.5 84.5 193 32 291 1.5",
                    "duration": 350
                },
                {
                    "path": "M66.5 119.5C66 117.5 68.3 110.9 81.5 100.5C94.7 90.1 166.667 54.8333 201 38.5",
                    "duration": 350
                },
                {
                    "path": "M58 156.5C62.5 151.333 71 139.8 69 135C66.5 129 52.5 131.5 46.5 142.5C40.5 153.5 45.5 166 55 162.5C64.5 159 92.5 116 114.5 65C116 61.3333 119.4 55.1 121 59.5",
                    "duration": 350
                },
                {
                    "path": "M79 149C84.5 138.333 96.2 115.4 99 109C102.5 101 104 98.5 105.5 98.5",
                    "duration": 350
                },
                {
                    "path": "M87.5 155C88 152.5 90.3 144.9 95.5 134.5C102 121.5 113 94.5 116.5 93",
                    "duration": 350
                },
                {
                    "path": "M105 148.5C104.833 148 104.8 146.4 106 144C107.2 141.6 112.833 131 115.5 126C111.5 132.333 103 144.5 101 142.5C98.5 140 115 115.5 119 119.5C119.667 120.167 120.3 122.5 117.5 126.5",
                    "duration": 350
                },
                {
                    "path": "M131 118.5C128 125.333 121.3 139.5 118.5 141.5C115 144 138.5 116 138.5 119C138.5 122 126 141 131 137C136 133 155 115 153.5 114.5C152 114 136.5 136.5 142 133.5C147.5 130.5 166.5 115.5 165.5 113.5C164.5 111.5 152 130.5 156.5 128.5C161 126.5 179 112 178.5 110C178 108 163 130 169.5 127C176 124 187.5 114 185.5 111.5C183.5 109 173.5 125 179 122.5C184.5 120 206 104 206 102C206 100 191 112 195 114C199 116 221 96.5 220 95C219 93.5 204.5 107 209 108.5C213.5 110 269 74 273 55C277 36 215 128.5 165.5 230C162.861 235.412 151.5 207 160.5 191.5C167.7 179.1 253.5 111 295.5 78.5",
                    "duration": 850
                },
                {
                    "path": "M253 135C253.4 136.2 255.167 134.833 256 134C256.5 133.167 257.3 131.2 256.5 130C255.5 128.5 254 131 254 132.5C254 134 252.5 133.5 253 135Z",
                    "duration": 350
                },
            ],
            "dimensions": { "width": 297, "height": 232 }
        }
    };

	var block_show = null;
 
    function scrollTracking(){
        var wt = $(window).scrollTop();
        var wh = $(window).height();
        var et = $('.mod-banner .word').offset().top;
        var eh = $('.mod-banner .word').outerHeight();
        
        if (et >= wt && et + eh <= wh + wt){
            if (block_show == null || block_show == false) {
                $('#gear65').lazylinepainter({
                    "svgData": pathObj,
                    "strokeWidth": 2,
                    "strokeColor": "#000"
                }).lazylinepainter('paint'); 
            }
            block_show = true;
        } else {
            block_show = false;
        }
    }
 
    $(window).scroll(function(){
        scrollTracking();
    }); 
    $(document).ready(function(){ 
        scrollTracking();
    });

    var scene = document.querySelectorAll('.scene');
	if (scene !== null) {
        scene.forEach(elem => {
            var parallaxInstance = new Parallax(elem);
        })
	}

    if ($(window).width() <= 1400) {
        $('.mod-banner .subtitle').find('br').remove();
    }
    if ($(window).width() <= 1200) {
        $('.mod-target .title, .mod-target .wrap-text, .mod-target .images3 .wrap').find('br').remove();
    }
    if ($(window).width() <= 768) {
        $('.mod-bottom-block .wrap').find('br').remove();
    }

    AOS.init({
        disable: 'phone',
        startEvent: 'DOMContentLoaded',
        once: true
    });
});