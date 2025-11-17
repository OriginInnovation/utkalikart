//js add to cart
function getAllElements(ids) {
  return ids.map(id => document.getElementById(id));
}

const openBtns = document.querySelectorAll("#cartOpenBtn");
const closeBtns = [document.getElementById("cartCloseBtn-desktop"), document.getElementById("cartCloseBtn-mobile")];
const overlays = [document.getElementById("overlay-desktop"), document.getElementById("overlay-mobile")];
const panels = [document.getElementById("cartPanel-desktop"), document.getElementById("cartPanel-mobile")];

openBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    panels.forEach(panel => panel.classList.add("open"));
    overlays.forEach(overlay => overlay.classList.add("show"));
  });
});

closeBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    panels.forEach(panel => panel.classList.remove("open"));
    overlays.forEach(overlay => overlay.classList.remove("show"));
  });
});

overlays.forEach(overlay => {
  overlay.addEventListener("click", () => {
    panels.forEach(panel => panel.classList.remove("open"));
    overlays.forEach(overlay => overlay.classList.remove("show"));
  });
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("qty-dec") || e.target.classList.contains("qty-inc")) {
    const qtyEl = e.target.parentElement.querySelector(".qty");
    let qty = parseInt(qtyEl.textContent);
    qty += e.target.classList.contains("qty-inc") ? 1 : -1;
    qty = Math.max(1, qty);
    qtyEl.textContent = qty;
    updateCart();
  }

  if (e.target.classList.contains("add-btn")) {
    const itemEl = e.target.closest(".recommend-item");
    const name = itemEl.querySelector("h6").innerText;
    const price = parseInt(itemEl.querySelector(".price").innerText.replace("Rs. ", ""));
    const imgSrc = itemEl.querySelector("img").src;

    panels.forEach(panel => {
      const cartItems = panel.querySelector("#cartItems");
      const newItem = document.createElement("div");
      newItem.className = "item";
      newItem.innerHTML = `
        <img src="${imgSrc}" />
        <div class="item-details">
          <h4>${name}</h4>
          <div class="price-line">Rs. ${price} <span class="price">Rs. ${price}</span></div>
          <div class="qty-control">
            <button class="qty-dec">−</button>
            <span class="qty">1</span>
            <button class="qty-inc">+</button>
          </div>
        </div>`;
      cartItems.appendChild(newItem);
    });

    updateCart();
  }
});

function updateCart() {
  const allItems = document.querySelectorAll("#cartItems .item");
  let qtyTotal = 0;
  let subtotal = 0;

  allItems.forEach(item => {
    const qty = parseInt(item.querySelector(".qty").textContent);
    const price = parseInt(item.querySelector(".price").textContent.replace("Rs. ", ""));
    qtyTotal += qty;
    subtotal += qty * price;
  });

  const countTexts = [`(${qtyTotal} item${qtyTotal > 1 ? "s" : ""})`];
  const cartCountEls = [document.getElementById("cartCount-desktop"), document.getElementById("cartCount-mobile")];
  const subtotalEls = [document.querySelector("#cartPanel-desktop #subtotal"), document.querySelector("#cartPanel-mobile #subtotal")];

  cartCountEls.forEach(el => el.textContent = countTexts[0]);
  subtotalEls.forEach(el => el.textContent = subtotal);

  const progressBar = document.getElementById("progressBar");
  const offerText = document.getElementById("offerText");

  if (qtyTotal >= 3) {
    progressBar.style.width = "100%";
    offerText.innerHTML = "You got <b>10% OFF</b>!";
  } else if (qtyTotal === 2) {
    progressBar.style.width = "66%";
    offerText.innerHTML = "You got <b>7% OFF</b>!";
  } else {
    progressBar.style.width = "33%";
    offerText.innerHTML = `Add ${2 - qtyTotal} more and get <b>Extra 7% OFF</b>`;
  }
}

window.addEventListener("load", updateCart);



// js footer section
document.getElementById("year").textContent = new Date().getFullYear();


//shop by categories
const track = document.getElementById('bamTrack');

const cloneItems = () => {
  const screenWidth = window.innerWidth * 2;
  let totalWidth = track.scrollWidth;

  while (totalWidth < screenWidth * 2) {
    const children = [...track.querySelectorAll('.bam-item')];
    children.forEach(item => {
      const clone = item.cloneNode(true);
      track.appendChild(clone);
    });
    totalWidth = track.scrollWidth;
  }
};

cloneItems();


  
// contact us
document.getElementById('contactForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();
  const subject = document.getElementById('subject').value.trim();
  const formMessages = document.getElementById('formMessages');

  if (!name || !email || !message) {
    formMessages.className = 'alert alert-danger';
    formMessages.textContent = 'Please fill in all required fields.';
    formMessages.style.display = 'block';
    return;
  }


  console.log('Form submitted:', { name, email, subject, message });

  setTimeout(() => {
    formMessages.className = 'alert alert-success';
    formMessages.textContent = 'Your message has been sent successfully!';
    formMessages.style.display = 'block';
    document.getElementById('contactForm').reset();
  }, 800);
});


//  order tracking

document.addEventListener("DOMContentLoaded", () => {
  const steps = document.querySelectorAll(".u-step");
  const activeIndex = 3;

  steps.forEach((step, index) => {
    step.classList.remove("u-completed", "u-active", "u-inactive");
    if (index < activeIndex) {
      step.classList.add("u-completed");
    } else if (index === activeIndex) {
      step.classList.add("u-active");
    } else {
      step.classList.add("u-inactive");
    }
  });
});

// my shop
function goToDetails() {
  window.location.href = 'products-for-you-page.html';
}

function toggleWishlist(icon) {
  icon.classList.toggle('active');
}

function goToCart() {
  window.location.href = 'cart.html';
}
