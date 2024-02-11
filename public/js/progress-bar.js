// JavaScript to update scroll progress bar
window.onscroll = function() {
    updateProgressBar();
};

function updateProgressBar() {
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;
    const documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

    // Ensure scrollPosition is never negative
    const normalizedScrollPosition = Math.max(scrollPosition, 0);

    const scrollPercentage = (normalizedScrollPosition / documentHeight) * 100;

    document.getElementById('scroll-progress').style.width = scrollPercentage + '%';
}

// Initial update on page load
updateProgressBar();
