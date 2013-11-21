<div class="login round-5">
    <div class="img_logo"><a href="#"></a></div>
<!--    <div class="logo">
        <img id="logo" src="../images/logo.jpg" alt="eMrp">
    </div>-->
    <div class="line"></div>
        <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
            <label for="signin_username" class="fleft">Nombre de usuario</label>
            <?php echo $form['username']->render(array('class'=>'textfield fright round-5')) ?>
            <div class="clear" style="height: 10px;"></div>
            <label for="signin_password" class="fleft">Contraseña</label>
            <?php echo $form['password']->render(array('class'=>'textfield fright round-5')) ?>
            <div class="clear" style="height: 5px;"></div>
            <label for="signin_remember" class="fright">Recordarme <?php echo $form['remember']->render() ?></label>
            <div class="clear" style="height: 10px;"></div>
            <button type="submit" class="boton fright round-5">Entrar</button>
            <div class="clear" style="height: 10px;"></div>
            <?php echo $form['_csrf_token'] ?>
        </form>
    <div class="error hidden" id="error_rut_org"></div>
    <div class="clear" style="height: 10px;"></div>
    <label class="pointer" id="forgot-password"><?php echo ('¿Olvidaste tu Contraseña?') ?></label>
</div>
<?php if ($form->hasErrors()): ?>
<script type="text/javascript">
    $(document).ready(function() {
          $('#error_rut_org').hide();
	  $('#error_rut_org').html('<b>Error</b>: El nombre de usuario o contraseña no son válidos.');
	  $('#error_rut_org').slideDown('normal').delay(4000).slideUp(400);

    });
</script>
<?php endif; ?>