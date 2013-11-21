<div class="content round-5">
    <div class="page_title fleft">
        <h1>ALTA PRODUCCIÓN</h1>
    </div>
    <a style="text-decoration: none; color: #5D6063" href="<?php echo url_for('company/new') ?>">
        <div class="add_button fright round-5">
            Agregar
        </div>
    </a>
    <div class="main_content">
        <table class="display" id="example">
            <thead>
                <tr>
<!--                    <th>Id</th>-->
                    <th>Name</th>
                    <th>Rut</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Mail</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($companys as $company): ?>
                    <tr>
<!--                        <td><a href="<?php //echo url_for('company/show?id=' . $company->getId()) ?>"><?php //echo $company->getId() ?></a></td>-->
                        <td><?php echo $company->getName() ?></td>
                        <td><?php echo $company->getRut() ?></td>
                        <td><?php echo $company->getAddress() ?></td>
                        <td><?php echo $company->getCity() ?></td>
                        <td><?php echo $company->getCountry() ?></td>
                        <td><?php echo $company->getPhone() ?></td>
                        <td><?php echo $company->getMail() ?></td>
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
