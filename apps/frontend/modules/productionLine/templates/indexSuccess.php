<div class="content round-5">
    <div class="page_title fleft">
        <h1>LÍNEAS PRODUCTIVAS</h1>
    </div>
    <a style="text-decoration: none; color: #5D6063" href="<?php echo url_for('productionLine/new') ?>">
        <div class="add_button fright round-5">
            Agregar
        </div>
    </a>
    <div class="main_content">
        <table class="display" id="example">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Modelo</th>
                    <th>Area</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($production_lines as $production_line): ?>
                    <tr>
                        <td><?php echo $production_line->getCodigo() ?></td>
                        <td><?php echo $production_line->getName() ?></td>
                        <td><?php echo $production_line->getModel() ?></td>
                        <td><?php echo $production_line->getArea() ?></td>
                        <td>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam() ?>" src="../images/view_icon.png"  title="Ver"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam() ?>" src="../images/edit_icon.png"  title="Editar"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam() ?>" src="../images/delete_icon.png"  title="Eliminar" width="18px"/>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable({
            "bPaginate": true,
            "bJQueryUI": true
        });
    } );
</script>