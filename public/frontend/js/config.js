function showLoader() {
    document.getElementById("de-preloader").classList.remove("d-none");
}
function hideLoader() {
    document.getElementById("de-preloader").classList.add("d-none");
}

// Get all <a> tags
const allLinks = document.querySelectorAll("a");

// Add event listener to all <a> tags
allLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
        // Check if href is not "javascript:void(0)"
        if (
            link.getAttribute("href") !== "javascript:void(0)" ||
            link.getAttribute("href") !== "#"
        ) {
            // Show loader on valid link click
            showLoader();

            // Simulate a delay (for loader) and hide it after 1 second
            setTimeout(function () {
                hideLoader();
            }, 1000);
        }
    });
});
