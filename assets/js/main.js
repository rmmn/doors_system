(function () {
    let menuButton = document.querySelector(".menu"),
        menu = document.querySelector(".nav.left"),
        searchButton = document.querySelector(".nav_link.search_link"),
        search = document.querySelector(".search"),
        searchClose = document.querySelector(".search>.search_container>.close_search"),
        filterTitle = document.querySelectorAll(".category_filters>.category_filter_title"),
        toggleFilter = document.querySelector(".toggle_filter");

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

    search.addEventListener("click", function (e) {
        if (e.target.classList.contains("search")) {
            ToggleSearch(0, 300);
        }
    });

    toggleFilter.addEventListener("click", function (e) {
        e.preventDefault();
        e.currentTarget.nextElementSibling.classList.toggle("open");
    });

    filterTitle.forEach(function (el) {
        el.addEventListener("click", function (e) {
            e.currentTarget.classList.toggle("active");
            e.currentTarget.nextElementSibling.classList.toggle("open");
        }, false);
    });

    $(".range_slider").slider({
        range: true,
        animate: 100,
        min: 0,
        max: 17000,
        step: 1,
        values: [400, 17000],
        slide: function (event, ui) {
            $('#priceMinValue').val(ui.values[0]);

            $('#priceMaxValue').val(ui.values[1]);
        }
    });

    $('#priceMinValue').val($(".range_slider").slider("values", 0));


    $('#priceMaxValue').val($(".range_slider").slider("values", 1));


    $('#priceMinValue').keyup(function () {
        $(".range_slider").slider("values",
            [$(this).val(),
            $('#priceMaxValue').val()]
        );
    });

    $('#priceMaxValue').keyup(function () {
        $(".range_slider").slider("values",
            [$('#priceMinValue').val(),
            $(this).val()]
        );
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