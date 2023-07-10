function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

const observer = new IntersectionObserver(([e]) => e.target.classList.toggle("isSticked", e.intersectionRatio < 1), { threshold: [1] });

document.addEventListener("DOMContentLoaded", function() {
    var aDiscord = document.createElement('a');
    aDiscord.setAttribute('href', "https://discord.gg/CE6bWsQ7QH");
    aDiscord.setAttribute('target', "_blank");
    aDiscord.innerText = " 디스코드";
    
    var iDiscord = document.createElement('i');
    iDiscord.setAttribute('class', "fab fa-discord");
    aDiscord.prepend(iDiscord);
    
    var aInstagram = document.createElement('a');
    aInstagram.setAttribute('href', "https://www.instagram.com/million_air_");
    aInstagram.setAttribute('target', "_blank");
    aInstagram.innerText = " 인스타그램";
    
    var iInstagram = document.createElement('i');
    iInstagram.setAttribute('class', "fab fa-instagram");
    aInstagram.prepend(iInstagram);
    
    var fav = sel("a#addFavoriteBtn");
    fav.after(aInstagram);
    fav.after(aDiscord);

    var article_option_area = sel("#article-option-area");
    sel("#board-info-bottom").append(article_option_area);

    var article_info = sel("div#article-info");
    observer.observe(article_info);
});
