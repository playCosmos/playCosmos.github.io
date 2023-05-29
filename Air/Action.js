const el = document.querySelector("#article-info");
const observer = new IntersectionObserver( ([e]) => e.target.classList.toggle("is-pinned", e.intersectionRatio < 1),  { threshold: [1] });
observer.observe(el);

