var review = document.getElementById("reviewText");
var input = document.getElementById("input");

input.addEventListener("click", (event) => {
    review.style.height = "100%";
    input.style.textAlign = "start";
});

input.addEventListener("mouseout", (event) => {
    review.style.height = "10%";
    input.style.textAlign = "center";
});
