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

document.querySelector("#search").addEventListener("keyup", (e) => {

    /*cardElement.querySelector(".card-title-label").textContent = title;*/
    let query = e.currentTarget.value.toLowerCase();

    let cards = document.querySelectorAll(".container");
    for (let card of cards) {
        if (card.textContent.toLowerCase().indexOf(query) >= 0) {
            card.classList.remove("hidden");
        }
        else {
            card.classList.add("hidden");
        }
    }
});


let BookmarkIcons = document.querySelectorAll(".container-content .bm-icon");
for(let i = 0; i < BookmarkIcons.length; i++){
    let BookmarkIcon = BookmarkIcons[i];
    //b) Za svaki bookmark registiraj funkciju koja će se pokrenuti na klik
    BookmarkIcon.addEventListener("click", handleBookmarkIconClick);
}

function handleBookmarkIconClick(e){
    //c) Promini klase  za efekt punog/praznog srca
    let BookmarkIcon = e.currentTarget; //Bookmark na koje smo sad klikli
    if(BookmarkIcon.classList.contains("far")){ //"prazni" bookmark 
        BookmarkIcon.classList.remove("far");
        BookmarkIcon.classList.add("fas");
    }
    else {
        BookmarkIcon.classList.remove("fas");
        BookmarkIcon.classList.add("far");
    }
}



