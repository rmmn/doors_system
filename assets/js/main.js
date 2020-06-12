(function () {
    let menuButton = document.querySelector(".menu"),
        menu = document.querySelector(".nav.left");

    menuButton.addEventListener("click", function (e) {
        e.preventDefault();
        menu.classList.toggle("show");
        e.currentTarget.classList.toggle("active");
    })
})();