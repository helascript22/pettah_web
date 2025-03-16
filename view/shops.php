<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>PettahStreet.lk</title>

    <!--== Main Style CSS ==-->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <style>
        .scroll-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .scroll-btn {
            padding: 1px 8px;
            cursor: pointer;
            border: none;
            background-color:rgb(247, 247, 247);
            color: black;
            font-size: 16px;
            border-radius: 50%;
            box-shadow: 2px 0px 2px rgb(221, 218, 218);
        }

        .scroll-btn:disabled {
            cursor: not-allowed;
        }

        .scroll-list {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            white-space: nowrap;
            width: 91%; /* Adjust width as needed */
            padding: 10px;
            scrollbar-width: none; /* Hide scrollbar for Firefox */
        }

        .scroll-list::-webkit-scrollbar {
            display: none; /* Hide scrollbar for Chrome & Safari */
        }

        .scroll-list .card-container {
            display: inline-block;
            min-width: 250px; /* Adjust card width */
            margin-right: 15px;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding-top:10px;
        }

        .card img {
            height: 160px;
            object-fit: contain;
        }

        .card-body {
            padding: 10px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<?php include 'header.php' ?>

<!-- Main Content -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="my-4">Olcott Mawatha</h1>
            <p class="pr-5">Clothes and accessories like good jackets, bags, sunglasses at cheap rates (it's next to 2nd cross-street).</p>
        </div>
        <div class="col-md-6">
            <img src="../assets/img/about.png" alt="Banner Image" class="img-fluid">
        </div>
    </div>
    <br><br>
    <!-- Horizontal List -->


    <div class="scroll-container">
        <button class="scroll-btn" id="prevBtn">◀</button>
        <div class="scroll-list" id="scrollList">
            <div class="card-container">
                <div class="card">
                    <img src="../assets/img/IMG_5516.jpg" alt="Street Image" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">4th Cross Street</h6>
                        <p class="card-text">Home Decor</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Main Avenue</h6>
                        <p class="card-text">Urban Living</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Green Park</h6>
                        <p class="card-text">Nature & Scenery</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">City Lights</h6>
                        <p class="card-text">Night Vibes</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Old Town</h6>
                        <p class="card-text">Historical Place</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="scroll-btn" id="nextBtn">▶</button>
    </div>
    <br><br>

    <h5 class="mb-4">Olcott Mawatha/ Shops</h5>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="../assets/img/MG_6882.jpg" alt="Street Image" class="card-img-top">
                <div class="card-body text-center">
                    <h6 class="card-title">Olcott Mawatha</h6>
                    <p class="card-text">Clothes & Accessories</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'footer.php' ?>

</body>
</html>
<script>
    const scrollList = document.getElementById("scrollList");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const scrollAmount = 300; // Adjust scrolling distance

    function updateButtons() {
        prevBtn.disabled = scrollList.scrollLeft === 0;
        nextBtn.disabled = scrollList.scrollLeft + scrollList.clientWidth >= scrollList.scrollWidth;
    }

    prevBtn.addEventListener("click", () => {
        scrollList.scrollBy({ left: -scrollAmount, behavior: "smooth" });
    });

    nextBtn.addEventListener("click", () => {
        scrollList.scrollBy({ left: scrollAmount, behavior: "smooth" });
    });

    scrollList.addEventListener("scroll", updateButtons);

    // Initialize button state
    updateButtons();
</script>
