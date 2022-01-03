<?php

require("pagina-erro.php");
//O erro ira acontecer nesse arquivo aqui.
trigger_error("Acontecceu um problema.");
//Podemos definir o tipo de erro que será mostrado forçadamente,use:
//trigger_error("Acontecceu um problema.", E_USER_ERROR);
