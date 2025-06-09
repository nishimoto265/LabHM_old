# LabHM_old

宮崎大学工学部 ThiThiZin研究室のウェブサイト（旧バージョン）のソースコードです。

## 🔬 研究室について

本研究室では以下の分野における研究開発を行っています：
- 人工知能（AI）
- 画像処理・コンピュータビジョン
- 機械学習・深層学習
- スマート農業・畜産業DX
- 医療画像処理
- 5G通信技術の応用

## 🌐 関連リンク

- **現在運用中のウェブサイト**: [https://www.cc.miyazaki-u.ac.jp/imagelab/home.php](https://www.cc.miyazaki-u.ac.jp/imagelab/home.php)
- **リニューアル版リポジトリ**: [https://github.com/nishimoto265/LabHM_new](https://github.com/nishimoto265/LabHM_new)

## 🛠️ 技術スタック

- **バックエンド**: PHP
- **フロントエンド**: HTML5, CSS3, JavaScript
- **スタイリング**: カスタムCSS
- **その他**: Google Analytics対応

## 📁 プロジェクト構造

```
LabHM_old/
├── assets/                    # 静的ファイル
│   ├── css/                  # スタイルシート
│   │   ├── style.css        # メインスタイル
│   │   └── sanitize.css     # CSSリセット
│   ├── js/                  # JavaScript
│   │   ├── main.js          # メイン機能
│   │   ├── hamberger.js     # ハンバーガーメニュー
│   │   └── load_news.js     # ニュース読み込み
│   └── images/              # 画像ファイル
├── *.php                    # 各ページのPHPファイル
├── announcements-content.html # お知らせコンテンツ
├── sitemap.xml              # サイトマップ
└── google6f6368f282ebd05b.html # Google Search Console認証
```

### 主要なPHPファイル

| ファイル名 | 説明 |
|-----------|------|
| `home.php` | ホームページ |
| `faculty.php` | 教員紹介 |
| `student.php` | 学生紹介 |
| `research-project.php` | 研究プロジェクト |
| `awards.php` | 受賞歴 |
| `alumni.php` | 卒業生情報 |
| `facilities.php` | 施設紹介 |
| `contact.php` | お問い合わせ |

## 🚀 セットアップ方法

### 必要環境
- PHP 7.4以上
- Webサーバー（Apache/Nginx）

### ローカル環境での実行

1. **リポジトリのクローン**
   ```bash
   git clone https://github.com/nishimoto265/LabHM_old.git
   cd LabHM_old
   ```

2. **Webサーバーの設定**
   - XAMPPやMAMPなどのローカル開発環境を使用
   - またはPHP内蔵サーバーを使用：
     ```bash
     php -S localhost:8000
     ```

3. **ブラウザでアクセス**
   ```
   http://localhost:8000/home.php
   ```

## 📝 特徴

- **レスポンシブデザイン**: モバイル・タブレット対応
- **多言語対応**: 日本語メイン、一部英語コンテンツ
- **動的コンテンツ**: PHPによる動的ページ生成
- **SEO対応**: sitemap.xml、Google Analytics統合

## 🎯 主要機能

- 研究室紹介・教員情報表示
- 学生・卒業生情報管理
- 研究プロジェクト紹介
- 受賞歴・業績表示
- お知らせ機能
- 施設・設備紹介
- お問い合わせフォーム

## 🔒 セキュリティ

- 機密情報ファイル（`phpinfo.php`等）は`.gitignore`で除外済み
- データベース設定ファイルは含まれていません
- 本番環境では適切な権限設定が必要です

## 🤝 コントリビュート

このプロジェクトへの貢献を歓迎します：

1. このリポジトリをフォーク
2. 機能ブランチを作成 (`git checkout -b feature/amazing-feature`)
3. 変更をコミット (`git commit -m 'Add amazing feature'`)
4. ブランチにプッシュ (`git push origin feature/amazing-feature`)
5. プルリクエストを作成

## 📜 ライセンス

このプロジェクトは教育・研究目的で公開されています。

## 📧 お問い合わせ

- **研究室**: 宮崎大学工学部 ThiThiZin研究室
- **ウェブサイト**: [https://www.cc.miyazaki-u.ac.jp/imagelab/](https://www.cc.miyazaki-u.ac.jp/imagelab/)

---

> **Note**: これは旧バージョンのウェブサイトです。最新版は [LabHM_new](https://github.com/nishimoto265/LabHM_new) をご確認ください。
