document.getElementById("icon-up").addEventListener("click", scrollUp);

function scrollUp() {
    var currentScroll = document.documentElement.scrollTop;

    if (currentScroll > 0) {
        window.requestAnimationFrame(scrollUp);

        window.scrollTo(0, currentScroll - (currentScroll / 5));

    }
}

buttonUp = document.getElementById("icon-up");

window.onscroll = function() {
    var scroll = document.documentElement.scrollTop;
    if (scroll > 500) {
        buttonUp.style.transform = "scale(1)";
    } else if (scroll < 500) {
        buttonUp.style.transform = "scale(0)";
    }
}

document.getElementById("btn_menu").addEventListener("click", () => {
    document.querySelector(".nav-ul").classList.toggle("show");
});