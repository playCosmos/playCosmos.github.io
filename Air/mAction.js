function sel(selector) {
	let target = document.querySelector(selector);
	return target;
};

function CreateSocialLink(iconClass, url, innerText = "") {
	
	var a = document.createElement('a');
	a.setAttribute('href', url);
	a.setAttribute('target', "_blank");
	if ( innerText != "")
		ret.innerText = " " + innerText;
	
	var icon = document.createElement('i');
	icon.setAttribute('class', iconClass);
	a.prepend(icon);	

	var ret = document.createElement('li');
	ret.prepend(a);

	return ret;
};

document.addEventListener("DOMContentLoaded", function() {
	var ul = sel("#board-info ul.dropdown-menu.dropdown-menu-right");
	if (ul != null)
	{
		ul.prepend(CreateSocialLink("fab fa-discord", "https://discord.com/channels/@me/472262435261251594", "디스코드"));
		ul.prepend(CreateSocialLink("fab fa-instagram", "https://www.instagram.com/million_air_", "인스타그램"));
	}
/*
	var theme_color = document.head.querySelector("[name~=theme-color]");
	var observer = new MutationObserver(m => { 
		if (!(m[0].target.getAttribute(".darkmode")))
			theme_color.setAttribute('content', "#31405a");
		else
			theme_color.setAttribute('content', "#242424");
			
	}), elTarget=sel("html"),objConfig = {attributes: true};
	observer.observe(elTarget,objConfig);*/
});
