<?php
/**
 * BcLpEventTheme : baserCMS 5 イベント・セミナー LP テーマ
 *
 * メールフォーム：入力
 *
 * - 見出し：メールフォームのタイトル
 * - リード文：メールフォーム設定の「説明文」
 * - 項目：メールフィールド（管理画面で追加・並べ替えできる）
 *
 * @var \BcMail\View\MailFrontAppView $this
 */
?>
<section class="lpe-fsec">
	<div class="lpe-wrap lpe-wrap--narrow">
		<?php $this->BcBaser->element('lpe_steps', ['current' => 1]) ?>
		<div class="lpe-fcard">
			<h1 class="lpe-fcard__title"><?php $this->BcBaser->contentsTitle() ?></h1>
			<div class="lpe-fcard__lead"><?php $this->Mail->description() ?></div>
			<?php $this->BcBaser->flash() ?>
			<div class="lpe-form">
				<?php $this->BcBaser->element('mail_form') ?>
			</div>
		</div>
	</div>
</section>
