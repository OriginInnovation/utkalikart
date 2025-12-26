<?php include 'common/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopNow - New Arrivals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css?v=3.97">
    <style>
        :root{--theme:#111}
        body{font-family:Inter;background:#fafafa; color: #333;}
        .theme-btn{width:18px;height:18px;border-radius:50%;border:none;margin-left:6px; cursor:pointer}

        /* BANNER */
        .simple-banner{background:#f6f7fb}
        .simple-box{padding:60px 40px}
        .simple-title{font-size:36px;font-weight:700;color:#111}
        .simple-text{font-size:16px;color:#555;margin:18px 0}
        .simple-btn{background:#111;color:#fff;border:none;padding:10px 24px;border-radius:6px;transition: 0.3s;}
        .simple-btn:hover{background:#000; transform: scale(1.05);}
        .simple-img{width:100%;height:350px;object-fit:cover;border-radius:18px}

        /* PRODUCT CARD */
        .sn-card{background:#fff;border-radius:18px;overflow:hidden;transition:.35s; border: 1px solid #eee; position: relative;}
        .sn-card:hover{transform:translateY(-6px);box-shadow:0 20px 45px rgba(0,0,0,.08)}
        .sn-img{position:relative; overflow: hidden;}
        .sn-img img{width:100%;height:280px;object-fit:cover;transition:.4s}
        .sn-card:hover img{transform:scale(1.08)}
        
        /* TAG STYLES */
        .sn-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 5;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .tag-new { background: #e3f2fd; color: #1976d2; border: 1px solid #bbdefb; }
        .tag-premium { background: #fff8e1; color: #ffa000; border: 1px solid #ffecb3; }
        .tag-hot { background: #fbe9e7; color: #d84315; border: 1px solid #ffccbc; }

        .sn-actions{position:absolute;top:14px;right:14px;display:flex;flex-direction:column;gap:8px}
        .sn-actions button{width:36px;height:36px;border-radius:50%;border:none;background:#fff;box-shadow:0 4px 10px rgba(0,0,0,0.1); transition: 0.3s;}
        .wish.active i{color:#e91e63!important; font-weight: 900;}
        .sn-body{padding:16px}

        /* ICONS SECTION */
        .nav-icon-box{cursor: pointer; position: relative; padding: 5px 10px;}
        .badge-count{background:var(--theme);color:#fff;font-size:10px;border-radius:50%;padding:2px 6px;position:absolute;top:0;right:0}
        
        /* CART ITEM STYLING */
        .cart-item-img{width: 60px; height: 60px; object-fit: cover; border-radius: 8px;}
        .qty-btn{border: 1px solid #ddd; background: #fff; padding: 2px 8px; border-radius: 4px; cursor: pointer;}
    </style>
</head>
<body>

    <section class="simple-banner py-5 border-bottom">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="simple-box">
                        <h2 class="simple-title">Discover Timeless Ethnic Wear</h2>
                        <p class="simple-text">Handpicked sarees and kurtis designed for comfort and elegance.</p>
                        <button class="simple-btn">Shop Now <i class="fa fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="assets/img/pink.webp" class="simple-img" alt="banner">
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex justify-content-end align-items-center p-4">
        <div class="nav-icon-box me-3" onclick="showWishlist()">
            <i class="fa-regular fa-heart fs-4"></i>
            <span class="badge-count" id="wishCount">0</span>
        </div>
        <div class="nav-icon-box me-4" onclick="showCart()">
            <i class="fa-solid fa-cart-shopping fs-4"></i>
            <span class="badge-count" id="cartCount">0</span>
        </div>
        <div class="d-flex border-start ps-3">
            <button class="theme-btn" style="background:#111" onclick="setTheme('#111')"></button>
            <button class="theme-btn" style="background:#e91e63" onclick="setTheme('#e91e63')"></button>
            <button class="theme-btn" style="background:#3f51b5" onclick="setTheme('#3f51b5')"></button>
        </div>
    </div>

    <section class="container my-2 mb-5">
        <h3 class="fw-bold mb-4">New Arrivals</h3>
        <div class="row g-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-new">New</span>
                    <div class="sn-img">
                        <img src="assets/img/jackets.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p1" onclick="toggleWishlist('p1', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Banarasi Saree', 2499, 'assets/img/jackets.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Banarasi Silk Saree</div>
                        <div class="fw-bold text-dark mt-1">₹2499</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p1', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-premium">Premium</span>
                    <div class="sn-img">
                        <img src="assets/img/slide 4.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p2" onclick="toggleWishlist('p2', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Cotton Kurti', 1299, 'assets/img/slide 4.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Designer Cotton Kurti</div>
                        <div class="fw-bold text-dark mt-1">₹1299</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p2', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-hot">Hot</span>
                    <div class="sn-img">
                        <img src="assets/img/jackets.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p3" onclick="toggleWishlist('p3', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Banarasi Saree', 2499, 'assets/img/jackets.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Banarasi Silk Saree</div>
                        <div class="fw-bold text-dark mt-1">₹2499</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p3', 'Banarasi Saree', 2499, 'assets/img/jackets.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sn-card">
                    <span class="sn-tag tag-new">New</span>
                    <div class="sn-img">
                        <img src="assets/img/slide 4.webp" alt="Saree">
                        <div class="sn-actions">
                            <button class="wish" data-id="p4" onclick="toggleWishlist('p4', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', this)">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button onclick="quickView('Cotton Kurti', 1299, 'assets/img/slide 4.webp')">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sn-body text-center">
                        <div class="fw-semibold">Designer Cotton Kurti</div>
                        <div class="fw-bold text-dark mt-1">₹1299</div>
                        <button class="btn btn-dark w-100 mt-3" onclick="addToCart('p4', 'Cotton Kurti', 1299, 'assets/img/slide 4.webp', false)">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="modal fade" id="sideModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="modalTitle">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalBody"></div>
                <div class="modal-footer-custom p-4 border-top">
                    <div class="d-flex justify-content-between align-items-center fw-bold mb-3">
                        <span id="summaryLabel" class="text-muted">Grand Total:</span>
                        <span id="modalTotal" class="fs-4 text-dark">₹0</span>
                    </div>
                    <div id="modalActionArea"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'common/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
    </script>
</body>
</html>