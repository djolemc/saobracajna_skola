




<div class="row stil">

    <div class="col-md-2">

    </div>
    <div class="col-md-8 mx-auto ">

        <form action="<?php echo site_url('login/process') ?>" method="POST" name='process'>
            <div class="form-group">

                <h2>Ulogujte se</h2>
                <br>
                <?php if (!is_null($msg)) echo $msg; ?>
                <label for='username'>Korisničko ime</label>
                <input type="text" name='username' class="form-control" id='username'size="25"><br>
            </div>

            <div class="form-group">
                <label for='password'>Lozinka</label>
                <input type="password" class="form-control" name="password" id="password" size="25"><br>
                <input type="Submit" value="Uloguj se">
            </div>

        </form>



    </div>
    <div class="col-md-2">

    </div>

</div>

