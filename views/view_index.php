<div class="container mt-5 px-5">
    <div class="row justify-content-md-center gx-5 p-5 ">
        <div class="col col-lg-2">
        </div>
        <div class="col-md-auto border bg-light justify-content-md-center gx-5 p-5">
            <h3></h3><?php echo($selamatDatang); ?></h3>
            <p><?php echo($loginMessages); ?></p>
            <!-- Display Login User -->
            <form class="row g-2">
                <div class="row-auto">
                    <label for="username" class="form-label"><?php echo($userName); ?></label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="row-auto">
                    <label for="password" class="form-label"><?php echo($password); ?></label>
                    <input type="text" class="form-control" id="password" name="password" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary"><?php echo($loginButton); ?></button>
                </div>
            </form>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>
</div>