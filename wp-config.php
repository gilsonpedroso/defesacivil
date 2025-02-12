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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sitedc' );

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
define( 'AUTH_KEY',         ')MX3USyL{[~|INKOKkl&^A.h&jxi*H4#h:7E/V!@Y->SAwB%k)fn[:;DbR0OH $-' );
define( 'SECURE_AUTH_KEY',  'fIw:I;[RWEir%,rVCs4FR(:277sBu[*P-!a<oAWB;)q{/ftR3^6#a+}}r$Kdxfh^' );
define( 'LOGGED_IN_KEY',    '~gux0)!oI:^gwgoL~]`Fs}]VAn;]g+S(-8yLx_NpVGT6[H1W_ .A2QYGqU<jjSX:' );
define( 'NONCE_KEY',        'uWN*>l~<h9a6*4r3c6oXvi@sz%@PvZ8&u,tVjl#}>$|[)k4e=1fvCk#^)^PU0j.~' );
define( 'AUTH_SALT',        'ScPxG`KG4J,;@>YNK:v6Jj[~uA`,BiH2! 0Q5_G6~gGM&kDWeTqt],Gc:;P}[Yky' );
define( 'SECURE_AUTH_SALT', 'bgP&de3;2p@o$hZ^rFD+bvIHA7VW%aU]EBRN$5-)x`%tY$a$f-0mk}[qT0q!P!zE' );
define( 'LOGGED_IN_SALT',   'zAsQC)oep1)^zXr!U)2-;L9LoDsFmY6(2[ToyfcZ0!o5Yf?@srKa^,6.w^6yCs. ' );
define( 'NONCE_SALT',       ' ?4d58y/ud>zAc$[E1BE%!#Q2XO#iykw68MUx17Yc;mqT6_*[MF62^={2[FQ+jAY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
