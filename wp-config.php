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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Huw?0hy_VUNlwVhWKf*w9Fw!9O`RsIqcxi*{Fo8u?[3H;`33!Jk..}ou3Oa`YmCB' );
define( 'SECURE_AUTH_KEY',  '`c:4;}jw#~T`QRVf123*N8,}Vk~c16{dgA[@[]U>~D~>oVpt(W?$TQi$m9{1gq-b' );
define( 'LOGGED_IN_KEY',    '|~B//T*9a:aO>@FCvx8?=e,2/>pvOnQvS3_m+P#{1Pz~kIp>6z+yu2hAOU e?870' );
define( 'NONCE_KEY',        '@ 3W;=f yt:uRROK1$Tt|QW>A0UfAl T#*e6eo:qv,@q`qCH2&$j(E9%Y? Nu~;L' );
define( 'AUTH_SALT',        'mpHnm7.pl69B%dU3gftC1OoDb_zkQH.kj1*mI[W_SPb__qW7@*FMRYg/>IG#TW?1' );
define( 'SECURE_AUTH_SALT', 'l1b|9M),kfBbRD6BN+zT8R}=x5:?Y|qL*Q@ LO8BgoxE0a/jDZ7wLZ;9yl.bB^W5' );
define( 'LOGGED_IN_SALT',   '%#$FImr8a`;mRo9yaY9f|bfYVp8 oUxWSnBN.d/v=t)RJ1 %/V}cUEiMZYl!0o^9' );
define( 'NONCE_SALT',       'Jj@]I%eI%,n?bo)CvC#26;*yGpu1$M=!J;I4r.`d*^=[6?LK|mRqexuhjB2t@y,}' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
