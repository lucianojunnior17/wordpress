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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'curso_wp' );

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
define( 'AUTH_KEY',         'bK[2Gx2G/T4W6j!: _SqCRW[^_RD%tx/_LME!`AT~<g$|uXasOPpf`rq.UU.w1H%' );
define( 'SECURE_AUTH_KEY',  'gqApj]H3-Ug!u>^}g/OD5T]Nxqg,~geh_J2V{/*;`%)NIl):Vb*m.+ SzPC#wRvi' );
define( 'LOGGED_IN_KEY',    'R!S5Jh=RhfSVIoq_#q%q@:7gZ)G^$?.NG]bHYX/rQ9]e4!7BF2(Gu]bF^dD7/KOx' );
define( 'NONCE_KEY',        'C>E*flx(wz9RZh0PANhArB&iK{ME/}ydus}.ES;wW ]BcLQm7K<!Nesr5IpG]+0H' );
define( 'AUTH_SALT',        ')gzV?X`5TWlweGi}C,FR`LYn?g],DtLXuao/fkAMQy8zPb!ZLnM??[+Q_@LxwYt=' );
define( 'SECURE_AUTH_SALT', 'ItNhoV6(5F66ELPvvhqE-B+.PKEOIP4qb#&[_9-9&6SS>jm4L&M=HS%HmX[m#ay7' );
define( 'LOGGED_IN_SALT',   'jM^c`8F7b8PkxG@,e4w4Qx_?3+SG-(|WTDiry08DUPMd<8LFxz9TnA]?H,00x]P<' );
define( 'NONCE_SALT',       'TO=L5GkI6wcTSwK+vqPYTnWk8Cg&{o^&W2Z/x4JWq~Of+<thJ+dC8jl,HT |z08i' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
