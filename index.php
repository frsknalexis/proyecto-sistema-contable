<?php
    /*
        IMPORTAMOS LOS CONTROLADORES
     */
    require_once ("controllers/TemplateController.php");
    require_once ("controllers/UsuariosController.php");

    /*
        IMPORTAMOS LOS MODELOS
    */

    require_once ("models/UsuariosModel.php");

    $template = new TemplateController();

    $template->showTemplate();



