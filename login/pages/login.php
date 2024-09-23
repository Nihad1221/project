<div class="wrapper-row">
    <form method="post" action="../controllers/LoginController.php">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error']; ?>
            </div>
        <?php endif; ?>

        <div class="alert alert-danger" role="alert">

        </div>
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username"
               value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password"
               value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>">

        <button type="submit" name="login">Log In</button>
    </form>
</div>