function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

document.addEventListener("DOMContentLoaded", function() {
	var aDiscord = document.createElement('a');
	aDiscord.setAttribute('href', "https://discord.gg/CE6bWsQ7QH");
	aDiscord.setAttribute('target', "_blank");
	aDiscord.innerText = " 디스코드";
	
	var iDiscord = document.createElement('i');
	iDiscord.setAttribute('class', "fab fa-discord");
	aDiscord.prepend(iDiscord);
	
	var lDiscord = document.createElement('li');
	lDiscord.prepend(aDiscord);
	
	var aInstagram = document.createElement('a');
	aInstagram.setAttribute('href', "https://www.instagram.com/million_air_");
	aInstagram.setAttribute('target', "_blank");
	aInstagram.innerText = " 인스타그램";
	
	var iInstagram = document.createElement('i');
	iInstagram.setAttribute('class', "fab fa-instagram");
	aInstagram.prepend(iInstagram);
    
	var lInstagram = document.createElement('li');
	lInstagram.prepend(aInstagram);
	
	var ul = sel("#board-info ul.dropdown-menu.dropdown-menu-right");
	ul.prepend(lInstagram);
	ul.prepend(lDiscord);
});
