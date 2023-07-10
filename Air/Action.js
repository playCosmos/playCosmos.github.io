function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

const observer = new IntersectionObserver(([e]) => e.target.classList.toggle("isSticked", e.intersectionRatio < 1), { threshold: [1] });

document.addEventListener("DOMContentLoaded", function() {
    // var a1 = document.createElement('div');
    // var a2 = document.createElement('div');
    
    var aDiscord = document.createElement('a');
    aDiscord.setAttribute('href', "https://discord.gg/CE6bWsQ7QH");
    aDiscord.innerText = " 디스코드";
    
    var iDiscord = document.createElement('i');
    iDiscord.setAttribute('class', "fab fa-discord");
    aDiscord.prepend(iDiscord);
    
    var aInstagram = document.createElement('a');
    aInstagram.setAttribute('href', "https://www.instagram.com/million_air_");
    aInstagram.innerText = " 인스타그램";
    
    var iInstagram = document.createElement('i');
    iInstagram.setAttribute('class', "fab fa-instagram");
    aInstagram.prepend(iInstagram);
    
    var fav = sel("a#addFavoriteBtn");
    fav.after(aInstagram);
    fav.after(aDiscord);    

    var article_info = sel("div#article-info");
    observer.observe(article_info);
    // article_info.before(a1);
    // a1.setAttribute("id", "stick1");
    // a1.prepend(article_info);
    
    // var article_list = sel("#article-list");
    // article_list.before(a2);
    // a2.setAttribute("id", "stick2");
    // a2.prepend(article_list);
});
