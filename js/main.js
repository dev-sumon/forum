// category toggle
document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("categoryToggle");
    const categoryList = document.querySelector(".category_list ul");

    if (window.innerWidth <= 768) {
        categoryList.style.display = "none"; // default hide

        toggle.addEventListener("click", function () {
            if (categoryList.style.display === "none") {
                categoryList.style.display = "block";
            } else {
                categoryList.style.display = "none";
            }
        });
    }
});

// owl-carousel slider
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})