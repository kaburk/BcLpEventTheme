<?php
/**
 * BcLpEventTheme : baserCMS 5 イベント・セミナー LP テーマ
 *
 * メールフォーム：確認
 *
 * @var \BcMail\View\MailFrontAppView $this
 * @var bool $freezed 確認画面かどうか（入力エラーのときは false）
 */
if ($freezed) {
	$this->Mailform->freeze();
}
?>
<section class="lpe-fsec">
	<div class="lpe-wrap lpe-wrap--narrow">
		<?php $this->BcBaser->element('lpe_steps', ['current' => $freezed? 2 : 1]) ?>
		<div class="lpe-fcard">
			<?php if ($freezed): ?>
				<h1 class="lpe-fcard__title">入力内容の確認</h1>
				<p class="lpe-fcard__lead">内容をご確認のうえ、「送信する」を押してください。</p>
			<?php else: ?>
				<h1 class="lpe-fcard__title"><?php $this->BcBaser->contentsTitle() ?></h1>
				<div class="lpe-fcard__lead"><?php $this->Mail->description() ?></div>
			<?php endif ?>
			<?php $this->BcBaser->flash() ?>
			<div class="lpe-form<?= $freezed? ' is-confirm' : '' ?>">
				<?php $this->BcBaser->element('mail_form') ?>
			</div>
		</div>
	</div>
</section>
