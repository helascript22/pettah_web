<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PettahStreet.lk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: url('assets/1.png.png') no-repeat center center;
            background-size: cover;
            height: 100vh;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container .btn-google {
            background: white;
            border: 1px solid #ccc;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .btn-login {
            background-color: #7b1113;
            color: white;
        }
        .btn-login:hover {
            background-color: #5e0d0f;
        }
        .login-container input {
            border-radius: 5px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-light bg-light p-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-danger" href="#">PettahStreet.lk</a>
        <div>
            <a href="#" class="btn btn-outline-dark me-2">STREETS</a>
            <a href="#" class="btn btn-outline-dark me-2">ADD YOUR SHOP</a>
            <a href="#" class="btn btn-outline-dark me-2">OFFERS</a>
            <a href="#" class="btn btn-outline-dark me-2">ABOUT US</a>
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fas fa-user"></i> LOGIN
            </button>
        </div>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-container mx-auto">
                    <div class="d-flex justify-content-between">
                        <h4 class="fw-bold">Sign Up</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <br/>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="You Name">
                        </div>
                        <div class="mb-3">
                            <input type="mail" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-login w-100">Create Account</button>
                    </form>
                    <div class="text-center my-3">or continue with</div>
                    <button class="btn btn-google w-100">
                        <i class="fab fa-google"></i> Login With Google
                    </button>
                    <div class="text-center mt-3">
                        Create a new account? <a href="#" class="text-danger fw-bold">Sign Up Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
