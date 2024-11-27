<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
    </head>
    <body> 
        <div class="login-container">
            <h2 class="text-center">Login</h2>
            <form method="post" action="">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <!-- Menampilkan pesan error jika ada -->
                <?php if (isset($error)) { echo "<p class='error text-center'>$error</p>"; } ?>
            </form>
            <div class="text-center mt-3">
            <a href="<?= BASEURL; ?>register/index/" class="d-block">Don't have an account? Register</a>
            <a href="<?= BASEURL; ?>forgot_password/index/" class="d-block">Forgot Password?</a>
            </div>
        </div>

  </body>
    </html> 
