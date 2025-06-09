// main.js

document.addEventListener('DOMContentLoaded', function() {

    // ニュース項目を読み込んで表示する関数
    function loadNews() {
        fetch('announcements-content.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('news-list').innerHTML = data;
            })
            .catch(error => {
                console.error('ニュースの読み込みに失敗しました:', error);
                document.getElementById('news-list').innerHTML = '<p>ニュースの読み込みに失敗しました。</p>';
            });
    }

    // ニュースを読み込む
    loadNews();
});
