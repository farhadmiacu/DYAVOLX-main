<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D’YAVOL X | Luxury Streetwear DYAVOL X</title>
    <!-- Bootstrap or custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background: #000 !important;
            color: #f0c808 !important;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #f0c808 !important;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .btn:hover {
            background: #f0c808 !important;
            color: #000 !important;
        }

        @media (max-width: 768px) {
            .red-section h1 {
                font-size: 3rem;
            }
        }

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

        /* for footer section  */
        footer {
            background-color: #000;
            color: white;
            padding: 40px 0;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .newsletter-input {
            background: transparent;
            border: 1px solid white;
            color: white;
            padding: 10px;
            width: 100%;
        }

        .newsletter-input::placeholder {
            color: white;
            opacity: 0.7;
        }

        .newsletter-btn {
            background: none;
            border: 1px solid white;
            padding: 10px 15px;
            color: white;
            cursor: pointer;
        }

        .newsletter-btn:hover {
            background: white;
            color: black;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 15px;
            margin-top: 30px;
            font-size: 14px;
            text-align: center;
        }

        /* products details  */
        .color-box {
            width: 40px;
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

<body>
    @include('fontend-layouts.header')
    @yield('content')
    @include('fontend-layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
