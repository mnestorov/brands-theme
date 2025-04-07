// This is the main JavaScript file for the theme.
// It contains the initialization of the Swiper instance for the brands section.

let swiperInstance;

function initSwiper() {
	if (swiperInstance) swiperInstance.destroy(true, true);

	swiperInstance = new Swiper(".my-brands-swiper", {
		loop: true,
		spaceBetween: 20,
		initialSlide: 0,
		loopAdditionalSlides: 2,
		watchSlidesProgress: true,

		navigation: {
			nextEl: ".btn-down",
			prevEl: ".btn-up",
		},

		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},

		breakpoints: {
			0: {
				direction: 'horizontal',
				slidesPerView: 1,
				centeredSlides: true,
			},
			769: {
				direction: 'vertical',
				slidesPerView: 1.5,
				centeredSlides: true,
			}
		}
	});
}

document.addEventListener("DOMContentLoaded", () => {
	initSwiper();

	let resizeTimeout;
	window.addEventListener("resize", () => {
		clearTimeout(resizeTimeout);
		resizeTimeout = setTimeout(initSwiper, 300);
	});
});