<div class="content">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="register-container container">
    <div class="row">
    
        <!-- register form -->
        <div class="register span6">
      
            <form method="post" action="<?php echo URL; ?>login/register_action" name="registerform">
            <h2>Registrate<span class="red"><strong> HOY?</strong></span></h2>
            <!-- the user name input field uses a HTML5 pattern check -->
            <label for="login_input_username">
                Nombre
                <span style="display: block; font-size: 14px; color: #999;">(only letters and numbers, 2 to 64 characters)</span>
            </label>
            <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
            <!-- the last_name input field uses a HTML5 email type check -->
            <label for="login_input_lastName">
                Apellidos
                <span style="display: block; font-size: 14px; color: #999;">(only letters and numbers, 2 to 64 characters)</span>
            </label>
            <input id="login_input_lastName" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_lastName" required />
            <!-- the grup_id input field uses a HTML5 email type check -->
            <label for="login_input_grupid">
                Grupo
                <span style="display: block; font-size: 14px; color: #999;">(Seleccione Un grupo)</span>
            </label>
   
            <input id="login_input_grupid" class="login_input" type="number" pattern="[a-zA-Z0-9]{2,64}" name="group_id" required />
            
              the email input field uses a HTML5 email type check -->
            <label for="login_input_email">
                User's email
                <span style="display: block; font-size: 14px; color: #999;">
                    (please provide a <span style="text-decoration: underline; color: mediumvioletred;">real email address</span>,
                    you'll get a verification mail with an activation link)
                </span>
            </label>
            <input id="login_input_email" class="login_input" type="email" name="user_email" required />
            <label for="login_input_password_new">
                Password (min. 6 characters!
                <span class="login-form-password-pattern-reminder">
                    Please note: using a long sentence as a password is much much safer then something like "!c00lPa$$w0rd").
                    Have a look on
                    <a href="http://security.stackexchange.com/questions/6095/xkcd-936-short-complex-password-or-long-dictionary-passphrase">
                        this interesting security.stackoverflow.com thread
                    </a>.
                </span>
            </label>
            <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
            <label for="login_input_password_repeat">Repeat password</label>
            <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <!-- to avoid weird with-slash-without-slash issues: simply always use the URL constant here -->
            
            <input type="submit"  name="register" value="Register" />

        </form>
            </div>
            <div class="iphone span5">
        <img src="<?php echo URL; ?>public/img/ipone.png" alt="">
        </div>
        </div>
    </div>

    <?php if (FACEBOOK_LOGIN == true) { ?>
        <div class="register-facebook-box">
            <h1>or</h1>
            <a href="<?php echo $this->facebook_register_url; ?>" class="facebook-login-button">Register with Facebook</a>
        </div>
    <?php } ?>

</div>
<script src="<?php echo URL; ?>public/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo URL; ?>public/js/scripts.js"></script>
