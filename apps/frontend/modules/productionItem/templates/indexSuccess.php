<div class="content round-5">
    <div class="page_title fleft">
        <h1>ALTA PRODUCCIÓN</h1>
    </div>
    <a style="text-decoration: none; color: #5D6063" href="<?php echo url_for('productionItem/new') ?>">
        <div class="add_button fright round-5">
            Agregar
        </div>
    </a>
    <div class="main_content">
        <table class="display" id="example">
            <thead>
                <tr>
<!--                    <th>Id</th>-->
                    <th>OP Nº</th>
                    <th>Cantidad Planif.</th>
                    <th>Cantidad Finaliz.</th>
                    <th>Cant Dsch.</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($production_items as $production_item): ?>
                    <tr>
<!--                        <td><a href="<?php //echo url_for('productionItem/show?id=' . $production_item->getId()) ?>"><?php //echo $production_item->getId() ?></a></td>-->
                        <td><?php echo $production_item->getProductionOrderId() ?></td>
                        <td><?php echo $production_item->getQuantity() ?></td>
                        <td><?php echo $production_item->getProduced() ?></td>
                        <td><?php echo $production_item->getLost() ?></td>
                        <td>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()    ?>" src="../images/view.png"  title="Ver"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()    ?>" src="../images/action_edit.png"  title="Editar"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()    ?>" src="../images/action_delete_2.png"  title="Eliminar" width="18px"/>
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
