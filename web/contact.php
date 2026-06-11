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

function iconSvg(string $name): string
{
    $icons = [
        'rocket' => '<path d="M22 2c-4.8.9-8.3 3.1-10.6 6.7L8 14l-4 1.8 2.2 2.2L4 22l4-2.2 2.2 2.2 1.8-4 5.3-3.4C20.9 12.3 23.1 6.8 22 2Z"/><path d="m8 14 4 4"/><circle cx="16.5" cy="7.5" r="1.8"/>',
        'download' => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>'
    ];
    return '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($icons[$name] ?? '') . '</svg>';
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT | AERO SPACE</title>
    <link rel="stylesheet" href="style.css?v=5">
    <style>
        /* Contact 전용 마이너 스타일 보완 */
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-size: 14px; font-weight: 700; color: #374151; margin-bottom: 8px; }
        .form-control { width: 100%; padding: 12px 16px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 14px; box-sizing: border-box; background: #fff; transition: border-color 0.2s; }
        .form-control:focus { outline: none; border-color: #1f83ff; }
        .btn-submit { width: 100%; padding: 14px; background: #1f83ff; color: #fff; border: none; border-radius: 6px; font-size: 15px; font-weight: 700; cursor: pointer; transition: background 0.2s; }
        .btn-submit:hover { background: #0066df; }
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
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $item['label'] === 'CONTACT' ? 'active' : '' ?>"><?= htmlspecialchars($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<main>
    <!-- 1. 와이드 탑 비주얼 -->
    <section class="kai-hero-fixed">
        <div class="kai-hero-inner-fixed">
            <span class="sub-tag-fixed">CONTACT US</span>
            <h1 class="title-fixed">글로벌 파트너십을 위한 소통의 시작</h1>
            <p class="desc-fixed">AERO SPACE는 언제나 열려있습니다. 기술 협력, 비즈니스 제휴 및 보도 문의 등 다양한 의견을 기다립니다.</p>
        </div>
    </section>

    <!-- 2. 본문 스플릿 레이아웃 (좌측: 정보/지도, 우측: 문의하기 폼) -->
    <section class="kai-intro-section" style="background: #fff; border-bottom: none;">
        <div class="wrap">
            <div class="kai-grid-2col" style="gap: 60px;">
                
                <!-- 좌측 영역: 오시는 길 & 본사 정보 -->
                <div class="kai-intro-left">
                    <span class="kai-section-tag">LOCATION</span>
                    <h2 style="font-size: 28px; margin-bottom: 24px;">오시는 길</h2>
                    
                    <!-- 더미 지도 그래픽 영역 (대기업 스타일) -->
                    <div style="width: 100%; height: 260px; background: #edf2f7; border-radius: 8px; margin-bottom: 30px; display: flex; flex-direction: column; align-items: center; justify-content: center; border: 1px solid #e2e8f0; position: relative; overflow: hidden;">
                        <!-- 실제 지도가 들어갈 영역임을 표시하는 임시 그래픽 효과 -->
                        <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(rgba(31,131,255,0.05), rgba(31,131,255,0.02));"></div>
                        <span style="font-size: 32px; margin-bottom: 10px;">📍</span>
                        <span style="font-size: 15px; font-weight: 700; color: #1e293b;">테헤란로 대형 정밀 지도 영역</span>
                        <span style="font-size: 13px; color: #64748b; margin-top: 4px;">Kakao / Google Map API 연동 구간</span>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 16px; font-size: 15px; color: #4b5563; border-top: 1px solid #e5e7eb; padding-top: 24px;">
                        <div><strong style="color: #111827; display: inline-block; width: 80px;">주소</strong> 서울특별시 강남구 테헤란로 123, 10층</div>
                        <div><strong style="color: #111827; display: inline-block; width: 80px;">대표전화</strong> Tel. 02-1234-5678</div>
                        <div><strong style="color: #111827; display: inline-block; width: 80px;">팩스</strong> Fax. 02-1234-5679</div>
                        <div><strong style="color: #111827; display: inline-block; width: 80px;">이메일</strong> info@aerospace.co.kr</div>
                    </div>
                </div>

                <!-- 우측 영역: 문의 양식 (Inquiry Form) -->
                <div class="kai-intro-right" style="margin:0;">
                    <span class="kai-section-tag">ONLINE INQUIRY</span>
                    <h2 style="font-size: 28px; margin-bottom: 24px; font-weight: 800; color: #0b1b2c;">문의하기</h2>
                    
                    <form action="#" method="post" onsubmit="alert('문의가 정상적으로 접수되었습니다.'); return false;">
                        <div class="form-group">
                            <label for="inquiry_type">문의 유형</label>
                            <select id="inquiry_type" class="form-control" style="height: 45px;">
                                <option>비즈니스 / 기술 제휴 제안</option>
                                <option>보도 보도자료 / 미디어 인터뷰 문의</option>
                                <option>기타 일반 문의</option>
                            </select>
                        </div>
                        <div class="form-group" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                            <div>
                                <label for="user_name">담당자명</label>
                                <input type="text" id="user_name" class="form-control" placeholder="성함을 입력하세요" required>
                            </div>
                            <div>
                                <label for="user_email">이메일 주소</label>
                                <input type="email" id="user_email" class="form-control" placeholder="example@domain.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">제목</label>
                            <input type="text" id="subject" class="form-control" placeholder="문의 제목을 입력하세요" required>
                        </div>
                        <div class="form-group">
                            <label for="message">문의 내용</label>
                            <textarea id="message" class="form-control" rows="5" placeholder="프로젝트 내용이나 상세 협업 제안을 적어주세요." style="resize: none;" required></textarea>
                        </div>
                        <div style="margin-bottom: 24px; display: flex; align-items: center; gap: 8px;">
                            <input type="checkbox" id="agree" required style="width: 16px; height: 16px; cursor: pointer;">
                            <label for="agree" style="margin: 0; font-size: 13px; color: #64748b; font-weight: 500; cursor: pointer;">개인정보 수집 및 이용약관에 동의합니다.</label>
                        </div>
                        <button type="submit" class="btn-submit">온라인 문의 접수</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. 메인 하단의 [보도용 이미지 다운로드] 위젯 컴포넌트 기능화 섹션 -->
    <section class="kai-stats-section" style="padding: 50px 0; background: #0b1b2c;">
        <div class="wrap" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 24px;">
            <div>
                <h3 style="margin: 0 0 6px 0; font-size: 20px; font-weight: 800; color: #fff;">보도자료 미디어 킷 (Media Kit)</h3>
                <p style="margin: 0; font-size: 14px; color: #94a3b8;">AERO SPACE의 공식 고해상도 이미지 및 프레스 로고 팩을 다운로드할 수 있습니다.</p>
            </div>
            <a href="#" class="btn-submit" style="width: auto; padding: 12px 24px; background: #1e293b; color: #fff; border: 1px solid #334155; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 14px;" onclick="alert('미디어킷 다운로드가 시작됩니다.'); return false;">
                <?= iconSvg('download') ?>
                <span>보도용 이미지 다운로드</span>
            </a>
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