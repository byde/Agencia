<table>
    <thead>
        <tr>
            <td colspan="2">Detalles de la Licitacion</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Inicio</strong></td>
            <td><?php echo $licitacion['creacion']; ?></td>
        </tr>
        <tr>
            <td><strong>Finaliza</strong></td>
            <td><?php echo $licitacion['fin']; ?></td>
        </tr>
        <tr>
            <td><strong>Descripcion</strong></td>
            <td><?php echo $licitacion['descriptivo']; ?></td>
        </tr>
        <tr>
            <td><strong>Producto</strong></td>
            <td><?php echo $licitacion['producto']; ?></td>
        </tr>
        <?php if(is_array($campos)) : ?>
        <?php foreach($campos as $c): ?>
        <tr>
            <td><strong><?php echo $c['nombre'] ?></strong></td>
            <td><?php echo $c['valor'] ?></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>