<body>
        <div>
            <form name="profesor" method="POST" action="<?php echo site_url("admin/unesi_profesora") ?>">
                <input type="text" name="pretraga" placeholder="Претрага">
                <input type="submit" name="unos" value="Унос">
                <input type="submit" name="izmeni" value="Измени">
                <input type="text" name="idprofesor" placeholder="Идентификациони број"><br>
                <input  type="text" name="ime" placeholder="Унеси име"><br>
                <input  type="text" name="prezime" placeholder="Унеси презиме"><br>
                <input  type="text" name="adresa" placeholder="Унеси адресу"><br>
                <input  type="tel" name="broj_telefon" placeholder="Унеси телефон"><br>
                <input  type="email" name="e-mail" placeholder="Унеси e-mail"><br>
                <select name="titula">
                    <option value="<?php ?>">Титула</option>      
                </select><br>
               <!-- treba uneti predmete -->
                <select name="predmet">
                    <option value="<?php ?>">Предмет</option>      
                </select><br>
                <input type="submit" name="dodaj" value="Додај"><br>
                <input type="radio" name="angazovan" value="1" checked>Редован
                <input type="radio" name="angazovan" value="2" >Ангажован<br>
                <a href="<?php echo site_url("admin/ucenik")?>">Врати се назад</a>
                <input type="submit" name="sacuvaj" value="Сачувај">
                
            </form>
        </div>
    </body>
