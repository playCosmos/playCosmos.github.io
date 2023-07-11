function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

function CreateSocialLink(innerText, url, iconClass) {
    let target = document.createElement('a');
    target.setAttribute('href', url);
    aYoutube.setAttribute('target', "_blank");
    aYoutube.innerText = " " + innerText;
    
    var icon = document.createElement('i');
    icon.setAttribute('class', iconClass);
    target.prepend(icon);
    
    return target;
};

const observer = new IntersectionObserver(([e]) => e.target.classList.toggle("isSticked", e.intersectionRatio < 1), { threshold: [1] });

document.addEventListener("DOMContentLoaded", function() {
    var info = sel("#board-info-bottom");
    if (info != null)
    {
        /*
        var aYoutube = document.createElement('a');
        aYoutube.setAttribute('href', "https://www.youtube.com/");
        aYoutube.setAttribute('target', "_blank");
        aYoutube.innerText = " 유튜브";
        
        var iYoutube = document.createElement('i');
        iYoutube.setAttribute('class', "fab fa-youtube");
        aYoutube.prepend(iYoutube);
        
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
        */
        
        var aYoutube = CreateSocialLink("유튜브", "https://www.youtube.com/", "fab fa-youtube");
        var aDiscord = CreateSocialLink("디스코드", "https://discord.gg/CE6bWsQ7QH", "fab fa-discord");
        var aInstagram = CreateSocialLink("인스타그램", "https://www.instagram.com/million_air_", "fab fa-instagram");
        
        info.append(aYoutube);
        info.append(aDiscord);
        info.append(aInstagram);
        
        var article_option_area = sel("#article-option-area");    
        article_option_area.setAttribute('title', "공지 숨김/보기");
        info.append(article_option_area);
    }
    
    var article_info = sel("div#article-info");
    if (article_info != null)
        observer.observe(article_info);
});
