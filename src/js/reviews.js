var review = document.getElementById("reviewText");
var input = document.getElementById("input");
var body = document.getElementById("bodyId");
var homeButton = document.getElementById("homeButton");
var inputClicked;


input.addEventListener("click", (event) => {
    review.style.height = "100%";
    input.style.textAlign = "start";
    console.log("input click");
    inputClicked = true;
});

body.addEventListener("click", (event) => {
    if(inputClicked) {
        inputClicked = false;
    } 
    else {
        review.style.height = "10%";
        input.style.textAlign = "center";
        console.log("body click");
    }  
});

homeButton.addEventListener("mouseover", (event) => {
    homeButton.style.cursor = "pointer";
    var homeImg = document.getElementById("homeImg"); 
    var homeTitle = document.getElementById("homeTitle"); 
    homeImg.src = "../src/assets/glue_2.svg";
    homeTitle.style.color = "#611bac";
});

homeButton.addEventListener("mouseout", (event) => {
    var homeImg = document.getElementById("homeImg"); 
    var homeTitle = document.getElementById("homeTitle"); 
    homeImg.src = "../src/assets/glue.svg";
    homeTitle.style.color = "white";
});