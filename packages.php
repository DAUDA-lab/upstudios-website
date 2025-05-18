<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHOTOBOOK Packages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .packages-container {
            max-width: 1000px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        .package {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .package h2 {
            color: #444;
            margin-bottom: 10px;
        }
        .price {
            color: #ff6600;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .package ul {
            padding-left: 20px;
        }
        .package ul li {
            margin-bottom: 6px;
        }
    </style>
</head>
<body>

<h1>PHOTOBOOK - Packages and Pricing</h1>

<div class="packages-container">
    <div class="package">
        <h2>Standard Package</h2>
        <div class="price">TZS 300,000</div>
        <ul>
            <li>3 hours coverage</li>
            <li>50 professionally edited photos</li>
            <li>1 video highlight (2-3 mins)</li>
        </ul>
    </div>

    <div class="package">
        <h2>Deluxe Package</h2>
        <div class="price">TZS 600,000</div>
        <ul>
            <li>6 hours coverage</li>
            <li>100 professionally edited photos</li>
            <li>Full event video coverage (up to 1 hour)</li>
            <li>1 framed photo print</li>
        </ul>
    </div>

    <div class="package">
        <h2>Premium Package</h2>
        <div class="price">TZS 1,200,000</div>
        <ul>
            <li>Full day coverage</li>
            <li>Unlimited photos (all edited)</li>
            <li>Full HD video coverage</li>
            <li>Drone shots included</li>
            <li>1 Photobook album</li>
            <li>2 framed photo prints</li>
        </ul>
    </div>
</div>

</body>
</html>
