<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'diagnostics');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'diagnostics_user');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'diagnostics_password');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c$p>,t50zu,tVn?^E:kkuY sRnA`sig30`</`BmZgQ(c=I7~wP:>^3x}jVY|XzBD');
define('SECURE_AUTH_KEY',  'VIK-5F-0U.Vi()^`GdRXnn2|F0uP@kf|.;h4aiF;WO5j|CJMMF-|6tcslm.-xcb5');
define('LOGGED_IN_KEY',    '-B vkb9xo1k[kX>Gu, ZOZ|unG3`oUFl+}*b.j8v|Eyl8v#XRK,xtrwal,Ik[gx@');
define('NONCE_KEY',        'hh+ab5B8<rnY<Wr8>>jyVt_og/_@2j-+mU~Ox s?5RU cQh,|k&xoV?aYxYBqy)U');
define('AUTH_SALT',        '8Om^F7}+?i#-B:Kme|f>2Q@I-O3S+eac}/UvB5454GFqU-s2#;KzY`/=u+2E}esE');
define('SECURE_AUTH_SALT', '^Iz]yvBZbC7))%5k>1m->sOw#S ~G7@8Kdvk3P#n.{~Jn1:t%f9IK:S4r+hw*AnP');
define('LOGGED_IN_SALT',   '?-Ax<VKDTj=z<de%IH]f|Aqx@8vXmmiKY]|L98gJwk,4mJ~vMLao{S{60fzf0!Iy');
define('NONCE_SALT',       '~PWE:|Z#rMDi-+n4.0ezJFdx$.?$sas v!svthg6_VJ;]@#,%)&ta?@6#[d8GH}|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'diag';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', true);

define('FS_METHOD', 'direct');

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');