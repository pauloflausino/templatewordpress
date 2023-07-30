<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'customize_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i5;x*2;1=6bqMXX15Yw.zcnvVF,4go#?K3#a|BGhz=df&Z@o<(rEnt8GxR>ZNbOx' );
define( 'SECURE_AUTH_KEY',  '1k=,s{=J~m:=KvN!)`s+CBgx_ve*E0;;W%s9g5H5)HEq?Op~2<{Xh#<:vFYJ1J7b' );
define( 'LOGGED_IN_KEY',    '!@oF,?q|5Rk$oCB0ur[RV[Y[E=FjY1)v)pF}t%6Mc-.eW18H^<1#,D$7W=/t64/5' );
define( 'NONCE_KEY',        ':z.Mtwrf:p|mQ<qlYMb1u*c>Tz*zk;NA.4tN:<E|0;q9e{6~mR@=kk81im/U<ThH' );
define( 'AUTH_SALT',        'pXw!ysg*w#?;&;8w5EV)jCfm>`j5WlCGcL)<DXJC]9F]^4!=F? NdM/~:k/d,y(h' );
define( 'SECURE_AUTH_SALT', '6n$R6RP{%Q?V6bj|N&c^oa<(^OqG*k,J=* /sBsZbPsNb7/WWr7YWtIh8_e{LRk3' );
define( 'LOGGED_IN_SALT',   'eigbSI+y$;9Xxn`xz|L/O]^l4LdU9R@@u:S|vEz1JD20bZF#Q@7Y}o8Aw6l%[;Kj' );
define( 'NONCE_SALT',       'g8<]O89s6L3ihGEtT;Pm?mUEd8!api`iQc*u7%Ks_Kf dC?`8|;FIR,`q3[I^Dh.' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
