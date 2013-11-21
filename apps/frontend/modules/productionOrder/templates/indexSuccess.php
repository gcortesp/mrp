<div class="content round-5">
    <div class="page_title fleft">
        <h1>ARTÍCULOS</h1>
    </div>
    <a style="text-decoration: none; color: #5D6063" href="<?php echo url_for('productionOrder/new') ?>">
        <div class="add_button fright round-5">
            Agregar
        </div>
    </a>
    <div class="main_content">
        <table class="display" id="example">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>State</th>
                    <th>Línea</th>
                    <th>Artículo</th>
                    <th>Cantidad</th>
                    <th>Fecha Ini</th>
                    <th>Start time</th>
                    <th>End date</th>
                    <th>End time</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($production_orders as $production_order): ?>
                    <tr>
<!--                        <td><a href="<?php //echo url_for('productionOrder/show?id=' . $production_order->getId()) ?>"><?php //echo $production_order->getId() ?></a></td>-->
                        <td><?php echo $production_order->getCode() ?></td>
                        <td><?php echo $production_order->getState() ?></td>
                        <td><?php echo $production_order->getProductionLine() ?></td>
                        <td><?php echo $production_order->getProduct() ?></td>
                        <td><?php echo $production_order->getQuantity() ?></td>
                        <td><?php echo $production_order->getStartDate() ?></td>
                        <td><?php echo $production_order->getStartTime() ?></td>
                        <td><?php echo $production_order->getEndDate() ?></td>
                        <td><?php echo $production_order->getEndTime() ?></td>
                        <td>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()   ?>" src="../images/view.png"  title="Ver"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()   ?>" src="../images/action_edit.png"  title="Editar"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()   ?>" src="../images/action_delete_2.png"  title="Eliminar" width="18px"/>
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
