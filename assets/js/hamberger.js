// assets/js/main.js

document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.querySelector('nav ul');

    // ハンバーガーメニューのクリックイベント
    hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        navMenu.classList.toggle('active');

        // ARIA属性の更新
        const isExpanded = this.classList.contains('active');
        this.setAttribute('aria-expanded', isExpanded);
    });

    // キーボード操作対応（Enterキーでメニューを開閉）
    hamburger.addEventListener('keypress', function(e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            this.click();
        }
    });
});
