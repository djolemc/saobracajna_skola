
<body>
    

        <form name="registracija" method="POST" action="<?php echo site_url("admin/unesi_ucenika") ?>">
            <div class="row">
                <div class="col-md-12">
                <input type="text" name="pretraga" placeholder="Претрага">
                <input type="submit" name="Unesi" value="Унеси">
                <input type="submit" name="Izmeni" value="Измени">
                
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                
                
                <input type="text" name="delovodni_broj" placeholder="Деловодни број"><br>
                <input type="text" name="jedinstveni_broj" placeholder="Јединствени број"><br>
                <input  type="text" name="ime" placeholder="Унеси име"><br>
                <input  type="text" name="prezime" placeholder="Унеси презиме"><br>
                <input  type="text" name="ime_roditelja" placeholder="Унеси име родитеља"><br>
                <input  type="date" name="datum_rodjenja" placeholder=""><br>
                Pol:<input type="radio" name="pol" placeholder="muski" checked>Мушки
                <input type="radio" name="pol" placeholder="zenski">Женски<br>
                <input  type="text" name="mesto_rodjenja" placeholder="Унеси место рођењa"><br>
                <select name="drzava">
                    <option value="drzava">Изабери државу</option>
                    <option value="<?php ?>">Изабери државу</option>
                </select><br>
                <select name="grad">
                    <option value="grad">Изабери град</option>
                    <option value="<?php ?>">Изабери град</option>
                </select><br>
                <select name="opstina">
                    <option value="opstina">Изабери општину</option>
                    <option value="<?php ?>">Изабери општину</option>
                </select><br>
                <input  type="text" name="adresa" placeholder="Унеси адресу"><br>
                <input  type="text" name="jmbg" placeholder="Унеси јмбг"><br>
                <input  type="tel" name="telefon" placeholder="Унеси телефон"><br>
                <input  type="email" name="email" placeholder="Унеси e-mail"><br>
                <select name="upis">
                    <option value="upis">Година уписа</option>
                    <option value="<?php ?>">Година уписа</option>      
                </select><br>
                
            </div>
            <div class="col-md-6">
                
                
                <select name="podrucje_rada">
                    <option value="podrucje">Подручје рада</option>
                    <option value="<?php ?>">Подручје рада</option>
                </select><br>
                <select name="profil">
                    <option value="profil">Образовни профил</option>
                    <option value="<?php ?>">Образовни профил</option>
                </select><br>
                <input type="checkbox" name="oslobodjen">Oслобођен плаћања<br>
                Tip ucenika:<br><input type="radio" name="tip_ucenika" value="p">Преквалификација<br>
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
