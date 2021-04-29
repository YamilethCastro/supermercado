<?=$cabecera?>
<a  class="btn btn-info" href="<?=base_url('ingresar')?>">Ingresar nuevo producto</a>
    <br>
    <br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Detalle</th>
                    <th>Fecha Ingreso</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($productos as $producto): ?>
                <tr>
                    <td><?=$producto['codigo']; ?></td>
                    <td><?=$producto['Nombre']; ?></td>
                    <td><?=$producto['Detalle']; ?></td>
                    <td><?=$producto['Fecha_Ingreso']; ?></td>
                    <td><?=$producto['Precio']; ?></td>
                    <td>
                    <a href="<?=base_url('editar/'.$producto['codigo']);?>" class="btn btn-success" type="button">Editar</a>
                    <a href="<?=base_url('borrar/'.$producto['codigo']);?>" class="btn btn-danger" type="button">Borrar</a>
                    
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
<?=$pie?>