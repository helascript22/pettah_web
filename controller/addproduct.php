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
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">PettahStreet.lk</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Streets</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Add Your Shop</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Offers</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">About Us</a>
</li>
<div class="header-action-area">
                <a class="btn-registration" href="registration.html"><span></span> LOGIN</a>
              </div>
</ul>
</div>
</nav>

<!-- Main Content -->

<div class="container-fluid">
<div class="row">
<img src="assets/offer.png" alt="Banner Image" class="img-fluid">
</div>

<div class="container mt-5">
    <h3 class="mb-4">Add products of your shop</h3>
    
    <div class="row">
        <div class="col-md-8">
            <form>
                <div class="mb-3">
                    <label class="form-label">Name of the shop</label><br/>
                    <select class="form-select">
                        <option selected>Select shop</option>
                        <option>Shop 1</option>
                        <option>Shop 2</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" placeholder="product name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" placeholder="price">
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock Availability</label><br/>
                    <select class="form-select">
                        <option selected>Select</option>
                        <option>In Stock</option>
                        <option>Out of Stock</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload picture</label>

                    <div class="offset-lg-3 col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-12 border border-primary rounded">
                                                    <img src="assets/addp.png" class="img-fluid" style="width: 550px;" id="i0"/>
                                                </div>
                                                
                                            </div>
                                        </div>

                   
                </div>
                
           

                
            </form>


        </div>

        <div class="col-md-4">
        <p class="text-end text-danger mt-2">0 products added.</p>
            <div class="preview-container">
                <div id="imagePreview" style="background-color: #ddd; height: 150px; display: flex; align-items: center; justify-content: center;">
                    <p>Picture</p>
                </div>
                <p><strong>Product Name</strong></p>
                <p style="color: red;">In Stock</p>
                <p>Price</p>
            </div>
           
        </div>
    </div>
</div>

  <button type="button" class="btn btn-danger btn-lg btn-block">Sumit</button>
                         

<!-- Footer -->
<footer class="footer mt-auto py-3">
<div class="container">
<div class="row">
<div class="col-md-4">
<img src="assets/foterlogo.png" alt="Footer Logo" class="img-fluid mb-2">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa libero, mattis vulputate.</p>
</div>
<div class="col-md-4">
<!-- Additional content or links if needed -->
</div>
<div class="col-md-4">
<ul class="list-unstyled">
<li><a href="#">Streets</a></li>
<li><a href="#">Add Your Shop</a></li>
<li><a href="#">Offers</a></li>
<li><a href="#">Sign In</a></li>
<li><a href="#">My Account</a></li>
<li><a href="#">About Us</a></li>
</ul>
</div>
</div>
</div>

<div class="col-12 col-md-3 col-lg-3 mx-auto mt-3">
                    <p> &copy; 2021 - 2024 SeafoodExpress. All Rights Reserved</p>
                </div>


</footer>

</body>
</html>