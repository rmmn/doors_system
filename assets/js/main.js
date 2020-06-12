(function () {
    let menuButton = document.querySelector(".menu"),
        menu = document.querySelector(".nav.left"),
        searchButton = document.querySelector(".nav_link.search_link"),
        search = document.querySelector(".search"),
        searchClose = document.querySelector(".search>.search_container>.close_search");

    menuButton.addEventListener("click", function (e) {
        e.preventDefault();
        menu.classList.toggle("show");
        e.currentTarget.classList.toggle("active");
    });

    searchButton.addEventListener("click", function (e) {
        e.preventDefault();
        ToggleSearch(0, 300);
    });

    searchClose.addEventListener("click", function (e) {
        e.preventDefault();
        ToggleSearch(0, 300);
    });

    function ToggleSearch(delay = 0, duration = 300) {
        if (!search.classList.contains("active")) {

            search.style.display = "block";
            search.animate(
                [
                    { opacity: 0 },
                    { opacity: 1 }
                ], {
                delay: delay,
                duration: duration
            }
            ).onfinish = function () {
                search.style.opacity = 1;
                search.classList.add("active");
            };
        } else {
            search.animate(
                [
                    { opacity: 1 },
                    { opacity: 0 }
                ], {
                delay: delay,
                duration: duration
            }
            ).onfinish = function () {
                search.style.opacity = 0;
                search.style.display = "none";
                search.classList.remove("active");
            };
        }
    }
})();