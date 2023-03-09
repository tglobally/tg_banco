<?php /** @var tglobally\tg_banco\controllers\controlador_bn_sucursal $controlador */ ?>


<?php (new \tglobally\template_tg\template())->sidebar($controlador); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_bn_cuenta_alta_bd;?>" class="form-additional">

                <?php echo $controlador->inputs->bn_cuenta_descripcion; ?>
                <?php echo $controlador->inputs->select->bn_sucursal_id; ?>
                <?php echo $controlador->inputs->select->bn_tipo_cuenta_id; ?>
                <?php echo $controlador->inputs->select->org_sucursal_id; ?>
                <?php echo $controlador->inputs->select->bn_empleado_id; ?>

                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="cuentas">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>"  class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="lista">
            <div class="card">
                <div class="card-header">
                    <span class="text-header">Cuentas</span>
                </div>
                <div class="card-body">
                    <div class="cont_tabla_sucursal  col-md-12">
                        <?php echo $controlador->contenido_table; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
