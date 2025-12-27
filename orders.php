<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Orders</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

<style>
body{
    background:#f6f7f9;
    font-family: 'Inter', sans-serif;
}

/* ===== HEADER ===== */
.orders-title{
    font-weight:700;
    margin-bottom:18px;
}

/* ===== TABS ===== */
.order-tabs{
    background:#fff;
    border-radius:30px;
    padding:6px;
    display:flex;
    gap:6px;
    box-shadow:0 6px 20px rgba(0,0,0,.05);
}
.order-tab{
    flex:1;
    border:none;
    background:transparent;
    padding:10px;
    border-radius:30px;
    font-weight:600;
    color:#666;
}
.order-tab.active{
    background:#000;
    color:#fff;
}

/* ===== CARD ===== */
.order-box{
    background:#fff;
    border-radius:18px;
    padding:18px;
    margin-top:18px;
    box-shadow:0 10px 30px rgba(0,0,0,.06);
}

/* top row */
.order-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
}
.order-id{
    font-weight:700;
}
.order-status{
    font-size:12px;
    padding:6px 12px;
    border-radius:30px;
    font-weight:600;
}
.deliver{
    background:#e7f8ee;
    color:#2e8b57;
}
.process{
    background:#e9f2ff;
    color:#1e5bd9;
}

/* route */
.route{
    display:flex;
    align-items:center;
    gap:10px;
    font-size:13px;
    color:#666;
    margin:14px 0;
}
.route-line{
    flex:1;
    border-bottom:2px dotted #ccc;
}

/* products */
.products{
    display:flex;
    gap:14px;
    overflow-x:auto;
}
.product-card{
    background:#f8f9fb;
    border-radius:14px;
    padding:10px;
    min-width:150px;
}
.product-card img{
    width:100%;
    border-radius:10px;
}
.product-name{
    font-size:13px;
    font-weight:600;
    margin-top:8px;
}
.product-meta{
    font-size:12px;
    color:#666;
}

/* bottom */
.order-bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:14px;
}
.order-total{
    font-weight:700;
}
.details-btn{
    border:none;
    background:#000;
    color:#fff;
    padding:8px 16px;
    border-radius:30px;
    font-size:13px;
}
</style>
</head>

<body>

<div class="container py-4">

    <h3 class="orders-title">My Orders</h3>

    <!-- TABS -->
    <div class="order-tabs mb-3">
        <button class="order-tab active" onclick="showOrders('shipping')">On Shipping 4</button>
        <button class="order-tab" onclick="showOrders('arrived')">Arrived 1</button>
        <button class="order-tab" onclick="showOrders('cancel')">Canceled</button>
    </div>

    <!-- ===== SHIPPING ===== -->
    <div id="shipping" class="order-section">

        <div class="order-box">
            <div class="order-top">
                <div class="order-id">OrderID #7812657</div>
                <div class="order-status deliver">On Deliver</div>
            </div>

            <div class="route">
                <span>Malang, Indonesia</span>
                <div class="route-line"></div>
                <span>Emir’s House, Indonesia</span>
            </div>

            <div class="products">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150">
                    <div class="product-name">Nike Air Max SYSTM</div>
                    <div class="product-meta">₹1,459 • Size 24</div>
                </div>

                <div class="product-card">
                    <img src="https://via.placeholder.com/150">
                    <div class="product-name">Nike Air Rift</div>
                    <div class="product-meta">₹1,909 • Size 24</div>
                </div>
            </div>

            <div class="order-bottom">
                <div class="order-total">₹7,890 (6 Items)</div>
                <button class="details-btn">Details</button>
            </div>
        </div>

    </div>

    <!-- ===== ARRIVED ===== -->
    <div id="arrived" class="order-section d-none">
        <div class="order-box">
            <div class="order-top">
                <div class="order-id">OrderID #4560918</div>
                <div class="order-status process">Arrived</div>
            </div>
            <p class="mt-3 text-muted">Your order has been delivered successfully.</p>
        </div>
    </div>

    <!-- ===== CANCELED ===== -->
    <div id="cancel" class="order-section d-none">
        <div class="order-box">
            <div class="order-top">
                <div class="order-id">OrderID #8891786</div>
                <div class="order-status process">Canceled</div>
            </div>
            <p class="mt-3 text-muted">This order was canceled.</p>
        </div>
    </div>

</div>

<script>
function showOrders(type){
    document.querySelectorAll('.order-section').forEach(el=>el.classList.add('d-none'));
    document.getElementById(type).classList.remove('d-none');

    document.querySelectorAll('.order-tab').forEach(btn=>btn.classList.remove('active'));
    event.target.classList.add('active');
}
</script>

</body>
</html>
