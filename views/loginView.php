<?php $title = "Freshshop - Login"; ?>
<?php ob_start(); ?>

<div class="contact-box-main text-center">
    <h1 class="mb-3">Log In</h1>
    <form method="post" action="index.php?action=loginAction">
        <div class="form-group">
            <label for="pseudo">Enter your pseudo:</label>
            <input type="text" name="pseudo" required/>
        </div>
        <div class="form-group">
            <label for="password">Enter your password:</label>
            <input type="password" name="password" required/>
        </div>
        <input class="ml-auto btn hvr-hover" type="submit" name="login" value="Login">
    </form>
    <p><a href="index.php?action=register">I don't have an account. Register here.</p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>