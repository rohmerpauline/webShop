<?php $title = "Freshshop - Register"; ?>

<div class="contact-box-main text-center">
    <h1 class="mb-3">Register</h1>
    <form method="post" action="users/registeraction">
        <div class="form-group">
            <label for="pseudo">Enter your pseudo:</label>
            <input type="text" name="pseudo" required/>
        </div>
        <div class="form-group">
            <label for="password">Enter your password:</label>
            <input type="password" name="password" required/>
        </div>
        <div class="form-group">
            <label for="password2">Confirm your password:</label>
            <input type="password" name="password2" required/>
        </div>
        <div class="form-group">
            <label for="email">Enter your email:</label>
            <input type="email" name="email" required/>
        </div>
        <div class="form-group">
            <label for="tel">Enter your telephone number:</label>
            <input type="tel" name="tel" required/>
        </div>
        <div>
            <input type="checkbox" name="suscribe">
            <label for="suscribe">Suscribe to our newsletter</label>
        </div>
        <input class="ml-auto btn hvr-hover" type="submit" name="register" value="Register">
    </form>
    <p><a href="login">I already have an account</a></p>
</div>