function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

function CreateSocialLink(innerText, url, iconClass) {
    let target = document.createElement('a');
    target.setAttribute('href', url);
    target.setAttribute('target', "_blank");
    target.innerText = " " + innerText;
    
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
        info.append(CreateSocialLink("유튜브", "https://www.youtube.com/", "fab fa-youtube"));
        info.append(CreateSocialLink("디스코드", "https://discord.gg/CE6bWsQ7QH", "fab fa-discord"));
        info.append(CreateSocialLink("인스타그램", "https://www.instagram.com/million_air_", "fab fa-instagram"));
        
        var article_option_area = sel("#article-option-area");    
        article_option_area.setAttribute('title', "공지 숨김/보기");
        info.append(article_option_area);
    }
    
    var article_info = sel("div#article-info");
    if (article_info != null)
        observer.observe(article_info);
});
