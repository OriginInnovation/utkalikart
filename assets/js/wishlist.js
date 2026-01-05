document.addEventListener("DOMContentLoaded", () => {

            const wishlistCount = document.querySelector(".wishlist-count");
            const emptyWishlist = document.querySelector(".empty-wishlist");
            const cartBox = document.querySelector(".cart-items");
            const cartTotal = document.querySelector(".cart-total");
            const cartCount = document.querySelector(".cart-count");

            let cart = [];

            updateWishlistCount();

            /* ---------- WISHLIST ---------- */
            document.querySelectorAll(".remove-wishlist").forEach(btn => {
                btn.addEventListener("click", () => {
                    btn.closest(".wishlist-item")?.remove();
                    updateWishlistCount();
                });
            });

            document.querySelectorAll(".add-cart").forEach(btn => {
                btn.addEventListener("click", () => {
                    const item = btn.closest(".wishlist-item");
                    if (!item) return;

                    const product = {
                        id: item.dataset.id,
                        name: item.dataset.name,
                        price: Number(item.dataset.price),
                        img: item.dataset.img,
                        qty: 1
                    };

                    const exist = cart.find(i => i.id === product.id);
                    exist ? exist.qty++ : cart.push(product);

                    item.remove();
                    updateWishlistCount();
                    renderCart();
                });
            });

            function updateWishlistCount() {
                const count = document.querySelectorAll(".wishlist-item").length;
                wishlistCount.textContent = count;
                emptyWishlist.classList.toggle("d-none", count !== 0);
            }

            /* ---------- CART ---------- */
            function renderCart() {
                cartBox.innerHTML = "";
                let total = 0,
                    count = 0;

                if (!cart.length) {
                    cartBox.innerHTML = "<p class='text-muted'>Cart is empty</p>";
                }

                cart.forEach(item => {
                    total += item.price * item.qty;
                    count += item.qty;

                    cartBox.innerHTML += `
            <div class="d-flex align-items-center mb-3 border-bottom pb-2">
                <img src="${item.img}" width="70" class="rounded me-3">
                <div class="flex-grow-1">
                    <h6>${item.name}</h6>
                    <div class="d-flex gap-2 align-items-center">
                        <button class="btn btn-sm btn-outline-dark qty-minus" data-id="${item.id}">−</button>
                        <span>${item.qty}</span>
                        <button class="btn btn-sm btn-outline-dark qty-plus" data-id="${item.id}">+</button>
                    </div>
                </div>
                <button class="btn btn-sm btn-outline-danger remove-cart" data-id="${item.id}">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>`;
                });

                cartTotal.textContent = total;
                cartCount.textContent = count;

                bindCartActions();
            }

            function bindCartActions() {
                document.querySelectorAll(".qty-plus").forEach(btn => {
                    btn.onclick = () => changeQty(btn.dataset.id, 1);
                });
                document.querySelectorAll(".qty-minus").forEach(btn => {
                    btn.onclick = () => changeQty(btn.dataset.id, -1);
                });
                document.querySelectorAll(".remove-cart").forEach(btn => {
                    btn.onclick = () => {
                        cart = cart.filter(i => i.id !== btn.dataset.id);
                        renderCart();
                    };
                });
            }

            function changeQty(id, d) {
                const item = cart.find(i => i.id === id);
                if (!item) return;
                item.qty += d;
                if (item.qty <= 0) cart = cart.filter(i => i.id !== id);
                renderCart();
            }
        });