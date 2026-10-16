/**
 * BcLpEventTheme : baserCMS5 イベント・セミナー LP テーマ
 *
 * 共通 JS（jQuery 不要）
 * - SP メニューの開閉
 * - セクション見出しの英字ラベル（ブロックの ID から生成）
 * - よくある質問の開閉
 * - メールフォームの送信モード設定（BcMail の form-submit.js の代わり）
 */
(function () {
	'use strict';

	// SP メニュー
	var burger = document.querySelector('[data-lpe-drawer-toggle]');
	var drawer = document.getElementById('lpe-drawer');
	if (burger && drawer) {
		var setMenu = function (open) {
			burger.setAttribute('aria-expanded', open ? 'true' : 'false');
			burger.setAttribute('aria-label', open ? 'メニューを閉じる' : 'メニューを開く');
			drawer.hidden = !open;
		};
		burger.addEventListener('click', function () { setMenu(drawer.hidden); });
		drawer.querySelectorAll('a').forEach(function (a) {
			a.addEventListener('click', function () { setMenu(false); });
		});
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && !drawer.hidden) { setMenu(false); burger.focus(); }
		});
	}

	// セクション見出しの英字ラベル：ID「bge-overview」→「OVERVIEW」
	document.querySelectorAll('.bge-contents > .lpe-blk--section[id^="bge-"]').forEach(function (el) {
		var label = el.id.replace(/^bge-/, '').replace(/[-_]+/g, ' ').toUpperCase();
		if (label) { el.setAttribute('data-lpe-label', label); }
	});

	// よくある質問：h3 の中にボタンを入れ、直後の回答を開閉する（最初の1問だけ開いておく）
	document.querySelectorAll('.lpe-blk--faq .bge-ckeditor').forEach(function (box, boxIndex) {
		box.querySelectorAll('h3').forEach(function (h3, i) {
			var answers = [];
			var next = h3.nextElementSibling;
			while (next && next.tagName !== 'H3') { answers.push(next); next = next.nextElementSibling; }
			if (!answers.length) { return; }
			var id = 'lpe-faq-' + boxIndex + '-' + i;
			var btn = document.createElement('button');
			btn.type = 'button';
			btn.className = 'lpe-faq__toggle';
			btn.setAttribute('aria-controls', id);
			while (h3.firstChild) { btn.appendChild(h3.firstChild); }
			h3.appendChild(btn);
			answers[0].id = id;
			var set = function (open) {
				btn.setAttribute('aria-expanded', open ? 'true' : 'false');
				h3.classList.toggle('is-collapsed', !open);
				answers.forEach(function (a) { a.hidden = !open; });
			};
			set(i === 0);
			btn.addEventListener('click', function () { set(btn.getAttribute('aria-expanded') !== 'true'); });
		});
	});

	// メールフォーム：押したボタンに応じて mode を設定（Confirm / Back / Submit）
	var mode = document.getElementById('MailMessageMode');
	if (mode) {
		document.querySelectorAll('.form-submit').forEach(function (btn) {
			btn.addEventListener('click', function () {
				btn.style.pointerEvents = 'none';
				mode.value = (btn.id || '').replace('BtnMessage', '');
			});
		});
	}
})();
