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

// AERO SPACE 인재상 데이터
$coreTalents = [
    ['title' => '우주적 도전정신', 'desc' => '실패를 두려워하지 않고 무한한 우주 영토를 개척해 나갈 열정적인 인재를 구합니다.'],
    ['title' => '기술적 완벽주의', 'desc' => '1%의 오차도 허용하지 않는 정밀함으로 글로벌 표준을 선도할 전문 인재를 구합니다.'],
    ['title' => '팀워크 중심의 협업', 'desc' => '다양한 분야의 전문가들과 유기적으로 소통하며 동반 성장을 주도할 융합형 인재를 구합니다.']
];

// 진행 중인 채용 공고 (메인 사업 분야와 연계)
$jobOpenings = [
    [
        'dept' => 'R&D 연구소',
        'title' => '차세대 액체 로켓 엔진 제어 시스템 설계 신입/경력 채용',
        'status' => 'D-14',
        'type' => '정규직',
        'loc' => '서울 본사'
    ],
    [
        'dept' => '위성사업부',
        'title' => '초소형/저궤도 인공위성 탑재체 및 본체 조립·평가 엔지니어',
        'status' => '상시채용',
        'type' => '정규직',
        'loc' => '우주환경시험동'
    ],
    [
        'dept' => 'AI 데이터센터',
        'title' => '위성 영상 분석 AI 딥러닝 알고리즘 및 플랫폼 개발자',
        'status' => 'D-7',
        'type' => '정규직',
        'loc' => '서울 본사'
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
    <title>채용정보 | AERO SPACE</title>
    <link rel="stylesheet" href="style.css?v=6">
    <style>
        /* 채용 전용 목록 스타일 */
        .job-list { display: flex; flex-direction: column; gap: 16px; margin-top: 30px; }
        .job-item { background: #fff; padding: 24px 30px; border-radius: 8px; border: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center; transition: all 0.2s; text-decoration: none; color: inherit; }
        .job-item:hover { border-color: #1f83ff; transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.04); }
        .job-info-left { display: flex; flex-direction: column; gap: 8px; }
        .job-dept { font-size: 13px; font-weight: 700; color: #1f83ff; }
        .job-title { font-size: 18px; font-weight: 800; color: #111827; margin: 0; }
        .job-meta { font-size: 14px; color: #64748b; display: flex; gap: 16px; }
        .job-status { font-size: 13px; font-weight: 800; background: #ef4444; color: #fff; padding: 6px 12px; border-radius: 20px; text-align: center; min-width: 60px; }
        .job-status.always { background: #10b981; }
        @media (max-width: 768px) {
            .job-item { flex-direction: column; align-items: flex-start; gap: 16px; padding: 20px; }
            .job-status { align-self: flex-end; }
        }
    </style>
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
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $item['label'] === '채용' ? 'active' : '' ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<main>
    <!-- 1. 와이드 탑 비주얼 -->
    <section class="kai-hero-fixed">
        <div class="kai-hero-inner-fixed">
            <span class="sub-tag-fixed">CAREER OPPORTUNITIES</span>
            <h1 class="title-fixed">우주 경제 시대를 함께 열어갈 동반자를 찾습니다</h1>
            <p class="desc-fixed">AERO SPACE는 무한한 가능성을 지닌 인재들과 함께 대한민국의 우주 영토를 넓혀나갑니다.</p>
        </div>
    </section>

    <!-- 2. 인재상 섹션 (3열 카드 레이아웃 활용) -->
    <section class="kai-vision-section" style="background: #fff;">
        <div class="wrap">
            <div class="kai-title-block">
                <span class="kai-section-tag">TALENT MODEL</span>
                <h2>우리의 인재상</h2>
            </div>
            <div class="kai-vision-grid">
                <?php foreach ($coreTalents as $index => $talent): ?>
                    <div class="kai-vision-card" style="border-radius: 12px; border-bottom: 4px solid #0b1b2c;">
                        <span class="card-idx" style="font-size: 24px;">0<?= $index + 1 ?></span>
                        <h3 style="font-size: 20px; margin: 12px 0 14px 0;"><?= htmlspecialchars($talent['title']) ?></h3>
                        <p style="font-size: 14px; line-height: 1.7; color: #4b5563;"><?= htmlspecialchars($talent['desc']) ?></p>                        
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. 채용 공고 섹션 -->
    <section class="kai-vision-section" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
        <div class="wrap">
            <div class="kai-title-block">
                <span class="kai-section-tag">JOB OPENINGS</span>
                <h2>현재 진행 중인 채용</h2>
            </div>

            <div class="job-list">
                <?php foreach ($jobOpenings as $job): ?>
                    <a href="#" class="job-item" onclick="alert('지원서 접수 시스템 준비 중입니다.'); return false;">
                        <div class="job-info-left">
                            <span class="job-dept"><?= htmlspecialchars($job['dept']) ?></span>
                            <h3 class="job-title"><?= htmlspecialchars($job['title']) ?></h3>
                            <div class="job-meta">
                                <span>💼 <?= htmlspecialchars($job['type']) ?></span>
                                <span>📍 <?= htmlspecialchars($job['loc']) ?></span>
                            </div>
                        </div>
                        <span class="job-status <?= $job['status'] === '상시채용' ? 'always' : '' ?>">
                            <?= htmlspecialchars($job['status']) ?>
                        </span>
                    </a>
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