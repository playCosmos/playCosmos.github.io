function sel(selector) {
    let ret = document.querySelector(selector);
    return ret;
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

function ToggleOnClickListener(element, toggleClassName, Timeout = 600) {
    element.addEventListener("click", (e) => {
        element.classList.add(toggleClassName);
        setTimeout(() => { element.classList.remove(toggleClassName); }, Timeout);
    });
}

function CopyArticleListCategory(original, copied, checkPoint = null ) {
    if (window.innerWidth >= 1400 && checkPoint != null ) {
        if (sel("#article-list #article-list-category.new") != null) { }
        else { original.after(copied); }
    }
    else { copied.remove(); }
}

/*const observer = new IntersectionObserver(([e]) => e.target.classList.toggle("isSticked", e.intersectionRatio < 1), { threshold: [1] });*/

document.addEventListener("DOMContentLoaded", function() {
    if (sel("html").classList.contains("darkmode"))
    {
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#bdc8db');
    }
    else
    {
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#31405a');
    }
    /* SNS 항목 추가 */
    var info = sel("#board-info-bottom");
    if (info != null)
    {
        info.append(CreateSocialLink("fab fa-youtube", "https://www.youtube.com/", "유튜브"));
        info.append(CreateSocialLink("fab fa-discord", "https://discord.com/channels/@me/472262435261251594", "디스코드"));
        info.append(CreateSocialLink("fab fa-instagram", "https://www.instagram.com/million_air_", "인스타그램"));
        
        /*var article_option_area = sel("#article-option-area");    
        article_option_area.setAttribute('title', "공지 숨김/보기");
        info.append(article_option_area);*/
    }
    /* 다크모드 전환 스위치 조정 */
    /*var spacer = document.createElement('div');
    spacer.setAttribute('class',"spacer");
    sel(".menu-wrapper").append(spacer);
    sel(".menu-wrapper").append(sel("button#theme_btn_box"))*/
    
    /* 게시글 제목 감지 */
    var article_info = sel("div#article-info");
    //if (article_info != null)
    //    observer.observe(article_info);

    /* 게시글 내 카테고리 복사 */
    var article_list_category = sel("#article-list #article-list-category");
    var new_category = article_list_category.cloneNode(true);
    new_category.classList.add("new");
    new_category.classList.add("can-float");
    
    CopyArticleListCategory(article_list_category, new_category, article_info);
    window.addEventListener('resize', function(event) { CopyArticleListCategory(article_list_category, new_category, article_info); }, true);
    
    /* 추천버튼 클릭 후 파티클 애니메이션 */
    var voteBtn = sel("#article-content-wrapper>.vote-area>button");
    if (voteBtn != null)
        ToggleOnClickListener(voteBtn, "animate");
});
