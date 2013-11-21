<div class="content round-5">
    <div class="page_title fleft">
        <h1>LÍNEA - ARTÍCULOS</h1>
    </div>
    <a style="text-decoration: none; color: #5D6063" href="<?php echo url_for('productLineProduct/new') ?>">
        <div class="add_button fright round-5">
            Agregar
        </div>
    </a>
    <div class="main_content">
        <table class="display" id="example">
            <thead>
                <tr>
                    <th>Línea</th>
                    <th>Código</th>
                    <th>Artículo</th>
                    <th>Tasa Operacional</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product_line_products as $product_line_product): ?>
                    <tr>
<!--                        <td><a href="<?php //echo url_for('productLineProduct/show?id=' . $product_line_product->getId()) ?>"><?php //echo $product_line_product->getId() ?></a></td>-->
                        <td><?php echo $product_line_product->getProductionLine() ?></td>
                        <td><?php echo $product_line_product->getProduct()->getCodigo() ?></td>
                        <td><?php echo $product_line_product->getProduct() ?></td>
                        <td><?php echo $product_line_product->getOperationalRate() ?></td>
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
