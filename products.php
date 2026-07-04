<?php
// img/product/ 폴더에서 jpg 이미지 자동 읽기 (p로 시작하는 동영상 제외)
$imgDir = 'img/product/';
$images = [];
if (is_dir($imgDir)) {
    $files = scandir($imgDir);
    foreach ($files as $file) {
        if (preg_match('/^\d+\.(jpg|jpeg|png)$/i', $file)) {
            $images[] = $file;
        }
    }
    natsort($images);
    $images = array_values($images);
}
$total = count($images);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>제품소개 | 구구케어서비스</title>
  <meta name="description" content="구구케어서비스의 치과재료, 치과장비, 치과소모품 제품 라인업을 소개합니다.">
  <meta property="og:title" content="제품소개 | 구구케어서비스">
  <meta property="og:description" content="구구케어서비스의 치과재료, 치과장비, 치과소모품 제품 라인업을 소개합니다.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://99care.co.kr/products.php">
  <meta property="og:image" content="http://99care.co.kr/img/og-image.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name" content="구구케어서비스">
  <meta property="og:locale" content="ko_KR">

  <link rel="canonical" href="https://99care.co.kr/products.php">

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
    body{font-family:'Noto Sans KR',sans-serif;background:#fff;color:var(--dark);}

    nav{background:var(--navy);padding:0 32px;display:flex;align-items:center;justify-content:space-between;height:60px;position:sticky;top:0;z-index:100;}
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

    .page-hero{background:var(--navy);padding:48px 56px;position:relative;overflow:hidden;}
    .page-hero::after{content:'PRODUCTS';position:absolute;right:40px;top:50%;transform:translateY(-50%);font-family:'Montserrat',sans-serif;font-size:80px;font-weight:700;color:rgba(255,255,255,0.04);letter-spacing:4px;}
    .page-hero .eyebrow{font-family:'Montserrat',sans-serif;font-size:11px;font-weight:600;color:#7EC8F4;letter-spacing:3px;margin-bottom:10px;}
    .page-hero h1{font-size:28px;font-weight:700;color:#fff;line-height:1.3;}
    .page-hero p{font-size:14px;color:rgba(255,255,255,0.65);margin-top:10px;line-height:1.8;}

    .filter-bar{background:var(--gray-f);border-bottom:1px solid var(--gray-e);padding:16px 56px;display:flex;align-items:center;gap:10px;flex-wrap:wrap;}
    .filter-btn{background:#fff;border:1px solid var(--gray-e);color:var(--gray-text);padding:7px 18px;border-radius:20px;font-size:13px;font-family:'Noto Sans KR',sans-serif;cursor:pointer;transition:all 0.15s;}
    .filter-btn:hover,.filter-btn.active{background:var(--navy);color:#fff;border-color:var(--navy);}

    .product-wrap{padding:48px 56px;}
    .product-count{font-size:13px;color:var(--gray-text);margin-bottom:24px;}
    .product-count strong{color:var(--navy);font-weight:700;}
    .product-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;}
    .product-card{background:#fff;border:1px solid var(--gray-e);border-radius:10px;overflow:hidden;cursor:pointer;transition:box-shadow 0.2s,transform 0.2s;}
    .product-card:hover{box-shadow:0 8px 24px rgba(11,45,94,0.12);transform:translateY(-3px);}
    .product-img{width:100%;aspect-ratio:4/3;overflow:hidden;background:var(--gray-f);position:relative;}
    .product-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.3s;}
    .product-card:hover .product-img img{transform:scale(1.05);}
    .product-num{position:absolute;top:10px;left:10px;background:var(--navy);color:#fff;font-size:10px;font-family:'Montserrat',sans-serif;font-weight:600;padding:3px 9px;border-radius:2px;}
    .product-info{padding:16px;}
    .product-name{font-size:14px;font-weight:700;color:var(--navy);margin-bottom:4px;}
    .product-desc{font-size:12px;color:var(--gray-text);line-height:1.6;}
    .product-more{display:inline-block;margin-top:10px;font-size:12px;color:var(--accent);font-weight:500;cursor:pointer;}

    .modal-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.75);z-index:1000;align-items:center;justify-content:center;}
    .modal-overlay.open{display:flex;}
    .modal-box{background:#fff;border-radius:12px;overflow:hidden;width:90%;max-width:720px;position:relative;box-shadow:0 20px 60px rgba(0,0,0,0.3);}
    .modal-close{position:absolute;top:14px;right:16px;font-size:24px;color:#fff;cursor:pointer;z-index:10;background:rgba(0,0,0,0.4);width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;line-height:1;border:none;}
    .modal-img{width:100%;aspect-ratio:4/3;overflow:hidden;background:var(--gray-f);}
    .modal-img img{width:100%;height:100%;object-fit:cover;}
    .modal-body{padding:24px 28px;}
    .modal-num{font-family:'Montserrat',sans-serif;font-size:11px;font-weight:600;color:var(--accent);letter-spacing:2px;margin-bottom:6px;}
    .modal-title{font-size:20px;font-weight:700;color:var(--navy);margin-bottom:8px;}
    .modal-desc{font-size:14px;color:var(--gray-text);line-height:1.8;}

    .case-section{background:var(--gray-f);padding:56px;border-top:1px solid var(--gray-e);}
    .case-header{margin-bottom:32px;}
    .case-header .eyebrow{font-family:'Montserrat',sans-serif;font-size:11px;font-weight:600;color:var(--accent);letter-spacing:3px;margin-bottom:8px;}
    .case-header h2{font-size:24px;font-weight:700;color:var(--navy);}
    .case-header p{font-size:14px;color:var(--gray-text);margin-top:6px;line-height:1.7;}
    .case-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:24px;}
    .case-card{background:#fff;border-radius:10px;overflow:hidden;border:1px solid var(--gray-e);box-shadow:0 2px 8px rgba(0,0,0,0.04);}
    .case-video{width:100%;aspect-ratio:16/9;overflow:hidden;position:relative;background:#000;}
    .case-video video{width:100%;height:100%;object-fit:cover;}
    .case-play{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;background:rgba(11,45,94,0.35);transition:opacity 0.3s;}
    .case-play-icon{width:52px;height:52px;background:rgba(255,255,255,0.9);border-radius:50%;display:flex;align-items:center;justify-content:center;}
    .case-play-icon::after{content:'';border-left:18px solid var(--navy);border-top:11px solid transparent;border-bottom:11px solid transparent;margin-left:4px;}
    .case-card:hover .case-play{opacity:0;}
    .case-info{padding:18px 20px;}
    .case-tag{display:inline-block;background:var(--blue-light);color:var(--navy-mid);font-size:11px;font-weight:500;padding:3px 10px;border-radius:2px;margin-bottom:8px;}
    .case-title{font-size:15px;font-weight:700;color:var(--navy);}
    .case-desc{font-size:13px;color:var(--gray-text);margin-top:4px;line-height:1.7;}

    footer{background:var(--navy);padding:36px 56px;color:rgba(255,255,255,0.6);font-size:12px;line-height:2;margin-top:40px;}
    .footer-top{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:20px;padding-bottom:20px;border-bottom:1px solid rgba(255,255,255,0.1);}
    .footer-logo{font-family:'Montserrat',sans-serif;font-weight:700;font-size:16px;color:#fff;}
    .footer-logo span{color:#7EC8F4;}
    .footer-links{display:flex;gap:20px;}
    .footer-links a{color:rgba(255,255,255,0.6);text-decoration:none;font-size:12px;}
    .footer-copy{font-size:11px;color:rgba(255,255,255,0.4);}

    .hamburger{display:none;flex-direction:column;gap:5px;cursor:pointer;background:none;border:none;padding:4px;}
    .hamburger span{display:block;width:22px;height:2px;background:#fff;border-radius:2px;transition:all 0.3s;}
    .mobile-menu{display:none;position:fixed;top:56px;left:0;right:0;background:var(--navy);z-index:999;padding:8px 0;border-top:1px solid rgba(255,255,255,0.1);}
    .mobile-menu.open{display:block;}
    .mobile-menu a{display:block;padding:13px 24px;color:rgba(255,255,255,0.85);font-size:15px;text-decoration:none;border-bottom:1px solid rgba(255,255,255,0.07);}
    .mobile-menu a:hover{background:rgba(255,255,255,0.07);color:#fff;}
    .mobile-menu .sub-link{padding-left:36px;font-size:14px;color:rgba(255,255,255,0.6);}

    @media (max-width: 768px) {
      nav{padding:0 12px;height:56px;gap:8px;}
      .nav-menu{display:none;}
      .hamburger{display:flex;order:3;margin-left:auto;}
      .nav-auth{order:2;gap:4px;}
      .nav-login{font-size:10px;padding:5px 8px;white-space:nowrap;}
      .nav-btn{font-size:10px;padding:5px 10px;white-space:nowrap;}
      .nav-auth{gap:6px;}
      .nav-login{font-size:11px;padding:6px 10px;}
      .nav-btn{font-size:11px;padding:6px 12px;}
      .page-hero{padding:32px 20px;}
      .page-hero h1{font-size:22px;}
      .page-hero::after{font-size:40px;right:10px;}
      .filter-bar{padding:12px 16px;gap:8px;flex-wrap:wrap;}
      .filter-btn{font-size:12px;padding:6px 14px;}
      .product-wrap{padding:24px 16px;}
      .product-grid{grid-template-columns:repeat(2,1fr);gap:14px;}
      .product-name{font-size:13px;}
      .product-desc{font-size:11px;}
      .product-more{font-size:11px;}
      .case-section{padding:32px 16px;}
      .case-grid{grid-template-columns:1fr;}
      .modal-box{width:95%;}
      .modal-body{padding:16px 18px;}
      .modal-title{font-size:16px;}
      footer{padding:24px 16px;}
      .footer-top{flex-direction:column;gap:12px;}
    }
  </style>
</head>
<body>

<nav>
  <a href="index.php" class="logo">99<span>CARE</span> SERVICE</a>
  <ul class="nav-menu">
    <li><a href="about.php">회사소개</a></li>
    <li><a href="products.php" class="active">제품소개</a></li>
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
  <a href="#">회사소개</a>
  <a href="products.php" style="color:#7EC8F4;">제품소개</a>
  <a href="#">게시판</a>
  <a href="#" class="sub-link">공지사항</a>
  <a href="#" class="sub-link">FAQ</a>
  <a href="#" class="sub-link">Q&amp;A</a>
  <a href="login.php">로그인 / 회원가입</a>
</div>

<div class="page-hero">
  <div class="eyebrow">PRODUCTS</div>
  <h1>제품소개</h1>
  <p>구구케어서비스가 취급하는 치과 기자재 및 장비를 소개합니다.</p>
</div>

<div class="filter-bar">
  <button class="filter-btn active" onclick="filterTab(this,'all')">전체 (<?= $total ?>)</button>
  <button class="filter-btn" onclick="filterTab(this,'chair')">체어A/S</button>
  <button class="filter-btn" onclick="filterTab(this,'etc')">기타A/S</button>
  <button class="filter-btn" onclick="filterTab(this,'compressor')">컴프레서</button>
  <button class="filter-btn" onclick="filterTab(this,'suction')">석션기</button>
  <button class="filter-btn" onclick="filterTab(this,'other')">기타 장비</button>
  <button class="filter-btn" onclick="filterTab(this,'handpiece')">핸드피스A/S</button>
</div>

<div class="product-wrap" id="section-all">
  <p class="product-count">총 <strong><?= $total ?></strong>개의 제품</p>
  <div class="product-grid">
<?php foreach ($images as $i => $file):
    $num = $i + 1;
    $numPad = str_pad($num, 2, '0', STR_PAD_LEFT);
    $imgPath = $imgDir . $file;
    $name = "Product {$numPad}";
?>
    <div class="product-card">
      <div class="product-img">
        <img src="<?= $imgPath ?>" alt="<?= $name ?>">
        <span class="product-num"><?= $numPad ?></span>
      </div>
      <div class="product-info">
        <div class="product-name"><?= $name ?></div>
        <div class="product-desc">제품명 업데이트 예정입니다.</div>
        <span class="product-more" onclick="openModal(<?= $num ?>, '<?= $name ?>', '<?= $imgPath ?>')">자세히 보기 →</span>
      </div>
    </div>
<?php endforeach; ?>
  </div>
</div>

<!-- 체어A/S 섹션 -->
<div class="case-section" id="section-chair" style="display:none;">
  <div class="case-header">
    <div class="eyebrow">CHAIR A/S</div>
    <h2>체어 A/S</h2>
    <p>유니트체어 리모델링 후 설치 현장 영상입니다.</p>
  </div>
  <div class="case-grid">
    <div class="case-card">
      <div class="case-video"
        onmouseenter="this.querySelector('video').play();this.querySelector('.case-play').style.opacity=0;"
        onmouseleave="this.querySelector('video').pause();this.querySelector('video').currentTime=0;this.querySelector('.case-play').style.opacity=1;">
        <video muted loop playsinline><source src="img/product/p03.mp4" type="video/mp4"></video>
        <div class="case-play"><div class="case-play-icon"></div></div>
      </div>
      <div class="case-info">
        <span class="case-tag">체어A/S</span>
        <div class="case-title">유니트체어 리모델링 후 설치 03</div>
        <div class="case-desc">노후 유니트체어 리모델링 및 신규 설치 현장입니다.</div>
      </div>
    </div>
    <div class="case-card">
      <div class="case-video"
        onmouseenter="this.querySelector('video').play();this.querySelector('.case-play').style.opacity=0;"
        onmouseleave="this.querySelector('video').pause();this.querySelector('video').currentTime=0;this.querySelector('.case-play').style.opacity=1;">
        <video muted loop playsinline><source src="img/product/p04.mp4" type="video/mp4"></video>
        <div class="case-play"><div class="case-play-icon"></div></div>
      </div>
      <div class="case-info">
        <span class="case-tag">체어A/S</span>
        <div class="case-title">유니트체어 리모델링 후 설치 04</div>
        <div class="case-desc">노후 유니트체어 리모델링 및 신규 설치 현장입니다.</div>
      </div>
    </div>
  </div>
</div>

<!-- 기타A/S 섹션 -->
<div class="case-section" id="section-etc" style="display:none;">
  <div class="case-header">
    <div class="eyebrow">ETC A/S</div>
    <h2>기타 A/S</h2>
    <p>소독실 싱크대 교체 현장 영상입니다.</p>
  </div>
  <div class="case-grid">
    <div class="case-card">
      <div class="case-video"
        onmouseenter="this.querySelector('video').play();this.querySelector('.case-play').style.opacity=0;"
        onmouseleave="this.querySelector('video').pause();this.querySelector('video').currentTime=0;this.querySelector('.case-play').style.opacity=1;">
        <video muted loop playsinline><source src="img/product/p01.mp4" type="video/mp4"></video>
        <div class="case-play"><div class="case-play-icon"></div></div>
      </div>
      <div class="case-info">
        <span class="case-tag">기타A/S</span>
        <div class="case-title">소독실 싱크대 교체 01</div>
        <div class="case-desc">소독실 싱크대 교체 시공 현장입니다.</div>
      </div>
    </div>
    <div class="case-card">
      <div class="case-video"
        onmouseenter="this.querySelector('video').play();this.querySelector('.case-play').style.opacity=0;"
        onmouseleave="this.querySelector('video').pause();this.querySelector('video').currentTime=0;this.querySelector('.case-play').style.opacity=1;">
        <video muted loop playsinline><source src="img/product/p02.mp4" type="video/mp4"></video>
        <div class="case-play"><div class="case-play-icon"></div></div>
      </div>
      <div class="case-info">
        <span class="case-tag">기타A/S</span>
        <div class="case-title">소독실 싱크대 교체 02</div>
        <div class="case-desc">소독실 싱크대 교체 시공 현장입니다.</div>
      </div>
    </div>
  </div>
</div>

<!-- 모달 -->
<div class="modal-overlay" id="productModal" onclick="if(event.target===this)closeModal()">
  <div class="modal-box">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <div class="modal-img"><img id="modalImg" src="" alt=""></div>
    <div class="modal-body">
      <div class="modal-num" id="modalNum"></div>
      <div class="modal-title" id="modalTitle"></div>
      <div class="modal-desc">제품명 및 상세 설명이 업데이트될 예정입니다.</div>
    </div>
  </div>
</div>

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

function openModal(num, title, imgSrc) {
  document.getElementById('modalNum').textContent = 'PRODUCT ' + String(num).padStart(2,'0');
  document.getElementById('modalTitle').textContent = title;
  document.getElementById('modalImg').src = imgSrc;
  document.getElementById('productModal').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeModal() {
  document.getElementById('productModal').classList.remove('open');
  document.body.style.overflow = '';
}
document.addEventListener('keydown', e => { if(e.key==='Escape') closeModal(); });

function filterTab(btn, tab) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('section-all').style.display = 'none';
  document.getElementById('section-chair').style.display = 'none';
  document.getElementById('section-etc').style.display = 'none';
  if (tab === 'chair') {
    document.getElementById('section-chair').style.display = 'block';
  } else if (tab === 'etc') {
    document.getElementById('section-etc').style.display = 'block';
  } else {
    document.getElementById('section-all').style.display = 'block';
  }
}
</script>

<footer>
  <div class="footer-top">
    <div class="footer-logo">99<span>CARE</span> SERVICE</div>
    <div class="footer-links">
      <a href="privacy.php">개인정보처리방침</a>
      <a href="email_policy.php">이메일무단수집거부</a>
    </div>
  </div>
  <div>구구케어서비스 | 공식 등록 의료기기 수리업체</div>
  <div class="footer-copy">ⓒ 2026 99Care Service. All Rights Reserved.</div>
</footer>

</body>
</html>