//Поиск
window.onload = () => {
	let search = document.querySelector('#search');
	search.oninput = function(){
		let value = this.value.trim();
		let list = document.querySelectorAll('.list-search li');
		if(value != ''){
			list.forEach(elem =>{
				if(elem.innerText.search(value) == -1){
					elem.classList.add('hidden');
				}
			});
		}else{
			list.forEach(elem =>{
				elem.classList.remove('hidden');
			});
		}
	};
};