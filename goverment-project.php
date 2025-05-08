<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>総務省プロジェクト - 情報処理システム研究室</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="content">
            <!-- 画像をページの一番上に配置 -->
            <img src="./assets/images/goverment-project.png" alt="本試験の構成図">

            <h2 class="section-title">牛舎内で 5G を活用し、従業員の作業効率化を支援する実証試験を実施</h2>
            <p>
                ～5G で伝送した 4K 映像による耳標の読み取りと乳牛の見守り～
            </p>
            <p>
                株式会社国際電気通信基礎技術研究所 (ATR)、KDDI 株式会社、国立大学法人宮崎大学、北海道河東郡上士幌町、とかち村上牧場は、2019年11月16日から11月25日の間、酪農・畜産業における従業員の作業効率化を目的に、第5世代移動通信システム「5G」で伝送した牛舎内の乳牛の4K映像を用いた、耳標の読み取りによる乳牛の居場所の把握と遠隔からの乳牛の見守りを行う実証試験を実施しました。
            </p>
            <p>
                なお、本試験は総務省の令和元年度 5G 総合実証試験の一環として実施しました。
            </p>

            <h2 class="section-title">背景と目的</h2>
            <p>
                北海道内では、乳牛の飼養戸数が減少傾向にあるなか、一戸あたりの飼養頭数は年々増加傾向にあり、搾乳や給餌などの労働負荷を軽減することができ、大規模経営に適したフリーストール牛舎の導入が進んでいます。一方で、フリーストール牛舎では、牛が牛舎内を自由に歩き回れるため、個体管理が難しいという課題があります。牧場主や従業員が日々獣医検診や健康管理などを行うために、数百頭もの中から対象の牛を特定する必要があり、さらなる作業効率化が求められています。
            </p>

            <h2 class="section-title">実証試験の内容</h2>
            <p>
                本試験では、とかち村上牧場のフリーストール牛舎内で、給餌中に連動スタンチョン（牛のつなぎ止め具）により固定された乳牛の4K映像を5Gでリアルタイムに伝送し、その映像から、飼育される全ての牛に装着が義務付けられている個体識別番号を印字した耳標を読み取ることによって、乳牛の居場所を特定する実証を行いました。これにより、獣医検診などの対象となる乳牛の居場所を人手や時間をかけずに把握できることを確認しました。さらに、4K映像を通じて飼育している乳牛の状態を牛舎外の事務所から確認・見守りできることを確認しました。
            </p>

            <h2 class="section-title">役割分担</h2>
            <ul>
                <li>ATR：本試験の実施、推進</li>
                <li>KDDI：本試験の実施、および5Gエリアの設計・構築</li>
                <li>宮崎大学：耳標読み取りの実装・評価</li>
                <li>上士幌町：本試験の実施アイディア提案</li>
                <li>とかち村上牧場：実施場所の提供</li>
            </ul>

            <h2 class="section-title">参考情報</h2>
            <ul>
                <li>総務省の5G総合実証試験について：<a href="http://www.tele.soumu.go.jp/j/sys/fees/purpose/tectest/" target="_blank">http://www.tele.soumu.go.jp/j/sys/fees/purpose/tectest/</a></li>
                <li>北海道の酪農・畜産をめぐる情勢：<a href="http://www.pref.hokkaido.lg.jp/ns/tss/00chikusan/R111_hokkaido_rakuchiku_meguru1.pdf" target="_blank">http://www.pref.hokkaido.lg.jp/ns/tss/00chikusan/R111_hokkaido_rakuchiku_meguru1.pdf</a></li>
                <li>牛トレーサビリティ法について：<a href="http://www.maff.go.jp/kyusyu/syohianzen/nouchiku/attach/pdf/ushitore-4.pdf" target="_blank">http://www.maff.go.jp/kyusyu/syohianzen/nouchiku/attach/pdf/ushitore-4.pdf</a></li>
            </ul>

        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
