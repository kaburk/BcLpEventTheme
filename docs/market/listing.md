# BcLpEventTheme baserマーケット出品 入力値

フォームの欄の順に並べています。

## 基本情報

| 欄 | 入力値 |
|---|---|
| 公開ステータス | 非公開（承認後に公開） |
| テーマ・プラグイン名（商品名） | BcLpEventTheme |
| 種類 | 無料テーマ ／ レスポンシブデザイン |
| 販売価格（税抜） | 0 |
| カテゴリ | プロモーション、シンプル、baserCMS5対応 |
| バージョン | 1.0.0 |
| ファイル名 | BcLpEventTheme.zip |
| ファイルアップロード | `BcLpEventTheme.zip`（GitHub Release の zip と同じもの） |
| 対応バージョン | 5系：5.4.1、5.4.0 |
| 対応バージョン 備考 | baserCMS 5.4以上。BurgerEditor（BcBurgerEditor）プラグインが必要です。 |
| ライセンス | URLで指定する ／ 名称：MIT License ／ URL：https://github.com/kaburk/BcLpEventTheme/blob/main/LICENSE |
| 提供者 | 名称：kaburk ／ URL：https://blog.kaburk.com/ |
| Webサイト | 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpEventTheme |
| デモサイト | 空欄 |
| サポートページ | 公式サイト以外 ／ 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpEventTheme/issues |

## 説明概要（一覧画面・200文字以内：186文字）

```
baserCMS 5.4以上向けの、イベント・セミナーの告知と申し込みのための1ページ LP テーマです。開催概要・プログラム・登壇者・会場アクセス・よくある質問・申し込みフォームまでを、BurgerEditor のブロック操作と管理画面の設定だけで編集できます。配色はテーマ設定の4色で変更でき、見本サイト一式の初期データ付きです。BurgerEditor が必要です。
```

メイン画像：`main.png`（500×500）

---

## 説明情報1

**説明見出し1**：このテーマについて

**説明詳細1**（エディタの「ソース」に貼る）

```html
<p>BcLpEventTheme は、イベント・セミナーの告知と申し込みのための、1ページのランディングページ（LP）テーマです。</p>
<p>トップの固定ページ1枚に、セクションを BurgerEditor のブロックで並べる構成です。セクションの追加・削除・並べ替えは、ブロック操作だけでできます。</p>
<ul>
<li>ヒーロー／開催概要／こんな方におすすめ／プログラム／登壇者／会場アクセス（地図）／よくある質問／申し込み（CTA）</li>
<li>大見出しブロックの「ID設定」に英字（例 program）を入れると、ヘッダーのナビに自動で載ります</li>
<li>申し込みフォームは入力 → 確認 → 完了の3画面。項目はメールフィールドで追加・並べ替えできます</li>
<li>テーマ設定の4色（メイン／サブ／リンク／ホバー）で全体の配色が変わります。ロゴもテーマ設定で変更できます</li>
<li>初期データ：見本サイト一式（default）と最小構成（empty）</li>
<li>レスポンシブ（PC／スマホ）、prefers-reduced-motion 対応</li>
</ul>
```

**説明画像1**：`pc-1-hero.png`（PC：ヒーロー・開催概要）

---

## 説明情報2

**説明見出し2**：動作環境とインストール

**説明詳細2**

```html
<h4>動作環境</h4>
<ul>
<li>baserCMS 5.4以上</li>
<li>BurgerEditor（BcBurgerEditor）プラグインが有効であること</li>
</ul>
<h4>インストール</h4>
<ol>
<li>ダウンロードした zip を解凍し、フォルダ名が「BcLpEventTheme」であることを確認して plugins フォルダに配置します（管理画面からのアップロードも可能です）</li>
<li>管理画面 &gt; プラグイン管理 で BcBurgerEditor が有効になっていることを確認します</li>
<li>管理画面 &gt; テーマ管理 で BcLpEventTheme を適用します</li>
<li>同じ画面で初期データ「default」（見本サイト）または「empty」（最小構成）を読み込みます</li>
</ol>
<p><strong>初期データを読み込むと、ユーザー以外のデータ（固定ページ・メールフォーム・サイト基本設定など）は初期化されます。運用中のサイトでは読み込まないでください。</strong></p>
```

**説明画像2**：`sp.png`（スマホ：ファーストビュー・プログラム・申し込み）

---

## 説明情報3

**説明見出し3**：編集のしかた

**説明詳細3**

