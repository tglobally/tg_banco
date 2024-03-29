<?php /** @var controllers\controlador_adm_session $controlador */

use config\views;
$url_assets = (new views())->url_assets;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cont_text_inicio">
                <h1 class="h-side-title page-title page-title-big text-color-primary">Hola, Nombre Completo</h1>
                <h1 class="h-side-title page-title text-color-primary">Da click en la sección que deseas utilizar</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_bn_tipo_banco; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Tipo Banco</h4>
                        <h4 class="text_accion">Catalogo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_bn_banco; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Bancos</h4>
                        <h4 class="text_accion">Catalogo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_bn_tipo_sucursal; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Tipo Sucursal</h4>
                        <h4 class="text_accion">Catalogo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_bn_sucursal; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Sucursales</h4>
                        <h4 class="text_accion">Catalogo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_bn_tipo_cuenta; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Tipo Cuenta</h4>
                        <h4 class="text_accion">Catalogo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_bn_cuenta; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Cuentas</h4>
                        <h4 class="text_accion">Catalogo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_bn_empleado; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Empleados</h4>
                        <h4 class="text_accion">Catalogo</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>