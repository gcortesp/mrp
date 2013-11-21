<div class="content round-5">
    <div class="page_title fleft">
        <h1>ARTÍCULOS</h1>
    </div>
    <a style="text-decoration: none; color: #5D6063" href="<?php echo url_for('product/new') ?>">
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
                    <th>Familia</th>
                    <th>UM</th>
                    <th>Active</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                <!--      <td><a href="<?php //echo url_for('product/show?id='.$product->getId())  ?>"><?php //echo $product->getId()  ?></a></td>-->
                        <td><?php echo $product->getCodigo() ?></td>
                        <td><?php echo $product->getName() ?></td>
                        <td><?php echo $product->getProductFamily() ?></td>
                        <td><?php echo $product->getUnitMeasure() ?></td>
                        <td><?php echo $product->getActive() ?></td>
                        <td>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()  ?>" src="../images/view.png"  title="Ver"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()  ?>" src="../images/action_edit.png"  title="Editar"/>
                            <img class="pointer" id="view-detail" team="<?php //echo $team->getIdTeam()  ?>" src="../images/action_delete_2.png"  title="Eliminar" width="18px"/>
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
