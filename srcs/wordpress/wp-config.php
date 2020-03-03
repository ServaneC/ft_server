<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'schene' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '42born2code' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1]{8->CVhJjBJ9 Y?#NL%C4g9NJ:<I<zx*#y{wxsg>a-EkL8`<M+(NRO6^T#/yFx' );
define( 'SECURE_AUTH_KEY',  ';4S }axnuT[jQ6Io]<{YfcM2Zi{b=h%4k2!dv-GZ.5_>M*A.:yEsyE9Xat,m,49^' );
define( 'LOGGED_IN_KEY',    '{V~yv&-Ig.]dhjUJm}Mmqg$D$]$uA~75CIxmIfQclAYC8<,#3D3}!ea7_%JN/.PH' );
define( 'NONCE_KEY',        'UQDkXPpZ/6s,n]*}i`mDbG%cI$etiSi?%rN_(33H$=i!ADCe]}@!;efq0_D)t_%D' );
define( 'AUTH_SALT',        'unMz.^fgZVy<:*CFkJxvb4sViJV7qX{M?t,.&$s5SC2~H>Tp@5Vlm.%aVTkhfqQ}' );
define( 'SECURE_AUTH_SALT', 'g:]1{~ijti!KE4ZJ+ppL4sRrfAAL53y:j,NXsPd(NZ?KW716JY}yS%-UB:{$8j[C' );
define( 'LOGGED_IN_SALT',   '%QT6IhK22?@7iF^OcMrC/({cPDJ;0aVBGX(A5LwUq<?Jg7G2 1d#O%%*<sIO9s:G' );
define( 'NONCE_SALT',       'PUEXsR^+u1sSGLbbcve/->|]DI(&`6GV7C<kz1RF=2/Sb;Hj]t&`#+x~ke{=.dG&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
