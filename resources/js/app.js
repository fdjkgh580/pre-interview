// img to svg
import "./svg";

// index blog arrow btn
const blogCard = document.querySelector(".iw_blog-item-card-container");
const blogPrevBtn = document.querySelector(".iw_for-blog .iw_prevBtn");
const blogNextBtn = document.querySelector(".iw_for-blog .iw_nextBtn");
function moveEnd() {
    blogCard.style.transform = "translateX(calc((-100% + 740px) / 2))";
}
function moveFront() {
    blogCard.style.transform = "translateX(calc((100% - 740px) / 2 + 10px))";
}
blogNextBtn && blogNextBtn.addEventListener("click", moveEnd);
blogPrevBtn && blogPrevBtn.addEventListener("click", moveFront);

// index hot-item-card : OwlCarousel2 https://owlcarousel2.github.io/OwlCarousel2/
$(document).ready(function() {
    $("#item2").owlCarousel({
        loop: true,
        margin: 10,
        nav: true
    });
    $("#item1").owlCarousel({
        loop: true,
        margin: 10,
        nav: true
    });
});

$(document).ready(function() {
    $("#owl-school-img").owlCarousel({
        center: true,
        items: 6,
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            // breakpoint from 0 ~ 479
            0: {
                items: 1
            },
            // breakpoint from 481 ~ 739
            480: {
                items: 3,
                center: true,
                stagePadding: 50
            },
            // breakpoint from 740 up
            740: {
                items: 6,
                // stagePadding: 50,
                center: true
                // loop: true,
                // startPosition: 0
            },
            1100: {
                stagePadding: 0
            }
        }
    });

    var parentDOM = document.getElementById("hotItem");
    var owlCarouselActive = parentDOM.getElementsByClassName("owl-item active");
    var first = owlCarouselActive[0]; //get first item
    var last = owlCarouselActive[owlCarouselActive.length - 1]; //get last item
    console.log(first);
    // first.style.opacity = 0.2;
    // last.style.opacity = 0.2;

    var owl = $(".owl-card-item").owlCarousel({
        items: 3,
        nav: false,
        margin: 8,
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1,
                stagePadding: 50,
                startPosition: 0
            },
            740: {
                items: 2,
                stagePadding: 50,
                center: false,
                startPosition: 0
            },
            1100: {
                item: 3
            }
        }
    });

    jQuery(".hotItemNextBtn").click(function() {
        owl.trigger("next.owl.carousel");
    });
    // Go to the previous item
    jQuery(".hotItemPrevBtn").click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger("prev.owl.carousel", [300]);
    });

    var owlHotList = $("#owl-hot-list").owlCarousel({
        items: 1,
        nav: false,
        margin: 0,
        loop: true,
        dots: false
    });

    jQuery(".hotListNextBtn").click(function() {
        owlHotList.trigger("next.owl.carousel");
    });
    // Go to the previous item
    jQuery(".hotListPrevBtn").click(function() {
        owlHotList.trigger("prev.owl.carousel", [300]);
    });
});
