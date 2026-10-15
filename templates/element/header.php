<?php
/**
 * BcLpEventTheme : baserCMS 5 イベント・セミナー LP テーマ
 *
 * ヘッダー
 *
 * - ロゴ：テーマ設定のロゴ。未設定ならサイト名を文字で出す
 * - ナビ：本文で「ID設定」をしたブロックの見出しから自動で作る（LpEventHelper::getNavItems()）
 * - 申し込むボタン：公開中の最初のメールフォームへリンクする（LpEventHelper::getFormUrl()）
 * - メールフォームの画面では、ナビの代わりに「戻る」リンクを出す
 *
 * @var \BaserCore\View\BcFrontAppView $this
 */
$isMailPage = ($this->getRequest()->getParam('plugin') === 'BcMail');
$page = $this->get('page');
$navItems = (!$isMailPage && !empty($page))? $this->LpEvent->getNavItems($page->contents) : [];
$formUrl = $isMailPage? '' : $this->LpEvent->getFormUrl();
$hasMenu = ($navItems || $formUrl);

ob_start();
$this->BcBaser->logo(['link' => '']);
$logo = trim(ob_get_clean());
?>
<header class="lpe-header">
	<div class="lpe-wrap lpe-header__inner">
		<a class="lpe-header__logo" href="<?= h($this->BcBaser->getUrl('/')) ?>">
			<?php if ($logo): ?>
				<?= $logo ?>
			<?php else: ?>
				<?= h($this->LpEvent->getSiteLabel()) ?>
			<?php endif ?>
		</a>

		<?php if ($isMailPage): ?>
			<a class="lpe-back" href="<?= h($this->BcBaser->getUrl('/')) ?>">← イベントページに戻る</a>
		<?php else: ?>
			<?php if ($navItems): ?>
				<nav class="lpe-nav" aria-label="ページ内">
					<ul>
						<?php foreach ($navItems as $item): ?>
							<li><a href="#<?= h($item['id']) ?>"><?= h($item['label']) ?></a></li>
						<?php endforeach ?>
					</ul>
				</nav>
			<?php endif ?>
			<?php if ($formUrl): ?>
				<a class="lpe-btn lpe-header__cta" href="<?= h($this->BcBaser->getUrl($formUrl)) ?>">申し込む</a>
			<?php endif ?>
			<?php if ($hasMenu): ?>
				<button class="lpe-burger" type="button" data-lpe-drawer-toggle aria-expanded="false" aria-controls="lpe-drawer" aria-label="メニューを開く">
					<svg class="lpe-burger__open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
					<svg class="lpe-burger__close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
				</button>
			<?php endif ?>
		<?php endif ?>
	</div>

	<?php if (!$isMailPage && $hasMenu): ?>
		<nav class="lpe-drawer" id="lpe-drawer" aria-label="メニュー" hidden>
			<?php if ($navItems): ?>
				<ul>
					<?php foreach ($navItems as $item): ?>
						<li><a href="#<?= h($item['id']) ?>"><?= h($item['label']) ?></a></li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>
			<?php if ($formUrl): ?>
				<a class="lpe-btn" href="<?= h($this->BcBaser->getUrl($formUrl)) ?>">申し込む</a>
			<?php endif ?>
		</nav>
	<?php endif ?>
</header>
