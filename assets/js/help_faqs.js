document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       TOP OFFERS BAR
    ========================== */
    const offers = [
        "🎉 Summer Sale! Flat 25% OFF on all ethnic wear | Use Code: INDIASALE25 | Free Shipping on orders over ₹999",
        "🔥 Buy 2 Get 1 Free on Select Sarees! Hurry, limited stock!",
        "💥 Exclusive Deal: ₹500 OFF on orders above ₹3000 | Use Code: BIGSAVE500",
        "✨ New Arrivals! Get 15% OFF with code NEW15"
    ];

    let currentIndex = 0;
    const offersBar = document.getElementById("offersBar");

    if (offersBar) {
        offersBar.addEventListener("animationiteration", () => {
            currentIndex = (currentIndex + 1) % offers.length;
            offersBar.innerHTML = offers[currentIndex];
        });
    }

    /* =========================
       SEARCH BAR TOGGLE
    ========================== */
    function setupSearchToggle(toggleId, boxId) {
        const toggle = document.getElementById(toggleId);
        const box = document.getElementById(boxId);

        if (!toggle || !box) return;

        toggle.addEventListener("click", function (e) {
            e.stopPropagation();
            box.classList.toggle("d-none");
        });

        document.addEventListener("click", function (e) {
            if (!box.contains(e.target) && !toggle.contains(e.target)) {
                box.classList.add("d-none");
            }
        });
    }

    setupSearchToggle("searchToggle1", "searchBox1");
    setupSearchToggle("searchToggle2", "searchBox2");

    /* =========================
       GO TO TOP BUTTON
    ========================== */
    const arGoTopBtn = document.getElementById("ar-goTopBtn");

    if (arGoTopBtn) {
        window.addEventListener("scroll", () => {
            arGoTopBtn.style.display = window.scrollY > 250 ? "flex" : "none";
        });

        arGoTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

});
