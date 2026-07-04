<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 / 회원가입 | 구구케어서비스</title>
  <meta name="description" content="구구케어서비스 회원 로그인 및 회원가입 페이지입니다.">
  <meta property="og:title" content="로그인 / 회원가입 | 구구케어서비스">
  <meta property="og:description" content="구구케어서비스 회원 로그인 및 회원가입 페이지입니다.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://99care.co.kr/login.php">
  <meta property="og:image" content="http://99care.co.kr/img/og-image.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name" content="구구케어서비스">
  <meta property="og:locale" content="ko_KR">

  <link rel="canonical" href="https://99care.co.kr/login.php">

  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="manifest" href="/site.webmanifest" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&family=Montserrat:wght@600;700&display=swap');
    *{margin:0;padding:0;box-sizing:border-box;}
    :root{--navy:#0B2D5E;--navy-mid:#1B4F8A;--accent:#2176D8;--blue-light:#E6F1FB;--gray-f:#f7f8fa;--gray-e:#eef0f3;--gray-text:#6b7280;--dark:#111827;}
    body{font-family:'Noto Sans KR',sans-serif;background:var(--gray-f);color:var(--dark);}

    nav{background:var(--navy);padding:0 32px;display:flex;align-items:center;justify-content:space-between;height:60px;}
    .logo{font-family:'Montserrat',sans-serif;font-weight:700;font-size:18px;color:#fff;letter-spacing:1px;text-decoration:none;}
    .logo span{color:#7EC8F4;}
    .nav-home{color:rgba(255,255,255,0.7);font-size:13px;text-decoration:none;}
    .nav-home:hover{color:#fff;}

    .page-wrap{min-height:calc(100vh - 60px);display:flex;align-items:center;justify-content:center;padding:40px 20px;}

    .auth-card{background:#fff;border-radius:12px;border:0.5px solid var(--gray-e);width:100%;max-width:460px;overflow:hidden;}
    .auth-tabs{display:flex;border-bottom:1.5px solid var(--gray-e);}
    .auth-tab{flex:1;padding:16px;font-size:15px;font-weight:500;text-align:center;cursor:pointer;color:var(--gray-text);background:none;border:none;font-family:'Noto Sans KR',sans-serif;border-bottom:2px solid transparent;margin-bottom:-1.5px;transition:color 0.15s;}
    .auth-tab.active{color:var(--navy);border-bottom:2px solid var(--accent);}

    .auth-body{padding:36px 40px;}

    .form-group{margin-bottom:18px;}
    .form-label{display:block;font-size:13px;font-weight:500;color:var(--dark);margin-bottom:7px;}
    .form-input{width:100%;height:44px;border:1px solid var(--gray-e);border-radius:6px;padding:0 14px;font-size:14px;font-family:'Noto Sans KR',sans-serif;color:var(--dark);background:#fff;outline:none;transition:border-color 0.15s;}
    .form-input:focus{border-color:var(--accent);}
    .form-input::placeholder{color:#b0b8c1;}

    .form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px;}
    .form-hint{font-size:11px;color:var(--gray-text);margin-top:5px;}

    .form-divider{display:flex;align-items:center;gap:12px;margin:22px 0;}
    .form-divider::before,.form-divider::after{content:'';flex:1;height:0.5px;background:var(--gray-e);}
    .form-divider span{font-size:12px;color:var(--gray-text);}

    .btn-full{width:100%;height:46px;border-radius:6px;font-size:15px;font-weight:500;font-family:'Noto Sans KR',sans-serif;cursor:pointer;transition:opacity 0.15s;}
    .btn-primary{background:var(--accent);color:#fff;border:none;}
    .btn-primary:hover{opacity:0.9;}
    .btn-outline{background:#fff;color:var(--navy);border:1px solid var(--gray-e);margin-top:10px;}
    .btn-outline:hover{background:var(--blue-light);}

    .forgot{text-align:right;margin-top:-10px;margin-bottom:18px;}
    .forgot a{font-size:12px;color:var(--accent);text-decoration:none;}
    .forgot a:hover{text-decoration:underline;}

    .agree-group{background:var(--gray-f);border-radius:6px;padding:14px;margin-bottom:18px;}
    .agree-item{display:flex;align-items:center;gap:8px;margin-bottom:8px;}
    .agree-item:last-child{margin-bottom:0;}
    .agree-item input[type=checkbox]{width:16px;height:16px;accent-color:var(--accent);cursor:pointer;flex-shrink:0;}
    .agree-item label{font-size:13px;color:var(--dark);cursor:pointer;}
    .agree-item label a{color:var(--accent);text-decoration:none;}
    .agree-item label a:hover{text-decoration:underline;}
    .agree-all{border-bottom:0.5px solid var(--gray-e);padding-bottom:10px;margin-bottom:10px;}
    .agree-all label{font-weight:500;}

    .panel{display:none;}
    .panel.active{display:block;}
  </style>
</head>
<body>

<nav>
  <a href="index.php" class="logo">99<span>CARE</span> SERVICE</a>
  <a href="index.php" class="nav-home">홈으로 →</a>
</nav>

<div class="page-wrap">
  <div class="auth-card">
    <div class="auth-tabs">
      <button class="auth-tab active" onclick="switchAuth('login')">로그인</button>
      <button class="auth-tab" onclick="switchAuth('register')">회원가입</button>
    </div>

    <!-- 로그인 -->
    <div id="panel-login" class="auth-body panel active">
      <div class="form-group">
        <label class="form-label">아이디 (이메일)</label>
        <input type="email" class="form-input" placeholder="example@email.com">
      </div>
      <div class="form-group">
        <label class="form-label">비밀번호</label>
        <input type="password" class="form-input" placeholder="비밀번호를 입력하세요">
      </div>
      <div class="forgot"><a href="#">비밀번호 찾기</a></div>
      <button class="btn-full btn-primary">로그인</button>
      <div class="form-divider"><span>또는</span></div>
      <button class="btn-full btn-outline" onclick="switchAuth('register')">회원가입하기</button>
    </div>

    <!-- 회원가입 -->
    <div id="panel-register" class="auth-body panel">
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">이름</label>
          <input type="text" class="form-input" placeholder="홍길동">
        </div>
        <div class="form-group">
          <label class="form-label">연락처</label>
          <input type="tel" class="form-input" placeholder="010-0000-0000">
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">이메일 (아이디)</label>
        <input type="email" class="form-input" placeholder="example@email.com">
      </div>
      <div class="form-group">
        <label class="form-label">비밀번호</label>
        <input type="password" class="form-input" placeholder="영문, 숫자 포함 8자 이상">
        <div class="form-hint">영문, 숫자, 특수문자 포함 8자 이상</div>
      </div>
      <div class="form-group">
        <label class="form-label">비밀번호 확인</label>
        <input type="password" class="form-input" placeholder="비밀번호를 다시 입력하세요">
      </div>
      <div class="form-group">
        <label class="form-label">치과명 <span style="font-weight:400;color:var(--gray-text);">(선택)</span></label>
        <input type="text" class="form-input" placeholder="ex) 서울치과의원">
      </div>
      <div class="agree-group">
        <div class="agree-item agree-all">
          <input type="checkbox" id="agree-all">
          <label for="agree-all">전체 동의</label>
        </div>
        <div class="agree-item">
          <input type="checkbox" id="agree1">
          <label for="agree1">[필수] <a href="#">이용약관</a> 동의</label>
        </div>
        <div class="agree-item">
          <input type="checkbox" id="agree2">
          <label for="agree2">[필수] <a href="#">개인정보처리방침</a> 동의</label>
        </div>
        <div class="agree-item">
          <input type="checkbox" id="agree3">
          <label for="agree3">[선택] 마케팅 정보 수신 동의</label>
        </div>
      </div>
      <button class="btn-full btn-primary">가입하기</button>
    </div>
  </div>
</div>

<script>
  function switchAuth(tab) {
    document.querySelectorAll('.auth-tab').forEach((t, i) => {
      t.classList.toggle('active', (tab === 'login' && i === 0) || (tab === 'register' && i === 1));
    });
    document.querySelectorAll('.panel').forEach(p => p.classList.remove('active'));
    document.getElementById('panel-' + tab).classList.add('active');
  }

  const allCheck = document.getElementById('agree-all');
  const checks = ['agree1', 'agree2', 'agree3'].map(id => document.getElementById(id));
  allCheck.addEventListener('change', () => checks.forEach(c => c.checked = allCheck.checked));
  checks.forEach(c => c.addEventListener('change', () => allCheck.checked = checks.every(c => c.checked)));
</script>

</body>
</html>