function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

function detect() {
    var iframe = document.createElement("iframe");
    iframe.height = "1px";
    iframe.width = "1px";
    iframe.id = "ads-text-iframe";
    iframe.src = "http://domain.com/ads.html";
    
    document.body.appendChild(iframe);
    
    setTimeout(function() {
        var iframe = document.getElementById("ads-text-iframe");
        if(iframe.style.display == "none" || iframe.style.display == "hidden" || iframe.style.visibility == "hidden" || iframe.offsetHeight == 0)
        {
            console.log('AdBlock is enabled');
            iframe.remove();            
            return true;
        }
        else
        {
            console.log('AdBlock is not enabled');
            iframe.remove();
            return false;
        }
    }, 100);
}

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
    
    var info = sel("#board-info-bottom");
    info.append(aDiscord);
    info.append(aInstagram);

    var article_option_area = sel("#article-option-area");
    sel("#board-info-bottom").append(article_option_area);

    var article_info = sel("div#article-info");
    if (article_info != null)
        observer.observe(article_info);

    var article_list_category = sel("#article-list-category");
    var nxt = article_list_category.nextElementSibling;
    if (detect())
        if (!!nxt.getAttribute('style'))
        {
            nxt.remove();
        }
});
