<table id="box-table-a">
    <thead>
    <tr>
        <th scope="col">Licitaciones</th>
        <th scope="col" width="200px">Tiempo Restante</th>
    </tr>
    </thead>
    <?php foreach ($licitaciones as $l): ?>
    <tr>
        <td><?php echo $l['descriptivo'] ?></td>
        <td></td>
    </tr>
    <?php endforeach; ?>
</table>