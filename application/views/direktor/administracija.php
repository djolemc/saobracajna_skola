

<div class="row">



    <div class="col-md-6 ">

<<<<<<< HEAD:application/views/admin/administracija.php
        <form name="administracija" action="<?php echo site_url("admin/unos_operatera") ?>" method="POST" >
            
            <h2>Unos novih operatera</h2>
            <div class="form-group">
=======
        <form name="administracija" action="<?php echo site_url($controller."/unos_operatera") ?>" method="POST">
            <fieldset>
                <legend>Unos novih operatera:</legend>
>>>>>>> 9e66accd94b8ad24a152c7105bdf15a58bbb10e0:application/views/direktor/administracija.php
                Ime:<br>
                <input type="text" name="ime" placeholder="Unesite ime"><br>
            </div>   
                
                <div class="form-group">
                Prezime:<br>
                <input type="text" name="prezime" placeholder="Unesite prezime"><br>
                </div>
            <div class="form-group">
                Korisnicko ime:<br>
                <input type="text" name="kor_ime" placeholder="Kor. ime:"><br>
            </div>
            <div class="form-group">
                Lozinka:<br>
                <input type="password" name="lozinka" placeholder="Kor. ime:"><br>
            </div>
             <div class="form-group">   
                Ponovite lozinku:<br>
                <input type="password" name="lozinka2" placeholder="Lozinka:"><br>
             </div>
            <div class="form-group">
                E-mail:<br>
                <input type="email" name="email" placeholder="Lozinka:"><br><br>
                <input type="hidden" name="tip" value="1">
            </div>
                <input type="submit" value="Submit"> <br>
           
        </form>
        <?php
        $poruka = $this->session->userdata('poruka');
        echo $poruka;
        ?>

    </div>



    <div class="col-md-6">

        <?php
                //$query=$this->db->query("SELECT * FROM srednja_skola.korisnik where guid='1';");
                       
                
                echo "Ime Prezime Email <br>";
                        foreach ($korisnici as $row) {
                            echo $row['ime']."&nbsp";
                            echo $row['prezime']."&nbsp";
                            echo $row ['email']."&nbsp";
                            $ime=$row['idkorisnik'];?>
                            <a href="<?php echo site_url($controller."/obrisi_operatera/".$ime); ?>"
                               onclick="return confirm('Da li ste sigurni da zelite da obrisete operatera?' );">Obriši</a><br>
                        
        
                        <?php } ?>                

    </div>


</div>