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
  <title>Product Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main.css?v=2.9">
  <style>
    .custom-scroll-section::-webkit-scrollbar {
      display: none;
    }

    .custom-scroll-section {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    @media (min-width: 768px) {
      .custom-scroll-section {
        max-height: 100vh;
        overflow-y: auto;
      }
    }

    .prd-box {
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 15px;
      max-width: 500px;
      margin: 30px auto;
      font-family: Arial, sans-serif;
    }

    .prd-title {
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .prd-desc {
      font-size: 15px;
      color: #444;
      line-height: 1.5;
    }

    .prd-list {
      margin: 10px 0 0;
      padding-left: 18px;
    }

    .main-img {
      border-radius: 8px;
      object-fit: cover;
    }

    .thumbs img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border: 2px solid transparent;
      border-radius: 6px;
      cursor: pointer;
    }

    .thumbs img.active {
      border-color: #000;
    }

    .color-option {
      width: 50px;
      height: 50px;
      object-fit: cover;
      cursor: pointer;
      position: relative;
    }

    .color-option.active {
      border: 2px solid #000 !important;
    }

    .color-box {
      position: relative;
      display: inline-block;
    }

    .color-tooltip {
      position: absolute;
      bottom: -28px;
      left: 50%;
      transform: translateX(-50%);
      background: #fff;
      border: 1px solid #ccc;
      padding: 2px 6px;
      font-size: 12px;
      white-space: nowrap;
      display: none;
      border-radius: 4px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      z-index: 10;
    }

    .color-box:hover .color-tooltip {
      display: block;
    }

    .size-option {
      min-width: 50px;
    }

    #reviewBox,
    #questionBox {
      display: none;
    }

    .feature-box {
      transition: all 0.3s ease;
      margin-right: 35px;
    }

    .feature-box:hover {
      transform: translateY(-4px);
    }

    .feature-icon {
      width: 50px;
    }

    .feature-box p {
      font-size: 14px;
      color: #1f1f1fff;
      font-weight: 500;
    }

    .about-list {
      list-style-type: disc;
      padding-left: 18px;
      font-size: 14px;
      line-height: 1.6;
      color: #333;
    }

    .info-table th {
      width: 160px;
      font-weight: 600;
      color: #000;
      vertical-align: top;
      font-size: 14px;
    }

    .info-table td {
      font-size: 14px;
      color: #444;
    }
  </style>
</head>

