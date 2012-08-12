<h1>Join Hutmut</h1>

<h3>Backend, DB, Security work complete, </h3>

<?PHP $this->load->helper('form'); ?>

<?=form_open('joinUs/index')?>    

        <div class="textfield">
            <?=form_label('', 'first_name')?>
            <?PHP
            $first_name = array(
                'name'        => 'first_name',
                'id'          => 'first_name',
                'value'       => set_value('first_name'),
                'maxlength'   => '100',
                'size'        => '50',
                'style'       => '',
                'placeholder' => 'First Name'
                );

            ?>
            <?=form_input($first_name)?>
            <?=form_error('first_name')?>
        </div>
    
        <div class="textfield">
            <?=form_label('', 'last_name')?>
            <?PHP
            $last_name = array(
                'name'        => 'last_name',
                'id'          => 'last_name',
                'value'       => set_value('last_name'),
                'maxlength'   => '100',
                'size'        => '50',
                'style'       => '',
                'placeholder' => 'Last Name'
                );

            ?>
            <?=form_input($last_name)?>
            <?=form_error('last_name')?>
        </div>
    
        <div class="textfield">
            <?=form_label('', 'email')?>
            <?PHP
            $email = array(
                'name'        => 'email',
                'id'          => 'email',
                'value'       => set_value('email'),
                'maxlength'   => '100',
                'size'        => '50',
                'style'       => '',
                'placeholder' => 'Email'
                );

            ?>
            <?=form_input($email)?>
            <?=form_error('email')?>
        </div>

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

        <div class="buttons">
            <?=form_submit('register', 'Register')?>
        </div>

<?=form_close();?>