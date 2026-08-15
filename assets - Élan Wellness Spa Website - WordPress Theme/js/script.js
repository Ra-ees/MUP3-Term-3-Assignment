document.addEventListener("DOMContentLoaded", () => {

    /* ============================
       MOBILE MENU
    ============================ */

    const menuButton = document.querySelector("button.md\\:hidden");
    const desktopMenu = document.querySelector("nav ul");

    if (menuButton && desktopMenu) {

        let mobileMenu = null;

        menuButton.addEventListener("click", () => {

            if (!mobileMenu) {

                mobileMenu = desktopMenu.cloneNode(true);

                mobileMenu.className =
                    "absolute top-full left-0 w-full bg-white shadow-xl flex flex-col text-center py-6 gap-6 text-gray-700";

                document.querySelector("nav").appendChild(mobileMenu);

            } else {

                mobileMenu.remove();
                mobileMenu = null;

            }

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

    /* ============================
       PAGE FADE IN
    ============================ */

    document.body.style.opacity = "0";
    document.body.style.transition = "opacity .7s ease";

    requestAnimationFrame(() => {

        document.body.style.opacity = "1";

    });

    /* ============================
       BACK TO TOP BUTTON
    ============================ */

    const topButton = document.createElement("button");

    topButton.innerHTML = '<i class="fa-solid fa-chevron-up"></i>';

    topButton.style.position = "fixed";
    topButton.style.right = "25px";
    topButton.style.bottom = "25px";
    topButton.style.width = "55px";
    topButton.style.height = "55px";
    topButton.style.borderRadius = "50%";
    topButton.style.border = "none";
    topButton.style.background = "#C8A96A";
    topButton.style.color = "#fff";
    topButton.style.fontSize = "18px";
    topButton.style.cursor = "pointer";
    topButton.style.display = "none";
    topButton.style.zIndex = "9999";
    topButton.style.transition = ".3s ease";

    document.body.appendChild(topButton);

    window.addEventListener("scroll", () => {

        topButton.style.display = window.scrollY > 500 ? "block" : "none";

    });

    topButton.addEventListener("click", () => {

        window.scrollTo({

            top: 0,
            behavior: "smooth"

        });

    });

});
