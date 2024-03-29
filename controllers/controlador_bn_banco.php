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


class controlador_bn_banco extends \gamboamartin\banco\controllers\controlador_bn_banco {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base, paths_conf: $paths_conf);
        $this->titulo_lista = 'Banco';

        $this->sidebar['lista']['titulo'] = "Bancos";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
                menu_lateral_active: true));

        $this->sidebar['alta']['titulo'] = "Alta Banco";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['modifica']['titulo'] = "Modifica Banco";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['sucursales']['titulo'] = "Bancos";
        $this->sidebar['sucursales']['stepper_active'] = true;
        $this->sidebar['sucursales']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Sucursal", link: $this->link_alta,menu_lateral_active: true));


    }

    public function menu_item(string $menu_item_titulo, string $link, bool $menu_seccion_active = false,
                              bool $menu_lateral_active = false): array
    {
        $menu_item = array();
        $menu_item['menu_item'] = $menu_item_titulo;
        $menu_item['menu_seccion_active'] = $menu_seccion_active;
        $menu_item['link'] = $link;
        $menu_item['menu_lateral_active'] = $menu_lateral_active;

        return $menu_item;
    }



}
