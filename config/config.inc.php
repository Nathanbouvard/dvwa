<?php

# Si vous avez des problèmes de connexion, gardez 127.0.0.1 au lieu de localhost.;
# Cela corrige souvent les problèmes de sockets sur Mac.;

# Database management system to use;
$DBMS = 'MySQL';

# Database variables;
# -----------------------------------------------------;
# CONFIGURATION POUR MAC (MAMP);
# -----------------------------------------------------;
$_DVWA = array();
$_DVWA[ 'db_server' ]   = 'mysql-victor37.alwaysdata.net';
$_DVWA[ 'db_database' ] = 'victor37_dvwa';

# Sur MAMP, l'utilisateur et le mot de passe par défaut sont "root";
$_DVWA[ 'db_user' ]     = 'victor37_nathan';
$_DVWA[ 'db_password' ] = 'VictorNathan1234';

# Le port MySQL par défaut de MAMP est souvent 8889.;
# Si cela ne marche pas, essayez 3306.;
$_DVWA[ 'db_port']      = '8889'; 

# ReCAPTCHA settings;
#   Used for the 'Insecure CAPTCHA' module;
#   You'll need to generate your own keys at: https://www.google.com/recaptcha/admin;
$_DVWA[ 'recaptcha_public_key' ]  = '';
$_DVWA[ 'recaptcha_private_key' ] = '';

# Default security level;
#   IMPORTANT : Je l'ai passé à 'low' pour que vous puissiez vous exercer.;
#   Les niveaux sont : 'low', 'medium', 'high' ou 'impossible'.;
$_DVWA[ 'default_security_level' ] = 'low';

# Default locale;
$_DVWA[ 'default_locale' ] = 'fr';

# Disable authentication;
$_DVWA[ 'disable_authentication' ] = false;

define ('MYSQL', 'mysql');
define ('SQLITE', 'sqlite');

# SQLi DB Backend;
$_DVWA['SQLI_DB'] = MYSQL;

?>