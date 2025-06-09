<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>News - 情報処理システム研究室</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <!-- ページタイトルを追加 -->
        <h1 class="page-title">News</h1>

        <ul class="news-list" id="news-list">
            <!-- ニュース項目がここに挿入されます -->
        </ul>
    </div>

    <?php include 'footer.php'; ?>

    <!-- 外部JavaScriptファイルのリンク -->
    <script src="assets/js/load_news.js"></script>
</body>
</html>