<body>
  <?php include 'common/header.php' ?>
  <button id="ar-goTopBtn" class="ar-go-top-btn" aria-label="Go to top">
    <i class="bi bi-chevron-up"></i>
  </button>

  <section>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-5">
          <div class="position-relative">
            <img id="mainImage" src="assets/img/black.webp" class="img-fluid" alt="Product">
            <div id="lens" class="img-zoom-lens"></div>
            <div id="zoomResult" class="img-zoom-result"></div>
          </div>
          <div class="thumbs mt-3 d-flex gap-2">
            <img class="active" src="assets/img/black.webp" data-img="assets/img/black.webp">
            <img src="assets/img/pink.webp" data-img="assets/img/pink.webp">
            <img src="assets/img/sky.webp" data-img="assets/img/sky.webp">
          </div>
        </div>


        <div class="col-md-7 custom-scroll-section">
          <h3>Handloom Sambalpuri Cotton Saree - Red & Black</h3>
          <div class="d-flex align-items-center mb-2">
            <span class="fw-bold fs-4 text-dark">₹1,899</span>
            <span class="text-muted ms-3 text-decoration-line-through">₹2,999</span>
            <span class="ms-3 text-success fw-bold">37% OFF</span>
          </div>

          <!-- Color Section -->
          <div class="mt-3">
            <div class="d-flex align-items-center">

              <div>
                <h5 class="fw-bold mb-0 me-3">Color:</h5>
              </div>

              <div class="d-flex gap-3">
                <div class="color-box position-relative">
                  <img src="assets/img/yellow.webp"
                    class="color-option border border-2 border-dark rounded-circle shadow active"
                    alt="Yellow"
                    data-img="assets/img/yellow.webp"
                    style="width: 40px; height: 40px; object-fit: cover; cursor: pointer;">
                  <span class="color-tooltip">Yellow</span>
                </div>

                <div class="color-box position-relative">
                  <img src="assets/img/pink.webp"
                    class="color-option border border-1 border-secondary rounded-circle shadow-sm opacity-75"
                    alt="Pink"
                    data-img="assets/img/pink.webp"
                    style="width: 40px; height: 40px; object-fit: cover; cursor: pointer;">
                  <span class="color-tooltip">Pink</span>
                </div>

                <div class="color-box position-relative">
                  <img src="assets/img/sky.webp"
                    class="color-option border border-1 border-secondary rounded-circle shadow-sm opacity-75"
                    alt="Sky Blue"
                    data-img="assets/img/sky.webp"
                    style="width: 40px; height: 40px; object-fit: cover; cursor: pointer;">
                  <span class="color-tooltip">Sky Blue</span>
                </div>

              </div>
            </div>
          </div>

          <!-- Size Section -->
          <div class="mt-3">
            <div class="mt-3">
              <div class="d-flex align-items-center">

                <div>
                  <h5 class="fw-bold mb-0 me-3">Size:</h5>
                </div>

                <div class="d-flex gap-2 flex-wrap">

                  <button class="btn btn-outline-dark shadow-sm p-0 size-option"
                    style="width: 40px; height: 40px;">S</button>

                  <button class="btn btn-dark shadow p-0 size-option"
                    style="width: 40px; height: 40px;">M</button>

                  <button class="btn btn-outline-dark shadow-sm p-0 size-option"
                    style="width: 40px; height: 40px;">L</button>

                  <button class="btn btn-outline-dark shadow-sm p-0 size-option"
                    style="width: 40px; height: 40px;">XL</button>

                  <button class="btn btn-outline-dark shadow-sm p-0 size-option"
                    style="width: 40px; height: 40px;">XXL</button>
                </div>

              </div>
            </div>
          </div>

          <div class="row text-center my-3">

            <div class="col-4 col-md-3">
              <div class="feature-box">
                <img src="assets/img/icon-returns._CB562506492_.png" class="feature-icon mb-2" alt="Return & Exchange">
                <p class="mb-0">10 days Return<br>& Exchange</p>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="feature-box">
                <img src="assets/img/icon-cod._CB562506657_.png" class="feature-icon mb-2" alt="Cash on Delivery">
                <p class="mb-0">Cash/Pay on<br>Delivery</p>
              </div>
            </div>

            <div class="col-4 col-md-3">
              <div class="feature-box">
                <img src="assets/img/Secure-payment._CB650126890_.png" class="feature-icon mb-2" alt="Secure Transaction">
                <p class="mb-0">Secure<br>transaction</p>
              </div>
            </div>

          </div>


          <div class="mt-4">
            <h6 class="fw-bold mb-3">Product Highlights:</h6>

            <div class="row g-3">

              <div class="col-6">
                <div class="d-flex align-items-center border rounded p-2 shadow-sm h-100">
                  <div class="bg-warning bg-opacity-10 text-warning p-2 rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <small class="fw-semibold">Authentic Weave</small>
                </div>
              </div>

              <div class="col-6">
                <div class="d-flex align-items-center border rounded p-2 shadow-sm h-100">
                  <div class="bg-info bg-opacity-10 text-info p-2 rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-droplet-fill"></i>
                  </div>
                  <small class="fw-semibold">Breathable Cotton</small>
                </div>
              </div>

              <div class="col-6">
                <div class="d-flex align-items-center border rounded p-2 shadow-sm h-100">
                  <div class="bg-danger bg-opacity-10 text-danger p-2 rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-cloud-sun-fill"></i>
                  </div>
                  <small class="fw-semibold">All-Season Wear</small>
                </div>
              </div>

              <div class="col-6">
                <div class="d-flex align-items-center border rounded p-2 shadow-sm h-100">
                  <div class="bg-success bg-opacity-10 text-success p-2 rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-tree-fill"></i>
                  </div>
                  <small class="fw-semibold">Eco-friendly</small>
                </div>
              </div>

            </div>
          </div>


          <div class="view-btn mt-4 mb-4">
            <div class="d-flex gap-3">

              <button class="btn btn-dark flex-grow-1 py-3 fw-bold rounded-3 shadow-sm"
                data-bs-toggle="modal"
                data-bs-target="#buyNowUnq_CheckoutPanel">
                <i class="bi bi-lightning-fill me-2 text-warning"></i>BUY NOW
              </button>

              <button class="btn btn-outline-dark flex-grow-1 py-3 fw-bold rounded-3">
                <i class="bi bi-bag-plus-fill me-2"></i>ADD TO CART
              </button>

            </div>

            <div class="text-center mt-2">
              <small class="text-muted" style="font-size: 0.8rem;">
                <i class="bi bi-shield-lock-fill text-success"></i> Secure checkout provided
              </small>
            </div>
          </div>



          <div class="mt-5">

            <div class="d-flex align-items-center mb-3 border-bottom pb-2">
              <i class="bi bi-file-earmark-text fs-5 me-2"></i>
              <h5 class="fw-bold mb-0">Product Details</h5>
            </div>

            <div>
              <p class="text-muted small lh-base">
                This authentic Sambalpuri saree showcases Odisha’s rich heritage. Handwoven with love, it's soft, breathable, and ideal for both festive and casual occasions.
              </p>

              <div class="row g-3 mt-1">

                <div class="col-6">
                  <div class="d-flex align-items-start">
                    <i class="bi bi-layers text-secondary me-2 mt-1"></i>
                    <div>
                      <small class="text-muted d-block">Fabric</small>
                      <span class="fw-semibold small">Handloom Cotton</span>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="d-flex align-items-start">
                    <i class="bi bi-scissors text-secondary me-2 mt-1"></i>
                    <div>
                      <small class="text-muted d-block">Blouse</small>
                      <span class="fw-semibold small">Unstitched (0.8m)</span>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="d-flex align-items-start">
                    <i class="bi bi-droplet text-secondary me-2 mt-1"></i>
                    <div>
                      <small class="text-muted d-block">Care</small>
                      <span class="fw-semibold small">Dry-clean only</span>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="d-flex align-items-start">
                    <i class="bi bi-aspect-ratio text-secondary me-2 mt-1"></i>
                    <div>
                      <small class="text-muted d-block">Dimensions</small>
                      <span class="fw-semibold small">Saree: 5.5m | Blouse: 0.8m</span>
                    </div>
                  </div>
                </div>

              </div>

              <div class="bg-light bg-opacity-50 border border-secondary border-opacity-25 rounded p-3 mt-4">
                <h6 class="fw-bold small mb-2"><i class="bi bi-tags-fill text-danger me-2"></i>Available Offers</h6>

                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-bag-check text-success me-2"></i>
                  <small class="text-dark">Buy any 2 sarees, get <strong class="text-danger">Extra 10% OFF</strong></small>
                </div>

                <div class="d-flex align-items-center">
                  <i class="bi bi-bag-check-fill text-success me-2"></i>
                  <small class="text-dark">Buy any 3 sarees, get <strong class="text-danger">Extra 15% OFF</strong></small>
                </div>
              </div>

            </div>
          </div>

          <div class="mt-5">
    
    <div class="mb-5">
        <h5 class="fw-bold mb-3">
            <i class="bi bi-stars text-warning me-2"></i>About this item
        </h5>
        
        <div class="bg-light bg-opacity-50 p-4 rounded border">
            <ul class="list-unstyled mb-0">
                
                <li class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success mt-1 me-3 flex-shrink-0"></i>
                    <span>
                        <strong>Vibrant Yellow & Red Crepe:</strong> Premium nylon blend featuring bold woven zari stripes that lend vivid contrast, visual rhythm, and texture.
                    </span>
                </li>

                <li class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success mt-1 me-3 flex-shrink-0"></i>
                    <span>
                        <strong>Delicate Zari Border:</strong> Thin Metallic Border adds a touch of shimmer without overpowering the saree's bright color palette.
                    </span>
                </li>

                <li class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success mt-1 me-3 flex-shrink-0"></i>
                    <span>
                        <strong>Red Contrast Edge:</strong> Enhances design, bold red body accents frame saree beautifully, creating a harmonious, vibrant look.
                    </span>
                </li>

                <li class="d-flex align-items-start mb-3">
                    <i class="bi bi-check-circle-fill text-success mt-1 me-3 flex-shrink-0"></i>
                    <span>
                        <strong>Coordinated Blouse Piece:</strong> Includes a matching red blouse with zari stripes to tie the ensemble together gracefully.
                    </span>
                </li>

                <li class="d-flex align-items-start">
                    <i class="bi bi-check-circle-fill text-success mt-1 me-3 flex-shrink-0"></i>
                    <span>
                        <strong>Comfort & Flow:</strong> Lightweight & breathable crepe fabric, flowy, easy to drape, crease resistant — perfect for festive events.
                    </span>
                </li>

            </ul>
        </div>
    </div>

    <div>
        <h5 class="fw-bold mb-3">
            <i class="bi bi-info-circle text-primary me-2"></i>Additional Information
        </h5>
        
        <div class="border rounded overflow-hidden shadow-sm">
            <table class="table table-striped table-hover mb-0">
                <tbody>
                    <tr>
                        <th scope="row" class="px-4 py-3 text-muted w-25 bg-light">Manufacturer</th>
                        <td class="px-4 py-3">BluPeacock Retail LLP, No. 11 & 18, First Floor, SNS Chambers, #239, Sankey Road, Sadashivnagar, Bangalore 560080</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-4 py-3 text-muted bg-light">Packer</th>
                        <td class="px-4 py-3">BluPeacock Retail LLP, Unit No. 11 & 18, First Floor, SNS Chambers, Bangalore 560080</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-4 py-3 text-muted bg-light">Item Weight</th>
                        <td class="px-4 py-3">1 kg 500 g</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-4 py-3 text-muted bg-light">Dimensions</th>
                        <td class="px-4 py-3">5.3 x 5.3 x 1.14 Meters</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-4 py-3 text-muted bg-light">Net Quantity</th>
                        <td class="px-4 py-3">1.0 count</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-4 py-3 text-muted bg-light">Generic Name</th>
                        <td class="px-4 py-3">Saree</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
          <div class="mt-5">
  
  <div class="row align-items-center">
    
    <div class="col-md-7">
      <h5 class="fw-bold mb-4"><i class="bi bi-bar-chart-line me-2"></i>Ratings & Reviews</h5>
      
      <div class="d-flex align-items-center gap-4">
        <div class="text-center p-3 rounded bg-light border">
          <h1 class="display-4 fw-bold mb-0 text-dark">4.4</h1>
          <div class="text-warning small mb-1">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
          </div>
          <p class="text-muted small mb-0 text-nowrap">285 Verified Buyers</p>
        </div>

        <div class="flex-grow-1 w-100">
          
          <div class="d-flex align-items-center mb-2">
            <span class="small fw-bold me-2" style="width: 30px;">5 <i class="bi bi-star-fill text-warning"></i></span>
            <div class="progress flex-grow-1 rounded-pill" style="height: 6px;">
              <div class="progress-bar bg-success rounded-pill" style="width: 70%"></div>
            </div>
            <span class="small text-muted ms-2" style="width: 30px;">199</span>
          </div>

          <div class="d-flex align-items-center mb-2">
            <span class="small fw-bold me-2" style="width: 30px;">4 <i class="bi bi-star-fill text-warning"></i></span>
            <div class="progress flex-grow-1 rounded-pill" style="height: 6px;">
              <div class="progress-bar bg-success rounded-pill" style="width: 20%"></div>
            </div>
            <span class="small text-muted ms-2" style="width: 30px;">50</span>
          </div>

          <div class="d-flex align-items-center mb-2">
            <span class="small fw-bold me-2" style="width: 30px;">3 <i class="bi bi-star-fill text-warning"></i></span>
            <div class="progress flex-grow-1 rounded-pill" style="height: 6px;">
              <div class="progress-bar bg-warning rounded-pill" style="width: 6%"></div>
            </div>
            <span class="small text-muted ms-2" style="width: 30px;">16</span>
          </div>

          <div class="d-flex align-items-center mb-2">
            <span class="small fw-bold me-2" style="width: 30px;">2 <i class="bi bi-star-fill text-warning"></i></span>
            <div class="progress flex-grow-1 rounded-pill" style="height: 6px;">
              <div class="progress-bar bg-warning rounded-pill" style="width: 2%"></div>
            </div>
            <span class="small text-muted ms-2" style="width: 30px;">4</span>
          </div>

          <div class="d-flex align-items-center">
            <span class="small fw-bold me-2" style="width: 30px;">1 <i class="bi bi-star-fill text-warning"></i></span>
            <div class="progress flex-grow-1 rounded-pill" style="height: 6px;">
              <div class="progress-bar bg-danger rounded-pill" style="width: 6%"></div>
            </div>
            <span class="small text-muted ms-2" style="width: 30px;">16</span>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-5 text-md-end mt-4 mt-md-0">
      <div class="d-flex flex-column align-items-end gap-2">
        <p class="text-muted small mb-1">Have you used this product?</p>
        <button id="showReviewBtn" class="btn btn-dark w-50 shadow-sm">
          <i class="bi bi-pen me-2"></i>Write a Review
        </button>
        <button id="showQuestionBtn" class="btn btn-outline-dark w-50">
          <i class="bi bi-question-circle me-2"></i>Ask a Question
        </button>
      </div>
    </div>

  </div>

  <div id="reviewBox" class="card border-0 shadow-sm bg-light mt-4 d-none"> <div class="card-body p-4">
      <h5 class="fw-bold mb-3">Share your experience</h5>
      
      <div class="row g-3">
        <div class="col-12">
          <label class="form-label small fw-bold">Your Review</label>
          <textarea class="form-control" placeholder="What did you like or dislike?" rows="4"></textarea>
        </div>

        <div class="col-12">
          <label class="form-label small fw-bold">Add Photos/Videos</label>
          <div class="border border-2 border-secondary border-opacity-25 rounded bg-white p-4 text-center position-relative" style="border-style: dashed !important;">
            <i class="bi bi-cloud-upload fs-3 text-muted"></i>
            <p class="small text-muted mb-0 mt-1">Click to upload or drag and drop</p>
            <input type="file" accept="image/*,video/*" class="form-control position-absolute top-0 start-0 h-100 opacity-0" multiple style="cursor: pointer;">
          </div>
        </div>

        <div class="col-md-6">
          <label class="form-label small fw-bold">Name</label>
          <input type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="col-md-6">
          <label class="form-label small fw-bold">Email</label>
          <input type="email" class="form-control" placeholder="Enter your email">
        </div>

        <div class="col-12 d-flex justify-content-end gap-2 mt-2">
          <button class="btn btn-outline-secondary px-4">Cancel</button>
          <button class="btn btn-dark px-4">Submit Review</button>
        </div>
      </div>

    </div>
  </div>

  <div id="questionBox" class="card border-0 shadow-sm bg-light mt-4 d-none">
      <div class="card-body p-4">
        <h5 class="fw-bold mb-3">Ask a Question</h5>
        <div class="mb-3">
            <textarea class="form-control" placeholder="Type your question regarding the product..." rows="3"></textarea>
        </div>
        <div class="row g-2">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Your Email">
            </div>
        </div>
        <div class="d-flex justify-content-end gap-2 mt-3">
            <button class="btn btn-outline-secondary">Cancel</button>
            <button class="btn btn-dark">Submit Question</button>
        </div>
      </div>
  </div>

