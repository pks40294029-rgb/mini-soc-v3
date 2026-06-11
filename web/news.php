<?php
$navItems = [
    ['label' => '회사소개', 'href' => 'about.php'],
    ['label' => '사업분야', 'href' => 'business.php'],
    ['label' => '기술혁신', 'href' => 'innovation.php'],
    ['label' => '뉴스', 'href' => 'news.php'],
    ['label' => '채용', 'href' => 'career.php'],
    ['label' => 'CONTACT', 'href' => 'contact.php'],
    //['label' => 'LOGIN', 'href' => 'login.php'],
];

// image_7bc4da.png 메인 화면 뉴스 섹션과 100% 일치시킨 데이터
$newsArticles = [
    [
        'category' => '보도자료',
        'date' => '2024.05.20',
        'title' => 'AERO SPACE, 차세대 발사체 시험발사 성공',
        'excerpt' => '당사는 차세대 발사체의 시험발사에 성공하여 독자적인 우주 기술력을 완벽히 입증했습니다. 이번 성공을 발판 삼아 한국형 우주 모빌리티 고도화에 박차를 가할 예정입니다.',
        'tag' => '발사체 사업'
    ],
    [
        'category' => '기술성과',
        'date' => '2024.04.11',
        'title' => '위성 관측 데이터 서비스 고도화',
        'excerpt' => '저궤도 실용위성이 수집한 초고해상도 데이터 분석 플랫폼 업데이트가 완료되었습니다. 기후 변화 및 글로벌 인프라 모니터링 분석 오차율을 획기적으로 낮추었습니다.',
        'tag' => '위성 시스템'
    ],
    [
        'category' => '국책과제',
        'date' => '2024.03.28',
        'title' => '항공기 부품 국산화 개발 프로젝트 착수',
        'excerpt' => '글로벌 표준을 만족하는 핵심 항공기 부품 및 장비 기술의 국산화를 위한 대규모 프로젝트 연구개발에 본격 착수하여 해외 의존도를 대폭 낮추고 수출 기반을 다집니다.',
        'tag' => '항공기술 / 부품·장비'
    ]
];

function iconSvg(string $name): string
{
    $icons = [
        'rocket' => '<path d="M22 2c-4.8.9-8.3 3.1-10.6 6.7L8 14l-4 1.8 2.2 2.2L4 22l4-2.2 2.2 2.2 1.8-4 5.3-3.4C20.9 12.3 23.1 6.8 22 2Z"/><path d="m8 14 4 4"/><circle cx="16.5" cy="7.5" r="1.8"/>',
    ];
    return '<svg viewBox="0 0 24 24" aria-hidden="true">' . ($icons[$name] ?? '') . '</svg>';
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>뉴스룸 | AERO SPACE</title>
    <link rel="stylesheet" href="style.css?v=4">
</head>
<body class="about-kai-style">

<header class="site-header">
    <div class="wrap header-inner">
        <a class="brand" href="index.php">
            <?= iconSvg('rocket') ?>
            <span><strong>AERO SPACE</strong><span>INNOVATION FOR THE FUTURE</span></span>
        </a>
        <nav class="nav" aria-label="주 메뉴">
            <?php foreach ($navItems as $item): ?>
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $item['label'] === '뉴스' ? 'active' : '' ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<main>
    <!-- 1. 와이드 탑 비주얼 -->
    <section class="kai-hero-fixed">
        <div class="kai-hero-inner-fixed">
            <span class="sub-tag-fixed">MEDIA ROOM</span>
            <h1 class="title-fixed">AERO SPACE의 생생한 혁신 소식</h1>
            <p class="desc-fixed">우주를 향해 나아가는 AERO SPACE의 위대한 여정과 메인에 소개된 핵심 성과들을 상세히 전해드립니다.</p>
        </div>
    </section>

    <!-- 2. 뉴스 리스트 섹션 -->
    <section class="kai-vision-section" style="background: #f8fafc;">
        <div class="wrap">
            <div class="kai-title-block" style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px;">
                <div>
                    <span class="kai-section-tag">PRESS RELEASE</span>
                    <h2>보도자료 & 소식</h2>
                </div>
                <span style="font-size: 14px; color: #64748b; font-weight: 600;">총 <?= count($newsArticles) ?>건의 소식이 있습니다.</span>
            </div>

            <!-- 메인 화면의 뉴스 개수(3개)에 맞춘 정갈한 3열 격자 구조 -->
            <div class="kai-vision-grid">
                <?php foreach ($newsArticles as $article): ?>
                    <div class="kai-vision-card" style="padding: 35px; background: #fff; display: flex; flex-direction: column; justify-content: space-between; min-height: 240px; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); border: 1px solid #e2e8f0;">
                        <div>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                                <span style="font-size: 11px; font-weight: 800; background: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px;"><?= htmlspecialchars($article['category']) ?></span>
                                <span style="font-size: 13px; color: #94a3b8; font-weight: 600;"><?= htmlspecialchars($article['date']) ?></span>
                            </div>
                            <h3 style="font-size: 18px; font-weight: 800; line-height: 1.4; color: #0b1b2c; margin: 0 0 12px 0; letter-spacing: -0.3px; word-break: keep-all;">
                                <?= htmlspecialchars($article['title']) ?>
                            </h3>
                            <p style="font-size: 14px; line-height: 1.6; color: #4b5563; margin: 0 0 20px 0; text-align: justify;">
                                <?= htmlspecialchars($article['excerpt']) ?>
                            </p>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                            <span style="font-size: 12px; color: #1f83ff; font-weight: 700;"># <?= htmlspecialchars($article['tag']) ?></span>
                            <a href="#" style="font-size: 13px; font-weight: 700; color: #334155; text-decoration: none;">자세히 보기 →</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="wrap footer-inner">
        <a class="brand" href="index.php">
            <?= iconSvg('rocket') ?>
            <span><strong>AERO SPACE</strong></span>
        </a>
        <p class="footer-info">서울특별시 강남구 테헤란로 123, 10층 &nbsp; | &nbsp; Tel. 02-1234-5678 &nbsp; | &nbsp; Email. info@aerospace.co.kr<br>© 2024 AERO SPACE. All rights reserved.</p>
        <div class="socials" aria-label="소셜 링크">
            <span>f</span><span>▶</span><span>in</span>
        </div>
    </div>
</footer>

</body>
</html>