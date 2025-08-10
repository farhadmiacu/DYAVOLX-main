<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page with Zoom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .color-box {
            width: 100px;
            height: 40px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .size-btn {
            min-width: 50px;
            text-align: center;
        }

        .zoom-img {
            width: 100%;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body class="p-4">

    <div class="container">
        <div class="row g-4">

            <!-- Product Image with Zoom -->
            <div class="col-md-5 text-center">
                <img id="productImage" src="fontend/images/Black-1-600x600.png" data-zoom-image="fontend/images/Black-1-600x600.png" alt="Product" class="zoom-img img-fluid">
            </div>

            <!-- Size, Buttons, Colors -->
            <div class="col-md-3">
                <h6>SIZE</h6>
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <button class="btn btn-outline-secondary size-btn">S<br><small>36</small></button>
                    <button class="btn btn-outline-secondary size-btn">M<br><small>38</small></button>
                    <button class="btn btn-outline-secondary size-btn">L<br><small>40</small></button>
                    <button class="btn btn-outline-secondary size-btn">XL<br><small>42</small></button>
                    <button class="btn btn-outline-secondary size-btn">XXL<br><small>44</small></button>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-4">
                <div class="border p-3 h-100">
                    <h6>Product Details</h6>
                    <p class="mb-0">
                        This is a sample product description.
                        You can write about material, size chart, features, and more details here.
                    </p>
                </div>
            </div>

            <div class="col-md-6">

                <button class="btn btn-outline-success w-100 mb-2">ADD TO CART</button>
                <button class="btn btn-outline-primary w-100 mb-3">BUY NOW</button>
            </div>


        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h6>COLOR</h6>
                <div class="d-flex gap-2">
                    <div class="color-box" style="background-color: brown;"></div>
                    <div class="color-box" style="background-color: black;"></div>
                    <div class="color-box" style="background-color: #4b6f44;"></div>
                    <div class="color-box" style="background-color: white; border: 1px solid #aaa;"></div>
                    <div class="color-box" style="background-color: #4a78c2;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery & ElevateZoom -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#productImage").elevateZoom({
                zoomType: "lens",
                lensShape: "round",
                lensSize: 200
            });
        });
    </script>

</body>

</html>
