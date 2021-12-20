const searchBox = document.querySelector(".search-box");
const navBtnContainer = document.querySelector(".nav-btn-container");
const searchBtn = document.querySelector(".search-btn");
const closeBtn = document.querySelector(".close-btn");

searchBtn.addEventListener("click",() => {
    searchBox.classList.add("active");
    navBtnContainer.classList.add("active");
});

closeBtn.addEventListener("click",() => {
    searchBox.classList.remove("active");
    navBtnContainer.classList.remove("active");
});

document.querySelector("#search-box").addEventListener("keyup", (e) => {

    cardElement.querySelector(".card-title-label").textContent = title;
    let query = e.currentTarget.value;

    let cards = document.querySelectorAll(".container");
    for (let card of cards) {
        if (card.textContent.indexOf(query) >= 0) {
            card.classList.remove("hidden");
        }
        else {
            card.classList.add("hidden");
        }
    }
});
