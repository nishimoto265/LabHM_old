<?php
// research-projects.php
include 'header.php';

// プロジェクトデータ（研究名とリンクを追加）
$projects = [
    [
        'id' => 1,
        'name' => "牛の摂食行動と摂食時間管理",
        'researcher' => "石川 太一",
        'image' => "./assets/images/research-ishikawa.png",
        'keywords' => ["AI", "牛"],
        'link' => "research-ishikawa.php?id=1" // 詳細ページへのリンク
    ],
    [
        'id' => 2,
        'name' => "プライバシーを保護した高齢者見守りと健康支援システム",
        'researcher' => "中嶋 麗文",
        'image' => "./assets/images/research-remon.png",
        'keywords' => ["AI", "人"],
        'link' => "research-nakasima.php?id=2" // 詳細ページへのリンク
    ],
    [
        'id' => 3,
        'name' => "情報技術とAIを用いた臍帯血ガスパラメータ活用による負担軽減型胎児モニタリング",
        'researcher' => "Tunn Cho Lwin",
        'image' => "./assets/images/research-tunn.png",
        'keywords' => ["AI", "人", "医療"],
        'link' => "research-tunn.php?id=3" // 詳細ページへのリンク
    ],
    [
        'id' => 4,
        'name' => "乳牛の分娩・難産兆候推定システム",
        'researcher' => "村山 拓海",
        'image' => "./assets/images/research-murayama.png",
        'keywords' => ["AI", "牛"],
        'link' => "research-murayama.php?id=4" // 詳細ページへのリンク
    ],
    [
        'id' => 5,
        'name' => "歩行中の乳牛に対するBCS評価の自動化",
        'researcher' => "筑波 真矢",
        'image' => "./assets/images/research-tikunami.png",
        'keywords' => ["AI", "牛"],
        'link' => "research-tikunami.php?id=5" // 詳細ページへのリンク
    ],
    [
        'id' => 6,
        'name' => "子牛の行動解析による健康管理",
        'researcher' => "西山 孟人",
        'image' => "./assets/images/research-nishiyama.png",
        'keywords' => ["AI", "牛"],
        'link' => "research-nishiyama.php?id=6" // 詳細ページへのリンク
    ],
    [
        'id' => 7,
        'name' => "3Dカメラによる歩行中の牛の個体識別",
        'researcher' => "椎原 陽",
        'image' => "./assets/images/research-siihara.png",
        'keywords' => ["AI", "牛"],
        'link' => "research-siihara.php?id=7" // 詳細ページへのリンク
    ],
    [
        'id' => 8,
        'name' => "耳標番号による牛の個体識別",
        'researcher' => "清水 祐一朗",
        'image' => "./assets/images/research-simizu.png",
        'keywords' => ["AI", "牛"],
        'link' => "research-simizu.php?id=8" // 詳細ページへのリンク
    ],
    // 必要に応じてプロジェクトを追加
];

// すべてのキーワードを取得
$allKeywords = array_unique(array_merge(...array_column($projects, 'keywords')));
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'head.php'; ?>
    <title>研究プロジェクト - ThiThiZin研究室</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .page-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2em;
            color: #333;
        }
        .filter-section {
            margin-bottom: 20px;
        }
        /* 検索入力フィールドを削除したため、関連するスタイルも削除 */
        .keyword-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        .keyword-button {
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9em;
            background-color: #fff;
            transition: background-color 0.3s, color 0.3s;
        }
        .keyword-button:hover {
            background-color: #007bff;
            color: white;
        }
        .keyword-button.active {
            background-color: #007bff;
            color: white;
        }
        .project-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        @media (max-width: 1024px) {
            .project-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .project-grid {
                grid-template-columns: 1fr;
            }
        }
        .project-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            background-color: #fff;
            transition: transform 0.3s;
            text-decoration: none; /* リンクのデフォルトスタイルを削除 */
            color: inherit; /* テキストカラーを継承 */
        }
        .project-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .separator-line {
            margin: 10px 0;
            border-top: 1px solid #eee;
        }
        .project-content {
            padding: 15px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .project-title {
            font-size: 1.5em; /* タイトルを大きく */
            font-weight: bold;
            /* 2行で省略 */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
            color: #333;
            text-align: left; /* 左寄せ */
        }
        .project-researcher {
            font-size: 1.2em !important; /* 名前を小さく */
            color: #666 !important ; /* 灰色 */
            text-align: left; /* 左寄せ */
            margin-top: 5px;
        }
        .project-keywords {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: auto;
        }
        .keyword {
            background-color: #f0f0f0;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="page-title">研究一覧</h1>
        
        <div class="filter-section">
            <!-- 検索入力フィールドを削除 -->
            <div class="keyword-filter">
                <?php foreach ($allKeywords as $keyword): ?>
                    <button class="keyword-button" data-keyword="<?php echo htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="project-grid">
            <?php foreach ($projects as $project): ?>
                <a href="<?php echo htmlspecialchars($project['link'], ENT_QUOTES, 'UTF-8'); ?>" class="project-item" data-keywords="<?php echo htmlspecialchars(implode(',', $project['keywords']), ENT_QUOTES, 'UTF-8'); ?>">
                    <img src="<?php echo htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?>" class="project-image">
                    <div class="separator-line"></div> <!-- 画像とタイトルの間に線を追加 -->
                    <div class="project-content">
                        <h2 class="project-title"><?php echo htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="project-researcher"><?php echo htmlspecialchars($project['researcher'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <div class="project-keywords">
                            <?php foreach ($project['keywords'] as $keyword): ?>
                                <span class="keyword"><?php echo htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const keywordButtons = document.querySelectorAll('.keyword-button');
            const projectItems = document.querySelectorAll('.project-item');

            function filterProjects() {
                const activeKeywords = Array.from(document.querySelectorAll('.keyword-button.active')).map(btn => btn.dataset.keyword.toLowerCase());

                projectItems.forEach(item => {
                    const projectKeywords = item.dataset.keywords.toLowerCase().split(',');

                    const matchesKeywords = activeKeywords.length === 0 || activeKeywords.every(keyword => projectKeywords.includes(keyword));

                    item.style.display = matchesKeywords ? 'flex' : 'none';
                });
            }

            keywordButtons.forEach(button => {
                button.addEventListener('click', function() {
                    this.classList.toggle('active');
                    filterProjects();
                });
            });
        });
    </script>
</body>
</html>
