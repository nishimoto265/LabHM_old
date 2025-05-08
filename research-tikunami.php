<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>筑波研究 - 情報処理システム研究室</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1 class="page-title">歩行中の乳牛に対するBCS評価の自動化</h1>
        <div class="content">
            <!-- 画像をページの一番上に配置 -->
            <img src="./assets/images/research-tikunami1.png" alt="本試験の構成図">

            <h2 class="section-title">研究背景・目的</h2>
            <p>
                年々乳用牛の飼養戸数が減少している反面、一戸当たりの飼養頭数は増加しています。農場業務の自動化が普及していないものの一つにBody Condition Score(BCS)の評価があります。目視と触診による評価方法が用いられており、これを管理することは畜産農家の方に大きな負担となります。動化技術が普及していない領域の技術開発を行うことで、労働負担の軽減や経営の効率化を後押しすることを目的としています。
            </p>

            <h2 class="section-title">価値と効果</h2>
            <p>
                BCSは給餌量や泌乳量など飼料効率と密接に関係しています。また牛が極端な体型で過ごすことは多くのリスクがあります。BCS評価の自動化技術を開発することで農家の方に大きな負担を強いることなく、牛群の健康管理や効率的な農場経営を支援します。
            </p>
            <h2 class="section-title">研究手法</h2>
            <p>
                乳牛の歩行データから前処理として牛領域の抽出を行います。その後、特徴量を抽出し、推定モデルを用いてBCSを評価します。
            </p>

        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
