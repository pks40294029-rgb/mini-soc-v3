<?php
header('Content-Type: text/html; charset=UTF-8');

$message = '';
$messageType = 'info';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = trim($_POST['user_id'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($userId === '' || $password === '') {
        $message = '아이디와 비밀번호를 모두 입력하세요.';
        $messageType = 'error';
    } else {
        $message = '로그인 처리 예시입니다. 실제 사용 시 DB 인증을 연결하세요.';
        $messageType = 'info';
    }
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function rocketIcon(): string
{
    return '<svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c2.3 1 4.5 3.2 5.5 5.5L20 5l1 4-3 1.5c.1 2-.5 4-2 5.5l-4 4-2-5-5-2 4-4c1.5-1.5 3.5-2.1 5.5-2L16 4l-4 1z"/><path d="M7 17c-1.8.4-3 1.4-4 4 2.6-1 3.6-2.2 4-4z"/><circle cx="15" cy="8" r="1.5"/></svg>';
}
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>로그인 | AERO SPACE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
<header class="topbar">
        <div class="wrap">
            <a class="logo" href="index.php">
                <?= rocketIcon() ?>
                <span><strong>AERO SPACE</strong><span>INNOVATION FOR THE FUTURE</span></span>
            </a>
            <nav class="nav" aria-label="주요 메뉴">
                <a href="index.php">HOME</a>
                <a href="business.php">사업분야</a>
                <a href="innovation.php">기술혁신</a>
                <a href="contact.php">CONTACT</a>
            </nav>
        </div>
    </header>

    <main class="wrap login-section">
        <section class="intro">
            <h1>항공우주 프로젝트를<br>더 안전하게 관리하세요.</h1>
            <p>AERO SPACE 회원 전용 포털에서 프로젝트 자료, 기술 문서, 공지사항과 문의 내역을 한 곳에서 확인할 수 있습니다.</p>
        </section>

        <section class="login-card" aria-labelledby="login-title">
            <h2 id="login-title">로그인</h2>
            <p>계정 정보를 입력하여 AERO SPACE 포털에 접속하세요.</p>
            <?php if ($message !== ''): ?>
                <div class="notice <?= e($messageType) ?>"><?= e($message) ?></div>
            <?php endif; ?>
            <form action="login.php" method="post">
                            <div class="field">
                    <label for="user-id">아이디</label>
                    <input id="user-id" name="user_id" type="text" placeholder="아이디를 입력하세요" autocomplete="username" required>
                </div>
                <div class="field">
                    <label for="password">비밀번호</label>
                    <input id="password" name="password" type="password" placeholder="비밀번호를 입력하세요" autocomplete="current-password" required>
                </div>
                <div class="row">
                    <label class="check" for="remember">
                        <input id="remember" name="remember" type="checkbox">
                        아이디 저장
                    </label>
                    <a href="#">아이디/비밀번호 찾기</a>
                </div>
                <button class="submit" type="submit">로그인</button>
            </form>
            <div class="signup">아직 계정이 없으신가요? <a href="#">회원가입</a></div>
        </section>
    </main>
</body>
</html>

