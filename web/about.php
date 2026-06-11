<?php
$navItems = [
    ['label' => '회사소개', 'href' => 'about.php'],
    ['label' => '사업분야', 'href' => 'business.php'],
    ['label' => '기술혁신', 'href' => 'innovation.php'],
    ['label' => '뉴스', 'href' => 'news.php'],
    ['label' => '채용', 'href' => 'career.php'],
    ['label' => 'CONTACT', 'href' => 'contact.php'],
    //['label' => 'LOGIN', 'href' => 'login.php'],
]; // index.php 기반 구조 유지[cite: 1]

// KAI 스타일의 기업 핵심 성과 지표 (숫자 강조)
$companyStats = [
    ['label' => '글로벌 수출국', 'value' => '10+', 'unit' => '개국', 'desc' => '전 세계 하늘을 누비는 기술력'],
    ['label' => '특허 및 지식재산권', 'value' => '1,200+', 'unit' => '건', 'desc' => '독자 개발 특허 및 원천 기술'],
    ['label' => '연구개발(R&D) 인력', 'value' => '65', 'unit' => '%', 'desc' => '전체 임직원 중 기술 인력 비중'],
];

$coreValues = [
    ['title' => '글로벌 시장 확대', 'desc' => '자체 개발 발사체 및 위성 플랫폼을 기반으로 남미, 유럽, 아시아 등 전 세계 항공우주 시장으로 영역을 확장합니다.'],
    ['title' => '미래 핵심기술 확보', 'desc' => '고성능 로켓 엔진 국산화와 AI 기반 위성 데이터 분석 플랫폼 고도화를 통해 차세대 우주 경제 리더로 도약합니다.'],
    ['title' => '지속가능한 성장기반', 'desc' => '글로벌 스탠다드에 부합하는 ESG 경영을 실천하고, 대한민국 항공우주 산업 생태계의 동반 성장을 주도합니다.']
];

$historyData = [
    '2024 ~ Present' => [
        ['date' => '2024. 05', 'title' => '차세대 발사체 시험발사 최종 성공 및 독자 엔진 기술 확보'],
        ['date' => '2024. 03', 'title' => '글로벌 항공기 부품 국산화 2단계 프로젝트 착수']
    ],
    '2021 ~ 2023' => [
        ['date' => '2023. 11', 'title' => 'AI 기반 고해상도 위성 관측 데이터 분석 솔루션 공급 계약'],
        ['date' => '2022. 08', 'title' => '항공우주 기술 혁신 연구소(R&D Center) 확장 이전']
    ],
    '2020' => [
        ['date' => '2020. 04', 'title' => 'AERO SPACE 주식회사 법인 설립']
    ]
];

function iconSvg(string $name): string
{
    $icons = [
        'rocket' => '<path d="M22 2c-4.8.9-8.3 3.1-10.6 6.7L8 14l-4 1.8 2.2 2.2L4 22l4-2.2 2.2 2.2 1.8-4 5.3-3.4C20.9 12.3 23.1 6.8 22 2Z"/><path d="m8 14 4 4"/><circle cx="16.5" cy="7.5" r="1.8"/>', // index.php 호환[cite: 1]
    ];
    return '<svg viewBox="0 0 24 24" aria-hidden="true">' . ($icons[$name] ?? '') . '</svg>';
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>기업개요 | AERO SPACE</title>
    <link rel="stylesheet" href="style.css?v=1">
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
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $item['label'] === '회사소개' ? 'active' : '' ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<main>
    <!-- 1. 와이드 서브 비주얼 (KAI 스타일) -->
    <section class="kai-hero-fixed">
        <div class="kai-hero-inner-fixed">
            <span class="sub-tag-fixed">ABOUT AERO SPACE</span>
            <h1 class="title-fixed">하늘과 우주를 향한 대한민국 혁신의 길</h1>
            <p class="desc-fixed">AERO SPACE는 첨단 항공우주 기술을 바탕으로 인류의 무한한 가능성을 현실로 만듭니다.</p>
        </div>
    </section>

    <!-- 2. CEO 인사말 & 기업 이념 (스플릿 레이아웃) -->
    <section id="company-intro" class="kai-intro-section">
        <div class="wrap">
            <div class="kai-grid-2col">
                <div class="kai-intro-left">
                    <span class="kai-section-tag">CEO MESSAGE</span>
                    <h2>"안정적인 기술력으로<br>우주 시대를 선도하겠습니다."</h2>
                </div>
                <div class="kai-intro-right">
                    <p class="highlight-p">AERO SPACE는 창립 이래 끊임없는 도전과 기술 혁신을 통해 대한민국 항공우주 산업의 중심에서 미래 우주 영토를 개척해 왔습니다.</p>
                    <p>우리는 고성능 독자 로켓 엔진 개발부터 고효율 위성 플랫폼, 그리고 AI를 활용한 우주 데이터 분석에 이르기까지 전 분야를 아우르는 독보적인 밸류체인을 구축하고 있습니다.</p>
                    <p>새로운 우주 경제 시대(New Space Era)를 맞아, 글로벌 시장으로 기술적 도약을 이뤄내고 인류 삶의 가치를 높이는 가장 신뢰받는 파트너가 될 것을 약속드립니다.</p>
                    <p class="kai-signature">AERO SPACE 대표이사 <strong>임직원 일동</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. 핵심 성과 지표 섹션 (대기업 공식 홈페이지 필수 요소) -->
    <section class="kai-stats-section">
        <div class="wrap">
            <div class="kai-stats-grid">
                <?php foreach ($companyStats as $stat): ?>
                    <div class="stat-card">
                        <p class="stat-label"><?= htmlspecialchars($stat['label']) ?></p>
                        <p class="stat-number">
                            <strong><?= htmlspecialchars($stat['value']) ?></strong><span><?= htmlspecialchars($stat['unit']) ?></span>
                        </p>
                        <p class="stat-desc"><?= htmlspecialchars($stat['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4. 미래 비전 전략 섹션 -->
    <section class="kai-vision-section">
        <div class="wrap">
            <div class="kai-title-block">
                <span class="kai-section-tag">VISION 2030</span>
                <h2>미래성장 전략</h2>
            </div>
            <div class="kai-vision-grid">
                <?php foreach ($coreValues as $index => $value): ?>
                    <div class="kai-vision-card">
                        <span class="card-idx">0<?= $index + 1 ?></span>
                        <h3><?= htmlspecialchars($value['title']) ?></h3>
                        <p><?= htmlspecialchars($value['desc']) ?></p>                        
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. 탭/연대별 구조화된 대형 연혁 섹션 -->
    <section class="kai-history-section">
        <div class="wrap">
            <div class="kai-title-block">
                <span class="kai-section-tag">HISTORY</span>
                <h2>연혁</h2>
            </div>
            
            <div class="kai-history-container">
                <?php foreach ($historyData as $era => $events): ?>
                    <div class="kai-history-era-group">
                        <div class="kai-era-title">
                            <h3><?= htmlspecialchars($era) ?></h3>
                        </div>
                        <div class="kai-era-list">
                            <?php foreach ($events as $ev): ?>
                                <div class="kai-history-item">
                                    <span class="kai-date"><?= htmlspecialchars($ev['date']) ?></span>
                                    <p class="kai-event-title"><?= htmlspecialchars($ev['title']) ?></p>
                                </div>
                            <?php endforeach; ?>
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