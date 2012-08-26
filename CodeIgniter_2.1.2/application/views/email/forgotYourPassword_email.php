<?php

$base_url = $this->config->config['base_url'];
$url = $base_url . "index.php/resetYourPassword?userId=".$userId."&resetId=$resetId";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo "send email";
?>


<a href =<?= $url; ?> >Click here to reset your password</a>