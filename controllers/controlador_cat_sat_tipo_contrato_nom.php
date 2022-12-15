<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace tglobally\tg_banco\controllers;
use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_cat_sat_tipo_contrato_nom extends \gamboamartin\cat_sat\controllers\controlador_cat_sat_tipo_contrato_nom {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Tipo Contrato';
    }
}
