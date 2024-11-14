document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");

    function handleActiveLink(event) {
        navLinks.forEach((link) => {
            const parentLi = link.closest('li');
            parentLi.classList.remove("bg-white", "text-black");  
            link.classList.remove("text-blue-500");
            link.classList.add("text-gray-700");
        });

        const parentLi = event.target.closest('li');
        parentLi.classList.add("bg-white", "text-black");  
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
                link.classList.remove("text-gray-700" , "text-white");
                const parentLi = link.closest('li');
                parentLi.classList.add("bg-white", "rounded-md"); 

                if (window.matchMedia("(max-width: 640px)").matches) {
                    parentLi.classList.add("py-2", "px-4");
                }
            }
        });
    }
});
