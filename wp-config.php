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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'curso2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');
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
define('AUTH_KEY',         'Ff;>S!q|B0=lU0!#/85m>L|o*f>5h<UDwRmElngsR>AWn;2};9@1hOYTbLuKO`|z');
define('SECURE_AUTH_KEY',  '{<WGy)`qi`c`JX>}o,X?4)tsrNMtPpXo`|Rx%=o6`.g)f#Wdo9Aqh~f#)C~)cswK');
define('LOGGED_IN_KEY',    'c,K#zhJLH<l8|5Kl1-[S/0Bz50>iklT2E?qZTf4@!c=wY4KEhfB^|w,8/d1&ZFJ}');
define('NONCE_KEY',        'd{s@n|*A!l/QkpElr2K_Tiq950<)/.gR!DICs9nh+:]yt34m|V|N8G*Z&]qj=3ix');
define('AUTH_SALT',        '*51bk]4aUg;5yw#<BkazuoOAi%RI;{|;josV.B@Z*+!.nnbvj!kMfs+&nzR:~H-6');
define('SECURE_AUTH_SALT', '5ot[4M(D s*bWxzoli,^i|F2s8/%{D#k7[bqw+T]ZR0_!=GvoVn5xabBQE_`]teH');
define('LOGGED_IN_SALT',   'E 8H=B=[}U0!3jG!Dowai(t[`]enQ!/U/`rpD}=YM=cEFtvY`LUDs=H8i]7T&^^&');
define('NONCE_SALT',       'Nf(E?I?QiI<k_Exn;.$+?gj<I82gll.I^@,yy1~p+Jjbr]Rc3nD]OF#hXeeuDD/0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
