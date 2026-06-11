<?php
$navItems = [
    ['label' => '회사소개', 'href' => 'about.php'],
    ['label' => '사업분야', 'href' => 'business.php'],
    ['label' => '기술혁신', 'href' => 'innovation.php'],
    ['label' => '뉴스', 'href' => 'news.php'],
    ['label' => '채용', 'href' => 'career.php'],
    ['label' => 'CONTACT', 'href' => 'contact.php'],
    
];

$businessDivisions = [
    [
        'id' => 'rocket',
        'icon' => 'rocket',
        'title' => '발사체 사업',
        'subtitle' => '안정적이고 신뢰할 수 있는 위성 발사 서비스',
        'description' => '친환경 에너지 기반의 차세대 발사체 기술로 전 세계 우주산업을 선도합니다.',
        'features' => [
            '저비용 발사 솔루션',
            '높은 발사 성공률 (99.8%)',
            '다중 위성 동시 발사 가능',
            '환경친화적 엔진 기술'
        ],
        'specs' => [
            '탑재량' => '최대 5,000kg',
            '발사횟수' => '연 12회',
            '회전주기' => '15일',
            '성공률' => '99.8%'
        ],
        'image' => 'assets/business-rocket.jpg',
        'highlight' => '2024년 누적 발사 성공률 98.7%'
    ],
    [
        'id' => 'satellite',
        'icon' => 'satellite',
        'title' => '위성 시스템',
        'subtitle' => '통신, 관측, 항법 서비스를 통한 가치 창출',
        'description' => '최첨단 위성 기술로 지구 관측, 통신, 항법 분야에서 혁신적 솔루션을 제공합니다.',
        'features' => [
            '고해상도 지구관측 (분해능 30cm)',
            '안정적인 통신 서비스',
            '정밀 항법 시스템 (오차 ±1m)',
            '위성데이터 분석 서비스'
        ],
        'specs' => [
            '운영 위성수' => '45기',
            '서비스 지역' => '전 지구',
            '해상도' => '30cm~1m',
            '신뢰성' => '99.5%'
        ],
        'image' => 'assets/business-satellite.jpg',
        'highlight' => '전 세계 150개국에 서비스 제공 중'
    ],
    [
        'id' => 'aircraft',
        'icon' => 'plane',
        'title' => '항공기술',
        'subtitle' => '미래 항공 교통 산업의 핵심 기술 개발',
        'description' => '전기항공, UAM(도시공중이동), 드론 기술 개발로 미래 항공 산업을 선도합니다.',
        'features' => [
            'UAM(도시공중이동) 개발',
            '전기항공기 엔진 기술',
            '자율비행 시스템',
            '고효율 경량화 구조'
        ],
        'specs' => [
            '개발중 항공기' => 'e-Aircraft X1',
            '순항속도' => '150~200km/h',
            '최대비행시간' => '4시간',
            '탑승인원' => '2~6명'
        ],
        'image' => 'assets/business-aircraft.jpg',
        'highlight' => '2025년 상용 운항 목표'
    ],
    [
        'id' => 'components',
        'icon' => 'gear',
        'title' => '부품 · 장비',
        'subtitle' => '우주급 품질의 항공우주 부품 공급',
        'description' => '항공우주용 부품과 장비를 국내 최고 품질로 제조·공급하여 산업 발전을 선도합니다.',
        'features' => [
            '항공우주 전문 부품',
            '국방부 인정 기술력',
            'ISO 9001 & AS9100 인증',
            '납기 준수율 100%'
        ],
        'specs' => [
            '제조품목' => '500+',
            '인증' => 'AS9100 급',
            '품질' => '0 PPM 목표',
            '고객사' => '국방부 포함 50+'
        ],
        'image' => 'assets/business-components.jpg',
        'highlight' => 'NASA 공급 경험 보유'
    ]
];

