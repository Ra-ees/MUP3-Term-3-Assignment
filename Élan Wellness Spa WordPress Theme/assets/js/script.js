document.addEventListener("DOMContentLoaded", () => {

    /* ============================
       MOBILE MENU
    ============================ */

    const menuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuButton && mobileMenu) {

        menuButton.addEventListener("click", () => {

            mobileMenu.classList.toggle("hidden");

        });

    }

    /* ============================
       ACTIVE NAVIGATION
    ============================ */

    const currentPage = location.pathname.split("/").pop();

    document.querySelectorAll("nav a").forEach(link => {

        const href = link.getAttribute("href");

        if (href === currentPage) {

            link.classList.add("text-secondary");
            link.style.fontWeight = "600";

        }

    });

    /* ============================
       SMOOTH SCROLL
    ============================ */

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener("click", function (e) {

            const target = document.querySelector(this.getAttribute("href"));

            if (!target) return;

            e.preventDefault();

            target.scrollIntoView({

                behavior: "smooth"

            });

        });

    });

});
