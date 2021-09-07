function startseite() {
    document.getElementById('einstellungen_top').style.display = 'none';

    document.getElementById('appleID').style.display = 'none';
    document.getElementById('appleID_geraeteinfos').style.display = 'none';
    document.getElementById('appleID_woist').style.display = 'none';
    document.getElementById('appleID_woist_meinIphone').style.display = 'none';

    document.getElementById('wlan').style.display = 'none';
    document.getElementById('netzwerk_hinzufuegen').style.display = 'none';
    document.getElementById('bluetooth').style.display = 'none';
    document.getElementById('mobilfunk_top').style.display = 'none';
    document.getElementById('mobile_daten').style.display = 'none';


    document.getElementById('sicherheit').style.display = 'none';
    document.getElementById('zusaetzliche_einstellungen').style.display = 'none';
    document.getElementById('verschluesselung_und_anmeldedaten').style.display = 'none';
    document.getElementById('sim_sperre_einrichten').style.display = 'none';
    document.getElementById('allgemein_top').style.display = 'none';
    document.getElementById('softwareupdate').style.display = 'none';
    document.getElementById('zuruecksetzen').style.display = 'none';



    document.getElementById('startseite').style.display = 'block';
}

function einstellungen() {
    document.getElementById('startseite').style.display = 'none';
    document.getElementById('appleID').style.display = 'none';
    document.getElementById('wlan').style.display = 'none';
    document.getElementById('bluetooth').style.display = 'none';
    document.getElementById('mobilfunk_top').style.display = 'none';

    document.getElementById('faceID_top').style.display = 'none';
    document.getElementById('allgemein_top').style.display = 'none';
    document.getElementById('nachrichten_top').style.display = 'none';
    document.getElementById('mail_top').style.display = 'none';


    document.getElementById('einstellungen_top').style.display = 'block';
}


//AppleID
function appleID() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('appleID_geraeteinfos').style.display = 'none';
    document.getElementById('appleID_woist').style.display = 'none';
    document.getElementById('appleID_woist_meinIphone').style.display = 'none';

    document.getElementById('appleID').style.display = 'block';
}

function appleID_geraeteinfos() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('appleID').style.display = 'none';
    document.getElementById('appleID_woist').style.display = 'none';
    document.getElementById('appleID_woist_meinIphone').style.display = 'none';

    document.getElementById('appleID_geraeteinfos').style.display = 'block';
}

function appleID_woist() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('appleID').style.display = 'none';
    document.getElementById('appleID_geraeteinfos').style.display = 'none';
    document.getElementById('appleID_woist_meinIphone').style.display = 'none';

    document.getElementById('appleID_woist').style.display = 'block';
}

function appleID_woist_meinIphone() {
    document.getElementById('appleID_woist').style.display = 'none';

    document.getElementById('appleID_woist_meinIphone').style.display = 'block';
}


//WLAN
function wlan() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('wlan').style.display = 'block';
}

//Bluetooth
function bluetooth() {
    document.getElementById('einstellungen_top').style.display = 'none';

    document.getElementById('bluetooth').style.display = 'block';
}

//mobilfunk
function mobilfunk() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('mobile_daten').style.display = 'none';
    document.getElementById('sim_pin').style.display = 'none';
    document.getElementById('datenoptionen').style.display = 'none';

    document.getElementById('mobilfunk_top').style.display = 'block';
}

function datenoptionen() {
    document.getElementById('mobilfunk').style.display = 'none';
    document.getElementById('datenoptionen').style.display = 'block';
}

function mobile_daten() {
    document.getElementById('mobilfunk').style.display = 'none';
    document.getElementById('mobile_daten').style.display = 'block';
}

function sim_pin() {
    document.getElementById('mobilfunk').style.display = 'none';
    document.getElementById('sim_pin').style.display = 'block';
}




// allgemein
function allgemein() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('softwareupdate').style.display = 'none';
    document.getElementById('zuruecksetzen').style.display = 'none';
    document.getElementById('allgemein_info_top').style.display = 'none';
    document.getElementById('allgemein_top').style.display = 'block';
}

function softwareupdate() {
    document.getElementById('allgemein_top').style.display = 'none';
    document.getElementById('allgemein_automUpdates').style.display = 'none';
    document.getElementById('softwareupdate').style.display = 'block';
}

function automatische_updates() {
    document.getElementById('softwareupdate').style.display = 'none';
    document.getElementById('allgemein_automUpdates').style.display = 'block';
}

function zuruecksetzen() {
    document.getElementById('allgemein_top').style.display = 'none';
    document.getElementById('zuruecksetzen').style.display = 'block';
}

function info() {
    document.getElementById('allgemein_top').style.display = 'none';
    document.getElementById('allgemein_info_top').style.display = 'block';
}



//FaceID
function faceID() {
    document.getElementById('einstellungen_top').style.display = 'none';

    document.getElementById('faceID_top').style.display = 'block';
}


//nachrichten
function nachrichten() {
    document.getElementById('einstellungen_top').style.display = 'none';

    document.getElementById('nachrichten_top').style.display = 'block';
}


// Mail
function mail() {
    document.getElementById('einstellungen_top').style.display = 'none';
    document.getElementById('mail_accounts').style.display = 'none';
    document.getElementById('mail_account_hinzufuegen').style.display = 'none';
    document.getElementById('mail_top').style.display = 'block';
}

function mail_accounts() {
    document.getElementById('mail_account_hinzufuegen').style.display = 'none';
    document.getElementById('mail_top').style.display = 'none';
    document.getElementById('mail_accounts').style.display = 'block';

}

function mail_account_hinzufuegen() {
    document.getElementById('mail_accounts').style.display = 'none';
    document.getElementById('mail_account_hinzufuegen').style.display = 'block';
}
