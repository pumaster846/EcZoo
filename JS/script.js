//slider
var btn_prev = document.querySelector('.slider-wrap .prev');
var btn_next = document.querySelector('.slider-wrap .next');

var images = document.querySelectorAll('.slider-wrap .slider-block img');
var i = 0;

btn_prev.onclick = function(butPrev){
	images[i].className = '';
	i--;
	if(i < 0){
		i = images.length - 1;
	}
	images[i].className = '_active';
}

btn_next.onclick = function(butNext){
	images[i].className = '';
	i++;
	if(i >= images.length){
		i = 0;
	}
	images[i].className = '_active';
}

//menu-burger
var menuBlock = document.querySelector('.menu-block');
var burgerText = document.querySelector('.burger-text');

function burger(menuBurger, activeMenu) {
    menuBurger.classList.toggle('change');
	menuBlock.classList.toggle('active');
	if (menuBlock.classList.contains('active')){
		burgerText.innerHTML = 'Закрыть';
	}else{
		burgerText.innerHTML = 'Меню';
	}
}