</div>

          <div id="questionBox" class="question-box mt-4">
            <h5 class="mb-3">Ask a Question</h5>
            <textarea class="form-control mb-3" placeholder="Type your question..." rows="3"></textarea>
            <input type="text" class="form-control mb-2" placeholder="Your name">
            <input type="email" class="form-control mb-3" placeholder="Your email">
            <div class="d-flex gap-2">
              <button class="btn btn-outline-dark">Cancel</button>
              <button class="btn btn-dark">Submit Question</button>
            </div>
          </div>
          <section class="pr-review-section mt-5">
            <h5 class="fw-bold mb-3">Customer Reviews (575)</h5>


            <div class="border rounded p-3 mb-4">
              <div class="d-flex align-items-center mb-2">
                <span class="badge bg-success me-2">5★</span>
                <strong class="me-auto">Customer</strong>
                <small class="text-muted">1 Nov 2024</small>
              </div>
              <p>This purse has quickly become my favorite accessory! The design is both stylish and versatile... Highly
                recommend if you’re looking for a chic, functional purse!</p>
              <div class="d-flex gap-3 text-muted">
                <i class="bi bi-hand-thumbs-up"></i><span>3</span>
                <i class="bi bi-hand-thumbs-down"></i><span>1</span>
              </div>
            </div>


            <div class="border rounded p-3 mb-4">
              <div class="d-flex align-items-center mb-2">
                <span class="badge bg-success me-2">5★</span>
                <strong class="me-auto">Subramanian Krishnan</strong>
                <small class="text-muted">23 July 2023</small>
              </div>
              <p>Excellent quality, good finish, great looks ideal for office use... Thanks for this wonderful
                shopping experience.</p>
              <div class="d-flex flex-wrap gap-2 mb-2">
                <img src="assets/img/black.webp" class="pr-review-img img-thumbnail">
                <img src="assets/img/red.webp" class="pr-review-img img-thumbnail">
              </div>
              <div class="d-flex gap-3 text-muted">
                <i class="bi bi-hand-thumbs-up"></i><span>19</span>
                <i class="bi bi-hand-thumbs-down"></i><span>6</span>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section class="view-related-products mb-3">
    <div class="container">
      <h1 class="text-center py-4">Related Products</h1>
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
          <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
              class="card-img-top" alt="Men's Cotton Straight Kurta">
            <i class="fas fa-heart myshop-wishlist-btn"
              onclick="event.stopPropagation(); toggleWishlist(this)"></i>
            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
            <div class="card-body d-flex flex-column p-3">
              <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
              <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
              <div class="wl-rating">
                <svg viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
              </div>
              <p class="fw-bold text-dark mt-auto mb-2">
                Rs. 1099
              </p>
              <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
          <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
              class="card-img-top" alt="Men's Cotton Straight Kurta">
            <i class="fas fa-heart myshop-wishlist-btn"
              onclick="event.stopPropagation(); toggleWishlist(this)"></i>
            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
            <div class="card-body d-flex flex-column p-3">
              <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
              <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
              <div class="wl-rating">
                <svg viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
              </div>
              <p class="fw-bold text-dark mt-auto mb-2">
                Rs. 1099
              </p>
              <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
          <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
              class="card-img-top" alt="Men's Cotton Straight Kurta">
            <i class="fas fa-heart myshop-wishlist-btn"
              onclick="event.stopPropagation(); toggleWishlist(this)"></i>
            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
            <div class="card-body d-flex flex-column p-3">
              <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
              <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
              <div class="wl-rating">
                <svg viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
              </div>
              <p class="fw-bold text-dark mt-auto mb-2">
                Rs. 1099
              </p>
              <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
          <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
              class="card-img-top" alt="Men's Cotton Straight Kurta">
            <i class="fas fa-heart myshop-wishlist-btn"
              onclick="event.stopPropagation(); toggleWishlist(this)"></i>
            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
            <div class="card-body d-flex flex-column p-3">
              <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
              <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
              <div class="wl-rating">
                <svg viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
              </div>
              <p class="fw-bold text-dark mt-auto mb-2">
                Rs. 1099
              </p>
              <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
          <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
              class="card-img-top" alt="Men's Cotton Straight Kurta">
            <i class="fas fa-heart myshop-wishlist-btn"
              onclick="event.stopPropagation(); toggleWishlist(this)"></i>
            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
            <div class="card-body d-flex flex-column p-3">
              <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
              <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
              <div class="wl-rating">
                <svg viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
              </div>
              <p class="fw-bold text-dark mt-auto mb-2">
                Rs. 1099
              </p>
              <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex">
          <div class="card custom-product-card h-100 w-100 border-0 shadow-sm">
            <img src="https://i0.wp.com/utkalikaodisha.com/wp-content/uploads/2025/06/Group_1717_optimized_500.jpg"
              class="card-img-top" alt="Men's Cotton Straight Kurta">
            <i class="fas fa-heart myshop-wishlist-btn"
              onclick="event.stopPropagation(); toggleWishlist(this)"></i>
            <i class="fas fa-cart-shopping myshop-cart-icon"></i>
            <div class="card-body d-flex flex-column p-3">
              <h6 class="card-title mb-1 fw-semibold text-dark">HERE&NOW</h6>
              <p class="mb-1 text-muted small">Cotton Straight Kurta</p>
              <div class="wl-rating">
                <svg viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                4.5 <span class="myshop text-secondary">| 34,567 Ratings</span>
              </div>
              <p class="fw-bold text-dark mt-auto mb-2">
                Rs. 1099
              </p>
              <a href="product_details.php" class="btn btn-dark w-100">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="buyNowUnq_CheckoutPanel">
    <div class="buyNowUnq-panel">
      <div class="mobile-fixed-top">
        <div class="buyNowUnq-header">
          <div class="d-flex align-items-center gap-2">
            <img src="https://assets.website-files.com/62c161821422736b41295328/62c1626f2129188e7343e06a_logo.png"
              alt="Logo">
            <span class="fw-semibold small"></span>
          </div>
          <button id="buyNowUnq_CloseBtn" class="btn btn-close" aria-label="Close"></button>
        </div>
        <div class="buyNowUnq-step-indicator">
          <div class="buyNowUnq-step-label active" data-step="1">
            <i class="bi bi-check-circle-fill icon-check"></i><span
              class="icon-circle">1</span><span>Mobile</span>
          </div>
          <div class="buyNowUnq-step-label" data-step="2">
            <i class="bi bi-check-circle-fill icon-check"></i><span
              class="icon-circle">2</span><span>Address</span>
          </div>
          <div class="buyNowUnq-step-label" data-step="3">
            <i class="bi bi-check-circle-fill icon-check"></i><span
              class="icon-circle">3</span><span>Pay</span>
          </div>
        </div>
      </div>
      <div class="buyNowUnq-scroll-content">
        <h6 id="buyNowUnq_ToggleSummary" class="bg-white">
          Order Summary <i class="bi bi-chevron-down" id="buyNowUnq_SummaryIcon"></i>
        </h6>
        <div class="d-flex justify-content-between px-4 py-2 bg-white summary-price">
          <strong>Total:</strong>
          <strong id="totalPrice">₹2,499</strong>
        </div>
        <div class="border rounded p-3 mt-3 mx-4 d-none" id="buyNowUnq_ProductDetails">
          <div class="d-flex mb-2 gap-2">
            <img src="assets/img/pink.webp" class="rounded" alt="Product">
            <div>
              <strong>Eco-friendly Sneakers</strong><br>
              <span class="text-muted small">Color: White | Size: UK 9</span>
              <span>₹2,499</span>
            </div>
          </div>
        </div>
        <div class="coupon-section">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h6 class="fw-bold mb-0">ENTER COUPON CODE</h6>
            <a href="#" class="small text-decoration-none" id="viewCouponsLink">Click to view coupons ></a>
          </div>
          <div class="input-group mb-2">
            <input type="text" id="couponInput" class="form-control" placeholder="Enter coupon code">
            <button class="btn btn-dark" id="applyCouponBtn">Apply</button>
          </div>
          <div id="couponAppliedText" class="alert alert-success d-none p-2 py-1 small">
            ✅ <strong>FLAT100</strong> Applied — ₹100 OFF
          </div>
          <div id="couponError" class="text-danger small d-none">❌ Invalid coupon. Try again.</div>
          <p class="small text-muted mb-0"><a href="#" class="text-decoration-none">Have a Gift Card? Click
              Here</a></p>
        </div>
        <div id="buyNowUnq_Step1" class="buyNowUnq-step-content active">
          <label class="form-label text-muted small">Hey! Welcome back</label>
          <div id="mobileDisplayMode" class="d-none d-flex align-items-center mb-3">
            <div class="input-group">
              <span class="input-group-text fw-bold">+91</span>
              <input type="tel" class="form-control" id="displayedMobile" value="" readonly>
            </div>
            <button class="btn btn-outline-secondary btn-sm ms-2" id="editMobileBtn">Edit</button>
          </div>
          <div id="mobileEditMode">
            <label class="form-label text-muted small">Enter Mobile Number</label>
            <div class="input-group mb-3">
              <span class="input-group-text fw-bold">+91</span>
              <input type="tel" class="form-control" id="mobileNumberInput" name="mobileNumber"
                placeholder="Enter Mobile Number" required>
            </div>
          </div>
          <p class="text-muted small mb-3">
            <label class="form-check-label">
              <input type="checkbox" name="notifyMe" class="form-check-input me-1" checked>
              Notify me for orders, updates & offers
            </label>
          </p>
        </div>
        <div id="buyNowUnq_Step2" class="buyNowUnq-step-content">
          <label class="form-label fw-semibold">Deliver To</label>
          <div id="addressDisplayMode" class="d-none border rounded p-3 bg-light position-relative mb-3">
            <strong><span id="displayFullName"></span></strong><br>
            <span id="displayAddressLine"></span><br>
            <span class="text-muted" id="displayEmail"></span>
            <button class="btn btn-link btn-sm position-absolute top-0 end-0 me-2 mt-2 p-0"
              id="editAddressBtn">Click to
              Edit</button>
          </div>
          <div id="addressEditMode">
            <h6 class="fw-bold mb-3">Add New Address / Edit Address</h6>
            <input type="text" name="pincode" class="form-control mb-3" placeholder="Pincode *" required>
            <div class="d-flex gap-2 mb-3">
              <input type="text" name="city" class="form-control" placeholder="City *" readonly>
              <input type="text" name="state" class="form-control" placeholder="State *" readonly>
            </div>
            <input type="text" name="fullName" class="form-control mb-3" placeholder="Full Name *" required>
            <input type="email" name="emailAddress" class="form-control mb-3" placeholder="Email Address *"
              required>
            <textarea name="fullAddress" class="form-control mb-3" rows="2" placeholder="Complete Address *"
              required></textarea>
            <input type="text" name="landmark" class="form-control mb-3"
              placeholder="House,Floor,Landmark (Optional)">
          </div>
        </div>
        <div id="buyNowUnq_Step3" class="buyNowUnq-step-content">
          <label class="form-label fw-bold">Payment Options</label>
          <p class="text-success small mb-3">Get Extra Cashback on Mobikwik UPI & Wallet & Amazon Pay Wallet
          </p>
          <div class="buyNowUnq-payment-option" data-payment-type="upi">
            <span class="header-badge">Faster Delivery + cashback</span>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <img src="https://img.icons8.com/color/48/000000/upi.png" alt="UPI"
                  class="payment-logo">
                <h6 class="d-inline-block mb-0 align-middle">UPI</h6>
                <small class="text-muted d-block ms-4">Paytm, PhonePe, GPay</small>
              </div>
              <span class="fw-bold">₹<span id="upiPrice">2499</span> <i
                  class="bi bi-chevron-right"></i></span>
            </div>
          </div>
          <div class="buyNowUnq-payment-option" data-payment-type="card">
            <span class="header-badge">Faster Delivery</span>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <img src="https://img.icons8.com/fluency/48/000000/bank-card.png" alt="Cards"
                  class="payment-logo">
                <h6 class="d-inline-block mb-0 align-middle">Debit/Credit Cards</h6>
                <small class="text-muted d-block ms-4">Visa, Mastercard, Rupay</small>
              </div>
              <span class="fw-bold">₹<span id="cardPrice">2499</span> <i
                  class="bi bi-chevron-right"></i></span>
            </div>
          </div>
          <div class="buyNowUnq-payment-option" data-payment-type="emi">
            <span class="header-badge">NEW - Pay with EMI</span>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <img src="https://img.icons8.com/ios-filled/50/000000/money-bag-euro.png" alt="EMI"
                  class="payment-logo">
                <h6 class="d-inline-block mb-0 align-middle">Pay Later</h6>
                <small class="text-muted d-block ms-4">0% EMI on UPI • by Snapmint</small>
              </div>
              <span class="fw-bold">₹1000 now + 2 EMIs <i class="bi bi-chevron-right"></i></span>
            </div>
          </div>
          <div class="buyNowUnq-payment-option" data-payment-type="wallet">
            <span class="header-badge">Get cashback</span>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <img src="https://img.icons8.com/color/48/000000/wallet--v1.png" alt="Wallet"
                  class="payment-logo">
                <h6 class="d-inline-block mb-0 align-middle">Wallets</h6>
                <small class="text-muted d-block ms-4">Mobikwik, Amazon Pay, Freecharge etc.</small>
              </div>
              <span class="fw-bold">₹<span id="walletPrice">2499</span> <i
                  class="bi bi-chevron-right"></i></span>
            </div>
          </div>
          <div class="buyNowUnq-payment-option" data-payment-type="cod">
            <h6 class="mb-0">Cash on Delivery</h6>
          </div>
          <div id="payMethodError" class="text-danger small mt-2 d-none">⚠️ Please select a payment method
          </div>
        </div>
      </div>
      <div class="mobile-fixed-bottom">
        <div class="buyNowUnq-fixed-bottom-bar">
          <button id="buyNowUnq_StepActionBtn" class="btn btn-dark w-100">Continue →</button>
        </div>
        <div class="buyNowUnq-footer">
          <p class="mb-1">By proceeding, I accept that I have read and understood the Gokwik's</p>
          <p class="mb-1"><a href="#" class="text-decoration-none text-muted">Privacy Policy</a> and <a
              href="#" class="text-decoration-none text-muted">T&C</a>.</p>
          <div class="d-flex justify-content-center gap-3 mt-2">
            <img src="https://img.icons8.com/color/24/000000/secured-lock.png" alt="Secured"
              title="PCI DSS Certified">
            <img src="https://img.icons8.com/color/24/000000/verified-account.png" alt="Verified"
              title="Verified Merchant">
            <img src="https://img.icons8.com/color/24/000000/trust.png" alt="Trust" title="Secure Payments">
            <img src="https://img.icons8.com/color/24/000000/warranty.png" alt="Warranty"
              title="Verified Website">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/GoKwik_logo.png" alt="GoKwik"
              title="Powered by GoKwik" width="60">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="buyNowUnq_OffersBenefitsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content m-3">
        <div class="modal-header">
          <h5 class="modal-title">Offers & Benefits</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="offersModalCouponInput"
              placeholder="Enter coupon code" aria-label="Enter coupon code">
            <button class="btn btn-dark" id="offersModalApplyCouponBtn">Apply</button>
          </div>
          <ul class="nav nav-tabs mb-3" id="offersTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="active-coupons-tab" data-bs-toggle="tab"
                data-bs-target="#active-coupons" type="button" role="tab" aria-controls="active-coupons"
                aria-selected="true">Active Coupons</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="payment-offers-tab" data-bs-toggle="tab"
                data-bs-target="#payment-offers" type="button" role="tab" aria-controls="payment-offers"
                aria-selected="false">Payment Offers</button>
            </li>
          </ul>
          <div class="tab-content" id="offersTabContent">
            <div class="tab-pane fade show active" id="active-coupons" role="tabpanel"
              aria-labelledby="active-coupons-tab">
              <p class="text-muted small">No active coupons available right now.</p>
            </div>
            <div class="tab-pane fade" id="payment-offers" role="tabpanel"
              aria-labelledby="payment-offers-tab">
              <p class="text-success small mb-3">Save more with these offers auto-applied on select
                payment methods</p>
              <h6 class="fw-bold">UPI</h6>
              <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div class="d-flex align-items-center">
                    <img src="https://img.icons8.com/color/48/000000/mobikwik.png" alt="Mobikwik"
                      class="offer-img-small">
                    <strong>Flat ₹75 cashback for new MobiKwik UPI users.</strong>
                  </div>
                  <span class="badge bg-success">PAY</span>
                </div>
                <p class="small text-muted mb-1">Upto ₹50 for existing users</p>
                <a href="#" class="small text-decoration-none">View more</a>
              </div>
              <h6 class="fw-bold">Wallets</h6>
              <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div class="d-flex align-items-center">
                    <img src="https://img.icons8.com/color/48/000000/amazon-pay.png"
                      alt="Amazon Pay" class="offer-img-small">
                    <strong>Upto ₹300 cashback on Amazon Pay</strong>
                  </div>
                  <span class="badge bg-success">PAY</span>
                </div>
                <p class="small text-muted mb-1">Win up to ₹300 cashback across 3 transactions on Amazon
                  Pay Balance via
                  scratch card</p>
                <a href="#" class="small text-decoration-none">View more</a>
              </div>
              <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div class="d-flex align-items-center">
                    <img src="https://img.icons8.com/color/48/000000/mobikwik.png" alt="Mobikwik"
                      class="offer-img-small">
                    <strong>Upto 15% cashback on Mobikwik Wallet</strong>
                  </div>
                  <span class="badge bg-success">PAY</span>
                </div>
                <p class="small text-muted mb-1">Upto 15% cashback auto applied on Mobikwik wallet</p>
                <a href="#" class="small text-decoration-none">View more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="buyNowUnq_OnlinePaymentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content m-3">
        <div class="modal-header">
          <h5 class="modal-title">Complete your Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex gap-3 justify-content-center mb-3">
            <img src="https://img.icons8.com/color/96/000000/paytm.png" alt="Paytm" class="upi-app-logo">
            <img src="https://img.icons8.com/color/96/000000/phone-pe.png" alt="PhonePe"
              class="upi-app-logo">
            <img src="https://img.icons8.com/color/96/000000/google-pay.png" alt="Google Pay"
              class="upi-app-logo">
            <img src="https://img.icons8.com/fluency/96/000000/bhim.png" alt="BHIM" class="upi-app-logo">
            <img src="https://img.icons8.com/color/96/000000/amazon-pay.png" alt="Amazon Pay"
              class="upi-app-logo">
          </div>
          <div class="online-option-card selected mb-3" data-online-method="qr">
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_many_applications.png"
                  alt="QR Code" class="logo">
                <span>Open any UPI App & scan QR Code to pay</span>
              </div>
              <i class="bi bi-chevron-right"></i>
            </div>
          </div>
          <div class="qr-code-box text-center mb-3" id="qrCodeBox">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=upi://pay?pa=your_upi_id@bank&pn=YourName&mc=0000&tid=1234567890&tr=ORDER123&am=2999&cu=INR"
              alt="UPI QR Code">
            <button class="btn btn-outline-secondary btn-sm">Click to show QR</button>
          </div>
          <div class="text-center my-3 text-muted fw-semibold">OR</div>
          <div class="online-option-card mb-3" data-online-method="upi-id">
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/upi.png" alt="UPI ID"
                  class="logo">
                <span>Pay via UPI ID</span>
              </div>
              <i class="bi bi-chevron-right"></i>
            </div>
          </div>
          <div id="upiIdInputSection" class="mb-3 d-none">
            <div class="upi-input-group d-flex align-items-center">
              <input type="text" id="upiInput" name="upiId" class="form-control"
                placeholder="Enter your UPI ID">
              <button class="btn btn-primary rounded-end" id="upiPayBtn">Pay</button>
            </div>
            <small class="text-muted">You will receive payment request on your UPI App</small>
          </div>
          <div class="text-center my-3 text-muted fw-semibold">OR</div>
          <div class="online-option-card" data-online-method="request-someone">
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <i class="bi bi-link-45deg me-2 fs-5"></i>
                <span>Request Someone Else to Pay</span>
              </div>
              <i class="bi bi-chevron-right"></i>
            </div>
            <small class="text-muted d-block mt-2">
              Share this payment link with your friend or family and ask them to make the payment for you
            </small>
          </div>
        </div>
        <div class="modal-footer ">
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#orderConfirmedModal">
            Simulate Order‑Confirmed
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="buyNowUnq_SuccessModal" tabindex="-1" aria-hidden="true">
    <div class="modal fade" id="orderConfirmedModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
          <section class="d-flex justify-content-center align-items-center w-100">
            <div class="cn-card shadow-lg text-white text-center">
              <div id="cn-lottie" class="mb-3"></div>

              <h1 class="cn-title mb-2">Order Confirmed!</h1>
              <p class="cn-msg mb-4">
                Thank you for your purchase! Your order is being prepared and will be shipped shortly.
              </p>

              <div class="cn-info text-start mb-4">
                <p><strong>Order Number:</strong> <span>#987654321</span></p>
                <p><strong>Order Date:</strong> <span>June&nbsp;3,&nbsp;2025</span></p>
                <p><strong>Total Paid:</strong> <span>$149.99</span></p>
              </div>

              <div class="cn-buttons d-flex gap-3 justify-content-center flex-wrap">
                <a href="index.php" class="btn btn-light cn-shop fw-semibold px-4">Continue
                  Shopping</a>
                <a href="profile_page.php" class="btn btn-outline-light cn-outline px-4">View Order
                  Details</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

  </div>
  <div class="modal fade" id="buyNowUnq_ExitModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Exit Checkout?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="fw-semibold">Why are you exiting?</p>
          <div class="form-check"><input type="radio" class="form-check-input" name="buyNowUnq_exitReason">Too
            complicated</div>
          <div class="form-check"><input type="radio" class="form-check-input"
              name="buyNowUnq_exitReason">Changed mind
          </div>
          <div class="form-check"><input type="radio" class="form-check-input"
              name="buyNowUnq_exitReason">Price not
            suitable</div>
          <div class="form-check mb-3"><input type="radio" class="form-check-input"
              name="buyNowUnq_exitReason">Other
          </div>
          <textarea class="form-control mb-3" rows="2"
            placeholder="Additional feedback (optional)"></textarea>
          <div class="d-flex justify-content-end gap-2">
            <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Continue Checkout</button>
            <button class="btn btn-danger" id="buyNowUnq_ConfirmExit">Exit Anyway</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'common/footer.php' ?>


  <!-- review upload js -->
  <script>
    document.getElementById("showReviewBtn").addEventListener("click", function() {
      document.getElementById("reviewBox").classList.toggle("active");
      document.getElementById("questionBox").classList.remove("active");
    });

    document.getElementById("showQuestionBtn").addEventListener("click", function() {
      document.getElementById("questionBox").classList.toggle("active");
      document.getElementById("reviewBox").classList.remove("active");
    });
  </script>

  <!-- view page js -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const mainImage = document.getElementById("mainImage");
      const lens = document.getElementById("lens");
      const zoomResult = document.getElementById("zoomResult");
      const thumbs = document.querySelectorAll(".thumbs img");

      thumbs.forEach(thumb => {
        thumb.addEventListener("click", () => {
          thumbs.forEach(img => img.classList.remove("active"));
          thumb.classList.add("active");
          mainImage.src = thumb.src;
          zoomResult.style.backgroundImage = `url('${thumb.src}')`;
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

      mainImage.addEventListener("mouseenter", function() {
        lens.style.display = "block";
        zoomResult.style.display = "block";
        zoomResult.style.backgroundImage = `url('${mainImage.src}')`;
      });

      mainImage.addEventListener("mousemove", moveLens);

      mainImage.addEventListener("mouseleave", function() {
        lens.style.display = "none";
        zoomResult.style.display = "none";
      });
    });
  </script>
  <script>
    // Thumbnail click → change main image
    document.querySelectorAll(".thumbs img").forEach(thumb => {
      thumb.addEventListener("click", function() {
        document.querySelectorAll(".thumbs img").forEach(el => el.classList.remove("active"));
        this.classList.add("active");
        document.getElementById("mainImage").src = this.dataset.img;
      });
    });

    // Color change on click
    document.querySelectorAll(".color-option").forEach(option => {
      option.addEventListener("click", function() {
        document.querySelectorAll(".color-option").forEach(el => el.classList.remove("active"));
        this.classList.add("active");
        document.getElementById("mainImage").src = this.dataset.img;
      });
    });

    // Size selection
    document.querySelectorAll(".size-option").forEach(option => {
      option.addEventListener("click", function() {
        document.querySelectorAll(".size-option").forEach(el => el.classList.remove("btn-dark", "text-white"));
        this.classList.add("btn-dark", "text-white");
      });
    });

    // Show review/question forms
    document.getElementById("showReviewBtn").addEventListener("click", () => {
      document.getElementById("reviewBox").style.display = "block";
      document.getElementById("questionBox").style.display = "none";
    });
    document.getElementById("showQuestionBtn").addEventListener("click", () => {
      document.getElementById("questionBox").style.display = "block";
      document.getElementById("reviewBox").style.display = "none";
    });
  </script>
  <!-- search bar -->
  <script>
    function setupSearchToggle(toggleId, boxId) {
      const toggle = document.getElementById(toggleId);
      const box = document.getElementById(boxId);

      toggle.addEventListener('click', function(e) {
        e.stopPropagation();
        box.classList.toggle('d-none');
      });

      document.addEventListener('click', function(e) {
        if (!box.contains(e.target) && !toggle.contains(e.target)) {
          box.classList.add('d-none');
        }
      });
    }

    setupSearchToggle('searchToggle1', 'searchBox1');
    setupSearchToggle('searchToggle2', 'searchBox2');
  </script>


  <!-- JS check out-->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const panel = document.getElementById("buyNowUnq_CheckoutPanel");
      const buyNowBtn = document.getElementById("buyNowUnq_BuyNowBtn");
      const stepActionBtn = document.getElementById("buyNowUnq_StepActionBtn");
      const closeBtn = document.getElementById("buyNowUnq_CloseBtn");
      const exitAnywayBtn = document.getElementById("buyNowUnq_ConfirmExit");
      const stepContents = document.querySelectorAll(".buyNowUnq-step-content");
      const stepLabels = document.querySelectorAll(".buyNowUnq-step-label");
      const mobileDisplayMode = document.getElementById("mobileDisplayMode");
      const mobileEditMode = document.getElementById("mobileEditMode");
      const displayedMobile = document.getElementById("displayedMobile");
      const mobileNumberInput = document.getElementById("mobileNumberInput");
      const editMobileBtn = document.getElementById("editMobileBtn");
      const addressDisplayMode = document.getElementById("addressDisplayMode");
      const addressEditMode = document.getElementById("addressEditMode");
      const editAddressBtn = document.getElementById("editAddressBtn");
      const displayFullName = document.getElementById("displayFullName");
      const displayAddressLine = document.getElementById("displayAddressLine");
      const displayEmail = document.getElementById("displayEmail");
      const addressInputs = addressEditMode.querySelectorAll('input, textarea');
      const paymentOptions = document.querySelectorAll(".buyNowUnq-payment-option");
      const payMethodError = document.getElementById("payMethodError");
      const couponInput = document.getElementById("couponInput");
      const applyCouponBtn = document.getElementById("applyCouponBtn");
      const couponAppliedText = document.getElementById("couponAppliedText");
      const couponError = document.getElementById("couponError");
      const totalPriceElement = document.getElementById("totalPrice");
      const upiPriceElement = document.getElementById("upiPrice");
      const cardPriceElement = document.getElementById("cardPrice");
      const walletPriceElement = document.getElementById("walletPrice");
      const successModalElement = document.getElementById("buyNowUnq_SuccessModal");
      const successModal = new bootstrap.Modal(successModalElement);
      const exitModal = new bootstrap.Modal(document.getElementById("buyNowUnq_ExitModal"));
      const onlinePaymentModal = new bootstrap.Modal(document.getElementById("buyNowUnq_OnlinePaymentModal"));

      const offersBenefitsModalElement = document.getElementById("buyNowUnq_OffersBenefitsModal");
      const offersBenefitsModal = new bootstrap.Modal(offersBenefitsModalElement);
      const viewCouponsLink = document.getElementById("viewCouponsLink");
      const offersModalCouponInput = document.getElementById("offersModalCouponInput");
      const offersModalApplyCouponBtn = document.getElementById("offersModalApplyCouponBtn");
      const onlineOptionCards = document.querySelectorAll(".online-option-card");
      const qrCodeBox = document.getElementById("qrCodeBox");
      const upiIdInputSection = document.getElementById("upiIdInputSection");
      let checkoutState = {
        currentStep: 1,
        mobileNumber: "",
        address: {
          fullName: "",
          addressLine: "",
          city: "",
          state: "",
          pincode: "",
          email: "",
          landmark: ""
        },
        selectedPaymentType: null,
        totalPrice: 2499,
        couponApplied: false
      };
      let lottieAnimation = null;

      function renderStep(stepNumber) {
        checkoutState.currentStep = stepNumber;
        stepLabels.forEach(label => {
          const labelStepNum = parseInt(label.dataset.step);
          label.classList.remove("active", "completed");
          label.querySelector('.icon-circle').style.display = 'inline-flex';
          label.querySelector('.icon-check').style.display = 'none';
          if (labelStepNum < checkoutState.currentStep) {
            label.classList.add("completed");
            label.querySelector('.icon-circle').style.display = 'none';
            label.querySelector('.icon-check').style.display = 'inline-block';
          } else if (labelStepNum === checkoutState.currentStep) {
            label.classList.add("active");
          }
        });
        stepContents.forEach(content => content.classList.remove("active"));
        document.getElementById(`buyNowUnq_Step${checkoutState.currentStep}`).classList.add("active");
        if (checkoutState.currentStep === 3) {
          stepActionBtn.textContent = "Place Order";

        } else {
          stepActionBtn.textContent = "Continue →";
        }
        switch (checkoutState.currentStep) {
          case 1:
            if (!checkoutState.mobileNumber) {
              mobileDisplayMode.classList.add('d-none');
              mobileEditMode.classList.remove('d-none');
              mobileNumberInput.value = "";
              editMobileBtn.textContent = "Cancel";
            } else {
              updateMobileDisplay(checkoutState.mobileNumber);
            }
            break;
          case 2:
            if (!checkoutState.address.fullName || !checkoutState.address.pincode) {
              addressDisplayMode.classList.add('d-none');
              addressEditMode.classList.remove('d-none');
              addressInputs.forEach(input => {
                input.value = "";
              });
            } else {
              updateAddressDisplay();
            }
            break;
          case 3:
            updatePaymentPrices();
            paymentOptions.forEach(opt => opt.classList.remove("selected"));
            checkoutState.selectedPaymentType = null;
            payMethodError.classList.add("d-none");
            break;
        }
        document.querySelector('.buyNowUnq-scroll-content').scrollTop = 0;
      }

      function updateMobileDisplay(mobileNum) {
        displayedMobile.value = mobileNum;
        mobileNumberInput.value = mobileNum;
        mobileDisplayMode.classList.remove('d-none');
        mobileEditMode.classList.add('d-none');
        editMobileBtn.textContent = "Edit";
      }

      function toggleMobileEditMode() {
        if (mobileEditMode.classList.contains('d-none')) {
          mobileDisplayMode.classList.add('d-none');
          mobileEditMode.classList.remove('d-none');
          mobileNumberInput.focus();
          editMobileBtn.textContent = "Cancel";
        } else {
          updateMobileDisplay(checkoutState.mobileNumber);
        }
      }

      function validateMobileNumber() {
        let numberToValidate = mobileNumberInput.value.trim();
        if (mobileDisplayMode.classList.contains('d-flex') && !mobileDisplayMode.classList.contains('d-none')) {
          numberToValidate = displayedMobile.value.trim();
        }

        if (!/^\d{10}$/.test(numberToValidate)) {
          alert("Please enter a valid 10-digit mobile number.");
          mobileNumberInput.classList.add('is-invalid');
          return false;
        }
        mobileNumberInput.classList.remove('is-invalid');
        checkoutState.mobileNumber = numberToValidate;
        return true;
      }

      function updateAddressDisplay() {
        const addr = checkoutState.address;
        displayFullName.textContent = addr.fullName;
        displayAddressLine.textContent = `${addr.fullAddress}, ${addr.city}, ${addr.state}, ${addr.pincode}`;
        displayEmail.textContent = addr.email;
        addressDisplayMode.classList.remove('d-none');
        addressEditMode.classList.add('d-none');
      }

      function toggleAddressEditMode() {
        if (addressEditMode.classList.contains('d-none')) {
          addressDisplayMode.classList.add('d-none');
          addressEditMode.classList.remove('d-none');
          addressEditMode.querySelector('[name="pincode"]').value = checkoutState.address.pincode;
          addressEditMode.querySelector('[name="city"]').value = checkoutState.address.city;
          addressEditMode.querySelector('[name="state"]').value = checkoutState.address.state;
          addressEditMode.querySelector('[name="fullName"]').value = checkoutState.address.fullName;
          addressEditMode.querySelector('[name="fullAddress"]').value = checkoutState.address.fullAddress;
          addressEditMode.querySelector('[name="landmark"]').value = checkoutState.address.landmark;
          addressEditMode.querySelector('[name="emailAddress"]').value = checkoutState.address.email;
        } else {
          updateAddressDisplay();
        }
      }

      function validateAndSaveAddress() {
        let isValid = true;
        const newAddressData = {};
        addressInputs.forEach(input => {
          const value = input.value.trim();
          newAddressData[input.name] = value;
          if (input.hasAttribute('required') && value === '') {
            input.classList.add('is-invalid');
            isValid = false;
          } else {
            input.classList.remove('is-invalid');
          }
        });
        if (isValid) {
          checkoutState.address = {
            ...checkoutState.address,
            ...newAddressData
          };
          updateAddressDisplay();
        }
        return isValid;
      }
      addressEditMode.querySelector('[name="pincode"]').addEventListener('input', (event) => {
        const pincode = event.target.value;
        if (pincode.length === 6 && /^\d+$/.test(pincode)) {
          addressEditMode.querySelector('[name="city"]').value = "JAJAPUR";
          addressEditMode.querySelector('[name="state"]').value = "ODISHA";
        } else {
          addressEditMode.querySelector('[name="city"]').value = "";
          addressEditMode.querySelector('[name="state"]').value = "";
        }
      });

      function updatePaymentPrices() {
        upiPriceElement.textContent = checkoutState.totalPrice.toLocaleString();
        cardPriceElement.textContent = checkoutState.totalPrice.toLocaleString();
        walletPriceElement.textContent = checkoutState.totalPrice.toLocaleString();
      }

      function applyCoupon(couponCode) {
        const enteredCode = couponCode.trim().toUpperCase();
        if (checkoutState.couponApplied) return;
        if (enteredCode === "FLAT100") {
          couponAppliedText.classList.remove("d-none");
          couponError.classList.add("d-none");
          checkoutState.totalPrice = 2399;
          totalPriceElement.textContent = `₹${checkoutState.totalPrice.toLocaleString()}`;
          updatePaymentPrices();
          checkoutState.couponApplied = true;
        } else {
          couponAppliedText.classList.add("d-none");
          couponError.classList.remove("d-none");
        }
      }

      function showSuccessModal() {
        panel.style.display = "none";
        successModal.show();
      }
      successModalElement.addEventListener('shown.bs.modal', function() {
        if (!lottieAnimation) {
          lottieAnimation = lottie.loadAnimation({
            container: document.getElementById('lottie-success'),
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: 'https://assets-v2.lottiefiles.com/a/c95cdb0c-1173-11ee-a8c2-07deb814270b/Aw5xYd1qHx.png'
          });
        } else {
          lottieAnimation.goToAndPlay(0, true);
        }
      });
      successModalElement.addEventListener('hidden.bs.modal', function() {
        if (lottieAnimation) {
          lottieAnimation.stop();
        }
      });
      buyNowBtn.addEventListener("click", () => {
        panel.style.display = "flex";
        renderStep(1);
      });
      closeBtn.addEventListener("click", () => exitModal.show());
      exitAnywayBtn.addEventListener("click", () => {
        panel.style.display = "none";
        exitModal.hide();
      });
      stepActionBtn.addEventListener("click", () => {
        if (checkoutState.currentStep === 1) {
          if (validateMobileNumber()) {
            renderStep(2);
          }
        } else if (checkoutState.currentStep === 2) {
          if (!addressEditMode.classList.contains('d-none')) {
            if (!validateAndSaveAddress()) {
              return;
            }
          }
          renderStep(3);
        } else if (checkoutState.currentStep === 3) {
          if (!checkoutState.selectedPaymentType) {
            payMethodError.classList.remove("d-none");
            return;
          }
          const orderData = {
            mobile: checkoutState.mobileNumber,
            address: checkoutState.address,
            paymentMethod: checkoutState.selectedPaymentType,
            totalAmount: checkoutState.totalPrice,
            couponApplied: checkoutState.couponApplied
          };
          console.log("Submitting Order Data:", orderData);
          if (checkoutState.selectedPaymentType === "cod") {
            showSuccessModal();
          } else {
            onlinePaymentModal.show();
            onlineOptionCards.forEach(card => card.classList.remove('selected'));
            document.querySelector('[data-online-method="qr"]').classList.add('selected');
            qrCodeBox.classList.remove('d-none');
            upiIdInputSection.classList.add('d-none');
          }
        }


      });


      editMobileBtn.addEventListener('click', toggleMobileEditMode);
      editAddressBtn.addEventListener('click', toggleAddressEditMode);
      paymentOptions.forEach(option => {
        option.addEventListener("click", () => {
          paymentOptions.forEach(opt => opt.classList.remove("selected"));
          option.classList.add("selected");
          checkoutState.selectedPaymentType = option.dataset.paymentType;
          payMethodError.classList.add("d-none");
        });
      });
      const summaryToggle = document.getElementById("buyNowUnq_ToggleSummary");
      const productDetails = document.getElementById("buyNowUnq_ProductDetails");
      const summaryIcon = document.getElementById("buyNowUnq_SummaryIcon");
      summaryToggle.addEventListener("click", () => {
        productDetails.classList.toggle("d-none");
        summaryIcon.classList.toggle("bi-chevron-down");
        summaryIcon.classList.toggle("bi-chevron-up");
      });

      applyCouponBtn.addEventListener("click", () => {
        applyCoupon(couponInput.value);
      });

      viewCouponsLink.addEventListener("click", (event) => {
        event.preventDefault();
        offersBenefitsModal.show();
        offersModalCouponInput.value = couponInput.value;
      });

      offersModalApplyCouponBtn.addEventListener("click", () => {
        applyCoupon(offersModalCouponInput.value);
        offersBenefitsModal.hide();
      });


      onlineOptionCards.forEach(card => {
        card.addEventListener('click', () => {
          onlineOptionCards.forEach(opt => opt.classList.remove('selected'));
          card.classList.add('selected');
          const method = card.dataset.onlineMethod;
          if (method === 'qr') {
            qrCodeBox.classList.remove('d-none');
            upiIdInputSection.classList.add('d-none');
          } else if (method === 'upi-id') {
            qrCodeBox.classList.add('d-none');
            upiIdInputSection.classList.remove('d-none');
          } else if (method === 'request-someone') {
            qrCodeBox.classList.add('d-none');
            upiIdInputSection.classList.add('d-none');
          }
        });
      });
      document.getElementById('upiPayBtn').addEventListener('click', () => {
        const upiId = document.getElementById('upiInput').value.trim();
        if (upiId) {
          alert(`Initiating UPI payment to: ${upiId}`);
          onlinePaymentModal.hide();
          showSuccessModal();
        } else {
          alert('Please enter your UPI ID.');
        }
      });
      document.querySelector("#buyNowUnq_OnlinePaymentModal .modal-footer button").addEventListener('click', () => {
        onlinePaymentModal.hide();
        showSuccessModal();
      });
      renderStep(1);
    });
  </script>


  <script>
    const stepActionBtn = document.getElementById("buyNowUnq_StepActionBtn");
    const codOption = document.querySelector('[data-payment-type="cod"]');
    const paymentOptions = document.querySelectorAll(".buyNowUnq-payment-option");
    const payMethodError = document.getElementById("payMethodError");

    let selectedPaymentMethod = null;

    paymentOptions.forEach(option => {
      option.addEventListener("click", () => {
        paymentOptions.forEach(opt => opt.classList.remove("selected"));
        option.classList.add("selected");
        selectedPaymentMethod = option.getAttribute("data-payment-type");
        payMethodError.classList.add("d-none");
      });
    });

    stepActionBtn.addEventListener("click", () => {
      const step3 = document.getElementById("buyNowUnq_Step3");
      if (!step3.classList.contains("active")) return;

      if (!selectedPaymentMethod) {
        payMethodError.classList.remove("d-none");
        return;
      }

      if (selectedPaymentMethod === "cod") {
        const successModal = new bootstrap.Modal(document.getElementById("orderConfirmedModal"));
        successModal.show();
      } else {

        const onlinePaymentModal = new bootstrap.Modal(document.getElementById("buyNowUnq_OnlinePaymentModal"));
        onlinePaymentModal.show();
      }
    });
  </script>


  <!-- account dropdown -->

  <script>
    // ---------- DESKTOP ----------
    const arDropdownDesktop = document.getElementById('ar-account-dropdown-desktop');
    const arIconDesktop = document.getElementById('ar-account-icon-desktop');
    const loginBtnDesktop = document.getElementById('ar-account-login-btn-desktop');
    const logoutBtnDesktop = document.getElementById('ar-account-logout-btn-desktop');
    const beforeLoginDesktop = document.getElementById('ar-account-before-login-desktop');
    const afterLoginDesktop = document.getElementById('ar-account-after-login-desktop');
    const containerDesktop = document.getElementById('ar-account-container-desktop');

    arIconDesktop.addEventListener('click', (e) => {
      e.stopPropagation();
      arDropdownDesktop.style.display = arDropdownDesktop.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (e) => {
      if (!containerDesktop.contains(e.target)) {
        arDropdownDesktop.style.display = 'none';
      }
    });

    loginBtnDesktop.addEventListener('click', () => {
      new bootstrap.Modal(document.getElementById('arLoginModal')).show();
    });

    logoutBtnDesktop.addEventListener('click', () => {
      beforeLoginDesktop.classList.remove('d-none');
      afterLoginDesktop.classList.add('d-none');
    });

    const arDropdownMobile = document.getElementById('ar-account-dropdown-mobile');
    const arIconMobile = document.getElementById('ar-account-icon-mobile');
    const loginBtnMobile = document.getElementById('ar-account-login-btn-mobile');
    const logoutBtnMobile = document.getElementById('ar-account-logout-btn-mobile');
    const beforeLoginMobile = document.getElementById('ar-account-before-login-mobile');
    const afterLoginMobile = document.getElementById('ar-account-after-login-mobile');
    const containerMobile = document.getElementById('ar-account-container-mobile');

    arIconMobile.addEventListener('click', (e) => {
      e.stopPropagation();
      arDropdownMobile.style.display = arDropdownMobile.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (e) => {
      if (!containerMobile.contains(e.target)) {
        arDropdownMobile.style.display = 'none';
      }
    });

    loginBtnMobile.addEventListener('click', () => {
      new bootstrap.Modal(document.getElementById('arLoginModal')).show();
    });

    logoutBtnMobile.addEventListener('click', () => {
      beforeLoginMobile.classList.remove('d-none');
      afterLoginMobile.classList.add('d-none');
    });

    const mobileInput = document.getElementById('arMobile');
    const continueBtn = document.getElementById('arContinueBtn');
    const verifyBtn = document.getElementById('arVerifyOtpBtn');
    const otpInputs = document.querySelectorAll('.ar-otp-input');
    const mobileSpan = document.getElementById('arShowMobile');

    const stepMobile = document.getElementById('arStepMobile');
    const stepOtp = document.getElementById('arStepOtp');
    const stepSuccess = document.getElementById('arStepSuccess');

    let beforeLogin = null;
    let afterLogin = null;

    function setLoginContext() {
      const isMobileOrTablet = window.innerWidth <= 991;
      beforeLogin = isMobileOrTablet ? beforeLoginMobile : beforeLoginDesktop;
      afterLogin = isMobileOrTablet ? afterLoginMobile : afterLoginDesktop;
    }


    continueBtn.addEventListener('click', () => {
      const mobile = mobileInput.value.trim();
      if (/^\d{10}$/.test(mobile)) {
        setLoginContext();
        mobileSpan.textContent = mobile;
        stepMobile.classList.add('d-none');
        stepOtp.classList.remove('d-none');
        otpInputs.forEach(inp => inp.value = '');
        otpInputs[0].focus();
      } else {
        alert('Enter a valid 10-digit mobile number');
      }
    });

    otpInputs.forEach((input, idx) => {
      input.addEventListener('input', () => {
        if (input.value && idx < otpInputs.length - 1) {
          otpInputs[idx + 1].focus();
        }
        verifyBtn.disabled = ![...otpInputs].every(i => i.value);
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && !input.value && idx > 0) {
          otpInputs[idx - 1].focus();
        }
      });
    });

    verifyBtn.addEventListener('click', () => {
      stepOtp.classList.add('d-none');
      stepSuccess.classList.remove('d-none');

      setTimeout(() => {
        bootstrap.Modal.getInstance(document.getElementById('arLoginModal')).hide();
        stepSuccess.classList.add('d-none');
        stepMobile.classList.remove('d-none');

        // FIX: recalc containers every time
        setLoginContext();
        beforeLogin.classList.add('d-none');
        afterLogin.classList.remove('d-none');
      }, 2000);
    });
  </script>


  <!-- order confirme js -->
  <script>
    const modalEl = document.getElementById('orderConfirmedModal');
    let cnAnim = null;

    modalEl.addEventListener('shown.bs.modal', () => {
      if (cnAnim) {
        cnAnim.play();
      } else {
        cnAnim = lottie.loadAnimation({
          container: document.getElementById('cn-lottie'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: 'https://assets10.lottiefiles.com/packages/lf20_jbrw3hcz.json'
        });
      }
    });

    modalEl.addEventListener('hidden.bs.modal', () => {
      if (cnAnim) {
        cnAnim.stop();
      }
    });
  </script>

  <!-- go to top btn -->
  <script>
    const arGoTopBtn = document.getElementById("ar-goTopBtn");

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
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
  <script src="assets/js/main.js?v=1.2"></script>

</body>

</html>