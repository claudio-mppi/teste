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
define( 'DB_NAME', 'testebd' );

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
define( 'AUTH_KEY',         '2;A(N7_^H|LC8bb%}A>i t|qE^$Ly^t#F?BN9ML2ZXqh6Mn]WNZP*&:?K]TuPfT3' );
define( 'SECURE_AUTH_KEY',  'zO][ImxY`nE|I,F[uGmtN7B0Y.|T!n1DUk:XD`^$)07Jgvp19RmbKlYgI(:FN^~H' );
define( 'LOGGED_IN_KEY',    'kz<[.H.Q;sSiv2(+iB-|V*[TzosVu@DY-y^n(Us-poJ+G;<W-L=Ma9RgJR)H 4EE' );
define( 'NONCE_KEY',        'w%g_k:jIu9(UoJKDp]9]L&~LS3[lJuy OKh~+NDG)BB-B6&fFbr%Nlo,06pu>pA&' );
define( 'AUTH_SALT',        'Zq;:,>:sEV$K3e}`{s}|P#Awa$ta}Aq1G5}/18oc(=MB{F3JPC%f4pPABCjIfR# ' );
define( 'SECURE_AUTH_SALT', '9JIvfV7&~s{sKfcFOqtMB8MzsOGN,?Og&eV-n0G6c[.A*3eEZHI$wkp1ao1;>%t ' );
define( 'LOGGED_IN_SALT',   '(nm5@Rif~Y9juq.g_XWMbZRN+R72.jg&D/vVK UUo%DQ0$,;* -qw>!{g 8;Zw]E' );
define( 'NONCE_SALT',       'q[Mkb]Um]CPWoE9zDAQ,w$,Vym}]2`bJ0(ZsN@&XeI1`UDVSBYEZQgCF>`J:B8xY' );

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
