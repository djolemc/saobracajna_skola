

<div class="row">
    


    <div class="col-md-6 ">

        <form name="administracija" action="<?php echo site_url("admin/unos_operatera") ?>" method="POST">
            <fieldset>
                <legend>Unos novih operatera:</legend>
                Ime:<br>
                <input type="text" name="ime" placeholder="Unesite ime"><br>
                Prezime:<br>
                <input type="text" name="prezime" placeholder="Unesite prezime"><br>
                Korisnicko ime:<br>
                <input type="text" name="kor_ime" placeholder="Kor. ime:"><br>
                 Lozinka:<br>
                <input type="password" name="lozinka" placeholder="Kor. ime:"><br>
                Ponovite lozinku:<br>
                <input type="password" name="lozinka2" placeholder="Lozinka:"><br>
                E-mail:<br>
                <input type="email" name="email" placeholder="Lozinka:"><br><br>
                <input type="hidden" name="tip" value="1">
                <input type="submit" value="Submit"> <br>
            </fieldset>
        </form>
        <?php
                    $poruka = $this->session->userdata('poruka');
                  echo  $poruka;
                    ?>

    </div>



    <div class="col-md-6"></div>


</div>