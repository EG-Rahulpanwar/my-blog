<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container signup-container">
        <h2 class="text-center">Sign Up</h2>

        <!-- PHP to display signup status -->
        <?php if (isset($registrationSuccess)): ?>
            <?php if ($registrationSuccess): ?>
                <div class="alert alert-success" role="alert">
                    Registration successful! You can now <a href="login.php">Login</a>.
                </div>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    There was an error with your registration. Please fill out all fields.
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>