<div id="header">
    <div class="top_bar"></div>
    <div class="top_menu_container">
<!--        <div class="img_logo fleft"><a href="/index.php/"></a></div>-->
        <div class="top_menu fright">
            <ul>
                <li class="welcome">Bienvenido(a) <?php echo $user['first_name'] . ' ' . $user['last_name'] ?></li>
                <li><a href="<?php echo url_for('homepage') ?>">Home</a></li>
                <li><a href="<?php echo url_for('productionOrder') ?>">Perfil</a></li>
                <li><a href="<?php echo url_for('@sf_guard_signout') ?>">Logout</a></li>
            </ul>
        </div>
        <div class="main_menu fright round-5_top">
                <ul id="navigation">
                    <li class="color"><a href="<?php echo url_for('homepage') ?>">Home</a></li>
                    <li class="color"><a href="<?php echo url_for('productionLine') ?>">Líneas Productivas</a></li>
                    <li class="color"><a href="<?php echo url_for('product') ?>">Artículos</a></li>
                    <li class="color"><a href="<?php echo url_for('productLineProduct') ?>">Línea - Artículo</a></li>
                    <li class="color"><a href="<?php echo url_for('productionOrder') ?>">Ordenes de Producción</a></li>
                    <li class="color"><a href="<?php echo url_for('productionItem') ?>">Ingreso de Producción</a></li>
                    <li class="color"><a href="<?php echo url_for('company') ?>">UEN</a></li>
                </ul>
        </div>
    </div>
</div>