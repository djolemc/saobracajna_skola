<?php

 $name= $this->session->userdata('ime');
 $tip=$this->session->userdata('tip');
 echo "Ulogovan je korisnik ".$name;
echo "<br>".$tip;