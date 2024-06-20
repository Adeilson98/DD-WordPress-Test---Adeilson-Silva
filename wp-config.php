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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'j)$;^u:vs{tX5&1|T(l+rl6XgS|f4[Qj /#E]TN#k2ug`Kp~(5P*}Cg@kv]vU$*~' );
define( 'SECURE_AUTH_KEY',  'Mz-W.~-ggnV{l7gJ$#tyQiz4 qi0?@i3Mjv/RrBE@Y;{CG&O:BF$]3NM_VQ.gHJT' );
define( 'LOGGED_IN_KEY',    'ix1 i,qUoB(9_]Esd|#xVZv)OxViIFA IgbUErx5V+t*^UhgLi%!Axf)*U[^Mbrq' );
define( 'NONCE_KEY',        'RYtUp?Cf.;pntIS7|kg=oS_K*8kEpw2rv;L)3IRJer[>=(^O;Ix!XTmw>x-Z&jNn' );
define( 'AUTH_SALT',        '[qL:|#FLL3axsmn@8=Z}dR6KRvbZSV85g9w#B^*4WuGmM^5}WEGr>dF0)&0FvWeP' );
define( 'SECURE_AUTH_SALT', ']IdXnDiITmv1N=ZaUGK_>oBjfP,fF^Ze4=O/.2.p9Oa<|x8S>e6oZ@7:Ks{TLY#S' );
define( 'LOGGED_IN_SALT',   'c{7xdWFj;g@9gP@@nkiJXg)VYaliP=I&fir*{v$lz`7{[*[uEb(%g+5,T11/@$XJ' );
define( 'NONCE_SALT',       'eqLR5t )(nBM45z2ysPS4SsUFfoT.,Xw!6hcK&0P?Fty8=*i#L{apc|=,[fW$wCt' );

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
