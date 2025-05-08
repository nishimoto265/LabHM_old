<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>情報処理システム研究室</title> 
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
     <!-- ヘッダーのプレースホルダー -->
     <?php include 'header.php'; ?>

    <div class="container">
        <!-- Heroスライダー -->
        <div class="hero swiper">
            <div class="swiper-wrapper">
                <!-- スライド1: 学生向け情報 -->
                <div class="swiper-slide">
                    <img src="./assets/images/1.jpg" alt="学生向け情報">
                    <a href="./careers.php">
                        <div class="news">
                            <h3>STUDENTS</h3>
                            <p>研究室での学びと成長の機会が待っています。共に未来を切り拓きましょう。</p>
                        </div>
                    </a>
                </div>
                <!-- スライド2: 研究概要 -->
                <div class="swiper-slide">
                    <img src="./assets/images/2.jpg" alt="研究概要">
                    <a href="./research_overview.php">
                        <div class="news">
                            <h3>RESERCH</h3>
                            <p>画像処理と機械学習を用いて、社会に貢献しています。</p>
                        </div>
                    </a>
                </div>
                <!-- スライド3: 共同研究 -->
                <div class="swiper-slide">
                    <img src="./assets/images/3.jpg" alt="共同研究">
                    <a href="./collaborative-research.php">
                        <div class="news">
                            <h3>COLLABORATION</h3>
                            <p>産学連携で新たな価値を創造します。</p>
                        </div>
                    </a>
                </div>
                <!-- スライド4: 最新情報 -->
                <div class="swiper-slide">
                    <img src="./assets/images/4.jpg" alt="最新情報">
                    <a href="./announcements.php">
                        <div class="news">
                            <h3>NEWS</h3>
                            <p>研究室からの最新ニュースやイベント情報をお届けします。</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- スライダーのナビゲーションボタン -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- スライダーのページネーション -->
            <div class="swiper-pagination"></div>
        </div>

        <!-- お知らせセクション -->
        <section id="announcements" class="announcements-section">
            <h2>News</h2>
            <!-- お知らせ用Swiper -->
            <div class="announcements-swiper swiper">
                <div class="swiper-wrapper" id="announcements-swiper-wrapper">
                    <!-- ニュース項目がここに挿入されます -->
                </div>
                <!-- ページネーションやナビゲーションが必要な場合はここに追加 -->
            </div>
            <!-- See More リンクを追加 -->
            <div class="see-more">
                <a href="announcements.php">See More</a>
            </div>
        </section>

        <!-- 研究室概要 -->
        <section id="overview">
            <h2>研究室概要</h2>
            <!-- 研究室のロゴ -->
            <div class="overview-logo">
                <img src="./assets/images/logo2.png" alt="ThiThiZin研究室ロゴ" class="overview-logo-img">
            </div>
            
            <!-- 概要説明 -->
            <div class="overview-description">
                <p>ThiThiZin研究室は、AIと画像処理の最先端技術を研究しています。最新の技術とデータサイエンスを活用して、社会問題の解決を目指しています。</p>
            </div>
            
            <!-- キーワードのリスト -->
            <div class="overview-keywords">
                <div class="keyword-item">
                    <img src="./assets/images/AI.png" alt="人工知能 (AI)">
                    <span>人工知能 (AI)</span>
                </div>
                <!-- <div class="keyword-item">
                    <img src="./assets/images/singou.png" alt="信号処理">
                    <span>信号処理</span>
                </div> -->
                <!-- <div class="keyword-item">
                    <img src="./assets/images/infomation.png" alt="情報通信">
                    <span>情報通信</span>
                </div> -->
                <div class="keyword-item">
                    <img src="./assets/images/database.png" alt="データベース">
                    <span>データベース</span>
                </div>
                <div class="keyword-item">
                    <img src="./assets/images/5G.png" alt="5G">
                    <span>5G</span>
                </div>
                <div class="keyword-item">
                    <img src="./assets/images/image_processing.png" alt="画像処理">
                    <span>画像処理</span>
                </div>
                <div class="keyword-item">
                    <img src="./assets/images/animal.png" alt="動物生産科学">
                    <span>動物生産科学</span>
                </div>
                <div class="keyword-item">
                    <img src="./assets/images/medicine.png" alt="医用工学">
                    <span>医用工学</span>
                </div>
            </div>
        </section>

        <!-- 研究紹介 -->
        <section id="research">
            <h2>研究紹介</h2>
            <div class="research-intro">
                <div class="project-item">
                    <a href="./research_overview.php"> <!-- リンクを追加 -->
                        <img src="./assets/images/research-tunn.png" alt="研究テーマ 1">
                        <p>胎児の状態を早期に把握する新しいモニタリングシステム</p>
                    </a>
                </div>
                <div class="project-item">
                    <a href="./research_overview.php"> <!-- リンクを追加 -->
                        <img src="./assets/images/research-tikunami.png" alt="研究テーマ 2">
                        <p>歩行中の乳牛に対するBCS評価の自動化</p>
                    </a>
                </div>
                <div class="project-item">
                    <a href="./research_overview.php"> <!-- リンクを追加 -->
                        <img src="./assets/images/research-remon.png" alt="研究テーマ 3">
                        <p>プライバシーを保護した高齢者見守りと健康支援システム</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- プロジェクト -->
        <section id="project">
            <h2>Projects</h2>
            <div class="project-intro">
                <div class="project-item">
                    <!-- 画像とリンクを追加 -->
                    <a href="./goverment-project.php">
                        <img src="./assets/images/goverment-project2.png" alt="研究テーマ 1">
                        <p>総務省プロジェクト</p>
                    </a>
                </div>
                <div class="project-item">
                    <!-- 画像とリンクを追加 -->
                    <a href="./collaborative-research.php">
                        <img src="./assets/images/collabolatin_reserch.png" alt="研究テーマ 2">
                        <p>共同研究</p>
                    </a>
                </div>
                <div class="project-item">
                    <!-- 画像とリンクを追加 -->
                    <a href="sakura-project.php">
                        <img src="./assets/images/sakura2.png" alt="研究テーマ 3">
                        <p>さくらサイエンス</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- 学生の皆様へ -->
        <section id="students">
            <h2>学生の皆様へ</h2>
            <p>研究室での学びと成長の機会が待っています。共に未来を切り拓きましょう。</p>
            <div class="see-more">
                <a href="careers.php">詳しくはこちら</a>
            </div>
        </section>
  
        <!-- 横長のContactボタンを追加 -->
        <a href="contact.php" class="contact-button">Contact</a>
    </div>

    <?php include 'footer.php'; ?>

     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
     <!-- 外部JavaScriptのリンク -->
     <script src="assets/js/main.js"></script>
</body>
</html>
