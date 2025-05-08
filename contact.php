<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>お問い合わせ - 情報処理システム研究室</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="contact-container">
        <!-- ページタイトル -->
        <h1 class="page-title">お問い合わせ</h1>

        <!-- 一般のお問い合わせ -->
        <h2 class="section-title">学生・一般の方のお問い合わせ</h2>
        <p>学生・一般の方のお問い合わせは以下のボタンからお願いいたします。</p>
        <div>
            <a href="https://forms.gle/jdC5H5z1QYr7jjUx8" target="_blank" class="inquiry-button">Googleフォームでお問い合わせ</a>
        </div>

        <!-- 企業向け取材依頼・共同研究相談 -->
        <h2 class="section-title">取材依頼・共同研究相談（企業様向け）</h2>
        <p>企業様からの取材依頼や共同研究のご相談は以下のボタンからお願いいたします。</p>
        <div>
            <a href="https://forms.gle/HaLVf94MjTAuH7ix7" target="_blank" class="media-button">Googleフォームで取材依頼・相談</a>
        </div>

        <!-- アクセス情報 -->
        <h2 class="section-title" id="access">アクセス</h2>
        <p>
            〒889-2192<br>
            宮崎県宮崎市学園木花台西1-1<br>
            ThiThiZin研究室（宮崎大学木花キャンパス工学部E棟）
        </p>
        <div class="access-map">
            <!-- 既存の画像マップ -->
            <img src="./assets/images/map.png" alt="研究室へのアクセスマップ">

            <hr class="divider">

            <!-- Googleマップの埋め込み -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3389.832052820106!2d131.41161797638802!3d31.82956637407396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3538c850b44cbba5%3A0x8f5e37f0338b2dac!2z5a6u5bSO5aSn5a2mIOacqOiKseOCreODo-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1726821395356!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- 詳しいアクセス方法ボタン -->
        <div style="text-align: center;">
            <a href="https://www.miyazaki-u.ac.jp/access/kibana/" class="detailed-access-button" target="_blank" rel="noopener noreferrer">詳しいアクセス方法はこちら</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
