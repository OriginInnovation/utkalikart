/* =============================
   GLOBAL FUNCTIONS
============================= */

// Simple horizontal scroll (if used anywhere)
function scrollSlider(direction) {
    const slider = document.getElementById('slider');
    if (!slider) return;

    const scrollAmount = 200;
    slider.scrollBy({
        left: direction === 1 ? scrollAmount : -scrollAmount,
        behavior: 'smooth'
    });
}

/* =============================
   DOM READY
============================= */
document.addEventListener("DOMContentLoaded", () => {

    /* =============================
       SHOP ROLE CARD SLIDER
    ============================= */
    const slider = document.querySelector('.shop-role-slider-wrapper');
    const prevBtn = document.getElementById('prevCard');
    const nextBtn = document.getElementById('nextCard');

    if (slider && prevBtn && nextBtn) {
        const cards = Array.from(slider.children);
        const cardWidth = 310;
        const visibleCards = Math.floor(slider.offsetWidth / cardWidth);
        const totalCards = cards.length;

        const prependCards = cards.slice(-visibleCards).map(c => c.cloneNode(true));
        const appendCards = cards.slice(0, visibleCards).map(c => c.cloneNode(true));

        prependCards.forEach(card => slider.insertBefore(card, slider.firstChild));
        appendCards.forEach(card => slider.appendChild(card));

        let scrollPosition = cardWidth * visibleCards;
        slider.scrollLeft = scrollPosition;

        const scrollToPos = pos => {
            slider.scrollTo({ left: pos, behavior: 'smooth' });
        };

        nextBtn.addEventListener('click', () => {
            scrollPosition += cardWidth;
            scrollToPos(scrollPosition);

            if (scrollPosition >= cardWidth * (totalCards + visibleCards)) {
                setTimeout(() => {
                    scrollPosition = cardWidth * visibleCards;
                    slider.scrollLeft = scrollPosition;
                }, 300);
            }
        });

        prevBtn.addEventListener('click', () => {
            scrollPosition -= cardWidth;
            scrollToPos(scrollPosition);

            if (scrollPosition < cardWidth) {
                setTimeout(() => {
                    scrollPosition = cardWidth * totalCards;
                    slider.scrollLeft = scrollPosition;
                }, 300);
            }
        });
    }

    /* =============================
       VIDEO CAROUSEL (RESPONSIVE)
    ============================= */
    const carouselContainer = document.getElementById("carouselContainer");

    if (carouselContainer) {
        const getPerSlide = () => {
            const w = window.innerWidth;
            if (w < 576) return 1;
            if (w < 992) return 2;
            return 4;
        };

        const items = [...carouselContainer.querySelectorAll(".video-card")];
        carouselContainer.innerHTML = "";

        const perSlide = getPerSlide();
        const total = items.length;

        for (let i = 0; i < total; i += perSlide) {
            const slide = document.createElement("div");
            slide.className = "carousel-item" + (i === 0 ? " active" : "");

            const row = document.createElement("div");
            row.className = "row g-4";

            for (let j = 0; j < perSlide; j++) {
                const idx = (i + j) % total;
                const col = document.createElement("div");

                if (perSlide === 1) col.className = "col-12";
                else if (perSlide === 2) col.className = "col-6";
                else col.className = "col-6 col-md-3";

                col.appendChild(items[idx].cloneNode(true));
                row.appendChild(col);
            }

            slide.appendChild(row);
            carouselContainer.appendChild(slide);
        }

        /* Modal Video */
        const modal = document.getElementById("videoModal");
        const popupVideo = document.getElementById("popupVideo");
        const fullscreenBtn = modal?.querySelector(".fullscreen-btn");

        document.querySelectorAll(".video-card video").forEach(video => {
            video.parentElement.addEventListener("click", () => {
                modal.style.display = "flex";
                popupVideo.src = video.src;
                popupVideo.play();
            });
        });

        document.querySelector(".close-modal")?.addEventListener("click", () => {
            modal.style.display = "none";
            popupVideo.pause();
            popupVideo.src = "";
        });

        window.addEventListener("click", e => {
            if (e.target === modal) {
                modal.style.display = "none";
                popupVideo.pause();
                popupVideo.src = "";
            }
        });

        fullscreenBtn?.addEventListener("click", () => {
            popupVideo.requestFullscreen?.() ||
            popupVideo.webkitRequestFullscreen?.() ||
            popupVideo.msRequestFullscreen?.();
        });

        let resizeTimer;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => location.reload(), 300);
        });
    }

    /* =============================
       CATEGORY AUTO SCROLLER
    ============================= */
    const track = document.getElementById("bamTrack");
    if (track) {
        const items = [...track.children];
        items.forEach(item => track.appendChild(item.cloneNode(true)));

        let position = 0;
        const speed = 0.6;

        const animate = () => {
            position -= speed;
            if (Math.abs(position) >= track.scrollWidth / 2) position = 0;
            track.style.transform = `translateX(${position}px)`;
            requestAnimationFrame(animate);
        };
        animate();
    }

    /* =============================
       MEN / WOMEN CATEGORY TOGGLE
    ============================= */
    const menBtn = document.getElementById("btn-men");
    const womenBtn = document.getElementById("btn-women");
    const menCats = document.getElementById("men-cats");
    const womenCats = document.getElementById("women-cats");

    if (menBtn && womenBtn) {
        menBtn.addEventListener("click", () => {
            menBtn.classList.add("btn-dark");
            menBtn.classList.remove("btn-outline-dark");
            womenBtn.classList.add("btn-outline-dark");
            womenBtn.classList.remove("btn-dark");
            menCats.classList.remove("d-none");
            womenCats.classList.add("d-none");
        });

        womenBtn.addEventListener("click", () => {
            womenBtn.classList.add("btn-dark");
            womenBtn.classList.remove("btn-outline-dark");
            menBtn.classList.add("btn-outline-dark");
            menBtn.classList.remove("btn-dark");
            womenCats.classList.remove("d-none");
            menCats.classList.add("d-none");
        });
    }

    /* =============================
       GO TO TOP BUTTON
    ============================= */
    const goTopBtn = document.getElementById("ar-goTopBtn");
    if (goTopBtn) {
        window.addEventListener("scroll", () => {
            goTopBtn.style.display = window.scrollY > 250 ? "flex" : "none";
        });

        goTopBtn.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    /* =============================
       TOP OFFERS BAR
    ============================= */
    const offers = [
        "🎉 Summer Sale! Flat 25% OFF on all ethnic wear | Use Code: INDIASALE25 | Free Shipping on orders over ₹999",
        "🔥 Buy 2 Get 1 Free on Select Sarees! Hurry, limited stock!",
        "💥 Exclusive Deal: ₹500 OFF on orders above ₹3000 | Use Code: BIGSAVE500",
        "✨ New Arrivals! Get 15% OFF with code NEW15"
    ];

    const offersBar = document.getElementById("offersBar");
    if (offersBar) {
        let index = 0;
        offersBar.addEventListener("animationiteration", () => {
            index = (index + 1) % offers.length;
            offersBar.innerHTML = offers[index];
        });
    }
});

/* =============================
   PAGE LOADER
============================= */
window.addEventListener("load", () => {
    setTimeout(() => {
        document.body.classList.add("loaded");
    }, 1000);
});