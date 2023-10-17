<!DOCTYPE html>
<html>
<head>
    <title>Book and Customer</title>
    <style>
        .custom-card {
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col-md-6">
                <div class="card custom-card" style="width: 100%;">
                    <div class="card-body">
                        <h2 class="card-title text-center">Book</h2>

                        <form action="process.php" method="post">
                            <div class="form-group">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input type="text" name="isbn" id="isbn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" name="author" id="author" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="available" class="form-label">Available</label>
                                <input type="text" name="available" id="available" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Create Book</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card custom-card" style="width: 100%;">
                    <div class="card-body">
                        <h2 class="card-title text-center">Customer</h2>

                        <form action="process.php" method="post">
                            <div class="form-group">
                                <label for="customer_id" class="form-label">ID</label>
                                <input type="text" name="customer_id" id="customer_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for "first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Create Customer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
