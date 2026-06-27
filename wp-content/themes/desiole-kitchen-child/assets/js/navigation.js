(function () {
	var toggle = document.querySelector('.desiole-menu-toggle');
	var nav = document.getElementById('desiole-primary-nav');

	if (!toggle || !nav) {
		return;
	}

	toggle.addEventListener('click', function () {
		var isOpen = toggle.getAttribute('aria-expanded') === 'true';

		toggle.setAttribute('aria-expanded', String(!isOpen));
		nav.classList.toggle('is-open', !isOpen);
		document.body.classList.toggle('desiole-menu-open', !isOpen);
	});

	document.addEventListener('keydown', function (event) {
		if (event.key !== 'Escape') {
			return;
		}

		toggle.setAttribute('aria-expanded', 'false');
		nav.classList.remove('is-open');
		document.body.classList.remove('desiole-menu-open');
	});
}());
