<!DOCTYPE html>
<html class="mdc-typography">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link rel="stylesheet" href="css/site_themes/light_blue/index.css">
    <link rel="stylesheet" href="css/general.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .mdc-textfield {
            width: 90%;
        }
    </style>
</head>
<body>
<header>
    <div class="wrap">
        <div style="" id="_header">
            <h1 class="mdc-typography--display1"><?php echo $_SESSION['__config__']['software_name']." ".$_SESSION['__config__']['software_version'] ?></h1>
            <p id="sw_version" style="font-size: 0.7em; font-weight: normal; line-height: 20px; margin: 0; padding-top: 10px; text-transform: none">
                Software di condivisione e archiviazione materiali didattici
            </p>
        </div>
    </div>
</header>
<section class="wrap">
    <div id="login_form" style="display: flex; display: -webkit-flex; flex-direction: row; flex-wrap: wrap; align-items: center;">
        <form id="myform" action="do_login.php" method="post">
            <div style="display: block; width: 300px">
                <div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
                    <input required type="text" id="my-username" name="my-username" class="mdc-textfield__input">
                    <label class="mdc-textfield__label" for="my-username">Username</label>
                </div>
            </div>
            <div style="display: block; width: 300px">
                <div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
                    <input required type="password" class="mdc-textfield__input" id="pw" name="pw"
                           autocomplete="current-password">
                    <label for="pw" class="mdc-textfield__label">Password</label>
                    <div class="mdc-textfield__bottom-line"></div>
                </div>
            </div>
            <button type="submit" class="mdc-button mdc-button--raised" id="login_button">
                Login
            </button>
            <p style="margin-top: 20px">
                <a href="pwd_request.php" class="normal">Hai dimenticato la password?</a>
            </p>
            <input type="hidden" id="area" name="area" value="<?php echo $_GET['area'] ?>">
        </form>
        <footer id="footer" style="margin-right: 20px">
            <span>Copyright <?php echo date("Y") ?> Riccardo Bachis </span>
        </footer>
        <div id="alert" class="alert_msg" style="display: none">
            <div class="alert_title">
                <i class="material-icons">thumb_up</i>
                <span>Successo</span>
            </div>
            <p id="alertmessage" class="alertmessage"></p>
        </div>
        <div id="error" class="error_msg" style="display: none">
            <div class="error_title">
                <i class="fa fa-warning"></i>
                <span>Errore</span>
            </div>
            <p class="errormessage" id="errormessage"></p>
        </div>
        <div id='background' class="alert_msg" style='display: none'>
            <div class="alert_title">
                <i class="fa fa-spin fa-circle-o-notch"></i>
                <span>Attendi...</span>
            </div>
            <p id="background_msg" class="alertmessage"></p>
        </div>
        <div class="overlay" id="overlay" style="display:none;"></div>
        <div id="confirm" class="confirm_msg" style="display: none">
            <div class="confirm_title">
                <i class="material-icons">help</i>
                <span>Conferma</span>
            </div>
            <p class="confirmmessage" id="confirmmessage"></p>
            <div class="confirmbuttons _center">
                <div class="confirmbuttonscontainer">
                    <a href="#" id="okbutton">
                        <div class="alert_button material_dark_bg">
                            <span class="material_link">OK</span>
                        </div>
                    </a>
                </div>
                <div class="confirmbuttonscontainer">
                    <a href="#" id="nobutton">
                        <div class="alert_button material_dark_bg">
                            <span>NO</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script>
	window.mdc.autoInit();
    mdc.textfield.MDCTextfield.attachTo(document.querySelector('.mdc-textfield'));
</script>
</body>
</html>