document.addEventListener("DOMContentLoaded", () => {

/* ============================
   MOBILE MENU
============================ */

const menuButton =
    document.getElementById("mobile-menu-button");

const mobileMenu =
    document.getElementById("mobile-menu");

const menuIcon =
    document.getElementById("mobile-menu-icon");


if (menuButton && mobileMenu && menuIcon) {

    let menuOpen = false;


    menuButton.addEventListener("click", () => {

        menuOpen = !menuOpen;


        /* ============================
           OPEN MENU
        ============================ */

        if (menuOpen) {

            /*
             * Make menu available first,
             * but keep it in its closed state.
             */

            mobileMenu.style.display = "block";

            mobileMenu.style.opacity = "0";

            mobileMenu.style.transform =
                "translateY(-18px)";

            mobileMenu.style.maxHeight = "0";


            menuButton.setAttribute(
                "aria-expanded",
                "true"
            );

            menuButton.setAttribute(
                "aria-label",
                "Close navigation menu"
            );


            /* Change hamburger to X */

            menuIcon.classList.remove(
                "fa-bars"
            );

            menuIcon.classList.add(
                "fa-xmark"
            );


            /*
             * Animate menu open.
             * Two animation frames allow the browser
             * to register the closed state first.
             */

            requestAnimationFrame(() => {

                requestAnimationFrame(() => {

                    mobileMenu.style.opacity = "1";

                    mobileMenu.style.transform =
                        "translateY(0)";

                    mobileMenu.style.maxHeight =
                        "600px";

                });

            });

        }


        /* ============================
           CLOSE MENU
        ============================ */

        else {

            menuButton.setAttribute(
                "aria-expanded",
                "false"
            );

            menuButton.setAttribute(
                "aria-label",
                "Open navigation menu"
            );


            /* Change X back to hamburger */

            menuIcon.classList.remove(
                "fa-xmark"
            );

            menuIcon.classList.add(
                "fa-bars"
            );


            /*
             * Smoothly reverse the
             * opening animation.
             */

            mobileMenu.style.opacity = "0";

            mobileMenu.style.transform =
                "translateY(-18px)";

            mobileMenu.style.maxHeight =
                "0";


            /*
             * Wait until the 0.45 second
             * animation has finished before
             * completely hiding the menu.
             */

            setTimeout(() => {

                if (!menuOpen) {

                    mobileMenu.style.display =
                        "none";

                }

            }, 450);

        }

    });


    /* ============================
       CLOSE MENU AFTER LINK CLICK
    ============================ */

    mobileMenu
        .querySelectorAll("a")
        .forEach(link => {

            link.addEventListener("click", () => {

                menuOpen = false;

                menuButton.setAttribute(
                    "aria-expanded",
                    "false"
                );

                menuIcon.classList.remove(
                    "fa-xmark"
                );

                menuIcon.classList.add(
                    "fa-bars"
                );

            });

        });

}


    /* ============================
       MOBILE NAVIGATION HOVER
    ============================ */

    document
        .querySelectorAll(".mobile-nav-link")
        .forEach(link => {

            link.addEventListener(
                "mouseenter",
                () => {

                    link.style.color =
                        "#C8A96A";

                    link.style.paddingLeft =
                        "8px";

                }
            );


            link.addEventListener(
                "mouseleave",
                () => {

                    link.style.paddingLeft =
                        "0";

                }
            );

        });


    /* ============================
       MOBILE BOOK BUTTON HOVER
    ============================ */

    const mobileBookButton =
        document.getElementById(
            "mobile-book-button"
        );


    if (mobileBookButton) {

        mobileBookButton.addEventListener(
            "mouseenter",
            () => {

                mobileBookButton.style.transform =
                    "translateY(-2px)";

                mobileBookButton.style.backgroundColor =
                    "#B99550";

            }
        );


        mobileBookButton.addEventListener(
            "mouseleave",
            () => {

                mobileBookButton.style.transform =
                    "translateY(0)";

                mobileBookButton.style.backgroundColor =
                    "#C8A96A";

            }
        );

    }


    /* ============================
       ACTIVE NAVIGATION
    ============================ */

    const currentPage =
        location.pathname
            .split("/")
            .filter(Boolean)
            .pop() || "";


    document
        .querySelectorAll("nav a")
        .forEach(link => {

            const href =
                link.getAttribute("href");

            if (!href) return;


            try {

                const linkPage =
                    new URL(
                        href,
                        window.location.origin
                    )
                    .pathname
                    .split("/")
                    .filter(Boolean)
                    .pop() || "";


                if (linkPage === currentPage) {

                    link.classList.add(
                        "text-secondary"
                    );

                    link.style.fontWeight =
                        "600";

                }

            }

            catch (error) {

                console.log(
                    "Navigation check skipped."
                );

            }

        });


    /* ============================
       SMOOTH SCROLL
    ============================ */

    document
        .querySelectorAll('a[href^="#"]')
        .forEach(anchor => {

            anchor.addEventListener(
                "click",
                function (e) {

                    const target =
                        document.querySelector(
                            this.getAttribute("href")
                        );


                    if (!target) return;


                    e.preventDefault();


                    target.scrollIntoView({

                        behavior: "smooth"

                    });

                }
            );

        });


    /* ============================
       BACK TO TOP BUTTON
    ============================ */

    const backToTop =
        document.createElement("button");


    backToTop.innerHTML =
        '<i class="fa-solid fa-arrow-up"></i>';


    backToTop.setAttribute(
        "aria-label",
        "Back to top"
    );


    document.body.appendChild(
        backToTop
    );


    /* Small button styling */

    backToTop.style.position =
        "fixed";

    backToTop.style.right =
        "18px";

    backToTop.style.bottom =
        "18px";

    backToTop.style.width =
        "34px";

    backToTop.style.height =
        "34px";

    backToTop.style.borderRadius =
        "50%";

    backToTop.style.border =
        "none";

    backToTop.style.backgroundColor =
        "#C8A96A";

    backToTop.style.color =
        "#FFFFFF";

    backToTop.style.fontSize =
        "13px";

    backToTop.style.cursor =
        "pointer";

    backToTop.style.zIndex =
        "9999";

    backToTop.style.display =
        "none";

    backToTop.style.alignItems =
        "center";

    backToTop.style.justifyContent =
        "center";

    backToTop.style.boxShadow =
        "0 3px 10px rgba(0,0,0,0.18)";

    backToTop.style.transition =
        "opacity 0.3s ease, transform 0.3s ease";


    /* Show after scrolling */

    window.addEventListener(
        "scroll",
        () => {

            if (window.scrollY > 300) {

                backToTop.style.display =
                    "flex";

            }

            else {

                backToTop.style.display =
                    "none";

            }

        }
    );


    /* Smooth scroll to top */

    backToTop.addEventListener(
        "click",
        () => {

            window.scrollTo({

                top: 0,
                behavior: "smooth"

            });

        }
    );

});
