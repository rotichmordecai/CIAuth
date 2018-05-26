<?php
$login = array(
    'name' => 'login',
    'id' => 'login',
    'class' => 'form-control',
    'value' => set_value('login'),
    'maxlength' => 80,
    'size' => 30,
);
if ($login_by_username and $login_by_email) {
    $login_label = 'Email or login';
} elseif ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control',
    'size' => 30,
);
$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'class' => 'form-control',
    'value' => 1,
    'checked' => set_value('remember'),
    'style' => 'margin:0;padding:0',
);
$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8,
);
?>
<?php
$attributes = array('class' => '', 'id' => '');
echo form_open($this->uri->uri_string(), $attributes);
?>
<div class="form-label-group">
    <?php //echo form_label($login_label, $login['id']);?>
    <?php echo form_input($login); ?>
    <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors[$login['name']] : ''; ?>
</div>
<div class="form-label-group">
    <?php //echo form_label('Password', $password['id']);?>
    <?php echo form_password($password); ?>
    <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?>
</div>

<?php if ($show_captcha) : ?>
    <?php if ($use_recaptcha) : ?>
        <div class="form-label-group">
            <div id="recaptcha_image"></div>
            <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
            <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
            <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
        </div>
        <div class="form-label-group">
            <div class="recaptcha_only_if_image">Enter the words above</div>
            <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
            <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
            <?php echo form_error('recaptcha_response_field'); ?>
            <?php echo $recaptcha_html; ?>
        </div>
    <?php else : ?>
        <div class="form-label-group">
            <p>Enter the code exactly as it appears:</p>
            <?php echo $captcha_html; ?>
        </div>
        <div class="form-label-group">
            <?php echo form_label('Confirmation Code', $captcha['id']); ?>
            <?php echo form_input($captcha); ?>
            <?php echo form_error($captcha['name']); ?>
        </div>
    <?php endif; ?>
<?php endif; ?>

<div class="form-label-group">
    <?php echo form_checkbox($remember); ?>
    <?php echo form_label('Remember me', $remember['id']); ?>
    <?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
    <?php
    if ($this->config->item('allow_registration', 'tank_auth')) :
        echo anchor('/auth/register/', 'Register');
    endif;
    ?>
</div>

<?php
$data = array(
    'name' => 'submit',
    'id' => 'button',
    'value' => 'true',
    'type' => 'submit',
    'class' => 'btn btn-lg btn-primary btn-block',
    'content' => 'Sign In'
);
echo form_button($data);
?>
<?php echo form_close(); ?>