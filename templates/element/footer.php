<?php
/**
 * BcLpEventTheme : baserCMS 5 イベント・セミナー LP テーマ
 *
 * フッター
 *
 * - 主催者名・問い合わせ先：ウィジェットエリア（テキストウィジェット）で編集する
 * - コピーライト：サイト名と年から自動で出す
 *
 * @var \BaserCore\View\BcFrontAppView $this
 */
?>
<footer class="lpe-footer">
	<div class="lpe-wrap">
		<div class="lpe-footer__inner">
			<?php $this->BcBaser->widgetArea() ?>
		</div>
		<small class="lpe-footer__copy">&copy; <?= date('Y') ?> <?= h($this->LpEvent->getSiteLabel()) ?></small>
	</div>
</footer>
