
<body>
    

        <form name="registracija" method="POST" action="<?php echo site_url("admin/unesi_ucenika") ?>">
            <div class="row">
                <div class="col-md-12">
                <input type="text" name="pretraga" placeholder="Претрага">
                <input type="submit" name="Trazi" value="Тражи">
                <input type="submit" name="Izmeni" value="Измени">
                
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                
                
                <input type="text" name="delovodni_broj" placeholder="Деловодни број"><br>
                <input type="text" name="jedinstveni_broj_ucenik" placeholder="Јединствени број"><br>
                <input  type="text" name="ime" placeholder="Унеси име"><br>
                <input  type="text" name="prezime" placeholder="Унеси презиме"><br>
                <input  type="text" name="ime_otac" placeholder="Унеси име оца"><br>
                <input  type="text" name="ime_majka" placeholder="Унеси име мајке"><br>
                <input  type="text" name="prezime_majka" placeholder="Девојачко презиме мајке"><br>
                <input  type="date" name="datum_rodjenje" placeholder=""><br>
                Pol:<input type="radio" name="pol" value="1" checked>Мушки
                <input type="radio" name="pol" value="2">Женски<br>
                <input type="text" name="drzava_rodjenje" placeholder="Унеси државу"><br>
                <input type="text" name="mesto_rodjenje" placeholder="Унеси место рођења"><br>
                <input type="text" name="optina_rodjenje" placeholder="Унеси општину рођења"><br>
                <input  type="text" name="adresa_stanovanje" placeholder="Унеси адресу"><br>
                <input  type="text" name="jmbg" placeholder="Унеси ЈМБГ"><br>
                <input  type="tel" name="broj_telefon" placeholder="Унеси телефон"><br>
                <input  type="tel" name="telefon_mobilni" placeholder="Унеси мобилни телефон"><br>
                <input  type="email" name="e-mail" placeholder="Унеси e-mail"><br>
                
                
            </div>
            <div class="col-md-6">
                <input type="text" name="registar_broj" placeholder="Унеси број из регистра"><br>
                <select name="datum_upis">
                    <option value="upis">Година уписа</option>
                    <option value="<?php ?>">Година уписа</option>      
                </select><br>
                <select name="godina_obrazovanja_idgodina_obrazovanja">
                    <option value="godina">Година образовања</option>
                    <option value="<?php ?>">Година образовања</option>      
                </select><br>
                <select name="podrucje_rada">
                    <option value="podrucje">Подручје рада</option>
                    <option value="<?php ?>">Подручје рада</option>
                </select><br>
                <select name="profil">
                    <option value="profil">Образовни профил</option>
                    <option value="<?php ?>">Образовни профил</option>
                </select><br>
                <input type="checkbox" name="oslobodjen">Oслобођен плаћања<br>
                Tip ucenika:<br><input type="radio" name="tip_ucenik_idtip_ucenik" value="p">Преквалификација<br>
                <input type="radio" name="tip_ucenika" value="d">Доквалификација<br>
                <input type="radio" name="tip_ucenika" value="up">Упис у први разред школе<br>
                <input type="radio" name="tip_ucenika" value="un">Упис у неки разред школе<br>
                <input type="radio" name="tip_ucenika" value="s">Специјализација<br>
                
            </div>
    
            <div class="row">
                
                <div class="col-md-12">
                    <a href="<?php echo site_url("admin/dokumentacija") ?>">Документација</a>
                    <a href="<?php echo site_url("admin/priznati_ispiti") ?>">Признати испити</a>
                    <input type="submit" name="Sacuvaj" value="Сачувај">
                </div>
            </div>
              </div>
        </form>
    
</body>