```html
<h4>編集できる場所</h4>
<table>
<tr><th>内容</th><th>編集する場所</th></tr>
<tr><td>本文（全セクション）</td><td>固定ページ「トップページ」の BurgerEditor</td></tr>
<tr><td>ロゴ・配色</td><td>テーマ設定</td></tr>
<tr><td>ヘッダーのナビ</td><td>本文の大見出しブロックの「ID設定」（自動で作られる）</td></tr>
<tr><td>「申し込む」ボタンのリンク先</td><td>自動（公開中の最初のメールフォーム）</td></tr>
<tr><td>フォームの説明文・完了メッセージ・項目</td><td>メールフォームの設定・メールフィールド</td></tr>
<tr><td>フッター（主催者・問い合わせ先）</td><td>ウィジェットエリア「フッター」のテキストウィジェット</td></tr>
</table>
<h4>本文ブロックの独自class</h4>
<p>ブロック設定の「独自class設定」に入れると、決まった見た目になります。</p>
<table>
<tr><th>独自class</th><th>使うブロック</th><th>見た目</th></tr>
<tr><td>lpe-blk--hero</td><td>画像右寄せ（テキスト回り込み無し）</td><td>ヒーロー（画像が空なら図形の飾り）</td></tr>
<tr><td>lpe-blk--section</td><td>大見出し</td><td>セクション見出し（ID設定でナビと英字ラベル）</td></tr>
<tr><td>lpe-blk--nonav</td><td>大見出し（lpe-blk--section と併用）</td><td>ナビに載せない</td></tr>
<tr><td>lpe-blk--overview</td><td>2カラムテーブル</td><td>開催概要のタイル</td></tr>
<tr><td>lpe-blk--checklist</td><td>1カラムテキスト</td><td>箇条書きをカードに</td></tr>
<tr><td>lpe-blk--program</td><td>2カラムテーブル</td><td>タイムテーブル</td></tr>
<tr><td>lpe-blk--speakers</td><td>画像3列＋テキスト</td><td>登壇者カード</td></tr>
<tr><td>lpe-blk--map</td><td>GoogleMaps</td><td>会場の地図（直後に lpe-blk--info を置くと PC で2列）</td></tr>
<tr><td>lpe-blk--info</td><td>1カラムテキスト</td><td>住所・最寄り駅のカード</td></tr>
<tr><td>lpe-blk--note</td><td>1カラムテキスト</td><td>濃い色のお知らせカード</td></tr>
<tr><td>lpe-blk--faq</td><td>1カラムテキスト</td><td>よくある質問（開閉式）</td></tr>
<tr><td>lpe-blk--cta</td><td>1カラムテキスト</td><td>申し込みの CTA</td></tr>
</table>
<p>ブロック設定の「背景色」は、テーマ色に置き換えています（ブルー＝メインの薄い色／グレー＝サブの薄い色／ピンク＝サブの濃い色）。</p>
<h4>開催日を変えるとき</h4>
<p>日付は、ヒーロー・開催概要・申し込み（CTA）の締め切り・メールフォームの説明文に書かれているので、それぞれ直してください。</p>
```

**説明画像3**：`pc-2-program.png`（PC：こんな方におすすめ・プログラム）

---

## 説明情報4

**説明見出し4**：会場の地図と制限事項

**説明詳細4**

```html
<h4>会場の地図（GoogleMaps ブロック）</h4>
<ul>
<li>管理画面 &gt; システム設定 &gt; サイト基本設定 で Google Maps API キーを登録してください</li>
<li>キーの Google Cloud プロジェクトで、Maps JavaScript API・Geocoding API・Maps Static API を有効にし、課金を設定してください</li>
<li>公開するサイトで使うキーには、HTTP リファラーの制限を設定してください</li>
</ul>
<h4>制限事項</h4>
<ul>
<li>本文の日付などは各ブロックに直接書くため、変更時は複数の場所を直す必要があります</li>
<li>申し込みの締め切り後に CTA を自動で隠す機能はありません。締め切り後は CTA ブロックを非公開にしてください</li>
<li>本文の見本画像は /bc_lp_event_theme/img/sample/ を参照しています。サブディレクトリに設置した場合は差し替えてください</li>
</ul>
```

**説明画像4**：`pc-3-access.png`（PC：登壇者・会場アクセス）

---

## 説明情報5

**説明見出し5**：ソースコード・ライセンス

**説明詳細5**

```html
<p>ソースコードは GitHub で公開しています。不具合の報告・要望は Issues にお願いします。</p>
<p><a href="https://github.com/kaburk/BcLpEventTheme" target="_blank">https://github.com/kaburk/BcLpEventTheme</a></p>
<p>テーマ本体は MIT License です。同梱物・外部リソースのライセンスは次のとおりです。</p>
<ul>
<li>jQuery 3.7.1（同梱）：MIT License</li>
<li>Google Fonts（Zen Maru Gothic・M PLUS Rounded 1c、CDN から読み込み）：SIL Open Font License 1.1</li>
<li>アイコン：Lucide のアイコンをもとにしています（ISC License）</li>
<li>見本画像：このテーマの一部（MIT License）</li>
</ul>
<p>ご利用は自己責任でお願いします。</p>
```

**説明画像5**：`form.png`（PC：申し込みフォームの入力画面）

予備：`pc-4-faq.png`（PC：よくある質問・申し込み・フッター）。差し替えたいときに使う。

---

## リリース

| 欄 | 入力値 |
|---|---|
| リリース種別 | 新規公開申請 |
| リリースノート | 新規リリース |

---

## zip の確認結果（Release 1.0.0 の BcLpEventTheme.zip）

- 最上位フォルダ名は `BcLpEventTheme`（解凍してそのまま plugins に置ける）
- `config.php`・`VERSION.txt`（1.0.0）・`screenshot.png`・初期データ（default／empty）・`LICENSE`・`README.md` を含む
- `.github`・`.DS_Store`・作業用ファイルは含まない（`.gitignore` のみ含むが動作に影響なし）
