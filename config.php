<?php
/**
 * BcLpEventTheme : baserCMS 5 イベント・セミナー LP テーマ
 */

return [
    'type' => 'Theme',
    'title' => __d('baser_core', 'イベント・セミナー LP テーマ'),
    'description' => __d('baser_core', 'イベント・セミナーの告知と申し込みのための、1ページのランディングページ（LP）テーマです。
開催概要・プログラム・登壇者・アクセス・よくある質問・申し込みフォームまでを、BurgerEditor のブロック操作と管理画面の設定だけで編集できます。
色はテーマ設定の4色で変えられます。BurgerEditor（BcBurgerEditor）が必要です。'),
    'author' => 'kaburk',
    'url' => 'https://blog.kaburk.com/',
    'installMessage' => __d('baser_core', 'このテーマは BurgerEditor（BcBurgerEditor）を使います。プラグイン管理で BcBurgerEditor を有効にしてから、初期データ「default」を読み込んでください。初期データを読み込むと、ユーザー以外のデータ（サイト基本設定の Google Maps API キーやメール設定を含む）は初期化されます。会場の地図（GoogleMaps ブロック）を使うには、読み込み後にサイト基本設定で Google Maps API キーを登録してください（キーのプロジェクトで Maps JavaScript API・Geocoding API・Maps Static API を有効にする必要があります）。'),
];
