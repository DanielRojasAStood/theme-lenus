document.addEventListener("click", function (e) {
    if (e.target.classList.contains("hamburger-toggle")) {
        e.target.children[0].classList.toggle("active");
    }
});
window.addEventListener("scroll", function () {
    let header = document.querySelector("header");
    header.classList.toggle("scrollBioD", window.scrollY > 0);
});

// ------------------------------------------------ //

let menu = document.querySelector(".hamburger");

function toggleMenu(event) {
    this.classList.toggle("is-active");
    document.querySelector(".menuppal").classList.toggle("is_active");
    event.preventDefault();
}

menu.addEventListener("click", toggleMenu, false);

// ------------------------------------------------ //

const slider_input = document.getElementById("slider_input"),
    slider_thumb = document.getElementById("slider_thumb"),
    slider_line = document.getElementById("slider_line");

function showSliderValue() {
    if (slider_input) {
        slider_thumb.innerHTML = slider_input.value;
        const bulletPosition = slider_input.value / slider_input.max,
            space = slider_input.offsetWidth - slider_thumb.offsetWidth;
    
        slider_thumb.style.left = bulletPosition * space + "px";
        slider_line.style.width = slider_input.value + "%";
    }
}

showSliderValue();
window.addEventListener("resize", showSliderValue);
if (slider_input) {
    slider_input.addEventListener("input", showSliderValue, false);
}