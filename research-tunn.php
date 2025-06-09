<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>筑波研究 - 情報処理システム研究室</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1 class="page-title">情報技術とAIを用いた臍帯血ガスパラメータ活用による負担軽減型胎児モニタリング</h1>
        <div class="content">
            <!-- 画像をページの一番上に配置 -->
            <img src="./assets/images/research-tunn1.png" alt="本試験の構成図">

            <h2 class="section-title">研究背景・目的</h2>
            <p>
                胎児心拍数変動（FHRV）の解析において、データに含まれるノイズや外れ値による精度低下、リアルタイム解析の不足、さらにFHRVと臍帯血ガスパラメータとの関連性が未解明であるという技術的課題を解決する。
            </p>

            <h2 class="section-title">価値と効果</h2>
            <p>
                医療従事者が使いやすい胎児モニタリングシステムを開発し、複雑な生理データをわかりやすく提供することで、迅速かつ的確な意思決定を支援する。これにより低酸素症やアシドーシスの早期発見と適切な医療介入が可能となり、母子の予後改善に寄与する。
            </p>
            <h2 class="section-title">研究手法</h2>
            <p>
                胎児に頭皮用電極を装着し、胎児の心拍変動データを取得します。その後、心電図と各パラメータ（ph, pCO2, pO2, HCO3, BE）との関係性を鑑みたモデルを構築し、胎児の状態を推定します。
            </p>

        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
