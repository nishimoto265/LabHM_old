<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>清水研究 - 情報処理システム研究室</title>
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="container main-research-overview">
        <!-- ページタイトルを追加 -->
        <h1 class="page-title">耳標番号による牛の個体識別</h1>

        <!-- 実験背景・目的 -->
        <div class="section">
            <img src="./assets/images/research-simizu1.png" alt="実験背景・目的の画像">
            <div class="details">
                <h2>実験背景・目的</h2>
                <p>
                    画像処理を用いた牛の健康管理には分娩予測、跛行検知、摂食行動の監視やBCS測定などがあります。これらには同一個体の識別が必要となります。そのため、本研究では牛の耳標番号による個体識別を目的としてします。
                </p>
            </div>
        </div>

        <!-- 実験環境 -->
        <div class="section">
            <img src="./assets/images/research-simizu2.png" alt="実験環境の画像">
            <div class="details">
                <h2>実験環境</h2>
                <p>
                    農工連携のもと、宮崎大学住吉フィールドから収集したデータを使用して実験を行いました。2つのカメラを用いて搾乳時の画像を収集しました。
                </p>
            </div>
        </div>

        <div class="section">
            <img src="./assets/images/research-simizu3.png" alt="実験結果の画像">
            <div class="details">
                <h2>提案手法</h2>
                <p>
                    取得したデータから画像処理や機械学習を用いて耳標番号を取得し、個体識別を行います。
                </p>
            </div>
        </div>

        <!-- 実験結果 -->
        <div class="section">
            <img src="./assets/images/research-simizu4.png" alt="実験結果の画像">
            <div class="details">
                <h2>実験結果</h2>
                <p>
                    画像から耳標番号を取得し、個体識別を行うことができました。
                </p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
