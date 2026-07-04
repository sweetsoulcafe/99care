<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회사소개 | 구구케어서비스</title>
  <meta name="description" content="구구케어서비스는 공식 등록 의료기기 수리업체이자 치과 기자재 토탈 솔루션 전문 업체입니다.">
  <meta property="og:title" content="회사소개 | 구구케어서비스">
  <meta property="og:description" content="구구케어서비스는 공식 등록 의료기기 수리업체이자 치과 기자재 토탈 솔루션 전문 업체입니다.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://99care.co.kr/about.php">
  <meta property="og:image" content="http://99care.co.kr/img/og-image.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name" content="구구케어서비스">
  <meta property="og:locale" content="ko_KR">

  <link rel="canonical" href="https://99care.co.kr/about.php">

  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="manifest" href="/site.webmanifest" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&family=Montserrat:wght@400;600;700&display=swap');
    *{margin:0;padding:0;box-sizing:border-box;}
    :root{--navy:#0B2D5E;--navy-mid:#1B4F8A;--accent:#2176D8;--blue-light:#E6F1FB;--gray-f:#f7f8fa;--gray-e:#eef0f3;--gray-text:#6b7280;--dark:#111827;}
    body{font-family:'Noto Sans KR',sans-serif;color:var(--dark);background:#fff;}

    /* NAV */
    nav{background:var(--navy);padding:0 32px;display:flex;align-items:center;justify-content:space-between;height:60px;position:sticky;top:0;z-index:100;flex-wrap:nowrap;}
    .logo{font-family:'Montserrat',sans-serif;font-weight:700;font-size:18px;color:#fff;letter-spacing:1px;text-decoration:none;}
    .logo span{color:#7EC8F4;}
    .nav-menu{display:flex;gap:28px;list-style:none;}
    .nav-menu li{position:relative;}
    .nav-menu li a{color:rgba(255,255,255,0.85);font-size:13px;text-decoration:none;font-weight:400;}
    .nav-menu li a:hover,.nav-menu li a.active{color:#fff;}
    .nav-menu li ul{display:none;position:absolute;top:100%;left:0;background:#fff;min-width:140px;border-top:2px solid var(--accent);box-shadow:0 4px 12px rgba(0,0,0,0.1);z-index:100;list-style:none;padding:6px 0;}
    .nav-menu li:hover ul{display:block;}
    .nav-menu li ul li a{color:var(--dark);font-size:13px;display:block;padding:9px 16px;font-weight:400;}
    .nav-menu li ul li a:hover{background:var(--blue-light);color:var(--navy);}
    .nav-auth{display:flex;gap:8px;align-items:center;}
    .nav-login{background:transparent;color:rgba(255,255,255,0.8);border:1px solid rgba(255,255,255,0.4);padding:7px 14px;border-radius:4px;font-size:12px;font-family:'Noto Sans KR',sans-serif;cursor:pointer;}
    .nav-btn{background:var(--accent);color:#fff;border:none;padding:8px 18px;border-radius:4px;font-size:13px;font-family:'Noto Sans KR',sans-serif;cursor:pointer;font-weight:500;}
    .hamburger{display:none;flex-direction:column;gap:5px;cursor:pointer;background:none;border:none;padding:4px;}
    .hamburger span{display:block;width:22px;height:2px;background:#fff;border-radius:2px;}
    .mobile-menu{display:none;position:fixed;top:60px;left:0;right:0;background:var(--navy);z-index:999;padding:8px 0;border-top:1px solid rgba(255,255,255,0.1);}
    .mobile-menu.open{display:block;}
    .mobile-menu a{display:block;padding:13px 24px;color:rgba(255,255,255,0.85);font-size:15px;text-decoration:none;border-bottom:1px solid rgba(255,255,255,0.07);}
    .mobile-menu a:hover{background:rgba(255,255,255,0.07);}
    .mobile-menu .sub-link{padding-left:36px;font-size:14px;color:rgba(255,255,255,0.6);}

    /* PAGE HERO */
    .page-hero{background:var(--navy);padding:56px;position:relative;overflow:hidden;}
    .page-hero::after{content:'ABOUT';position:absolute;right:40px;top:50%;transform:translateY(-50%);font-family:'Montserrat',sans-serif;font-size:80px;font-weight:700;color:rgba(255,255,255,0.04);letter-spacing:4px;}
    .eyebrow{font-family:'Montserrat',sans-serif;font-size:11px;font-weight:600;color:#7EC8F4;letter-spacing:3px;margin-bottom:10px;}
    .page-hero h1{font-size:28px;font-weight:700;color:#fff;}
    .page-hero p{font-size:14px;color:rgba(255,255,255,0.65);margin-top:8px;line-height:1.8;}

    /* 인사말 */
    .greeting{padding:72px 56px;display:flex;gap:64px;align-items:center;background:#fff;}
    .greeting-text{flex:1.2;}
    .greeting-text .eyebrow{color:var(--accent);}
    .greeting-text h2{font-size:26px;font-weight:700;color:var(--navy);line-height:1.4;margin:10px 0 20px;}
    .greeting-text p{font-size:14px;color:var(--dark);line-height:2;margin-bottom:12px;}
    .greeting-text .ceo{margin-top:28px;padding-top:20px;border-top:1px solid var(--gray-e);font-size:14px;color:var(--gray-text);}
    .greeting-text .ceo strong{color:var(--navy);font-size:16px;display:block;margin-top:4px;}
    .greeting-img{flex:1;background:var(--blue-light);border-radius:12px;height:320px;display:flex;align-items:center;justify-content:center;color:var(--gray-text);font-size:13px;}

    /* 회사 정보 */
    .company-info{background:var(--gray-f);padding:72px 56px;}
    .company-info h2{font-size:24px;font-weight:700;color:var(--navy);margin:10px 0 36px;}
    .info-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:0;border:1px solid var(--gray-e);border-radius:8px;overflow:hidden;background:#fff;}
    .info-row{display:contents;}
    .info-label{background:var(--navy);color:#fff;font-size:13px;font-weight:500;padding:16px 24px;border-bottom:1px solid rgba(255,255,255,0.1);}
    .info-value{background:#fff;font-size:14px;color:var(--dark);padding:16px 24px;border-bottom:1px solid var(--gray-e);}

    /* 핵심 가치 */
    .values{padding:72px 56px;background:#fff;}
    .values h2{font-size:24px;font-weight:700;color:var(--navy);margin:10px 0 36px;}
    .values-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
    .value-card{background:var(--gray-f);border-radius:10px;padding:32px 28px;border-bottom:3px solid var(--accent);}
    .value-num{font-family:'Montserrat',sans-serif;font-size:28px;font-weight:700;color:var(--blue-light);margin-bottom:12px;}
    .value-title{font-size:16px;font-weight:700;color:var(--navy);margin-bottom:10px;}
    .value-desc{font-size:13px;color:var(--gray-text);line-height:1.8;}

    /* 연혁 */
    .history{background:var(--navy);padding:72px 56px;}
    .history h2{font-size:24px;font-weight:700;color:#fff;margin:10px 0 48px;}
    .timeline{position:relative;padding-left:32px;}
    .timeline::before{content:'';position:absolute;left:0;top:0;bottom:0;width:2px;background:rgba(255,255,255,0.15);}
    .timeline-item{position:relative;margin-bottom:36px;}
    .timeline-item:last-child{margin-bottom:0;}
    .timeline-dot{position:absolute;left:-39px;top:4px;width:14px;height:14px;border-radius:50%;background:var(--accent);border:2px solid #fff;}
    .timeline-year{font-family:'Montserrat',sans-serif;font-size:13px;font-weight:600;color:#7EC8F4;margin-bottom:6px;}
    .timeline-title{font-size:15px;font-weight:700;color:#fff;margin-bottom:4px;}
    .timeline-desc{font-size:13px;color:rgba(255,255,255,0.6);line-height:1.7;}

    /* 인증/자격 */
    .certs{padding:72px 56px;background:var(--gray-f);}
    .certs h2{font-size:24px;font-weight:700;color:var(--navy);margin:10px 0 36px;}
    .cert-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
    .cert-card{background:#fff;border-radius:10px;padding:28px 24px;border:1px solid var(--gray-e);display:flex;align-items:flex-start;gap:16px;}
    .cert-icon{width:48px;height:48px;background:var(--blue-light);border-radius:8px;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-size:22px;}
    .cert-title{font-size:15px;font-weight:700;color:var(--navy);margin-bottom:6px;}
    .cert-desc{font-size:13px;color:var(--gray-text);line-height:1.7;}

    /* FOOTER */
    footer{background:var(--navy);padding:36px 56px;color:rgba(255,255,255,0.6);font-size:12px;line-height:2;}
    .footer-top{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:20px;padding-bottom:20px;border-bottom:1px solid rgba(255,255,255,0.1);}
    .footer-logo{font-family:'Montserrat',sans-serif;font-weight:700;font-size:16px;color:#fff;}
    .footer-logo span{color:#7EC8F4;}
    .footer-links{display:flex;gap:20px;}
    .footer-links a{color:rgba(255,255,255,0.6);text-decoration:none;font-size:12px;}
    .footer-copy{font-size:11px;color:rgba(255,255,255,0.4);}

    /* 모바일 */
    @media (max-width: 768px) {
      nav{padding:0 12px;height:60px;gap:8px;}
      .nav-menu{display:none;}
      .hamburger{display:flex;}
      .nav-auth{gap:4px;}
      .nav-login{font-size:10px;padding:5px 8px;white-space:nowrap;}
      .nav-btn{font-size:10px;padding:5px 10px;white-space:nowrap;}
      .page-hero{padding:36px 20px;}
      .page-hero h1{font-size:22px;}
      .page-hero::after{font-size:40px;}
      .greeting{flex-direction:column;padding:40px 20px;gap:32px;}
      .greeting-img{width:100%;height:200px;}
      .company-info{padding:40px 20px;}
      .info-grid{grid-template-columns:1fr;}
      .values{padding:40px 20px;}
      .values-grid{grid-template-columns:1fr;gap:14px;}
      .history{padding:40px 20px;}
      .certs{padding:40px 20px;}
      .cert-grid{grid-template-columns:1fr;gap:14px;}
      footer{padding:24px 20px;}
      .footer-top{flex-direction:column;gap:12px;}
    }
  </style>
</head>
<body>

<nav>
  <a href="index.php" class="logo">99<span>CARE</span> SERVICE</a>
  <ul class="nav-menu">
    <li><a href="about.php" class="active">회사소개</a></li>
    <li><a href="products.php">제품소개</a></li>
    <li>
      <a href="#">게시판</a>
      <ul>
        <li><a href="#">공지사항</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Q&amp;A</a></li>
      </ul>
    </li>
  </ul>
  <div class="nav-auth">
    <button class="nav-login" onclick="location.href='login.php'">로그인 / 회원가입</button>
    <button class="nav-btn">문의하기</button>
  </div>
  <button class="hamburger" onclick="toggleMenu()" aria-label="메뉴">
    <span></span><span></span><span></span>
  </button>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <a href="about.php">회사소개</a>
  <a href="products.php">제품소개</a>
  <a href="#">게시판</a>
  <a href="#" class="sub-link">공지사항</a>
  <a href="#" class="sub-link">FAQ</a>
  <a href="#" class="sub-link">Q&amp;A</a>
  <a href="login.php">로그인 / 회원가입</a>
</div>

<!-- 페이지 히어로 -->
<div class="page-hero">
  <div class="eyebrow">ABOUT US</div>
  <h1>회사소개</h1>
  <p>누구보다 원장님의 입장을 잘 아는 파트너, 구구케어서비스입니다.</p>
</div>

<!-- 인사말 -->
<div class="greeting">
  <div class="greeting-text">
    <div class="eyebrow">CEO MESSAGE</div>
    <h2>원장님의 든든한<br>치과 기자재 토탈 파트너</h2>
    <p>누구보다 원장님의 입장을 잘 아는 파트너, 공식 등록 의료기기 수리업체 구구케어서비스입니다.</p>
<p>치과 기자재 토탈 솔루션 구구케어서비스는 매일 반복되는 바쁜 진료 속에서 기자재 관리와 재료 수급,<br> 
그리고 혹시 모를 장비 고장 리스크까지 홀로 감당하셔야 했던 원장님의 번거로움을 깊이 공감합니다.</p> 
<p>당사의 서비스는 철저히 원장님의 입장을 대변하는 마음에서 출발했습니다.</p>
<p>구구케어서비스는 정식 등록된 전문 의료기기 수리업체이자, 보험 가입 업체입니다. </p>
<p>검증된 기술력과 정품 부품만을 사용하여 원내 모든 장비를 관리하며, 
만에 하나 발생할 수 있는 작업 중 사고나 문제까지 사전에 완벽히 대비해 원장님의 부담을 최소한으로 만듭니다. </p>
<p>제품 선택의 고민부터 까다로운 장비 수리와 리스크 관리까지, 원장님이 겪으시는 모든 불편함을  완벽하게  해결하겠습니다.</p>
    <div class="ceo">
      구구케어서비스 대표이사
      <strong>대표자명 <!-- 클라이언트 자료 수신 후 업데이트 --></strong>
    </div>
  </div>
  <div class="greeting-img">
    대표 사진 <!-- 클라이언트 자료 수신 후 업데이트 -->
  </div>
</div>

<!-- 회사 정보 -->
<div class="company-info">
  <div class="eyebrow">COMPANY INFO</div>
  <h2>회사 정보</h2>
  <div class="info-grid">
    <div class="info-label">상호명</div>
    <div class="info-value">구구케어서비스</div>
    <div class="info-label">대표자</div>
    <div class="info-value">업데이트 예정</div>
    <div class="info-label">설립연도</div>
    <div class="info-value">업데이트 예정</div>
    <div class="info-label">사업자등록번호</div>
    <div class="info-value">업데이트 예정</div>
    <div class="info-label">주소</div>
    <div class="info-value">업데이트 예정</div>
    <div class="info-label">전화</div>
    <div class="info-value">업데이트 예정</div>
    <div class="info-label">이메일</div>
    <div class="info-value">업데이트 예정</div>
    <div class="info-label">홈페이지</div>
    <div class="info-value">https://99care.co.kr</div>
  </div>
</div>

<!-- 핵심 가치 -->
<div class="values">
  <div class="eyebrow">OUR VALUES</div>
  <h2>구구케어서비스의 핵심 가치</h2>
  <div class="values-grid">
    <div class="value-card">
      <div class="value-num">01</div>
      <div class="value-title">전문성</div>
      <div class="value-desc">공식 등록된 전문 의료기기 수리업체로서 검증된 기술력과 정품 부품만을 사용합니다.</div>
    </div>
    <div class="value-card">
      <div class="value-num">02</div>
      <div class="value-title">신뢰성</div>
      <div class="value-desc">보험 가입 업체로서 작업 중 발생할 수 있는 모든 사고를 사전에 완벽히 대비합니다.</div>
    </div>
    <div class="value-card">
      <div class="value-num">03</div>
      <div class="value-title">고객 중심</div>
      <div class="value-desc">원장님의 입장을 대변하는 마음으로 모든 불편함을 완벽하게 해결하겠습니다.</div>
    </div>
  </div>
</div>

<!-- 연혁 -->
<div class="history">
  <div class="eyebrow" style="color:#7EC8F4;">HISTORY</div>
  <h2>회사 연혁</h2>
  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-year">업데이트 예정</div>
      <div class="timeline-title">구구케어서비스 설립</div>
      <div class="timeline-desc">클라이언트 자료 수신 후 업데이트 예정입니다.</div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-year">업데이트 예정</div>
      <div class="timeline-title">의료기기 수리업 공식 등록</div>
      <div class="timeline-desc">클라이언트 자료 수신 후 업데이트 예정입니다.</div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-year">업데이트 예정</div>
      <div class="timeline-title">사업 보험 가입</div>
      <div class="timeline-desc">클라이언트 자료 수신 후 업데이트 예정입니다.</div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-year">2026</div>
      <div class="timeline-title">홈페이지 오픈</div>
      <div class="timeline-desc">구구케어서비스 공식 홈페이지 오픈.</div>
    </div>
  </div>
</div>

<!-- 인증/자격 -->
<div class="certs">
  <div class="eyebrow">CERTIFICATION</div>
  <h2>인증 및 자격</h2>
  <div class="cert-grid">
    <div class="cert-card">
      <div class="cert-icon">🏥</div>
      <div>
        <div class="cert-title">공식 의료기기 수리업체</div>
        <div class="cert-desc">정식 등록된 전문 의료기기 수리업체로 검증된 기술력을 보유하고 있습니다.</div>
      </div>
    </div>
    <div class="cert-card">
      <div class="cert-icon">🛡️</div>
      <div>
        <div class="cert-title">사업 보험 가입 업체</div>
        <div class="cert-desc">작업 중 발생할 수 있는 사고까지 보험으로 완벽 대비하여 원장님의 부담을 제로로 만듭니다.</div>
      </div>
    </div>
    <div class="cert-card">
      <div class="cert-icon">⭐</div>
      <div>
        <div class="cert-title">정품 부품 사용 인증</div>
        <div class="cert-desc">정품 부품만을 사용하여 수리 품질과 안전성을 보장합니다.</div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="footer-top">
    <div class="footer-logo">99<span>CARE</span> SERVICE</div>
    <div class="footer-links">
      <a href="privacy.html">개인정보처리방침</a>
      <a href="email_policy.html">이메일무단수집거부</a>
    </div>
  </div>
  <div>구구케어서비스 | 공식 등록 의료기기 수리업체</div>
  <div class="footer-copy">ⓒ 2026 99Care Service. All Rights Reserved.</div>
</footer>

<script>
function toggleMenu() {
  document.getElementById('mobileMenu').classList.toggle('open');
}
document.addEventListener('click', function(e) {
  const menu = document.getElementById('mobileMenu');
  if (!e.target.closest('nav') && !e.target.closest('#mobileMenu')) {
    menu.classList.remove('open');
  }
});
</script>

</body>
</html>
