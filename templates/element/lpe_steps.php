<?php
/**
 * BcLpEventTheme : baserCMS 5 イベント・セミナー LP テーマ
 *
 * 申し込みの手順（1入力 → 2確認 → 3完了）
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var int $current 現在の手順（1〜3）
 */
$steps = [1 => '入力', 2 => '確認', 3 => '完了'];
?>
<ol class="lpe-steps" aria-label="申し込みの手順">
	<?php foreach ($steps as $no => $label): ?>
		<li<?= ($no === $current)? ' class="is-current" aria-current="step"' : '' ?>><span class="lpe-steps__n"><?= $no ?></span><?= h($label) ?></li>
	<?php endforeach ?>
</ol>
