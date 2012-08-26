<?php
    $base_url = $this->config->config['base_url'];
    $this->load->helper('form');


    echo "forgot Your password";
    
    
    
?>

<?
    if($resetId != null && $userId != null && $isResetEmailSent === true){
?>

    We have sent you an email to reset your password.

<?
    }else{
?>
    <?=form_open('forgotYourPassword/index')?>

    <?PHP
        $email = array(
        'name'        => 'email',
        'id'          => 'email',
        'value'       => set_value('email'),
        'maxlength'   => '100',
        'size'        => '50',
        'style'       => 'width:200px;',
        'class'       => 's',
        //'placeholder' => 'Email'
        );

    ?>
    <?=form_input($email)?>

    <?=form_error('email', '<span class="err">', '</span>')?>


    <input type="submit" value ="Submit button"  style="border:0px; cursor: pointer;" />
    <?=form_close();?>

<? } ?>