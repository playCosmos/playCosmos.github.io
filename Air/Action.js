function sel(selector) {
    let target = document.querySelector(selector);
    return target;
};

const observer = new IntersectionObserver(([e]) => e.target.classList.toggle("isSticked", e.intersectionRatio < 1), { threshold: [1] });
document.addEventListener("DOMContentLoaded", function() { observer.observe(sel("div#article-info")); });
