<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-ojt' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.oRcDz(O~mR< 3NDO^Tm*F+{K1t7t<fK9uIF_?`;~rMercY4qdTGFg*[X.UXr$c2' );
define( 'SECURE_AUTH_KEY',  '|xP}l?U/HpB3x_U}_PCY:<{a.}+Q[H#45r;_mhs6W<K0ZF(lW*^m2?0WlTiwLTaH' );
define( 'LOGGED_IN_KEY',    'D5U5z s fL5Y1s2t4LL)8.>2<`g]wpjUqI$r$mh)(Kw[tgfojso<pQdWc_->f=Jm' );
define( 'NONCE_KEY',        ']!e5vZ<(;Y/N[wwOrkD%k*oP &Y&hxk:p5_9SP1vWh~B,k@?nj)UtfRSw+w[]@B^' );
define( 'AUTH_SALT',        'n> uT/[|@.*ZO- ydo_$(2,<N wMF(1Gj2r9Os;bjO8f9bK:GbqsQ/#A-yS.?[S@' );
define( 'SECURE_AUTH_SALT', 'kF+l.^m?h75a0=]Bgc8<K0M30RJgp: d/`pkL86lm>yrK<B&!D=}]wi-(DoY2@nU' );
define( 'LOGGED_IN_SALT',   ':UiS+#G//{B2k^VbIw^&ryfe)axw7ZN|>0zc XF_&2Ddt]U*H1psn)r^>>_4XG[l' );
define( 'NONCE_SALT',       ']9N(f>C96%ggKel2MZe[Og!@45A8&h>jEz#FnL00JvtW_2@RhO=34`DQL3Pa1n7)' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
