<?php
    $base_url = $this->config->config['base_url'];
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper(array('form', 'url'));
    $this->load->library('session');
    $this->load->helper('email');                
    $this->load->library('form_validation');

    //FETCH GET POST DATA
    $postData = $this->input->post(NULL, TRUE);
    $getData = $this->input->get(NULL, TRUE);

    if($getData != NULL){
        $userId = $getData['userId'];
        $resetId = $getData['resetId'];
    }else{
        $userId = $postData['userId'];
        $resetId = $postData['resetId'];        
    }
    
    echo "reset Your password";
    
    
    
?>

<?
    if($isResetSuccessfull === true){   
?>

    Your password has been reset successfully. Please login.

<?
    }else if($userExist === false){
    
?>
    
    This Email address does not belong in our records, please try reseting your password again or contact us to resolve this issue. 
    
<?
    }else{
?>
    <?=form_open('resetYourPassword/index')?>

            <div class="textfield">
            <?=form_label('', 'user_pass')?>
            
            <?PHP
            $password = array(
                'name'        => 'password',
                'id'          => 'password',
                'value'       => set_value('user_pass'),
                'maxlength'   => '100',
                'size'        => '50',
                'style'       => '',
                'placeholder' => 'Password - 6 characters minimum'
                );

            ?>
            <?=form_password($password)?>
            <?=form_error('password')?>
        </div>
    
        <div class="textfield">
            <?=form_label('', 'confirm_password')?>
            
            <?PHP
            $confirm_password = array(
                'name'        => 'confirm_password',
                'id'          => 'confirm_password',
                'value'       => set_value('confirm_password'),
                'maxlength'   => '100',
                'size'        => '50',
                'style'       => '',
                'placeholder' => 'Confirm Password'
                );

            ?>
            <?=form_password($confirm_password)?>
            <?=form_error('$confirm_password')?>
        </div>

    
            <?PHP
            $userId = array(
                'name'        => 'userId',
                'id'          => 'userId',
                'value'       => $userId,
                'type'       => 'hidden'
                );

            ?>
            <?=form_input($userId)?>
    
            <?PHP
            $resetId = array(
                'name'        => 'resetId',
                'id'          => 'resetId',
                'value'       => $resetId,
                'type'       => 'hidden'
                );

            ?>
            <?=form_input($resetId)?>
    
    
        <div class="buttons">
            <?=form_submit('register', 'Register')?>
        </div>
    
    <?=form_close();?>

<? } ?>