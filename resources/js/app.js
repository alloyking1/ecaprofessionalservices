import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('siteUi', () => ({
	mobileMenuOpen: false,
	servicesMenuOpen: false,
	scrolled: false,

	init() {
		this.onScroll();
		window.addEventListener('scroll', () => this.onScroll(), { passive: true });
	},

	onScroll() {
		this.scrolled = window.scrollY > 24;
	},

	closeMenus() {
		this.mobileMenuOpen = false;
		this.servicesMenuOpen = false;
	},

	scrollToTop() {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	},
}));

window.counter = ({ target = 0, duration = 1000 } = {}) => ({
	current: 0,
	hasRun: false,
	start() {
		if (this.hasRun) {
			return;
		}

		this.hasRun = true;
		const startAt = performance.now();

		const tick = (now) => {
			const progress = Math.min((now - startAt) / duration, 1);
			this.current = Math.floor(progress * target);

			if (progress < 1) {
				window.requestAnimationFrame(tick);
			}
		};

		window.requestAnimationFrame(tick);
	},
});

window.testimonialSlider = ({ total = 1, interval = 5000 } = {}) => ({
	activeIndex: 0,
	timer: null,

	init() {
		if (total > 1) {
			this.start();
		}
	},

	start() {
		this.stop();
		this.timer = window.setInterval(() => this.next(), interval);
	},

	stop() {
		if (this.timer) {
			window.clearInterval(this.timer);
			this.timer = null;
		}
	},

	next() {
		this.activeIndex = (this.activeIndex + 1) % total;
	},

	prev() {
		this.activeIndex = (this.activeIndex - 1 + total) % total;
	},

	goTo(index) {
		this.activeIndex = index;
	},
});

Alpine.start();
