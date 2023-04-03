var backgrounds = ['bg1', 'bg2', 'bg3'];
var current = 0;
var time = 5000;

function nextBackground() {
    current++;
    if (current > backgrounds.length - 1) {
        current = 0;
    }
    document.querySelector('.background').className = 'background ' + backgrounds[current];
    setTimeout(nextBackground, time);
}

setTimeout(nextBackground, time);