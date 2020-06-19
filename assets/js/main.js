(function () {
    let menuButton = document.querySelector(".menu"),
        menu = document.querySelector(".nav.left"),
        searchButton = document.querySelector(".nav_link.search_link"),
        search = document.querySelector(".search"),
        searchClose = document.querySelector(".search>.search_container>.close_search"),
        filterTitle = document.querySelectorAll(".category_filters>.category_filter_title"),
        toggleFilter = document.querySelector(".toggle_filter"),
        clearFilters = document.querySelector(".clear_filters"),
        consultationButton = document.querySelector(".get_consultation"),
        consultation = document.querySelector(".consultation_modal"),
        consultationClose = document.querySelector(".consultation_modal>.consultation_modal_container>.close_consultation_modal");

    let filters = {
        checkboxes: [
            document.querySelectorAll(".colors_list>.checkbox>input"),
            document.querySelectorAll(".material_list>.checkbox>input"),
            document.querySelectorAll(".vendor_list>.checkbox>input"),
            document.querySelectorAll(".collections_list>.checkbox>input"),
            document.querySelectorAll(".styles_list>.checkbox>input"),
        ]
    };

    let accordeon = document.querySelector('.accordeon');

    accordeon.querySelectorAll(".accordeon_item>.accordeon_item_title").forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.currentTarget.parentNode.classList.toggle("active");
        })
    })

    let photoviewer = {
        controls: {
            left: document.querySelector(".photo_view>.current>.controls>.left"),
            right: document.querySelector(".photo_view>.current>.controls>.right")
        },
        current: document.querySelector(".photo_view>.current>.current_image"),
        previews: document.querySelectorAll(".photo_view>.previews>.preview_list>ul>li")
    }

    let pcsInput = {
        down: document.querySelector(".pcs>.pcs_down"),
        up: document.querySelector(".pcs>.pcs_up"),
        number: document.querySelector(".pcs>.pcs_input")
    };

    pcsInput.down.addEventListener("click", function (e) {
        e.preventDefault();
        if (pcsInput.number.value != "" && parseInt(pcsInput.number.value) > 1) {
            pcsInput.number.value = pcsInput.number.value - 1;
        }
    });

    pcsInput.up.addEventListener("click", function (e) {
        e.preventDefault();
        if (pcsInput.number.value != "") {
            pcsInput.number.value = parseInt(pcsInput.number.value) + 1;
        }
    });

    let i = 0;
    photoviewer.controls.left.addEventListener("click", function (e) {
        e.preventDefault();
        photoviewer.previews.forEach(function (li, i, arr) {
            console.log(i);
            console.log(arr.length);
            if (li.classList.contains("active")) {
                photoviewer.current.setAttribute("src", li.nextElementSibling.querySelector("a>img").getAttribute("src"))
                li.classList.remove("active")
                li.nextElementSibling.classList.add("active")
            }
        })


        // if (photoviewer.previews[i].classList.contains("active")) {
        //     photoviewer.current.setAttribute("src", photoviewer.previews[i].nextElementSibling.querySelector("a>img").getAttribute("src"));
        //     photoviewer.previews[i].nextElementSibling.classList.add("active")
        //     photoviewer.previews[i].classList.remove("active")
        // }
        // i + 1;
    });

    class FilterModel {

        constructor() { }

        model = {}

        getModel() {
            return this.model;
        }
    }

    let fModel = new FilterModel();

    menuButton.addEventListener("click", function (e) {
        e.preventDefault();
        menu.classList.toggle("show");
        e.currentTarget.classList.toggle("active");
    });

    searchButton.addEventListener("click", function (e) {
        e.preventDefault();
        Toggle(search, 0, 300);
    });

    searchClose.addEventListener("click", function (e) {
        e.preventDefault();
        Toggle(search, 0, 300);
    });

    search.addEventListener("click", function (e) {
        if (e.target.classList.contains("search")) {
            Toggle(search, 0, 300);
        }
    });

    consultationButton.addEventListener("click", function (e) {
        e.preventDefault();
        Toggle(consultation, 0, 300);
    });

    consultationClose.addEventListener("click", function (e) {
        e.preventDefault();
        Toggle(consultation, 0, 300);
    });

    consultation.addEventListener("click", function (e) {
        if (e.target.classList.contains("consultation_modal")) {
            Toggle(consultation, 0, 300);
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

    filters.checkboxes.forEach(function (checkbox) {
        checkbox.forEach(function (chk) {
            chk.addEventListener("change", function (e) {
                fModel.model[chk.id] = chk.checked;

                sessionStorage.setItem("fModel", JSON.stringify(fModel.getModel()));
            });
        })
    });

    clearFilters.addEventListener("click", function (e) {
        e.preventDefault();
        filters.checkboxes.forEach(function (checkbox) {
            checkbox.forEach(function (chk) {
                if (chk.checked) {
                    chk.checked = !chk.checked;
                }
            })
        });

        $(".range_slider").slider("values", [400, 17000]);
        $('#priceMinValue').val($(".range_slider").slider("values", 0));
        $('#priceMaxValue').val($(".range_slider").slider("values", 1));

        fModel.model = {};
        sessionStorage.setItem("fModel", JSON.stringify(fModel.getModel()));
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

            fModel.model["price"] = { min: ui.values[0], max: ui.values[1] }
            sessionStorage.setItem("fModel", JSON.stringify(fModel.getModel()));
        }
    });

    $('#priceMinValue').val($(".range_slider").slider("values", 0));
    $('#priceMaxValue').val($(".range_slider").slider("values", 1));

    $('#priceMinValue').keyup(function () {
        $(".range_slider").slider("values", [$(this).val(), $('#priceMaxValue').val()]);

        fModel.model["price"] = { min: $(this).val(), max: $('#priceMaxValue').val() }
        sessionStorage.setItem("fModel", JSON.stringify(fModel.getModel()));
    });

    $('#priceMaxValue').keyup(function () {
        $(".range_slider").slider("values", [$('#priceMinValue').val(), $(this).val()]);

        fModel.model["price"] = { min: $('#priceMinValue').val(), max: $(this).val() }
        sessionStorage.setItem("fModel", JSON.stringify(fModel.getModel()));
    });

    function Toggle(el, delay = 0, duration = 300) {
        if (!el.classList.contains("active")) {

            el.style.display = "block";
            el.animate(
                [
                    { opacity: 0 },
                    { opacity: 1 }
                ], {
                delay: delay,
                duration: duration
            }
            ).onfinish = function () {
                el.style.opacity = 1;
                el.classList.add("active");
            };
        } else {
            el.animate(
                [
                    { opacity: 1 },
                    { opacity: 0 }
                ], {
                delay: delay,
                duration: duration
            }
            ).onfinish = function () {
                el.style.opacity = 0;
                el.style.display = "none";
                el.classList.remove("active");
            };
        }
    }
})();