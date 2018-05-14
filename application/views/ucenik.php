
    <body>
        <div>
            <form name="registracija">
                <input type="text" name="pretraga" placeholder="Претрага">
                <input type="submit" name="Unesi" placeholder="Унеси">
                <input type="submit" name="Izmeni" placeholder="Измени"><br>
                <input type="text" name="delovodni_broj" placeholder="Деловодни број"><br>
                <input type="text" name="maticni_broj" placeholder="Матични број"><br>
                <input  type="text" name="ime" value="Унеси име"><br>
                <input  type="text" name="prezime" value="Унеси презиме"><br>
                <input  type="text" name="ime_roditelja" value="Унеси име родитеља"><br>
                <input  type="date" name="datum_rodjenja" value=""><br>
                Pol:<input type="radio" name="pol" value="muski" checked>Мушки
                    <input type="radio" name="pol" value="zenski">Женски<br>
                <input  type="text" name="mesto_rodjenja" value="Унеси место рођењa"><br>
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
                <input  type="text" name="adresa" value="Унеси адресу"><br>
                <input  type="text" name="jmbg" value="Унеси јмбг"><br>
                <input  type="tel" name="telefon" value="Унеси телефон"><br>
                <input  type="email" name="email" value="Унеси e-mail"><br>
                <select name="upis">
                    <option value="upis">Година уписа</option>
                    <option value="<?php ?>">Година уписа</option>      
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
                Tip ucenika:<br><input type="radio" name="tip_ucenika" value="p">Преквалификација<br>
                            <input type="radio" name="tip_ucenika" value="d">Доквалификација<br>
                            <input type="radio" name="tip_ucenika" value="up">Упис у први разред школе<br>
                            <input type="radio" name="tip_ucenika" value="un">Упис у неки разред школе<br>
                            <input type="radio" name="tip_ucenika" value="s">Специјализација<br>
                <input type="submit" name="Dokumentacija" value="Документација">
                <input type="submit" name="Priznati_ispiti" value="Признати испити">
                <input type="submit" name="Sacuvaj" value="Сачувај">
                
                
            </form>
        </div>
    </body>
