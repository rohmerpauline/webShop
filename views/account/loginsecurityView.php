<?php $title = "Freshshop - Login & Security"; ?>

<div class="contact-box-main text-center">
    <h1 class="mb-3">Log In & Security</h1>
    <p>
        Username : <?php echo $_SESSION['pseudo']; ?>
        <form method="">
        <span>
            <button type="submit" name="modify"><i class="fas fa-pen"></i> Modify</button>
        </span>
        <span>
            <button type="submit" name="validate"><i class="fas fa-check-square"></i> Validate</button>
            <button type="submit" name="cancel"><i class="fas fa-times"></i> Cancel</button>
        </span>
        </form>
    </p>
    <p>Password : <?php echo $_SESSION['password']; ?></p>
    <p>Email : <?php echo $_SESSION['mail']; ?></p>
    <p>Tel : <?php echo $_SESSION['tel']; ?></p>
</div>