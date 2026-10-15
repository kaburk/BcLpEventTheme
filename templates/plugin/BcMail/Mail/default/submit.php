<?php
/**
 * BcLpEventTheme : baserCMS 5 イベント・セミナー LP テーマ
 *
 * メールフォーム：完了
 *
 * 完了メッセージは、メールフォーム設定の「送信完了メッセージ」で編集する
 *
 * @var \BcMail\View\MailFrontAppView $this
 * @var \BcMail\Model\Entity\MailContent $mailContent
 */
use Cake\Core\Configure;

if (Configure::read('debug') == 0 && $mailContent->redirect_url) {
	$this->BcBaser->meta(['http-equiv' => 'Refresh'], null, ['content' => '5;url=' . $mailContent->redirect_url, 'block' => true]);
}
?>
<section class="lpe-fsec">
	<div class="lpe-wrap lpe-wrap--narrow">
		<?php $this->BcBaser->element('lpe_steps', ['current' => 3]) ?>
		<div class="lpe-fcard lpe-done">
			<span class="lpe-done__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m8 12 3 3 5-6"/></svg></span>
			<h1 class="lpe-fcard__title">お申し込みを受け付けました</h1>
			<div class="lpe-done__message">
				<?php if ($this->BcBaser->mailFormThanksExists()): ?>
					<?php $this->BcBaser->mailFormThanks() ?>
				<?php else: ?>
					<p>お申し込みありがとうございました。ご登録のメールアドレスに、受付完了のメールをお送りしました。</p>
				<?php endif ?>
			</div>
			<div class="lpe-done__actions">
				<a class="lpe-btn lpe-btn--lg lpe-btn--ghost" href="<?= h($this->BcBaser->getUrl('/')) ?>">イベントページに戻る</a>
			</div>
		</div>
	</div>
</section>
