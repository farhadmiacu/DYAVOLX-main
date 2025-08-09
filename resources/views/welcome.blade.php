<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DyavolX – In a world of sheep, be a wolf.</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #000;
            color: #fff;
            font-family: 'Helvetica', sans-serif;
        }

        .fullscreen {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }

        .hero {
            background: url('https://dyavolx.com/cdn/shop/files/2010-2620.jpg?v=1735214049&width=1080') no-repeat center center;
            background-size: cover;
        }

        .red-section {
            background: #c12127;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .red-section h1 {
            font-size: 5rem;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #000;
            color: #f0c808;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #f0c808;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .btn:hover {
            background: #f0c808;
            color: #000;
        }

        @media (max-width: 768px) {
            .red-section h1 {
                font-size: 3rem;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* for image sections */
        .full-height {
            height: 100%;
        }

        .half-height {
            height: 50%;
        }

        .fit-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .img-fluid {
            max-width: 100%;
            height: 100% !important;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Fullscreen Hero -->
    <div class="hero fullscreen">
        <div style="position: absolute; top: 20px; right: 20px; display: flex; gap: 10px;">
            <a href="/login" class="btn">Login</a>
            <a href="/signup" class="btn">Sign Up</a>
        </div>
    </div>

    <!-- Red Statement -->
    <div class="red-section fullscreen">
        <div>
            <h1>In a world of sheep, be a wolf.</h1>
            <a href="/products" class="btn">SHOP NOW</a>
        </div>
    </div>

    <!-- Image sections 1 (the masterpiece of i signature suede jacket)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-4">
                <img src="fontend/2010-2620.webp" class="img-fluid rounded" alt="Left Image">
            </div>
            <!-- Middle column -->
            <div class="col-md-4">
                <img src="fontend/1260-2610.webp" class="img-fluid rounded" alt="Middle Image">
            </div>
            <!-- Right column -->
            <div class="col-md-4 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/990-1575.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/2010-2620.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Image sections 2 (Blackout)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-8">
                <img src="fontend/Blackout-Hoodie_2670x2610_7cc0973e-f6ce-4b87-a605-1d1f9973f6e4.webp" class="img-fluid " alt="Left Image">
            </div>

            <!-- Right column -->
            <div class="col-md-4 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/1620-1080.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/1620-1500.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Image sections 3 (single image)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-12">
                <img src="fontend/4320-2610.webp" class="img-fluid " alt="Left Image">
            </div>
        </div>
    </div>

    <!-- Image sections 4 (x action cap)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- left column -->
            <div class="col-md-4 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/1620-1290.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/1620-1290_1.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>

            <!-- Right column -->
            <div class="col-md-8">
                <img src="fontend/2670-2610.webp" class="img-fluid " alt="Left Image">
            </div>

        </div>
    </div>

    <!-- Image sections 5 (the x-girlfriend)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-4">
                <img src="fontend/1185-1578.webp" class="img-fluid rounded" alt="Left Image">
            </div>
            <!-- Middle column -->
            <div class="col-md-4">
                <img src="fontend/1455-2610.webp" class="img-fluid rounded" alt="Middle Image">
            </div>
            <!-- Right column -->
            <div class="col-md-4 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/XGF-1620-1290.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/XGF-1620-1290_1.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Image sections 6 (single image - Girl Friend)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-12">
                <img src="fontend/X-GF-Banner.webp" class="img-fluid " alt="Left Image">
            </div>
        </div>
    </div>

    <!-- Image sections 7 (duck ll )-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-8">
                <img src="fontend/Duck-II-2670-2610.webp" class="img-fluid " alt="Left Image">
            </div>

            <!-- Right column -->
            <div class="col-md-4 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/Duckk-II-1620-1290_1.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/Duckk-II-1620_1290_2.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Image sections 8 (x cap )-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- left column -->
            <div class="col-md-4 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/X-Cap-1620-1080.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/X-Cap-1620-1500.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>

            <!-- Right column -->
            <div class="col-md-8">
                <img src="fontend/X-Cap-2670-2610.webp" class="img-fluid " alt="Left Image">
            </div>

        </div>
    </div>

    <!-- Image sections 9 (single image - Whiteout T-Shirt)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-12">
                <img src="fontend/Whiteout-T-4320-2520.webp" class="img-fluid " alt="Left Image">
            </div>
        </div>
    </div>

    <!-- Image sections 10 ( Whiteout)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-5">
                <img src="fontend/Whiteout-T-2010-2610.webp" class="img-fluid rounded" alt="Left Image">
            </div>
            <!-- Middle column -->
            <div class="col-md-4">
                <img src="fontend/Whiteout-T-1260-2610.webp" class="img-fluid rounded" alt="Middle Image">
            </div>
            <!-- Right column -->
            <div class="col-md-3 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/Whiteout-T-990-1575.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/Whiteout-T---990-1005.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Image sections 11 (midnight )-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-8">
                <img src="fontend/Midnight-T-2670-2610.webp" class="img-fluid " alt="Left Image">
            </div>

            <!-- Right column -->
            <div class="col-md-4 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/Midnight-1620-1290.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/Midnight-1620-1290_1.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Image sections 12 (single image - Midnight)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-12">
                <img src="fontend/Midnight-4320-2520_33bd283f-d026-4cb3-9971-9e9673adde8d.webp" class="img-fluid " alt="Left Image">
            </div>
        </div>
    </div>

    <!-- Image sections 13 ( Knight Walked II)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-5">
                <img src="fontend/Knightwalker-II-2010-2610.webp" class="img-fluid rounded" alt="Left Image">
            </div>
            <!-- Middle column -->
            <div class="col-md-4">
                <img src="fontend/Knightwalker-II-1260-2610.webp" class="img-fluid rounded" alt="Middle Image">
            </div>
            <!-- Right column -->
            <div class="col-md-3 d-flex flex-column">
                <div class="half-height fit-cover mb-2">
                    <img src="fontend/Knightwalker-II-990-1575.webp" class="rounded" alt="Top Right Image">
                </div>
                <div class="half-height fit-cover">
                    <img src="fontend/Knightwalker-II-990-1005.webp" class="rounded" alt="Bottom Right Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Image sections 14 (single image - Last-Banner)-->
    <div class="container-fluid my-4">
        <div class="row g-2 align-items-stretch">
            <!-- Left column -->
            <div class="col-md-12">
                <img src="fontend/Last-Banner-4320-2610.webp" class="img-fluid " alt="Left Image">
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <script>
        // After red section, redirect to /products or load dynamically
        // Or keep scrolling to products
    </script>

</body>

</html>
