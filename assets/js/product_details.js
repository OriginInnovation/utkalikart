document.addEventListener("DOMContentLoaded", function () {

  /* ===============================
     REVIEW / QUESTION TOGGLE
  =============================== */
  const showReviewBtn = document.getElementById("showReviewBtn");
  const showQuestionBtn = document.getElementById("showQuestionBtn");
  const reviewBox = document.getElementById("reviewBox");
  const questionBox = document.getElementById("questionBox");

  if (showReviewBtn && showQuestionBtn) {
    showReviewBtn.addEventListener("click", () => {
      reviewBox.classList.toggle("active");
      questionBox.classList.remove("active");
    });

    showQuestionBtn.addEventListener("click", () => {
      questionBox.classList.toggle("active");
      reviewBox.classList.remove("active");
    });
  }

  /* ===============================
     IMAGE ZOOM + THUMBNAILS
  =============================== */
  const mainImage = document.getElementById("mainImage");
  const lens = document.getElementById("lens");
  const zoomResult = document.getElementById("zoomResult");
  const thumbs = document.querySelectorAll(".thumbs img");

  if (mainImage && lens && zoomResult) {

    thumbs.forEach(thumb => {
      thumb.addEventListener("click", function () {
        thumbs.forEach(img => img.classList.remove("active"));
        this.classList.add("active");

        const imgSrc = this.dataset.img || this.src;
        mainImage.src = imgSrc;
        zoomResult.style.backgroundImage = `url('${imgSrc}')`;
      });
    });

    function moveLens(e) {
      const rect = mainImage.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const lensX = Math.max(0, Math.min(x - lens.offsetWidth / 2, mainImage.width - lens.offsetWidth));
      const lensY = Math.max(0, Math.min(y - lens.offsetHeight / 2, mainImage.height - lens.offsetHeight));

      lens.style.left = lensX + "px";
      lens.style.top = lensY + "px";

      const cx = zoomResult.offsetWidth / lens.offsetWidth;
      const cy = zoomResult.offsetHeight / lens.offsetHeight;

      zoomResult.style.backgroundSize = `${mainImage.width * cx}px ${mainImage.height * cy}px`;
      zoomResult.style.backgroundPosition = `-${lensX * cx}px -${lensY * cy}px`;
    }

    mainImage.addEventListener("mouseenter", () => {
      lens.style.display = "block";
      zoomResult.style.display = "block";
      zoomResult.style.backgroundImage = `url('${mainImage.src}')`;
    });

    mainImage.addEventListener("mousemove", moveLens);

    mainImage.addEventListener("mouseleave", () => {
      lens.style.display = "none";
      zoomResult.style.display = "none";
    });
  }

  /* ===============================
     COLOR CHANGE
  =============================== */
  document.querySelectorAll(".color-option").forEach(option => {
    option.addEventListener("click", function () {
      document.querySelectorAll(".color-option").forEach(el => el.classList.remove("active"));
      this.classList.add("active");

      if (this.dataset.img && mainImage) {
        mainImage.src = this.dataset.img;
        zoomResult.style.backgroundImage = `url('${this.dataset.img}')`;
      }
    });
  });

  /* ===============================
     SIZE SELECTION
  =============================== */
  document.querySelectorAll(".size-option").forEach(option => {
    option.addEventListener("click", function () {
      document.querySelectorAll(".size-option").forEach(el =>
        el.classList.remove("btn-dark", "text-white")
      );
      this.classList.add("btn-dark", "text-white");
    });
  });

  /* ===============================
     GO TO TOP BUTTON
  =============================== */
  const arGoTopBtn = document.getElementById("ar-goTopBtn");

  if (arGoTopBtn) {
    window.addEventListener("scroll", () => {
      arGoTopBtn.style.display = window.scrollY > 250 ? "flex" : "none";
    });

    arGoTopBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

});
