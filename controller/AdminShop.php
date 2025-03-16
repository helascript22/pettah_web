<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Shop - PettahStreet.lk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #7b1113;
            color: white;
            position: fixed;
            padding: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .sidebar a:hover, .sidebar .active {
            background-color: #5e0d0f;
        }
        .content {
            margin-left: 270px;
            padding: 30px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-add {
            background-color: #7b1113;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-add:hover {
            background-color: #5e0d0f;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h3 class="fw-bold">PettahStreet.lk</h3>
    <a href="#" class="active"><i class="fas fa-chart-bar"></i> Dashboard</a>
    <a href="#"><i class="fas fa-plus"></i> Add New Shop</a>
    <a href="#"><i class="fas fa-store"></i> All Shops</a>
    <a href="#"><i class="fas fa-users"></i> Users</a>
</div>

<!-- Main Content -->
<div class="content">
    <h2 class="fw-bold">Add Shop</h2>
    <form>
        <h5 class="fw-bold mt-4">Shop Details</h5>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="Contact Number">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="Whatsapp">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Upload Image</label>
            <input type="file" class="form-control">
        </div>

        <h5 class="fw-bold mt-4">Location</h5>
        <div class="mb-3">
            <h6>Address</h6>
            <input type="text" class="form-control" placeholder="Address">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Street">
        </div>
        
        <button type="submit" class="btn btn-add">Add Shop</button>
    </form>
</div>

</body>
</html>
