const circleCount = 10;
const container = document.getElementById('circles');
const maxSpeed = 2;
const circles = [];
const colors = ['#393E41', '#282828'];

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

function createCircle() {
    const circle = document.createElement('div');
    const size = getRandomInt(30, 150);
    circle.classList.add('circle');
    circle.style.width = `${size}px`;
    circle.style.height = `${size}px`;
    circle.style.top = `${getRandomInt(0, 100)}%`;
    circle.style.left = `${getRandomInt(0, 100)}%`;
    container.appendChild(circle);

    const speed = {
        x: (Math.random() - 0.5) * maxSpeed * 2,
        y: (Math.random() - 0.5) * maxSpeed * 2,
    };

    const circleColors = ['rgba(57, 62, 65, 0.32)', 'rgba(184, 198, 108, 0.33)', 'rgba(238, 92, 35, 0.33)', 'rgba(64, 64, 64, 0.1)'];
    setInterval(() => {
        circle.style.backgroundColor = circleColors[getRandomInt(0, circleColors.length)];
    }, 2000);

    circles.push({ element: circle, speed });
    return circle;
}

function animateCircles() {
    circles.forEach(circle => {
        const rect = circle.element.getBoundingClientRect();

        if (rect.top <= 0 || rect.bottom >= window.innerHeight) {
            circle.speed.y *= -1;
        }
        if (rect.left <= 0 || rect.right >= window.innerWidth) {
            circle.speed.x *= -1;
        }

        circle.element.style.top = `${rect.top + circle.speed.y}px`;
        circle.element.style.left = `${rect.left + circle.speed.x}px`;
    });

    requestAnimationFrame(animateCircles);
}

// function changeBackgroundColor() {
//     document.body.style.backgroundColor = colors[getRandomInt(0, colors.length)];
//     setTimeout(changeBackgroundColor, 10000);
// }

for (let i = 0; i < circleCount; i++) {
    createCircle();
}

animateCircles();
// changeBackgroundColor();