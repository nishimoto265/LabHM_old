<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>椎原研究 - 情報処理システム研究室</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container main-research-overview">
        <!-- ページタイトルを追加 -->
        <h1 class="page-title">3Dカメラによる歩行中の牛の個体識別</h1>

        <!-- 実験背景・目的 -->
        <div class="section">
            <img src="./assets/images/research-siihara1.png" alt="実験背景・目的の画像">
            <div class="details">
                <h2>実験背景・目的</h2>
                <p>
                    牛の個体識別によって個体の成長、健康管理、行動パターンなどを個別に追跡・管理できます。また、異常な行動や衆生の早期検出が可能となります。ただ、通常のカメラでは毛色や模様が一様な牛の識別が困難です。そこで、距離情報を取得できる3Dカメラを用いることで、牛の個体識別を行うことを目的としています。
                </p>
            </div>
        </div>

        <!-- 実験環境 -->
        <div class="section">
            <img src="./assets/images/research-siihara2.png" alt="実験環境の画像">
            <div class="details">
                <h2>実験環境</h2>
                <p>
                    農工連携のもと、宮崎大学住吉フィールドから収集したデータを使用して実験を行いました。通路を通る牛を上方から撮影した画像を使用しています。
                </p>
            </div>
        </div>

        <div class="section">
            <img src="./assets/images/research-siihara3.png" alt="実験結果の画像">
            <div class="details">
                <h2>提案手法</h2>
                <p>
                    距離情報が入ったCSVファイルから牛領域の検出を行います。得た牛領域から特徴量を抽出し、機械学習を用いて個体識別を行います。
                </p>
            </div>
        </div>

        <!-- 実験結果 -->
        <div class="section">
            <img src="./assets/images/research-siihara4.png" alt="実験結果の画像">
            <div class="details">
                <h2>実験結果</h2>
                <p>
                    4つの機械学習を用いた個体識別の精度を比較しました。分類器Dでは正答率が95%となり、高い精度で個体識別が可能であることが確認されました。
                </p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
