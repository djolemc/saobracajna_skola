<body>
        <div>
            <form name="predmet">
                <div id="unos_podrucja_rada">
                    <input type="text" name="podrucje_rada" placeholder="Подручје рада" disabled><br>
                    <p>Podrucje rada</p>
                    <input type="text" name="podrucje_rada" placeholder="Унеси подручје рада"><br>
                    <input type="submit" name="izmeni" value="Измени"><br>
                    <input type="submit" name="obrisi" value="Обриши"><br>
                    <input type="submit" name="snimi" value="Сними">
                </div>
                <div id="unos_obrazovnog_profila">
                    <input type="text" name="obrazovni_profil" value="Образовни профил" disabled><br>
                    <p>Obrazovni profil</p>
                    <input type="text" name="obrazovni_profil" placeholder="Образовни профил"><br>
                    <input type="submit" name="izmeni" value="Измени"><br>
                    <input type="submit" name="obrisi" value="Обриши"><br>
                    <input type="submit" name="snimi" value="Сними">
                </div>
                <div id="unos_predmeta">
                    <input type="text" name="predmet" value="predmet" disabled><br>
                    <select name="podrucje_rada">
                        <option value="podrucje">Подручје рада</option>
                        <option value="<?php ?>">Подручје рада</option>      
                    </select><br>
                    <select name="obrazovni_profil">
                        <option value="profil">Образовни профил</option>
                        <option value="<?php ?>">Образовни профил</option>      
                    </select><br>
                    <select name="godina_obrazovanja">
                        <option value="godina">Година образовања</option>
                        <option value="<?php ?>">Година образовања<</option>      
                    </select><br>
                    <p>Spisak ispita</p>
                    <input type="text" name="ime_predmeta" placeholder="Име предмета"><br>
                    <input type="text" name="godina_obrazovanja" placeholder="Година образовања"><br>
                    <input type="text" name="podrucje_rada" placeholder="Подручје рада"><br>
                    <input type="text" name="obrazovni_profil" placeholder="Образовни профил"><br>
                    <input type="submit" name="izmeni" value="Измени"><br>
                    <input type="submit" name="obrisi" value="Обриши"><br>
                    <input type="submit" name="snimi" value="Сними">
                </div>
            </form>
        </div>
    </body>

