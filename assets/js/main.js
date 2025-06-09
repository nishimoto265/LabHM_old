// assets/js/main.js

// Swiperの初期化とお知らせセクションの読み込み
document.addEventListener('DOMContentLoaded', function() {
    // Heroスライダーの初期化
    const heroSwiper = new Swiper('.hero.swiper', {
        loop: true, // ループさせる
        autoplay: {
            delay: 5000, // 5秒ごとにスライド
            disableOnInteraction: false, // ユーザーが操作してもオートプレイを停止しない
        },
        slidesPerView: 1.5, // 1.5スライドを表示
        spaceBetween: 20, // スライド間のスペース
        centeredSlides: true, // 中央にスライドを配置
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'slide', // スライドエフェクト
        breakpoints: {
            // スマートフォン
            640: {
                slidesPerView: 1.2,
                spaceBetween: 10,
            },
            // タブレット
            768: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            // デスクトップ
            1024: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
    });

    // お知らせセクションのSwiper初期化用変数
    let announcementsSwiper = null;

    // お知らせセクションの読み込み関数
    function loadAnnouncements() {
        fetch('announcements-content.html')
            .then(response => response.text())
            .then(data => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const newsItems = doc.querySelectorAll('.news-item');

                // 既存のSwiperラッパーをクリア
                const swiperWrapper = document.getElementById('announcements-swiper-wrapper');
                swiperWrapper.innerHTML = '';

                newsItems.forEach(item => {
                    // 画像を非表示にする（必要に応じて）
                    const img = item.querySelector('img');
                    if (img) {
                        img.style.display = 'none'; // CSSで非表示にする方法も可能
                        // img.remove(); // 完全に削除したい場合はこちらを使用
                    }

                    // 新しいswiper-slide要素を作成
                    const slide = document.createElement('div');
                    slide.classList.add('swiper-slide');
                    slide.innerHTML = item.innerHTML; // 必要に応じて調整

                    swiperWrapper.appendChild(slide);
                });

                // Swiperを再初期化または更新
                if (announcementsSwiper) {
                    announcementsSwiper.update();
                } else {
                    announcementsSwiper = new Swiper('.announcements-swiper.swiper', {
                        direction: 'vertical',
                        loop: false,
                        slidesPerView: 3,
                        spaceBetween: 10,
                        allowTouchMove: true,
                        mousewheel: {
                            forceToAxis: true,
                            sensitivity: 2,
                        },
                        breakpoints: {
                            1024: {
                                slidesPerView: 2,
                                spaceBetween: 10,
                            },
                            768: {
                                slidesPerView: 1,
                                spaceBetween: 10,
                            },
                        },
                        // 必要に応じてページネーションやナビゲーションを追加
                        // pagination: {
                        //     el: '.swiper-pagination',
                        //     clickable: true,
                        // },
                        // navigation: {
                        //     nextEl: '.swiper-button-next',
                        //     prevEl: '.swiper-button-prev',
                        // },
                    });
                }
            })
            .catch(error => {
                console.error('ニュースの読み込みに失敗しました:', error);
            });
    }

    // お知らせセクションを読み込む
    loadAnnouncements();
});
