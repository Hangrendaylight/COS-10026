<?php include 'header.inc'; ?>

<main>
    <form action="/process.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        <input type="hidden" name="token" value="password123">
        <input type="submit" value="Login">
    </form>
</main>

<?php include 'footer.inc'; ?>