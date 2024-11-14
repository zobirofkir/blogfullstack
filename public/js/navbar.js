document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");

    function handleActiveLink(event) {
        navLinks.forEach((link) => {
            link.classList.remove("text-blue-500", "text-white");
            link.classList.add("text-gray-700");
        });

        event.target.classList.add("text-blue-500");

        localStorage.setItem("active-link", event.target.href);
    }

    navLinks.forEach((link) => {
        link.addEventListener("click", handleActiveLink);
    });

    const activeLink = localStorage.getItem("active-link");
    if (activeLink) {
        navLinks.forEach((link) => {
            if (link.href === activeLink) {
                link.classList.add("text-blue-500");
                link.classList.remove("text-gray-700");
            }
        });
    }
});
