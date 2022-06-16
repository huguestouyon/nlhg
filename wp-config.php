<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'u611141294_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'u611141294_nlhg' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '!9F7f?iX' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't|%xIpG1tCI,bh!dtpq]@<XxbT|P4as rU?LjcvwMKxlOkHHjhJ^lN8phNZiSoE.' );
define( 'SECURE_AUTH_KEY',  'u7(-An$zo,I^i4W+3CU!g4.fh3e{?r,~Z|lMd.l#xP_qnV.nzR(=rN{NSpx|*/,k' );
define( 'LOGGED_IN_KEY',    'edVQ!-nb/SV6OPsI G?XcAC)[*}ypN:YXT)=?jPe#n.,TAhWqBT1SUTl5oPCM/ZI' );
define( 'NONCE_KEY',        'Oo9M!0h.}E<k/oEW]l6Sd]S_&B{_RT+1!P-|Wss}v5Q)V 4Yxz0o/Mn|A:]h*cR&' );
define( 'AUTH_SALT',        'T!v`(vMMc{57n`GdHNN1UE&BE?v%bVCwSe}/NoutW(?yARx)#~>ct,tv2hR&Qw@w' );
define( 'SECURE_AUTH_SALT', 'y0kvb~jKW,[#$oQ&WJeL_:4G*.^B)_gs%1j<]BVyovpu?8x{VYI<1(Wq(|la@6 f' );
define( 'LOGGED_IN_SALT',   ' B1JvbNgwJw> Aeeb`sa+w{3j,DId@Gmon}D{LFl(.wN$daS!yW]1W7%]h:AJtOd' );
define( 'NONCE_SALT',       '8d7hZ4^:,s>[5 DG3h0q0OA,=,[TdcGU&>V.5>yyxu17,%G6c>Db#j_D6KWR|Ov9' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
