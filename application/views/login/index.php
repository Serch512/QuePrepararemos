<div class="register-container container">
    
   <!-- echo out the system feedback (error and success messages) 
    <?php $this->renderFeedbackMessages(); ?>-->
            <div class="row">
                <div class="iphone span5">
                    <img src="<?php echo URL; ?>public/img/ipone.png" alt="">
                </div>
                <div class="register span6">
                    <form action="<?php echo URL; ?>login/login" method="post">
                        <h2>INGRESA <span class="red"><strong>HOY?</strong></span></h2>
                         <?php $this->renderFeedbackMessages(); ?>

    <div class="login-default-box">
        <form action="<?php echo URL; ?>login/login" method="post">
                <label for="firstname">Nombre de Usuario (o email)</label>
                <input type="text" name="user_name" required placeholder="Nombre de Usuario (o email)..."/>
                <label for="password">Contraseña</label>
                <input type="text" name="user_password" placeholder="Contraseña..." required />
                <input type="checkbox" name="user_rememberme" class="remember-me-checkbox" />
                <label class="remember-me-label">Keep me logged in (for 2 weeks)</label>
                <input type="submit" class="login-submit-button" />
        </form>
        <a href="<?php echo URL; ?>login/register">Register</a>
        |
        <a href="<?php echo URL; ?>login/requestpasswordreset">Forgot my Password</a>
    </div>
                    </form>
                </div>
            </div>
</div>
        <script src="<?php echo URL; ?>public/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo URL; ?>public/js/scripts.js"></script>
