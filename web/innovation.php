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

// 3대 핵심 독자 기술 데이터
$techCards = [
    [
        'idx' => '01',
        'title' => '독자 로켓엔진 국산화',
        'desc' => '75톤급 및 차세대 고성능 액체 로켓 엔진을 독자 설계·제작하여 대한민국 우주 발사체의 심장을 우리 기술로 완성합니다.'
    ],
    [
        'idx' => '02',
        'title' => '고효율 위성 플랫폼',
        'desc' => '저궤도 실용위성부터 정지궤도 복합위성까지, 다양한 우주 임무를 수행할 수 있는 초경량·고효율 위성 본체 및 탑재체 표준 플랫폼을 보유하고 있습니다.'
    ],
    [
        'idx' => '03',
        'title' => 'AI 기반 데이터 분석',
        'desc' => '우주에서 촬영된 초고해상도 위성 영상을 독자적인 AI 딥러닝 알고리즘으로 분석하여 기후 변화 예측, 지형 탐사, 국방 안보 솔루션을 제공합니다.'
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
    <title>기술혁신 | AERO SPACE</title>
    <link rel="stylesheet" href="style.css?v=2">
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
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $item['label'] === '기술혁신' ? 'active' : '' ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<main>
    <!-- 1. 와이드 탑 비주얼 -->
    <section class="kai-hero-fixed">
        <div class="kai-hero-inner-fixed">
            <span class="sub-tag-fixed">TECHNOLOGY & INNOVATION</span>
            <h1 class="title-fixed">인류의 내일을 앞당기는 독보적 기술력</h1>
            <p class="desc-fixed">AERO SPACE는 끊임없는 R&D 투자와 도전으로 글로벌 표준을 선도하는 첨단 항공우주 기술을 완성합니다.</p>
        </div>
    </section>

    <!-- 2. 핵심 기술 섹션 (3열 카드 레이아웃 재활용) -->
    <section class="kai-vision-section" style="background: #fff;">
        <div class="wrap">
            <div class="kai-title-block">
                <span class="kai-section-tag">CORE TECHNOLOGY</span>
                <h2>3대 핵심 독자 기술</h2>
            </div>
            <div class="kai-vision-grid">
                <?php foreach ($techCards as $tech): ?>
                    <div class="kai-vision-card" style="border-top: 4px solid #1f83ff;">
                        <span class="card-idx"><?= $tech['idx'] ?></span>
                        <h3 style="font-size: 20px; margin-bottom: 16px;"><?= htmlspecialchars($tech['title']) ?></h3>
                        <p style="font-size: 15px; line-height: 1.7; color: #4b5563;"><?= htmlspecialchars($tech['desc']) ?></p> 
                        <a class="more" href="#">자세히 보기&nbsp; →</a>                       
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. R&D 인프라 섹션 (스플릿 레이아웃 재활용) -->
    <section class="kai-intro-section" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: none;">
        <div class="wrap">
            <div class="kai-grid-2col" style="align-items: center;">
                <div class="kai-intro-left">
                    <span class="kai-section-tag">RESEARCH & INFRASTRUCTURE</span>
                    <h2 style="font-size: 32px; line-height: 1.35;">세계적 수준의<br>항공우주 연구 인프라</h2>
                    <p class="highlight-p" style="margin-top: 24px; font-size: 17px; color: #374151;">
                        AERO SPACE 기술혁신 연구소는 국내 최고 수준의 석·박사급 전문 인력과 첨단 우주 시뮬레이션 장비를 보유하고 있습니다.
                    </p>
                    <p style="font-size: 15px; color: #64748b; line-height: 1.7;">
                        우주 환경 모사 시험동(Vacuum & Thermal Chamber)을 통해 극한의 우주 환경 검증을 자체 수행하며, 글로벌 항공우주 규격을 충족하는 최고 신뢰성의 기술을 개발합니다.
                    </p>
                </div>
                <div class="kai-intro-right" style="margin: 0;">
                    <!-- 대기업 느낌을 주는 연구실 컨셉의 다크한 비주얼 박스 (이미지 대체용 그래픽 박스) -->
                    <div style="width: 100%; min-height: 360px; background: linear-gradient(135deg, #0b1b2c 0%, #040c16 100%); border-radius: 12px; display: flex; flex-direction: column; justify-content: center; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 1px solid #1e293b; box-sizing: border-box; color: #fff;">
                        <div style="font-size: 12px; color: #1f83ff; font-weight: 800; letter-spacing: 2px; margin-bottom: 8px;">AERO SPACE R&D CENTER</div>
                        <h4 style="margin: 0 0 16px 0; font-size: 22px; font-weight: 700; color: #fff;">주요 연구 시설 현황</h4>
                        <ul style="margin: 0; padding: 0 0 0 18px; color: #94a3b8; font-size: 14px; line-height: 2;">
                            <li><strong style="color: #fff;">제 1연구동 :</strong> 차세대 로켓엔진 및 연소 제어 시스템 연구</li>
                            <li><strong style="color: #fff;">제 2연구동 :</strong> 고해상도 인공위성 본체 및 탑재체 조립·시험</li>
                            <li><strong style="color: #fff;">AI 센터 :</strong> 위성 영상 전처리 및 딥러닝 분석 알고리즘 고도화</li>
                            <li><strong style="color: #fff;">환경 시험동 :</strong> 우주 방사선 및 극저온·고온 환경 모사 시험 시설</li>
                        </ul>
                    </div>
                </div>
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