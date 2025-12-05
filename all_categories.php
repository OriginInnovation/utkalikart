<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="ShopNow offers the latest fashion and accessories for women, men, and kids. Discover exclusive deals, new arrivals, and a seamless online shopping experience" />
    <meta name="keywords"
        content="online shopping, e-commerce, women's fashion, men's clothing, kids apparel, ShopNow, latest deals, new arrivals" />
    <meta name="author" content="origin-innovation" />
    <title>ShopNow - Online Shopping for Women, Men & Kids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/main.css?v=3.8">

    <style>
        body {
            background: #f6f7f9;
            font-family: 'Inter', sans-serif;
        }

        .page-container {
            max-width: 1350px;
            margin: auto;
            padding: 30px 20px;
        }

        .sidebar {
            width: 230px;
        }

        .sidebar-title {
            font-size: 14px;
            font-weight: 700;
            color: #111;
            margin-bottom: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: #555;
            display: block;
            padding: 6px 0;
            font-size: 14px;
        }

        .sidebar a.active {
            color: #007bff;
            font-weight: 600;
        }

        .filter-checkbox {
            display: block;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .filter-checkbox input {
            margin-right: 6px;
        }

        .product-card {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            transition: 0.2s;
            border: 1px solid #eee;
        }

        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px #0001;
        }

        .product-img {
            width: 150px;
            height: 150px;
            object-fit: contain;
            margin: auto;
            display: block;
        }

        .product-title {
            font-size: 15px;
            font-weight: 600;
            color: #111;
            margin-top: 10px;
        }

        .price {
            color: #000;
            font-weight: 700;
            margin-top: 5px;
        }

        .badge-tag {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #005eff;
            font-size: 12px;
            padding: 3px 8px;
            border-radius: 6px;
            color: #fff;
            font-weight: 600;
        }
    </style>

</head>