function iconSvg(string $name): string
{
    $icons = [
        'rocket' => '<path d="M22 2c-4.8.9-8.3 3.1-10.6 6.7L8 14l-4 1.8 2.2 2.2L4 22l4-2.2 2.2 2.2 1.8-4 5.3-3.4C20.9 12.3 23.1 6.8 22 2Z"/><path d="m8 14 4 4"/><circle cx="16.5" cy="7.5" r="1.8"/>',
        'satellite' => '<path d="m10 14 4-4 4 4-4 4-4-4Z"/><path d="m14 10 2.8-2.8"/><path d="M18.4 5.6 21 3"/><path d="m10 14-3.5-3.5"/><path d="M5 9 2 6"/><path d="m18 14 3 3"/><path d="m6 18-3 3"/>',
        'plane' => '<path d="M2 16 22 8l-8 8-2 6-3-5-7-1Z"/><path d="m14 16-5-5"/>',
        'gear' => '<circle cx="12" cy="12" r="3.3"/><path d="M12 2v3"/><path d="M12 19v3"/><path d="m4.9 4.9 2.1 2.1"/><path d="m17 17 2.1 2.1"/><path d="M2 12h3"/><path d="M19 12h3"/><path d="m4.9 19.1 2.1-2.1"/><path d="m17 7 2.1-2.1"/>',
        'check' => '<path d="m3 12 6 6 12-12"/>',
        'arrow' => '<path d="M5 12h14M12 5l7 7-7 7"/>',
    ];

    return '<svg viewBox="0 0 24 24" aria-hidden="true">' . ($icons[$name] ?? '') . '</svg>';
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>사업분야 | AERO SPACE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="business-page">
<header class="site-header">
    <div class="wrap header-inner">
        <a class="brand" href="index.php">
            <?= iconSvg('rocket') ?>
            <span><strong>AERO SPACE</strong><span>INNOVATION FOR THE FUTURE</span></span>
        </a>
        <nav class="nav" aria-label="주 메뉴">
            <?php foreach ($navItems as $item): ?>
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $item['label'] === '사업분야' ? 'active' : '' ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<main>
    <section class="hero plain-hero">
        <div class="wrap hero-content">
            <h1>사업분야</h1>
            <p>우주, 항공, 위성 기술로 인류의 미래를 만드는 AERO SPACE의<br>핵심 사업 분야를 소개합니다.</p>
            <a class="btn" href="contact.php">문의하기</a>
        </div>
    </section>

    <section class="business">
        <div class="wrap">
            <h2 class="section-title">사업분야</h2>
            <div class="card-grid">
                <?php foreach ($businessDivisions as $division): ?>
                    <article class="business-card">
                        <?= iconSvg($division['icon']) ?>
                        <h3><?= htmlspecialchars($division['title']) ?></h3>
                        <p><?= htmlspecialchars($division['subtitle']) ?></p>
                        <a class="more" href="#<?= $division['id'] ?>">더 알아보기&nbsp; →</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="wrap">
        <?php foreach ($businessDivisions as $division): ?>
            <section class="detail-section" id="<?= $division['id'] ?>">
                <div class="detail-header">
                    <h2><?= htmlspecialchars($division['title']) ?></h2>
                    <p><?= htmlspecialchars($division['description']) ?></p>
                    <div class="highlight"><?= htmlspecialchars($division['highlight']) ?></div>
                </div>

                <div class="detail-content">
                    <div class="detail-text">
                        <h3>주요 특징</h3>
                        <ul class="features-list">
                            <?php foreach ($division['features'] as $feature): ?>
                                <li>
                                    <?= iconSvg('check') ?>
                                    <span><?= htmlspecialchars($feature) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <h3>사양 정보</h3>
                        <table class="specs-table">
                            <tbody>
                                <?php foreach ($division['specs'] as $label => $value): ?>
                                    <tr>
                                        <th><?= htmlspecialchars($label) ?></th>
                                        <td><?= htmlspecialchars($value) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <aside class="detail-summary">
                        <strong>핵심 성과</strong>
                        <p><?= htmlspecialchars($division['highlight']) ?></p>
                        <p>상세 기술자료 및 사양은 문의해 주시면 제공해 드립니다.</p>
                    </aside>
                </div>
            </section>
        <?php endforeach; ?>
    </section>

    <section class="cta-section wrap">
        <h2>더 자세한 정보가 필요하신가요?</h2>
        <p>AERO SPACE의 각 사업분야에 대해 상담받으시려면 저희에게 연락주세요.</p>
        <a class="cta-btn" href="contact.php">문의하기 →</a>
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
            <a href="#" aria-label="Facebook" class="social-link">f</a>
            <a href="#" aria-label="YouTube" class="social-link">yt</a>
            <a href="#" aria-label="LinkedIn" class="social-link">in</a>
        </div>
    </div>
</footer>
</body>
</html>
