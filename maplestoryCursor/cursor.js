function sel(selector) {
    let ret = document.querySelector(selector);
    return ret;
};

document.addEventListener("DOMContentLoaded", function() {
  var body = sel("body");
  body.addEventListener('mousedown', ()=> { text.innerHTML = `마우스 누르는중 `; });
});
