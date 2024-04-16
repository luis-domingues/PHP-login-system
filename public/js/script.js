//animação login
const tween = KUTE.fromTo(
    '#blob1',
    { path: '#blob1' },
    { path: '#blob2' },
    { repeat: 110, duration: 3000, yoyo: true }
)
tween.start();