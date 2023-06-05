window.addEventListener('scroll', () => {
	let header = document.querySelector('.headeris');
	let scroll = window.scrollY;
	let navbarLinks = document.querySelectorAll('.headeris .navbar-links a');

	if (scroll >= 50) {
		header.classList.add('headeris2');
		navbarLinks.forEach((link) => {
			// link.style.border = '1px solid #000';
			link.style.color = '#000';
		});
	} else {
		header.classList.remove('headeris2');
		navbarLinks.forEach((link) => {
			// link.style.border = '1px solid #fff';
			link.style.color = '#fff';
		});
	}
});
