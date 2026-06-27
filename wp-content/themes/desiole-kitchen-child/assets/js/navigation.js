(function () {
	var toggle = document.querySelector('.desiole-menu-toggle');
	var nav = document.getElementById('desiole-primary-nav');
	var submenuParents;

	if (!toggle || !nav) {
		return;
	}

	submenuParents = nav.querySelectorAll('.menu-item-has-children');

	submenuParents.forEach(function (item, index) {
		var link = item.querySelector(':scope > a');
		var submenu = item.querySelector(':scope > .sub-menu');
		var button = document.createElement('button');
		var screenReaderText = document.createElement('span');
		var visualIcon = document.createElement('span');
		var label = link ? link.textContent.trim() : 'submenu';
		var submenuId;

		if (!submenu || item.querySelector(':scope > .desiole-submenu-toggle')) {
			return;
		}

		submenuId = submenu.id || 'desiole-submenu-' + index;
		submenu.id = submenuId;
		submenu.setAttribute('aria-hidden', 'true');

		button.className = 'desiole-submenu-toggle';
		button.type = 'button';
		button.setAttribute('aria-expanded', 'false');
		button.setAttribute('aria-controls', submenuId);
		screenReaderText.className = 'screen-reader-text';
		screenReaderText.textContent = 'Toggle ' + label;
		visualIcon.setAttribute('aria-hidden', 'true');
		visualIcon.textContent = '+';
		button.appendChild(screenReaderText);
		button.appendChild(visualIcon);
		item.insertBefore(button, submenu);

		button.addEventListener('click', function () {
			var isOpen = button.getAttribute('aria-expanded') === 'true';

			button.setAttribute('aria-expanded', String(!isOpen));
			submenu.setAttribute('aria-hidden', String(isOpen));
			item.classList.toggle('is-submenu-open', !isOpen);
			visualIcon.textContent = isOpen ? '+' : '-';
		});
	});

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

		submenuParents.forEach(function (item) {
			var button = item.querySelector(':scope > .desiole-submenu-toggle');
			var submenu = item.querySelector(':scope > .sub-menu');

			if (button && submenu) {
				button.setAttribute('aria-expanded', 'false');
				submenu.setAttribute('aria-hidden', 'true');
				item.classList.remove('is-submenu-open');
				button.querySelector('[aria-hidden="true"]').textContent = '+';
			}
		});
	});
}());
