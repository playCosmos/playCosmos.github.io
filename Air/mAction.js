function sel(selector) {
	let target = document.querySelector(selector);
	return target;
};

function CreateSocialLink(iconClass, url, innerText = "") {
	let ret = document.createElement('a');
	ret.setAttribute('href', url);
	ret.setAttribute('target', "_blank");
	if ( innerText != "")
		ret.innerText = " " + innerText;
	
	var icon = document.createElement('i');
	icon.setAttribute('class', iconClass);
	ret.prepend(icon);

	return ret;
};

const 

document.addEventListener("DOMContentLoaded", function() {
	var ul = sel("#board-info ul.dropdown-menu.dropdown-menu-right");
	if (ul != null)
	{
		ul.prepend(CreateSocialLink("fab fa-discord", "https://discord.com/channels/@me/472262435261251594", "디스코드"));
		ul.prepend(CreateSocialLink("fab fa-instagram", "https://www.instagram.com/million_air_", "인스타그램"));
	}
	
	var theme_color = document.head.querySelector("[name~=theme-color]");
	theme_color.setAttribute('content', "var(--maincolor)");
	sel("head").append(theme_color);
});
