const app = document.getElementById('typewriter');

const typewriter = new Typewriter(app, {
    loop: true,
    delay:75
});

typewriter
    .typeString(' Desarrollo y Diseño Web')
    .pauseFor(200)
    .start();