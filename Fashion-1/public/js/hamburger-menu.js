const menuToggle = document.querySelector('.hamburger-menu');
const nav = document.querySelector('.nav2');

menuToggle.addEventListener('click', function(){
    menuToggle.classList.toggle('klik');
    nav.classList.toggle('slide');
});
    const subMenu = document.querySelector('.sub-btn1');
	const showSubmenu = document.querySelector('.sub-menu-show');
	const iconSubmenu = document.querySelector('.icon-sub-menu');
	
	subMenu.addEventListener('click', function(){
		showSubmenu.classList.toggle('show');
		iconSubmenu.classList.toggle('rotate');
		subMenu.classList.toggle('border');
	});

	const subMenu2 = document.querySelector('.sub-btn2');
	const showSubmenu2 = document.querySelector('.sub-menu-show2');
	const iconSubmenu2 = document.querySelector('.icon-sub-menu2');

	subMenu2.addEventListener('click', function(){
		showSubmenu2.classList.toggle('show');
		subMenu2.classList.toggle('border2')
		iconSubmenu2.classList.toggle('rotate');
});
	const subMenu3 = document.querySelector('.sub-btn3');
	const showSubmenu3 = document.querySelector('.sub-menu-show3');
	const iconSubmenu3 = document.querySelector('.icon-sub-menu3');

	subMenu3.addEventListener('click', function(){
		showSubmenu3.classList.toggle('show');
		iconSubmenu3.classList.toggle('rotate');
		subMenu3.classList.toggle('border3');
});