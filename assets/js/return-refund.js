/* ===============================
       TOP OFFERS BAR
    =============================== */
        const offers = [
            "🎉 Summer Sale! Flat 25% OFF on all ethnic wear | Use Code: INDIASALE25 | Free Shipping on orders over ₹999",
            "🔥 Buy 2 Get 1 Free on Select Sarees! Hurry, limited stock!",
            "💥 Exclusive Deal: ₹500 OFF on orders above ₹3000 | Use Code: BIGSAVE500",
            "✨ New Arrivals! Get 15% OFF with code NEW15"
        ];

        let currentIndex = 0;
        const offersBar = document.getElementById('offersBar');

        if (offersBar) {
            offersBar.addEventListener('animationiteration', () => {
                currentIndex = (currentIndex + 1) % offers.length;
                offersBar.innerHTML = offers[currentIndex];
            });
        }

        /* ===============================
           GO TO TOP BUTTON
        =============================== */
        const arGoTopBtn = document.getElementById("ar-goTopBtn");

        if (arGoTopBtn) {
            window.addEventListener("scroll", () => {
                if (window.scrollY > 250) {
                    arGoTopBtn.style.display = "flex";
                } else {
                    arGoTopBtn.style.display = "none";
                }
            });

            arGoTopBtn.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        }