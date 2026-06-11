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

$businessCards = [
    ['id' => 'rocket', 'icon' => 'rocket', 'title' => '발사체 사업', 'text' => '안정적이고 효율적인<br>위성 발사 서비스를 제공합니다.'],
    ['id' => 'satellite', 'icon' => 'satellite', 'title' => '위성 시스템', 'text' => '통신, 관측, 항법 등 다양한<br>위성 시스템을 개발합니다.'],
    ['id' => 'aircraft', 'icon' => 'plane', 'title' => '항공기술', 'text' => '미래 항공 교통을 위한<br>첨단 항공 기술을 연구합니다.'],
    ['id' => 'components', 'icon' => 'gear', 'title' => '부품 · 장비', 'text' => '우수한 품질의 항공우주 부품과<br>장비를 공급합니다.'],
];

$innovations = [
    ['image' => 'assets/tech-engine.jpg', 'title' => '로켓 엔진 기술', 'text' => '고성능·고신뢰성 로켓 엔진을 자체 개발하여 안정적인 우주 발사를 지원합니다.'],
    ['image' => 'assets/tech-satellite.jpg', 'title' => '위성 플랫폼', 'text' => '경량·고효율 위성 플랫폼으로 다양한 임무를 수행합니다.'],
    ['image' => 'assets/tech-data.jpg', 'title' => '데이터 · AI 분석', 'text' => 'AI 기반 데이터 분석으로 우주·항공 데이터를 가치로 전환합니다.'],
];

$news = [
    ['title' => 'AERO SPACE, 차세대 발사체 시험발사 성공', 'date' => '2024.05.20', 'text' => '당사는 차세대 발사체의 시험발사에 성공하여 기술력을 입증했습니다.'],
    ['title' => '위성 관측 데이터 서비스 고도화', 'date' => '2024.04.11'],
    ['title' => '항공기 부품 국산화 개발 프로젝트 착수', 'date' => '2024.03.28'],
];

function iconSvg(string $name): string
{
    $icons = [
        'rocket' => '<path d="M22 2c-4.8.9-8.3 3.1-10.6 6.7L8 14l-4 1.8 2.2 2.2L4 22l4-2.2 2.2 2.2 1.8-4 5.3-3.4C20.9 12.3 23.1 6.8 22 2Z"/><path d="m8 14 4 4"/><circle cx="16.5" cy="7.5" r="1.8"/>',
        'satellite' => '<path d="m10 14 4-4 4 4-4 4-4-4Z"/><path d="m14 10 2.8-2.8"/><path d="M18.4 5.6 21 3"/><path d="m10 14-3.5-3.5"/><path d="M5 9 2 6"/><path d="m18 14 3 3"/><path d="m6 18-3 3"/>',
        'plane' => '<path d="M2 16 22 8l-8 8-2 6-3-5-7-1Z"/><path d="m14 16-5-5"/>',
        'gear' => '<circle cx="12" cy="12" r="3.3"/><path d="M12 2v3"/><path d="M12 19v3"/><path d="m4.9 4.9 2.1 2.1"/><path d="m17 17 2.1 2.1"/><path d="M2 12h3"/><path d="M19 12h3"/><path d="m4.9 19.1 2.1-2.1"/><path d="m17 7 2.1-2.1"/>',
        'download' => '<path d="M12 3v12"/><path d="m7 10 5 5 5-5"/><path d="M5 21h14"/>',
        'mail' => '<path d="M4 6h16v12H4z"/><path d="m4 7 8 6 8-6"/>',
        'pin' => '<path d="M12 22s7-6 7-13a7 7 0 0 0-14 0c0 7 7 13 7 13Z"/><circle cx="12" cy="9" r="2.5"/>',
    ];

    return '<svg viewBox="0 0 24 24" aria-hidden="true">' . ($icons[$name] ?? '') . '</svg>';
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AERO SPACE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
    <div class="wrap header-inner">
        <a class="brand" href="#">
            <?= iconSvg('rocket') ?>
            <span><strong>AERO SPACE</strong><span>INNOVATION FOR THE FUTURE</span></span>
        </a>
        <nav class="nav" aria-label="주 메뉴">
            <?php foreach ($navItems as $item): ?>
                <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="wrap hero-content">
            <h1>하늘을 넘어, 우주를 향해<br>AERO SPACE가 미래를 만듭니다.</h1>
            <p>우리는 혁신적인 기술과 도전정신으로<br>항공우주 산업의 새로운 미래를 열어갑니다.</p>
            <a class="btn" href="about.php#company-intro">자세히 보기</a>
        </div>
    </section>

    <section class="business">
        <div class="wrap">
            <h2 class="section-title">사업분야</h2>
            <div class="card-grid">
                <?php foreach ($businessCards as $card): ?>
                    <article class="business-card">
                        <?= iconSvg($card['icon']) ?>
                        <h3><?= htmlspecialchars($card['title']) ?></h3>
                        <p><?= $card['text'] ?></p>
                        <a class="more" href="business.php#<?= htmlspecialchars($card['id']) ?>">더 알아보기&nbsp; →</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="dark-band">
        <div class="wrap lower-grid">
            <section>
                <h2 class="dark-title">기술혁신</h2>
                <div class="innovation-list">
                    <?php foreach ($innovations as $item): ?>
                        <article class="innovation">
                            <img src="<?= htmlspecialchars($item['image']) ?>" alt="">
                            <h3><?= htmlspecialchars($item['title']) ?></h3>
                            <p><?= htmlspecialchars($item['text']) ?></p>
                            <a class="more" href="#">자세히 보기&nbsp; →</a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="news-block">
                <h2 class="dark-title">뉴스</h2>
                <article class="featured-news">
                    <img src="assets/news-rocket.jpg" alt="">
                    <div>
                        <h3><?= htmlspecialchars($news[0]['title']) ?></h3>
                        <span class="date"><?= htmlspecialchars($news[0]['date']) ?></span>
                        <p><?= htmlspecialchars($news[0]['text']) ?></p>
                        <a class="more" href="#">더 보기&nbsp; →</a>
                    </div>
                </article>
                <?php foreach (array_slice($news, 1) as $item): ?>
                    <a class="news-row" href="#">
                        <strong><?= htmlspecialchars($item['title']) ?><span class="date"><?= htmlspecialchars($item['date']) ?></span></strong>
                        <b>›</b>
                    </a>
                <?php endforeach; ?>
            </section>

            <section class="quick">
                <h2 class="dark-title">바로가기</h2>
                <div class="quick-grid">
                    <a class="quick-card" href="#"><?= iconSvg('download') ?><span>보도용 이미지<br>다운로드</span></a>
                    <a class="quick-card" href="#"><?= iconSvg('mail') ?><span>문의하기</span></a>
                    <a class="quick-card" href="#"><?= iconSvg('pin') ?><span>오시는 길</span></a>
                </div>
            </section>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="wrap footer-inner">
        <a class="brand" href="#">
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
