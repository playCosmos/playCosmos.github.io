function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

const observer = new IntersectionObserver(([e]) => e.target.classList.toggle("isSticked", e.intersectionRatio < 1), { threshold: [1] });

document.addEventListener("DOMContentLoaded", function() {  
    var a1 = new document.createElement('div');
    var a2 = new document.createElement('div');
    
    var article_info = sel("div#article-info");
    observer.observe(article_info);
    article_info.before(a1);
    a1.setAttribute("id", "stick1");
    a1.prepend(article_info);
    
    var article_list = sel("#article-list");
    article_list.before(a2);
    a2.setAttribute("id", "stick2");
    a2.prepend(article_list);
});
