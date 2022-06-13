window.onload = function() {
    let button = document.getElementById('fullscreen');
    button.onclick = toggleFullScreen();
}

function toggleFullScreen() {
    document.addEventListener('click', function(event) {
        if (!event.target.hasAttribute('data-toggle-fullscreen')) return;
        if (document.fullscreenElement) {
            document.exitFullscreen();
            return;
        }
        document.documentElement.requestFullscreen();
    })
}