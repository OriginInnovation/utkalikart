let cart = [];
        let wishlist = [];
        const sideModal = new bootstrap.Modal(document.getElementById('sideModal'));

        function setTheme(color) {
            document.documentElement.style.setProperty('--theme', color);
        }

        function updateUI() {
            document.getElementById('cartCount').innerText = cart.reduce((acc, item) => acc + item.qty, 0);
            document.getElementById('wishCount').innerText = wishlist.length;
        }

        function addToCart(id, name, price, img, autoOpen = true) {
            let item = cart.find(i => i.id === id);
            if(item) { item.qty++; } 
            else { cart.push({ id, name, price, img, qty: 1 }); }
            updateUI();
            if(autoOpen) showCart();
        }

        function showCart() {
            document.getElementById('modalTitle').innerText = "🛒 Shopping Cart";
            document.getElementById('summaryLabel').innerText = "Grand Total:";
            let html = cart.length === 0 ? '<p class="text-center py-3">Cart is empty</p>' : '';
            let total = 0;
            cart.forEach((item, index) => {
                total += item.price * item.qty;
                html += `<div class="d-flex align-items-center mb-3 border-bottom pb-2">
                    <img src="${item.img}" class="cart-item-img me-3">
                    <div class="flex-grow-1">
                        <h6 class="mb-0">${item.name}</h6>
                        <small>₹${item.price}</small>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <button class="qty-btn" onclick="updateQty(${index}, -1)">-</button>
                        <span>${item.qty}</span>
                        <button class="qty-btn" onclick="updateQty(${index}, 1)">+</button>
                        <button class="btn text-danger ms-2" onclick="deleteCartItem(${index})"><i class="fa fa-trash"></i></button>
                    </div>
                </div>`;
            });
            document.getElementById('modalBody').innerHTML = html;
            document.getElementById('modalTotal').innerText = '₹' + total;
            document.getElementById('modalActionArea').innerHTML = `<button class="btn btn-dark w-100">Checkout Now</button>`;
            sideModal.show();
        }

        function updateQty(index, change) {
            cart[index].qty += change;
            if(cart[index].qty < 1) cart.splice(index, 1);
            updateUI();
            showCart();
        }

        function deleteCartItem(index) {
            cart.splice(index, 1);
            updateUI();
            showCart();
        }

        function toggleWishlist(id, name, price, img, btn) {
            let index = wishlist.findIndex(i => i.id === id);
            if(index > -1) { wishlist.splice(index, 1); } 
            else { wishlist.push({id, name, price, img}); }
            updateUI();
        }

        function showWishlist() {
            document.getElementById('modalTitle').innerText = "❤️ My Wishlist";
            document.getElementById('summaryLabel').innerText = "Items In List:";
            let html = wishlist.length === 0 ? '<p class="text-center py-3">Wishlist is empty</p>' : '';
            wishlist.forEach((item, index) => {
                html += `<div class="d-flex align-items-center mb-3 border-bottom pb-2">
                    <img src="${item.img}" class="cart-item-img me-3">
                    <div class="flex-grow-1">
                        <h6 class="mb-0">${item.name}</h6>
                        <small>₹${item.price}</small>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-dark" onclick="moveFromWishToCart(${index})">Add to Cart</button>
                        <button class="btn btn-sm btn-outline-danger" onclick="removeWish(${index})"><i class="fa fa-trash"></i></button>
                    </div>
                </div>`;
            });
            document.getElementById('modalBody').innerHTML = html;
            document.getElementById('modalTotal').innerText = wishlist.length;
            document.getElementById('modalActionArea').innerHTML = `<button class="btn btn-outline-dark w-100" onclick="moveAllToCart()">Add All to Cart</button>`;
            sideModal.show();
        }

        function removeWish(index) {
            wishlist.splice(index, 1);
            updateUI();
            showWishlist();
        }

        function moveFromWishToCart(index) {
            const item = wishlist[index];
            addToCart(item.id, item.name, item.price, item.img, false);
            wishlist.splice(index, 1);
            updateUI();
            showWishlist();
        }

        function moveAllToCart() {
            wishlist.forEach(item => {
                let inCart = cart.find(c => c.id === item.id);
                if(inCart) inCart.qty++; else cart.push({...item, qty: 1});
            });
            wishlist = []; updateUI(); showWishlist();
        }

        function quickView(name, price, img) {
            document.getElementById('modalTitle').innerText = "Quick Look";
            document.getElementById('modalBody').innerHTML = `<div class="row g-4 align-items-center">
                <div class="col-md-6 text-center">
                    <img src="${img}" class="img-fluid rounded-4 shadow-sm" style="height: 300px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold h3 mb-2">${name}</h2>
                    <h4 class="fw-bold text-dark mb-3">₹${price}</h4>
                    <p class="text-muted mb-4">Premium ethnic wear crafted with high-quality fabric.</p>
                    <div class="features small text-dark mb-4">
                        <div class="mb-2"><i class="fa fa-truck me-2"></i> Free Delivery</div>
                        <div class="mb-2"><i class="fa fa-shield-halved me-2"></i> 100% Original</div>
                    </div>
                </div>
            </div>`;
            document.getElementById('modalTotal').innerText = '₹' + price;
            document.getElementById('modalActionArea').innerHTML = `<button class="btn btn-dark w-100 py-3 fw-bold rounded-3" onclick="addToCart('qv', '${name}', ${price}, '${img}', true)">Add to Cart</button>`;
            sideModal.show();
        }