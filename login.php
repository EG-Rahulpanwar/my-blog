<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <h2 class="text-center">Login</h2>

        <!-- PHP to display login status -->
        <?php if (isset($loginSuccess)): ?>
            <?php if ($loginSuccess): ?>
                <div class="alert alert-success" role="alert">
                    Login successful!
                </div>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    Invalid email or password. Please try again.
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <p class="text-center">Don't have an account? <a href="#">Sign up</a></p>
        </form>
    </div>
</body>
</html>