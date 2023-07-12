function sel(selector) {
    let ret = document.querySelector(selector);
    return ret;
};

function CreateSocialLink(innerText, url, iconClass) {
    let ret = document.createElement('a');
    ret.setAttribute('href', url);
    ret.setAttribute('target', "_blank");
    ret.innerText = " " + innerText;
    
    var icon = document.createElement('i');
    icon.setAttribute('class', iconClass);
    ret.prepend(icon);
    
    return ret;
};

function ToggleOnClickListener(element, toggleClassName, Timeout = 1200) {
    element.addEventListener("click", (e) => {
        element.classList.add(toggleClassName);
        setTimeout(() => { element.classList.remove(toggleClassName); }, Timeout);
    });
}

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
    
    var profileImage = sel("img#board-info-profile-img");
    ToggleOnClickListener(profileImage, "pump");

    var voteBtn = sel("#article-content-wrapper>.vote-area>button");
    ToggleOnClickListener(voteBtn, "animate");
});
