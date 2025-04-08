/**
 * Main JavaScript File
 *
 * This file contains the initialization of the Swiper instance for the brands section.
 * It handles the creation and reinitialization of the Swiper slider on page load and window resize.
 *
 * @package WordPress
 * @subpackage Brands_Theme
 * @since 1.0.0
 */

let swiperInstance;

/**
 * Initialize Swiper
 *
 * This function initializes or reinitializes the Swiper instance for the brands slider.
 * It destroys any existing instance before creating a new one to ensure proper functionality.
 *
 * @since 1.0.0
 * @return void
 */
function initSwiper() {
	// Destroy the existing Swiper instance if it exists
	if (swiperInstance) swiperInstance.destroy(true, true);

	// Create a new Swiper instance with the specified configuration
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

// Wait for the DOM to fully load before initializing Swiper
document.addEventListener("DOMContentLoaded", () => {
	initSwiper();

	// Reinitialize Swiper on window resize with a debounce mechanism
	let resizeTimeout;
	window.addEventListener("resize", () => {
		clearTimeout(resizeTimeout);
		resizeTimeout = setTimeout(initSwiper, 300);
	});
});