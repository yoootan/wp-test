<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>京阪介護グループ 採用サイト</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class('keihan-kaigo-recruitment'); ?>>
    <!-- 固定ヘッダー -->
    <header class="fixed-header">
        <div class="header-inner">
            <div class="header-logo">
                <a href="<?php echo home_url(); ?>">
                    <span class="logo-k">K</span>
                    <span class="logo-text">KEIHAN KAIGO<br>GROUP</span>
                    <span class="logo-subtitle">採用サイト</span>
                </a>
            </div>
            <div class="header-right">
                <button class="header-entry-btn">ENTRY</button>
                <button class="hamburger-menu" id="hamburgerMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- ハンバーガーメニュー -->
    <div class="menu-overlay" id="menuOverlay">
        <div class="menu-container">
            <button class="menu-close" id="menuClose">✕</button>

            <div class="menu-header">
                <div class="menu-logo">
                    <span class="menu-k">K</span>
                    <div class="menu-logo-text">
                        <span>KEIHAN KAIGO</span>
                        <span>GROUP</span>
                    </div>
                </div>
                <h2 class="menu-title">京阪介護グループ採用サイト</h2>
                <a href="#" class="corp-site-link">
                    <span class="icon">🏢</span>
                    京阪介護コーポレートサイト
                    <span class="arrow">↗</span>
                </a>
            </div>

            <div class="menu-content">
                <div class="menu-column">
                    <div class="menu-section">
                        <h3 class="menu-section-title">
                            <span class="title-en">TOP</span>
                            <span class="title-jp">トップページ</span>
                        </h3>
                        <div class="menu-subsection">
                            <h4 class="menu-subtitle">
                                <span class="subtitle-en">ABOUT</span>
                                <span class="subtitle-jp">京阪介護について</span>
                            </h4>
                            <ul class="menu-list">
                                <li>— 代表挨拶</li>
                                <li>— 会社について</li>
                                <li>— 研修制度・福利厚生</li>
                                <li>— 数字で知る京阪介護</li>
                                <li>— 新着情報</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="menu-column">
                    <div class="menu-section">
                        <h3 class="menu-section-title">
                            <span class="title-en">INTERVIEW</span>
                            <span class="title-jp">先輩インタビュー</span>
                        </h3>
                        <ul class="menu-list">
                            <li>— 若手看護職員</li>
                            <li>— ベテラン看護職員</li>
                            <li>— 若手介護職員</li>
                            <li>— ベテラン介護職員</li>
                            <li>— 事務職員</li>
                            <li>— 施設長</li>
                            <li>— サービス提供責任者</li>
                        </ul>
                    </div>
                </div>

                <div class="menu-column">
                    <div class="menu-section">
                        <h3 class="menu-section-title">
                            <span class="title-en">RECRUITMENT</span>
                            <span class="title-jp">採用情報</span>
                        </h3>
                        <div class="menu-subsection">
                            <h4 class="menu-subtitle-orange">新卒採用</h4>
                            <ul class="menu-list">
                                <li>— 介護職員</li>
                                <li>— 事務職員</li>
                            </ul>
                        </div>
                        <div class="menu-subsection">
                            <h4 class="menu-subtitle-orange">キャリア採用</h4>
                            <ul class="menu-list">
                                <li>— 看護職員</li>
                                <li>— 介護職員</li>
                                <li>— 事務職員</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-buttons">
                <a href="#contact" class="btn-contact">
                    <span class="icon">📧</span>
                    お問い合わせ
                </a>
                <a href="#entry" class="btn-entry-form">
                    <span class="icon">📝</span>
                    エントリーフォーム
                </a>
            </div>
        </div>
    </div>

    <!-- メインコンテンツ -->
    <main class="lp-main">
        <!-- ヒーローセクション -->
        <section class="hero-section">
            <div class="hero-container">
                <!-- 左側：スライドショー部分 -->
                <div class="hero-left">
                    <!-- スライドショー背景 -->
                    <div class="hero-slider">
                        <div class="slide active">
                            <img src="<?php echo get_template_directory_uri(); ?>/ダウンロード.jpeg" alt="介護スタッフ">
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/ダウンロード2.jpeg" alt="介護スタッフ2">
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/ダウンロード3.jpeg" alt="介護スタッフ3">
                        </div>
                    </div>

                    <!-- メインキャッチコピー -->
                    <div class="hero-main-copy">
                        <span class="k-logo-black">K</span>
                        <h2>京阪介護で"最高にカッコいい介護"を共に</h2>
                    </div>

                    <!-- 左側の縦書き番号 -->
                    <div class="hero-side-number">
                        <span>#13644770T3</span>
                    </div>
                </div>

                <!-- 右側：Re:CARE部分 -->
                <div class="hero-right">
                    <div class="hero-recare">
                        <h1 class="recare-title">Re:<br>CARE</h1>
                        <p class="recare-subtitle">その誇りとあなたらしさで、<br>介護の概念を塗り替える</p>
                    </div>

                    <!-- 右下のロゴ -->
                    <div class="hero-bottom-logo">
                        <span class="bottom-k">K</span>
                        <span class="bottom-text">KEIHAN KAIGO<br>GROUP</span>
                    </div>
                </div>
            </div>

            <!-- ニュースティッカー -->
            <div class="news-ticker">
                <div class="news-ticker-inner">
                    <span class="news-label">NEWS</span>
                    <span class="news-date">2025.01.01</span>
                    <span class="news-text">ニュースタイトルが入ります。タイトル...</span>
                    <a href="#" class="news-arrow">→</a>
                </div>
            </div>
        </section>
    </main>

    <?php wp_footer(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // スライドショー
            const slides = document.querySelectorAll('.hero-slider .slide');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                slides[index].classList.add('active');
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            // 10秒ごとに切り替え
            setInterval(nextSlide, 10000);

            // ハンバーガーメニュー
            const hamburgerMenu = document.getElementById('hamburgerMenu');
            const menuOverlay = document.getElementById('menuOverlay');
            const menuClose = document.getElementById('menuClose');

            hamburgerMenu.addEventListener('click', function() {
                menuOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            menuClose.addEventListener('click', function() {
                menuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            });

            menuOverlay.addEventListener('click', function(e) {
                if (e.target === menuOverlay) {
                    menuOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });

            // スクロール時のヘッダー背景変更
            window.addEventListener('scroll', function() {
                const header = document.querySelector('.fixed-header');
                if (window.scrollY > 100) {
                    header.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
                    header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
                } else {
                    header.style.backgroundColor = 'transparent';
                    header.style.boxShadow = 'none';
                }
            });
        });
    </script>
</body>

</html>