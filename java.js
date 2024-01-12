const header = document.querySelector("header");

window.addEventListener("scroll",function(){
	header.classList.toggle("sticky", this.window.scrollY > 0);
})

let menu = document.querySelector('#menu-icon');
let navmenu = document.querySelector('.navmenu');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navmenu.classList.toggle('open');
}

let search = document.querySelector('.search-box');
document.querySelector ('#search-icon').onclick = () => {
	search.classList.toggle('active');
}
/* categories */
// sproduct
 var MainImg = document.getElementById("MainImg");
 var samllImg = document.getElementsByClassName("small-img");
 for(let i =0; i<=4; i++){
	samllImg[i].onclick = function(){
		MainImg.src = samllImg[i].src;
	}
 }