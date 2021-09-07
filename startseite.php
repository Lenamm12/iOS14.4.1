<!DOCTYPE html>
<html>

<head>

    <meta charset="utf8">
    <title>iPhone 11 Pro Max iOS 14</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>

    <!--Scrollbalken-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/jQueryRotate.js"></script>

    <script>
        $(document).ready(function() {
                $(".scroll").niceScroll({
                    mousescrollstep: 80,
                    autohidemode: "leave",
                    cursorwidth: "10px",
                    cursorborderradius: "5px",
                    cursorcolor: "#004192",
                });
                $("einstellungen").niceScroll({
                    mousescrollstep: 80,
                    autohidemode: "leave",
                    cursorwidth: "10px",
                    cursorborderradius: "5px",
                    cursorcolor: "#004192",
                });
            }

        )

    </script>
</head>

<body>
    <!-- Rahmen -->
    <div id="rahmen" class="top">
        <img src="img/iPhone_rahmen.png" style="display:block">
    </div>

    <!-- Startseite -->
    <div id="startseite" class="top" style="display:none">
        <img usemap="#startseite" src="img/startseite.png">
        <map name="startseite">
            <area alt="einstellungen" shape="rect" coords="170,370,220,440" onclick="einstellungen()">
        </map>
    </div>

    <!-- Einstellungen -->
    <div id="einstellungen_top" class="top" style="display:block">
        <img usemap="#einstellungen_top" src="img/einstellungen_top.png">
        <map name="einstellungen_top"></map>
        <div id="einstellungen" class="einstellungen_scroll" style="display:block;">
            <img usemap="#einstellungen" src="img/einstellungen.png">
            <map name="einstellungen">

                <area alt="appleID" shape="rect" coords="0,10,320,50" onclick="appleID()">
                <area alt="wlan" shape="rect" coords="0,125,320,155" onclick="wlan()">
                <area alt="bluetooth" shape="rect" coords="0,155,320,190" onclick="bluetooth()">
                <area alt="mobilfunk" shape="rect" coords="0,190,320,225" onclick="mobilfunk()">

                <area alt="allgemein" shape="rect" coords="0,415,320,450" onclick="allgemein()">
                <area alt="faceID" shape="rect" coords="0,650,320,690" onclick="faceID()">
                <area alt="mail" shape="rect" coords="0,980,320,1015" onclick="mail()">
                <area alt="nachrichten" shape="rect" coords="0,1215,320,1250" onclick="nachrichten()">

        </div>
        </map>
    </div>

    <!--  AppleID-->
    <div id="appleID" class="top" style="display:none">
        <img usemap="#appleID" src="img/appleID.png">
        <map name="appleID">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
            <area alt="appleID_woist" shape="rect" coords="0,440,320,470" onclick="appleID_woist()">
            <area alt="appleID_geraeteinfos" shape="rect" coords="0,535,320,570" onclick="appleID_geraeteinfos()">
        </map>
    </div>
    <div id="appleID_woist" class="top" style="display:none">
        <img usemap="#appleID_woist" src="img/appleID_woist.png">
        <map name="appleID_woist">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="appleID()">
            <area alt="appleID_woist_meinIphone" shape="rect" coords="25,95,280,130" onclick="appleID_woist_meinIphone()">
        </map>
    </div>
    <div id="appleID_woist_meinIphone" class="top" style="display:none">
        <img usemap="#appleID_woist_meinIphone" src="img/appleID_woist_meinIPhoneSuchen.png">
        <map name="appleID_woist_meinIphone">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="appleID_woist()">
        </map>
    </div>
    <div id="appleID_geraeteinfos" class="top" style="display:none">
        <img usemap="#appleID_geraeteinfos" src="img/appleID_geraeteinfos.png">
        <map name="appleID_geraeteinfos">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="appleID()">
        </map>
    </div>

    <!--  WLAN-->
    <div id="wlan" class="top" style="display:none">
        <img usemap="#wlan" src="img/wlan.png">
        <map name="wlan">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        </map>
    </div>

    <!--  Bluetooth-->
    <div id="bluetooth" class="top" style="display:none">
        <img usemap="#bluetooth" src="img/bluetooth.png">
        <map name="bluetooth">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()">
        </map>
    </div>

    <!--mobilfunk-->
    <div id="mobilfunk_top" class="top" style="display:none">
        <img usemap="#mobilfunk_top" src="img/mobilfunk_top.png">
        <map name="mobilfunk_top">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="einstellungen()"></map>
        <div id="mobilfunk" class="scroll" style="display:block">
            <img usemap="#mobilfunk" src="img/mobilfunk.png">
            <map name="mobilfunk">

                <area alt="datenoptionen" shape="rect" coords="30,130,320,160" onclick="datenoptionen()">
                <area alt="mobile_daten" shape="rect" coords="30,200,320,275" onclick="mobile_daten()">
                <area alt="sim_pin" shape="rect" coords="30,445,320,475" onclick="sim_pin()">

            </map>
        </div>
    </div>

    <div id="datenoptionen" class="top" style="display:none">
        <img usemap="#datenoptionen" src="img/mobilfunk_datenoptionen.png">
        <map name="datenoptionen">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobilfunk()">
        </map>
    </div>

    <div id="mobile_daten" class="top" style="display:none">
        <img usemap="#mobile_daten" src="img/mobilfunk_mobileDaten.png">
        <map name="mobile_daten">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobilfunk()">
        </map>
    </div>

    <div id="sim_pin" class="top" style="display:none">
        <img usemap="#sim_pin" src="img/mobilfunk_simpin.png">
        <map name="sim_pin">
            <area alt="back" shape="rect" coords="0,50,80,110" onclick="mobilfunk()">
        </map>
    </div>



    <!-- Allgemein -->
    <div id="allgemein_top" class="top" style="display:none">
        <img usemap="#allgemein_top" src="img/allgemein_top.png">
        <map name="allgemein_top">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="einstellungen()"></map>
        <div id="allgemein" class="scroll" style="display:block">
            <img usemap="#allgemein" src="img/allgemein.png">
            <map name="allgemein">

                <area alt="info" shape="rect" coords="0,25,320,60" onclick="info()">
                <area alt="softwareupdate" shape="rect" coords="0,60,320,90" onclick="softwareupdate()">
                <area alt="zuruecksetzen" shape="rect" coords="0,695,320,830" onclick="zuruecksetzen()">
            </map>
        </div>
    </div>

    <!-- Info -->
    <div id="allgemein_info_top" class="top" style="display:none">
        <img usemap="#allgemein_info_top" src="img/allgemein_info_top.png">
        <map name="allgemein_info_top">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="allgemein()"></map>
        <div id="allgemein_info" class="scroll" style="display:block">
            <img usemap="#allgemein_info" src="img/allgemein_info.png">
            <map name="allgemein_info">

            </map>
        </div>
    </div>

    <!-- Softwareupdate -->
    <div id="softwareupdate" class="top" style="display:none">
        <img usemap="#softwareupdate" src="img/allgemein_softwareupdate.png">
        <map name="softwareupdate">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="allgemein()">
            <area alt="automUpdates" shape="rect" coords="0,95,320,125" onclick="automatische_updates()">
        </map>
    </div>

    <!-- automatische Updates -->
    <div id="allgemein_automUpdates" class="top" style="display:none">
        <img usemap="#allgemein_automUpdates" src="img/allgemein_automUpdates.png">
        <map name="allgemein_automUpdates">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="softwareupdate()">
        </map>
    </div>

    <!-- Zurücksetzen -->

    <div id="zuruecksetzen" class="top" style="display:none">
        <img usemap="#zuruecksetzen" src="img/allgemein_zuruecksetzen.png">
        <map name="zuruecksetzen">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="allgemein()">
        </map>
    </div>



    <!-- Face ID & Code -->
    <div id="faceID_top" class="top" style="display:none">
        <img usemap="#faceID_top" src="img/faceID_top.png">
        <map name="faceID_top">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="einstellungen()"></map>
        <div id="faceID" class="scroll" style="display:block">
            <img usemap="#faceID" src="img/faceID.png">
            <map name="faceID">

            </map>
        </div>
    </div>

    <!-- Nachrichten -->
    <div id="nachrichten_top" class="top" style="display:none">
        <img usemap="#nachrichten_top" src="img/nachrichten_top.png">
        <map name="nachrichten_top">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="einstellungen()">
        </map>
        <div id="nachrichten" class="scroll" style="display:block">
            <img usemap="#nachrichten" src="img/nachrichten.png">
            <map name="nachrichten">

            </map>
        </div>
    </div>


    <!-- Mail -->
    <div id="mail_top" class="top" style="display:none">
        <img usemap="#mail_top" src="img/mail_top.png">
        <map name="mail_top">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="einstellungen()"></map>
        <div id="mail" class="scroll" style="display:block">
            <img usemap="#mail" src="img/mail.png">
            <map name="mail">
                <area alt="email_konten" shape="rect" coords="0,180,320,215" onclick="mail_accounts()">
            </map>
        </div>
    </div>

    <div id="mail_accounts" class="top" style="display:none">
        <img usemap="#mail_accounts" src="img/mail_accounts.png">
        <map name="mail_accounts">
            <area alt="back" shape="rect" coords="0,50,80,130" onclick="mail()">
            <area alt="hinzufügen" shape="rect" coords="0,190,320,220" onclick="mail_account_hinzufuegen()">
        </map>
    </div>

    <div id="mail_account_hinzufuegen" class="top" style="display:none">
        <img usemap="#mail_account_hinzufuegen" src="img/mail_account_hinzufuegen.png">
        <map name="mail_account_hinzufuegen">
            <area alt="mail_accounts" shape="rect" coords="0,50,80,130" onclick="mail_accounts()">
        </map>
    </div>


</body>

</html>
