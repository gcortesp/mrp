<div class="search">
    <form action="<?php echo url_for('productionLine') ?>" method="post">
        <input class="txtSearch fleft" type="text" name="search" value="<?php echo $sf_request->getParameter('search'); ?>"/>
        <input class="fleft" type="submit" value="buscar" />
    </form>
</div>
