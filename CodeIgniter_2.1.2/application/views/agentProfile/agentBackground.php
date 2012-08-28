<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);

echo "agent background step 2 ";

$jobType1 = jobTypeEnum::FULL_TIME_AGENT;
$jobType2 = jobTypeEnum::PART_TIME_AGENT;
$jobType3 = jobTypeEnum::FULL_TIME_AGENT_BROKER;
$jobType4 = jobTypeEnum::PART_TIME_AGENT_BROKER;


?>
<br/>

<?PHP $this->load->helper('form'); ?>

<?=form_open('agentProfile/agentBackground')?>    


    <div class="textfield">
        <?=form_label('I am ', 'jobType')?>
        <?PHP
            $options = array(
                '0'  => 'Please select',
                $jobType1  => 'A full-time Agent ',
                $jobType2  => 'A part-time Agent ',
                $jobType3  => 'A full-time Agent and Broker',
                $jobType4  => 'A full-time Agent and Broker'
            );
        ?>
        <?=form_dropdown('jobType', $options, '0') ?>
        <?=form_error('shirts')?>
    </div>   

<br/>

    <div class="textfield">
        <?=form_label('Realtor DRE#', 'dre_num')?>
        <?PHP
        $dre_num = array(
            'name'        => 'dre_num',
            'id'          => 'dre_num',
            'value'       => set_value('dre_num'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($dre_num)?>
        <?=form_error('dre_num')?>
    </div>

<br/>

    <div class="textfield">
        <?=form_label('Mobile phone', 'mobile_phone')?>
        <?PHP
        $mobile_phone = array(
            'name'        => 'mobile_phone',
            'id'          => 'mobile_phone',
            'value'       => set_value('mobile_phone'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => 'xxx-xxx-xxxx'
            );

        ?>
        <?=form_input($mobile_phone)?>
        <?=form_error('mobile_phone')?>
    </div>

<br/>


    <div class="textfield">
        <?=form_label('Work phone', 'work_phone')?>
        <?PHP
        $work_phone = array(
            'name'        => 'work_phone',
            'id'          => 'work_phone',
            'value'       => set_value('work_phone'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($work_phone)?>
        <?=form_error('work_phone')?>
    </div>

<br/>


    <div class="textfield">
        <?=form_label('Company name', 'company_name')?>
        <?PHP
        $company_name = array(
            'name'        => 'company_name',
            'id'          => 'company_name',
            'value'       => set_value('company_name'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($company_name)?>
        <?=form_error('company_name')?>
    </div>

<br/>


    <div class="textfield">
        <?=form_label('Company address line 1 ', 'company_address')?>
        <?PHP
        $company_address = array(
            'name'        => 'company_address',
            'id'          => 'company_address',
            'value'       => set_value('company_address'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($company_address)?>
        <?=form_error('company_address')?>
    </div>

<br/>


    <div class="textfield">
        <?=form_label('City ', 'city')?>
        <?PHP
        $city = array(
            'name'        => 'city',
            'id'          => 'city',
            'value'       => set_value('city'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($city)?>
        <?=form_error('city')?>
    </div>

<br/>


    <div class="textfield">
        <?=form_label('State', 'state')?>
        <?PHP
        $state = array(
            'name'        => 'state',
            'id'          => 'state',
            'value'       => set_value('state'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($state)?>
        <?=form_error('state')?>
    </div>

<br/>


    <div class="textfield">
        <?=form_label('Company zip code', 'zipCode')?>
        <?PHP
        $zipCode = array(
            'name'        => 'zipCode',
            'id'          => 'zipCode',
            'value'       => set_value('zipCode'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($zipCode)?>
        <?=form_error('zipCode')?>
    </div>

<br/>

<div class="textfield">
        <?=form_label('Years of experience as agent or broker: ', 'yearsOfExp')?>
        <?PHP
        $yearsOfExp = array(
            'name'        => 'yearsOfExp',
            'id'          => 'yearsOfExp',
            'value'       => set_value('yearsOfExp'),
            'maxlength'   => '100',
            'size'        => '50',
            'style'       => '',
            'placeholder' => ''
            );

        ?>
        <?=form_input($yearsOfExp)?>
        <?=form_error('yearsOfExp')?>
    </div>

<br/>


<div class="textfield">
        <?=form_label('First-time home buyer ', 'firstTimeBuyer')?>
        <?PHP
        $firstTimeBuyer = array(
            'name'        => 'firstTimeBuyer',
            'id'          => 'firstTimeBuyer',
            'value'       => 'true',
            'checked'     => TRUE,
            'style'       => 'margin:10px',
            );

        ?>
        <?=form_checkbox($firstTimeBuyer)?>
        <?=form_error('firstTimeBuyer')?>
    
    <br/>
    
    
        <?=form_label('First-time home seller ', 'firstTimeSeller')?>
        <?PHP
        $firstTimeSeller = array(
            'name'        => 'firstTimeSeller',
            'id'          => 'firstTimeSeller',
            'value'       => 'true',
            'checked'     => TRUE,
            'style'       => 'margin:10px',
            );

        ?>
        <?=form_checkbox($firstTimeSeller)?>
        <?=form_error('firstTimeSeller')?>
    
    <br/>
    
    
        <?=form_label('Shortsale/REO speciality ', 'shortsale')?>
        <?PHP
        $shortsale = array(
            'name'        => 'shortsale',
            'id'          => 'shortsale',
            'value'       => 'true',
            'checked'     => TRUE,
            'style'       => 'margin:10px',
            );

        ?>
        <?=form_checkbox($shortsale)?>
        <?=form_error('shortsale')?>
    
    
    <br/>
    
    
        <?=form_label('Foreclosures ', 'foreclosure')?>
        <?PHP
        $foreclosure = array(
            'name'        => 'foreclosure',
            'id'          => 'foreclosure',
            'value'       => 'true',
            'checked'     => TRUE,
            'style'       => 'margin:10px',
            );

        ?>
        <?=form_checkbox($foreclosure)?>
        <?=form_error('foreclosure')?>
    
    <br/>
    
    
        <?=form_label('1031 Exchange ', 'exchange1031')?>
        <?PHP
        $exchange1031 = array(
            'name'        => 'exchange1031',
            'id'          => 'exchange1031',
            'value'       => 'true',
            'checked'     => TRUE,
            'style'       => 'margin:10px',
            );

        ?>
        <?=form_checkbox($exchange1031)?>
        <?=form_error('exchange1031')?>
    


</div>

<br/>
<br/>
<br/>

    
    <div class="buttons">
        <?=form_submit('Save', 'Save')?>
    </div>


<?=form_close();?>
