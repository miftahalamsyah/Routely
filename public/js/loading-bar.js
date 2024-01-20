// loading-bar.js

window.onload = function () {
    var loadingBar = document.getElementById('loading-bar');

    // Hide the loading bar when the page is fully loaded
    if (loadingBar) {
        loadingBar.style.opacity = 0;
        setTimeout(function () {
            loadingBar.style.display = 'none';
        }, 500);
    }
};
