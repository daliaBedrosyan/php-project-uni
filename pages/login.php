<?php

?>
<div class="d-flex justify-content-center border bg-light border-3 border-light shadow-lg rounded p-4 w-50 mx-auto">
    <form class="col-lg-12" method="POST" action="./handlers/handle_login.php">
        <h3 class="text-center fw-bold">Вход в системата</h3>
        <div class="mb-3">
            <label for="email" class="form-label">Имейл</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_COOKIE['user_email'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Парола</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary col-lg-4">Вход</button>
        </div>
    </form>
</div>
