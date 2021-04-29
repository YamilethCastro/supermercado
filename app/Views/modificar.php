<?=$cabecera?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar productos</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('actualizar')?>" enctype="multipart/form-data">
                <div class="form-group">
                   
                    <input id="codigo" value="<?=$producto['codigo']?>" class="form-control" type="hidden" name="codigo">
                    <label for="Nombre">Nombre</label>
                    <input id="Nombre" value="<?=$producto['Nombre']?>" class="form-control" type="text" name="Nombre">
                    <label for="Detalle">Detalle</label>
                    <input id="Detalle" value="<?=$producto['Detalle']?>" class="form-control" type="text" name="Detalle" >
                    <label for="Fecha_Ingreso">Fecha Ingreso</label>
                    <input id="Fecha_Ingreso" value="<?=$producto['Fecha_Ingreso']?>" class="form-control" type="date" name="Fecha_Ingreso">
                    <label for="Precio">Precio</label>
                    <input id="Precio"  value="<?=$producto['Precio']?>" class="form-control" type="text" name="Precio">
                </div>    
                    <button class="btn btn-outline-primary" type="submit">Actualizar</button>
                    <a href="<?=base_url('mostrar')?>" class="btn btn-info">Cancelar</a>
            </form>
                   
            </p>
        </div>
    </div>
    
<?=$pie?>