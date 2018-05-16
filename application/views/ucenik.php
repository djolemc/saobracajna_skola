

         <?php echo validation_errors(); ?>
            <?php echo form_open($controller.'/unesi_ucenika');?>

        <!--<form name="registracija" method="POST" action="<?php echo site_url($controller."/unesi_ucenika") ?>">-->
            <div class="row">
                <div class="col-md-12">
                <input type="text" name="pretraga" placeholder="Претрага">
                <input type="submit" name="Trazi" value="Тражи">
                <input type="submit" name="Izmeni" value="Измени">
                
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                
                
                <input type="text" name="delovodni" value="<?php echo set_value("delovodni")?>" placeholder="Деловодни број"><br>
                <input type="text" name="jedinstveni_broj" value="<?php echo set_value("jedinstveni_broj")?>" placeholder="Јединствени број"><br>
                <input  type="text" name="ime" value="<?php echo set_value("ime")?>" placeholder="Унеси име"><br>
                <input  type="text" name="prezime" value="<?php echo set_value("prezime")?>" placeholder="Унеси презиме"><br>
                <input  type="text" name="ime_oca" value="<?php echo set_value("ime_oca")?>" placeholder="Унеси име оца"><br>
                <input  type="text" name="ime_majke" value="<?php echo set_value("ime_majke")?>" placeholder="Унеси име мајке"><br>
                <input  type="text" name="prezime_majke" value="<?php echo set_value("prezime_majke")?>" placeholder="Девојачко презиме мајке"><br>
                <input  type="date" name="datum" placeholder=""><br>
                Pol:<input type="radio" name="pol" value="1" checked>Мушки
                <input type="radio" name="pol" value="2">Женски<br>
                <input type="text" name="drzava_rodj" value="<?php echo set_value("drzava_rodj")?>" placeholder="Унеси државу"><br>
                <input type="text" name="mesto_rodj" value="<?php echo set_value("mesto_rodj")?>" placeholder="Унеси место рођења"><br>
                <input type="text" name="opstina_rodj" value="<?php echo set_value("opstina_rodj")?>" placeholder="Унеси општину рођења"><br>
                <input  type="text" name="adresa_stan" value="<?php echo set_value("adresa_stan")?>" placeholder="Унеси адресу"><br>
                <input  type="text" name="jmbg" value="<?php echo set_value("jmbg")?>" placeholder="Унеси ЈМБГ"><br>
                <input  type="tel" name="broj_tel" value="<?php echo set_value("broj_tel")?>" placeholder="Унеси телефон"><br>
                <input  type="tel" name="mobilni" value="<?php echo set_value("mobilni")?>" placeholder="Унеси мобилни телефон"><br>
                <input  type="email" name="email" value="<?php echo set_value("email")?>" placeholder="Унеси e-mail"><br>
                
                
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
                    <a href="<?php echo site_url($controller."/dokumentacija") ?>">Документација</a>
                    <a href="<?php echo site_url($controller."/priznati_ispiti") ?>">Признати испити</a>
                    <input type="submit" name="Sacuvaj" value="Сачувај">
                </div>
            </div>
              </div>
        </form>
    

