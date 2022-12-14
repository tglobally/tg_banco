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

class controlador_bn_tipo_sucursal extends \gamboamartin\banco\controllers\controlador_bn_tipo_sucursal {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Tipos de Sucursal';
    }
}
