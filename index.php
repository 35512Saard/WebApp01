<?php
include 'config.php';
include 'navbar.php';

if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .hero {
            background-color: #fde4c4;
            padding: 40px 20px;
            text-align: center;
        }

        .hero img {
            width: 50%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .features {
            display: flex;
            justify-content: space-around;
            padding: 20px 40px;
            background-color: #fde4c4;
        }

        .feature {
            text-align: center;
            flex-basis: 30%;
        }

        .feature img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .cta {
            text-align: center;
            padding: 40px 20px;
            background-color: #fde4c4;
        }

        .cta p {
            font-size: 18px;
            margin-bottom: 20px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            background-color: white;
            border: 2px solid #333;
            cursor: pointer;
            border-radius: 5px;
        }

        footer {
            background-color: white;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ccc;
            font-weight: bold;
        }
        .background-section {
            background-color: #FFE7CB;
        }

        .background-section2 {
            background-color: #FFF0DF;
        }

        /* For mobile devices */
        @media only screen and (max-width: 767px) {
            .background-section {
                background-color: #FFF;
            }
            .background-section2 {
                background-color: #FFF;
            }
        }
    </style>
</head>
<body>

    <section class="background-section">
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img src="img\main (1).png" class="p-4" style="width: 100%;" alt="Music Shop Image">
                </div>
                <div class="col-lg-6 col-12 d-flex align-items-center">
                    <div class="row w-100">
                        <div class="col-4 text-center d-flex flex-column align-items-center justify-content-center">
                            <img src="https://img.icons8.com/ios-filled/50/000000/guitar.png" alt="Guitar">
                            <h3>Guitar</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="col-4 text-center d-flex flex-column align-items-center justify-content-center">
                            <img src="https://img.icons8.com/ios-filled/50/000000/piano.png" alt="Piano">
                            <h3>Piano</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="col-4 text-center d-flex flex-column align-items-center justify-content-center">
                            <img src="https://img.icons8.com/ios-filled/50/000000/drums.png" alt="Drum">
                            <h3>Drum</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="background-section2">
        <div class="container">
            <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
                <div class="col-8 text-center d-flex flex-column align-items-center justify-content-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque tenetur consectetur ea repudiandae nesciunt autem a.</p>

                </div>
                <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                    <a href='register.php' class="btn btn-outline-dark bg-light">Join us now!</a>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
include 'footer.php';
?>