<body>

    <!-- <div class="utkalika-loader">
        <div class="utkalika-title">ଉତ୍କଳିକା </div>
        <div class="utkalika-subtitle">Utkalikart</div>
        <div class="utkalika-loading-text">Loading<span>.</span><span>.</span><span>.</span></div>
    </div> -->

    <?php include 'common/header.php' ?>

    <button id="ar-goTopBtn" class="ar-go-top-btn" aria-label="Go to top">
        <i class="bi bi-chevron-up"></i>
    </button>

    <section class="py-5">
        <div class="container">
            <div class="mb-4">
                <nav class="small text-secondary mb-1">
                    ShopNow > Clothing
                </nav>
                <h2 class="fw-bold">All Categories</h2>
            </div>

            <div class="row">
                <!-- SIDEBAR FILTERS -->
                <div class="col-lg-2 col-md-4">
                    <div class="sidebar" id="sidebar-filters"></div>
                </div>

                <!-- MAIN CONTENT -->
                <div class="col-lg-10 col-md-8">
                    <div class="small text-secondary mb-3" id="product-count">Products in category: 0</div>
                    <div class="row g-4" id="product-grid"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php' ?>

    <script>
        // JSON Filters
        const filtersJSON = {
            "filters": {
                "category": [{
                        "label": "Men",
                        "value": "men"
                    },
                    {
                        "label": "Women",
                        "value": "women"
                    },
                    {
                        "label": "Kids",
                        "value": "kids"
                    }
                ],
                "brand": [{
                        "label": "Nike",
                        "value": "nike"
                    },
                    {
                        "label": "Adidas",
                        "value": "adidas"
                    },
                    {
                        "label": "Puma",
                        "value": "puma"
                    },
                    {
                        "label": "Levi's",
                        "value": "levis"
                    }
                ],
                "price_range": [{
                        "label": "0 - 500",
                        "value": "0-500"
                    },
                    {
                        "label": "501 - 1000",
                        "value": "501-1000"
                    },
                    {
                        "label": "1001 - 2000",
                        "value": "1001-2000"
                    },
                    {
                        "label": "2001 - 5000",
                        "value": "2001-5000"
                    }
                ],
                "color": [{
                        "label": "Red",
                        "value": "red"
                    },
                    {
                        "label": "Blue",
                        "value": "blue"
                    },
                    {
                        "label": "Black",
                        "value": "black"
                    },
                    {
                        "label": "White",
                        "value": "white"
                    },
                    {
                        "label": "Green",
                        "value": "green"
                    }
                ],
                "discount_range": [{
                        "label": "10% & Above",
                        "value": 10
                    },
                    {
                        "label": "20% & Above",
                        "value": 20
                    },
                    {
                        "label": "30% & Above",
                        "value": 30
                    },
                    {
                        "label": "50% & Above",
                        "value": 50
                    }
                ]
            }
        };

        // Sample Products
        const products = [{
                "id": 1,
                "title": "Men's Cotton T-Shirt",
                "category": "men",
                "brand": "Nike",
                "price": 499,
                "discount": 10,
                "colors": ["red", "blue"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 2,
                "title": "Women's Party Dress",
                "category": "women",
                "brand": "Adidas",
                "price": 1200,
                "discount": 20,
                "colors": ["black", "white"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 3,
                "title": "Kids Casual Shirt",
                "category": "kids",
                "brand": "Puma",
                "price": 699,
                "discount": 15,
                "colors": ["green", "blue"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 4,
                "title": "Men's Formal Shirt",
                "category": "men",
                "brand": "Levi's",
                "price": 899,
                "discount": 0,
                "colors": ["white", "black"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 5,
                "title": "Women's Summer Top",
                "category": "women",
                "brand": "Nike",
                "price": 599,
                "discount": 30,
                "colors": ["red", "white"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 6,
                "title": "Kids Sports T-Shirt",
                "category": "kids",
                "brand": "Nike",
                "price": 799,
                "discount": 5,
                "colors": ["blue", "black"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 7,
                "title": "Men's Hoodie",
                "category": "men",
                "brand": "Adidas",
                "price": 1499,
                "discount": 25,
                "colors": ["black", "green"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 8,
                "title": "Women's Yoga Pants",
                "category": "women",
                "brand": "Puma",
                "price": 1299,
                "discount": 15,
                "colors": ["blue", "white"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 9,
                "title": "Kids Jacket",
                "category": "kids",
                "brand": "Levi's",
                "price": 1599,
                "discount": 20,
                "colors": ["red", "black"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            },
            {
                "id": 10,
                "title": "Men's Casual Shorts",
                "category": "men",
                "brand": "Puma",
                "price": 699,
                "discount": 10,
                "colors": ["blue", "white"],
                "image": "//neemans.com/cdn/shop/files/Slides_9799e993-257e-4334-a853-ff938ac7bcb9.png?v=1759889764&width=300"
            }
        ];

        let activeFilters = {
            category: [],
            brand: [],
            price_range: [],
            color: [],
            discount_range: []
        };

        const sidebar = document.getElementById("sidebar-filters");
        const productGrid = document.getElementById("product-grid");
        const productCount = document.getElementById("product-count");

        // Render Sidebar Filters
        function renderFilters() {
            sidebar.innerHTML = '';
            for (let key in filtersJSON.filters) {
                const section = document.createElement("div");
                section.classList.add("sidebar-section", "mb-4");
                const title = document.createElement("div");
                title.classList.add("sidebar-title");
                title.textContent = key.replace("_", " ").toUpperCase();
                section.appendChild(title);

                filtersJSON.filters[key].forEach(item => {
                    const label = document.createElement("label");
                    label.classList.add("filter-checkbox");
                    label.innerHTML = `<input type="checkbox" data-type="${key}" value="${item.value}"> ${item.label}`;
                    section.appendChild(label);
                });

                sidebar.appendChild(section);
            }
        }

        // Render Products
        function renderProducts() {
            productGrid.innerHTML = '';
            let filtered = products.filter(prod => {
                if (activeFilters.category.length && !activeFilters.category.includes(prod.category)) return false;

                // Brand filter fixed
                if (activeFilters.brand.length && !activeFilters.brand.some(b => b.toLowerCase() === prod.brand.toLowerCase())) return false;

                if (activeFilters.color.length && !prod.colors.some(c => activeFilters.color.includes(c))) return false;
                if (activeFilters.discount_range.length && !activeFilters.discount_range.some(d => prod.discount >= d)) return false;
                if (activeFilters.price_range.length) {
                    let priceMatch = false;
                    activeFilters.price_range.forEach(pr => {
                        const [min, max] = pr.split('-').map(Number);
                        if (prod.price >= min && prod.price <= max) priceMatch = true;
                    });
                    if (!priceMatch) return false;
                }
                return true;
            });
            productCount.textContent = `Products in category: ${filtered.length}`;

            filtered.forEach(prod => {
                const col = document.createElement("div");
                col.classList.add("col-md-4", "col-lg-3");

                const card = document.createElement("div");
                card.classList.add("product-card", "position-relative");

                if (prod.discount > 0) {
                    const badge = document.createElement("span");
                    badge.classList.add("badge-tag");
                    badge.style.background = "#ff3c2f";
                    badge.textContent = `-${prod.discount}%`;
                    card.appendChild(badge);
                }

                const img = document.createElement("img");
                img.classList.add("product-img");
                img.src = prod.image;
                card.appendChild(img);

                const title = document.createElement("div");
                title.classList.add("product-title");
                title.textContent = prod.title;
                card.appendChild(title);

                const price = document.createElement("div");
                price.classList.add("price");
                price.textContent = `${prod.price} INR`;
                card.appendChild(price);

                col.appendChild(card);
                productGrid.appendChild(col);
            });
        }

        // Handle Filter Changes
        function handleFilters() {
            sidebar.addEventListener("change", e => {
                if (e.target.tagName === "INPUT") {
                    const type = e.target.dataset.type;
                    const value = e.target.value;
                    if (e.target.checked) {
                        activeFilters[type].push(value);
                    } else {
                        activeFilters[type] = activeFilters[type].filter(v => v !== value);
                    }
                    renderProducts();
                }
            });
        }

        // Init
        renderFilters();
        handleFilters();
        renderProducts();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="assets/js/main.js?v=1.3"></script>
</body>

</html>