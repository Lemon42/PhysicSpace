var urlPage;
var page;

window.onhashchange = function () {
	document.querySelector('.on-here').classList.remove('on-here');

	urlPage = window.location.href;
	urlPage = urlPage.split('#');
	page = urlPage[1];
	li = document.querySelector('.' + page);
	li.classList.add('on-here');
}