<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>西山研究 - 情報処理システム研究室</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container main-research-overview">
        <!-- ページタイトルを追加 -->
        <h1 class="page-title">子牛の行動解析による健康管理</h1>

        <!-- 実験背景・目的 -->
        <div class="section">
            <img src="./assets/images/research-nishiyama1.png" alt="実験背景・目的の画像">
            <div class="details">
                <h2>実験背景・目的</h2>
                <p>
                    畜産業界の課題として、子牛は免疫が未熟で病気になりやすく、子牛の健康状態を常に把握することは重要です。また、畜産農家の経営の大規模化が進んでおり、従業員の負担が増加しています。これらの課題を解決するため、カメラを用いた非接触の子牛の行動解析を行うシステムの構築を目指しています。
                </p>
            </div>
        </div>

        <!-- 実験環境 -->
        <div class="section">
            <img src="./assets/images/research-nishiyama2.png" alt="実験環境の画像">
            <div class="details">
                <h2>実験環境</h2>
                <p>
                    農工連携のもと、宮崎大学住吉フィールドから収集したデータを使用して実験を行いました。子牛が1頭ずつ分かれて飼育されています。
                </p>
            </div>
        </div>

        <!-- 実験結果 -->
        <div class="section">
            <img src="./assets/images/research-nishiyama3.png" alt="実験結果の画像">
            <div class="details">
                <h2>実験結果</h2>
                <p>
                    機械学習や画像処理を用いることで、起立か座っているかの判定が高い精度で行えました。
                </p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
