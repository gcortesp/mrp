<div class="login">
    <input type="text" class="input" value="Login" /> <input type="text" class="input" value="Password" />																														<div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden"><h1><a href="http://www.greatdirectories.org">best web directories</a></h1><h1><a href="http://www.bestfreetemplates.org">best free templates</a></h1></div>
    <div class="enter"><a href="#">Enter</a></div>
    <div class="links"><a href="#">Forgot password</a> | <a href="#">Registration</a></div>
</div>

<div class="login">
    <input type="text" class="input" value="Login" /> <input type="text" class="input" value="Password" />																														<div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden"><h1><a href="http://www.greatdirectories.org">best web directories</a></h1><h1><a href="http://www.bestfreetemplates.org">best free templates</a></h1></div>
    <div class="enter"><a href="#">Enter</a></div>
    <div class="links"><a href="#">Forgot password</a> | <a href="#">Registration</a></div>
</div>

<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <table>
        <tbody>
            <?php echo $form ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" />

                    <?php $routes = $sf_context->getRouting()->getRoutes() ?>
                    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
                        <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
                    <?php endif; ?>

                    <?php if (isset($routes['sf_guard_register'])): ?>
                        &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
                    <?php endif; ?>
                </td>
            </tr>
        </tfoot>
    </table>
</form>