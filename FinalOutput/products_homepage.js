const imgs = document.getElementById('imgs');
const img = document.querySelectorAll("#imgs img");

let index = 0;
let interval = setInterval(run, 5000);

function run() {
    index++;
    changeImage();
}

function changeImage() {
    if (index >= img.length) {
        index = 0;
    }
    imgs.style.transform = `translateX(${-index * 600}px)`;
}

function resetInterval() {
    clearInterval(interval); // Pass the interval ID as an argument
    interval = setInterval(run, 5000);
}