<!DOCTYPE html>
<html>
<head>
    <title>Book and Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <?php
        require 'Book.php';
        require 'Customer.php'; 

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['isbn']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['available'])) {
                
                $book = new Book($_POST['isbn'], $_POST['title'], $_POST['author'], $_POST['available']);
            }

            if (isset($_POST['customer_id']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])) {
                
                $customer = new Customer($_POST['customer_id'], $_POST['first_name'], $_POST['last_name'], $_POST['email']);
            }
        }
        ?>

        <?php if (isset($book)): ?>
            <h2>Book Data</h2>
            <table class="table">
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                </tr>
                <tr>
                    <td><?= $book->getIsbn() ?></td>
                    <td><?= $book->getTitle() ?></td>
                    <td><?= $book->getAuthor() ?></td>
                    <td><?= $book->getAvailable() ?></td>
                </tr>
            </table>
        <?php endif; ?>

        <?php if (isset($customer)): ?>
            <h2>Customer Data</h2>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?= $customer->getId() ?></td>
                    <td><?= $customer->getFirstName() ?></td>
                    <td><?= $customer->getLastName() ?></td>
                    <td><?= $customer->getEmail() ?></td>
                </tr>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
