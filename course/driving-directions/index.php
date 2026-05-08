<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }
  /* ─── defaults (desktop: hide toggle and sub-toggle) ─── */
  .nav-toggle { display: none; }
  .sub-toggle { display: none; }

  /* ═══════════════════════════════════════════════
     MOBILE NAV  (≤ 900px)
  ═══════════════════════════════════════════════ */
  @media (max-width: 900px) {

    .site-header .wrap {
      padding: 0 16px;
      height: 64px;
    }

    /* ── Hamburger button ── */
    .nav-toggle {
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 5px;
      width: 44px; height: 44px;
      border: 1.5px solid rgba(255,255,255,0.25);
      border-radius: 10px;
      background: rgba(255,255,255,0.08);
      cursor: pointer;
      padding: 0;
      flex-shrink: 0;
      position: relative;
      z-index: 10001;
      transition: background 0.2s;
    }
    .nav-toggle:hover { background: rgba(255,255,255,0.18); }
    .nav-toggle .bar {
      display: block;
      width: 20px; height: 2px;
      background: #fff;
      border-radius: 2px;
      transition: transform 0.3s, opacity 0.3s;
      transform-origin: center;
    }
    .nav-toggle[aria-expanded="true"] .bar:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .nav-toggle[aria-expanded="true"] .bar:nth-child(2) { opacity: 0; transform: scaleX(0); }
    .nav-toggle[aria-expanded="true"] .bar:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    /* ── Nav drawer ── */
    .nav-primary {
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      z-index: 10000;
      pointer-events: none;
    }
    .nav-primary::before {
      content: '';
      position: absolute; inset: 0;
      background: rgba(0,0,0,0.55);
      opacity: 0;
      transition: opacity 0.3s ease;
      pointer-events: none;
    }
    .nav-primary.open::before {
      opacity: 1;
      pointer-events: auto;
    }
    .nav-primary .wrap {
      position: absolute;
      top: 0; left: 0;
      width: min(300px, 85vw);
      height: 100%;
      background: var(--forest-dark);
      border-right: 2px solid rgba(200,169,110,0.4);
      box-shadow: 8px 0 40px rgba(0,0,0,0.5);
      transform: translateX(-100%);
      transition: transform 0.35s cubic-bezier(0.4,0,0.2,1);
      display: flex;
      flex-direction: column;
      overflow-y: auto;
      pointer-events: none;
      padding: 0;
      -webkit-overflow-scrolling: touch;
    }
    .nav-primary.open .wrap {
      transform: translateX(0);
      pointer-events: auto;
    }
    .nav-primary.open { pointer-events: auto; }

    /* ── Drawer top bar ── */
    .nav-drawer-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      height: 64px;
      border-bottom: 1px solid rgba(255,255,255,0.10);
      flex-shrink: 0;
      background: #022e27;
    }
    .nav-drawer-brand {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: 13px; font-weight: 700;
      letter-spacing: 2px; text-transform: uppercase;
      color: var(--gold);
    }
    .nav-drawer-close {
      width: 36px; height: 36px;
      border: 1.5px solid rgba(255,255,255,0.2);
      border-radius: 8px;
      background: rgba(255,255,255,0.06);
      color: #fff;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; line-height: 1;
      transition: background 0.2s;
    }
    .nav-drawer-close:hover { background: rgba(255,255,255,0.15); }

    /* ── Menu list ── */
    ul#menu-top {
      display: flex !important;
      flex-direction: column;
      width: 100%;
      padding: 8px 0 24px;
      gap: 0;
      flex: 1;
    }
    ul#menu-top > li {
      display: flex;
      flex-direction: row;
      align-items: stretch;
      flex-wrap: wrap;
      border-bottom: 1px solid rgba(255,255,255,0.07);
      width: 100%;
    }
    ul#menu-top > li:last-child { border-bottom: none; }
    ul#menu-top > li > a {
      flex: 1;
      padding: 16px 20px;
      font-family: 'Barlow Condensed', sans-serif;
      font-size: 14px; font-weight: 700;
      letter-spacing: 1.5px; text-transform: uppercase;
      color: rgba(255,255,255,0.88);
      border-radius: 0;
      display: flex;
      align-items: center;
      transition: background 0.2s, padding-left 0.2s;
      white-space: nowrap;
    }
    ul#menu-top > li > a:hover,
    ul#menu-top > li.current-menu-item > a {
      background: rgba(255,255,255,0.07);
      color: #fff;
      padding-left: 26px;
      text-decoration: none;
    }

    /* ── Arrow toggle button ── */
    .sub-toggle {
      display: inline-flex !important;
      align-items: center;
      justify-content: center;
      width: 52px;
      align-self: stretch;
      border: none;
      border-left: 1px solid rgba(255,255,255,0.10);
      background: rgba(255,255,255,0.05);
      color: rgba(255,255,255,0.6);
      cursor: pointer;
      flex-shrink: 0;
      transition: background 0.2s, color 0.2s;
      padding: 0;
    }
    .sub-toggle:hover,
    li.menu-item-has-children.sub-open > .sub-toggle {
      background: rgba(200,169,110,0.15);
      color: var(--gold);
    }
    .sub-toggle svg {
      transition: transform 0.3s ease;
      pointer-events: none;
    }
    li.menu-item-has-children.sub-open > .sub-toggle svg {
      transform: rotate(180deg);
    }

    /* ── Sub-menu accordion ── */
    .sub-menu {
      position: static !important;
      display: none;
      width: 100%;
      background: rgba(0,0,0,0.18);
      border-top: 1px solid rgba(255,255,255,0.06);
      border-radius: 0;
      box-shadow: none;
      min-width: 0;
      padding: 4px 0;
    }
    li.menu-item-has-children.sub-open > .sub-menu { display: block; }
    li.menu-item-has-children:hover .sub-menu { display: none; }
    li.menu-item-has-children.sub-open > .sub-menu { display: block !important; }
    li.menu-item-has-children > a::after { display: none; }
    .sub-menu li { border: none; width: 100%; }
    .sub-menu li a {
      display: block;
      padding: 12px 20px 12px 36px;
      font-family: 'Barlow', sans-serif;
      font-size: 13px; font-weight: 400;
      letter-spacing: 0.4px;
      color: rgba(255,255,255,0.65);
      border-radius: 0;
      transition: background 0.15s, color 0.15s, padding-left 0.15s;
    }
    .sub-menu li a:hover {
      background: rgba(255,255,255,0.07);
      color: #fff;
      padding-left: 42px;
      text-decoration: none;
    }

    /* ── Book Tee Time CTA at drawer bottom ── */
    .nav-drawer-cta {
      margin: 12px 16px 20px;
      padding: 14px 20px;
      background: var(--crimson);
      color: #fff !important;
      font-family: 'Barlow Condensed', sans-serif;
      font-size: 13px; font-weight: 700;
      letter-spacing: 2px; text-transform: uppercase;
      border-radius: 4px; text-align: center;
      display: block; text-decoration: none !important;
      transition: background 0.2s;
    }
    .nav-drawer-cta:hover { background: var(--crimson-dark); }

    .site-inner { margin-top: 64px; }
  }

</style>
<title>Driving Directions - Chesapeake Golf</title>
<link rel="canonical" href="index.php" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Driving Directions - Chesapeake Golf" />
<meta property="og:description" content="From I-64, take exit 291B (Dominion Blvd/Elizabeth City exit). Stay right and remain on Dominion Blvd through the traffic light at Great Bridge and proceed across Steel Bridge. Take a left onto Cedar Road and take a right at the traffic light onto Las Gaviotas Blvd. Follow the inside lane around Clubhouse Drive. Take a left onto Clubhouse Drive and the club will be on the right." />
<meta property="og:url" content="https://www.chesapeakegolfclub.com/course/driving-directions/" />
<meta property="og:site_name" content="Chesapeake Golf" />
<meta property="article:modified_time" content="2025-05-08T19:02:45+00:00" />
<meta name="twitter:card" content="summary_large_image" />
<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.chesapeakegolfclub.com/course/driving-directions/","url":"https://www.chesapeakegolfclub.com/course/driving-directions/","name":"Driving Directions - Chesapeake Golf","isPartOf":{"@id":"https://www.chesapeakegolfclub.com/#website"},"datePublished":"2018-06-01T08:07:50+00:00","dateModified":"2025-05-08T19:02:45+00:00","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.chesapeakegolfclub.com/course/driving-directions/"]}]}]}</script>

<link rel='dns-prefetch' href='http://cdn.parsely.com/' />
<link rel='dns-prefetch' href='http://stats.wp.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://v0.wordpress.com/' />
<link rel="alternate" type="application/rss+xml" title="Chesapeake Golf &raquo; Feed" href="../../feed/index.php" />
<link rel="alternate" type="application/rss+xml" title="Chesapeake Golf &raquo; Comments Feed" href="../../comments/feed/index.php" />

<link rel='stylesheet' id='altitude-pro-css' href='../../wp-content/themes/altitude-pro/stylec358.css?ver=1.1.3' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='../../wp-includes/css/dist/block-library/style.min32d4.css?ver=6.8.3' media='all' />
<link rel='stylesheet' id='mediaelement-css' href='../../wp-includes/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css' href='../../wp-includes/js/mediaelement/wp-mediaelement.min32d4.css?ver=6.8.3' media='all' />
<link rel='stylesheet' id='super-rss-reader-css' href='../../wp-content/plugins/super-rss-reader/public/css/style.min91d5.css?ver=5.4' media='all' />
<link rel='stylesheet' id='dashicons-css' href='../../wp-includes/css/dashicons.min32d4.css?ver=6.8.3' media='all' />
<link rel='stylesheet' id='altitude-google-fonts-css' href='http://fonts.googleapis.com/css?family=Ek+Mukta%3A200%2C800&amp;ver=1.1.3' media='all' />
<link rel='stylesheet' id='golfnow-legacy-shortcodes-css-css' href='../../wp-content/plugins/golfnow-legacy-shortcodes/assets/css/shortcodes5152.css?ver=1.0' media='all' />
<link rel='stylesheet' id='golfnow-legacy-shortcodes-responsive-css-css' href='../../wp-content/plugins/golfnow-legacy-shortcodes/assets/css/shortcodes_responsive5152.css?ver=1.0' media='all' />
<link rel='stylesheet' id='simple-social-icons-font-css' href='../../wp-content/plugins/simple-social-icons/css/stylecce7.css?ver=4.0.0' media='all' />
<link rel='stylesheet' id='golf-now-customize-styles-css' href='../../wp-content/plugins/golfnow-customize/assets/dist/customize6275.css?ver=0.1.3' media='all' />
<link rel='stylesheet' id='golf-now-calendar-styles-css' href='../../wp-content/plugins/golfnow-customize/assets/dist/sugar-calendardc63.css?ver=0.1.1' media='all' />

<script type="text/javascript" src="../../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="../../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/super-rss-reader/public/js/jquery.easy-ticker.min91d5.js?ver=5.4" id="jquery-easy-ticker-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/super-rss-reader/public/js/script.min91d5.js?ver=5.4" id="super-rss-reader-js"></script>
<script type="text/javascript" src="../../wp-content/themes/altitude-pro/js/global8a54.js?ver=1.0.0" id="altitude-global-js"></script>

<link rel="icon" href="../../wp-content/themes/altitude-pro/images/favicon.ico" />
<!-- widget styles and scripts -->
<link rel="stylesheet" type="text/css" href="../../../www.itson.me/content/widget/widget-1.1.html">
<script type="text/javascript" src="../../../www.itson.me/content/widget/widget-1.0.html"></script>
<style type="text/css">.site-title a { background: url(../../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat !important; }</style>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-26642741-3', 'auto');
ga('send', 'pageview');
</script>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Barlow:wght@300;400;500;600&family=Barlow+Condensed:wght@600;700&display=swap" rel="stylesheet">

<style>
  /* ── DESIGN TOKENS — identical to Event Hall ── */
  :root {
    --forest: #034e42;
    --forest-light: #077362;
    --forest-dark: #022e27;
    --crimson: #ca1c3a;
    --crimson-dark: #9a3c48;
    --gold: #c8a96e;
    --gold-light: #e8d5a3;
    --cream: #f9f6f0;
    --white: #ffffff;
    --charcoal: #1a1a1a;
    --mid: #4a4a4a;
    --light-gray: #e8e4dc;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body { font-family: 'Barlow', sans-serif; background: var(--cream); color: var(--charcoal); overflow-x: hidden; }
  body::before { display: none !important; }
  body > .backstretch { display: none !important; }
  a { color: var(--crimson); text-decoration: none; }
  a:hover { color: var(--crimson-dark); text-decoration: underline; }

  /* ══ HEADER — identical to Event Hall ══ */
  .site-header {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background: var(--forest) !important;
    background-color: var(--forest) !important;
    box-shadow: 0 2px 24px rgba(0,0,0,0.25);
  }
  .site-header[style], .site-header.dark, .site-header.scrolled, .site-header.sticky {
    background: var(--forest) !important;
    background-color: var(--forest) !important;
  }
  .site-header .wrap {
    max-width: 1280px; margin: 0 auto; padding: 0 32px;
    display: flex; align-items: center; justify-content: space-between; height: 72px;
  }
  .title-area { flex-shrink: 0; }
  .site-title { margin: 0; }
  .site-title a {
    display: block; width: 107px; height: 64px;
    background: url(../../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat center/contain !important;
    text-indent: -9999px; overflow: hidden;
  }
  .site-description { display: none; }
  .nav-primary { margin: 0; }
  .nav-primary .wrap { padding: 0; }
  ul#menu-top {
    list-style: none; display: flex; align-items: center; gap: 4px; margin: 0; padding: 0;
  }
  ul#menu-top > li > a {
    color: rgba(255,255,255,0.88);
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 13px; font-weight: 600; letter-spacing: 1.2px;
    text-transform: uppercase; padding: 8px 14px; border-radius: 4px;
    display: block; transition: color 0.2s, background 0.2s;
    white-space: nowrap; background: transparent;
  }
  ul#menu-top > li > a:hover,
  ul#menu-top > li.current-menu-item > a,
  ul#menu-top > li.current-page-ancestor > a {
    color: var(--white); background: rgba(255,255,255,0.12); text-decoration: none;
  }
  li.menu-item-has-children { position: relative; }
  .sub-menu {
    display: none; position: absolute; top: calc(100% + 4px); left: 0;
    background: var(--forest-dark); border-top: 2px solid var(--gold);
    border-radius: 0 0 6px 6px; min-width: 260px; list-style: none; padding: 8px 0;
    box-shadow: 0 12px 32px rgba(0,0,0,0.3); z-index: 100;
  }
  li.menu-item-has-children:hover .sub-menu { display: block; }
  .sub-menu li a {
    display: block; padding: 10px 20px; color: rgba(255,255,255,0.82);
    font-family: 'Barlow', sans-serif; font-size: 13px; letter-spacing: 0.5px;
    transition: background 0.15s, color 0.15s;
  }
  .sub-menu li a:hover { background: var(--forest-light); color: #fff; text-decoration: none; }

  /* ══ PAGE HERO — identical to Event Hall ══ */
  .page-hero {
    position: relative; margin-top: 72px;
    height: 56vh; min-height: 400px;
    display: flex; align-items: center; justify-content: center;
    background-image: url(../../wp-content/uploads/sites/7040/2018/06/1.jpg);
    background-size: cover; background-position: center 40%; overflow: hidden;
  }
  .page-hero::before {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(170deg, rgba(2,30,25,0.88) 0%, rgba(3,78,66,0.62) 55%, rgba(154,60,72,0.42) 100%);
  }
  .page-hero-content {
    position: relative; z-index: 2; text-align: center; padding: 0 24px;
    animation: heroReveal 1.1s cubic-bezier(0.22,1,0.36,1) both;
  }
  @keyframes heroReveal {
    from { opacity: 0; transform: translateY(36px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .hero-eyebrow {
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 600; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 16px;
  }
  .page-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(48px, 8vw, 80px); font-weight: 900;
    color: var(--white); line-height: 1.05; margin-bottom: 20px;
    text-shadow: 0 4px 32px rgba(0,0,0,0.4);
  }
  .page-hero-sub {
    font-size: 17px; font-weight: 300; color: rgba(255,255,255,0.78);
    letter-spacing: 0.4px; max-width: 500px; margin: 0 auto 40px; line-height: 1.65;
  }
  .hero-pill-row { display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; }
  .hero-pill {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold-light); border: 1px solid rgba(200,169,110,0.45);
    padding: 6px 18px; border-radius: 20px; background: rgba(200,169,110,0.08);
  }

  /* ══ BREADCRUMB ══ */
  .breadcrumb-bar { background: var(--forest); padding: 14px 32px; }
  .breadcrumb-bar .inner {
    max-width: 1280px; margin: 0 auto; display: flex; align-items: center; gap: 8px;
  }
  .breadcrumb-bar a {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;
    color: rgba(255,255,255,0.6); transition: color 0.2s;
  }
  .breadcrumb-bar a:hover { color: var(--gold); text-decoration: none; }
  .breadcrumb-sep { color: rgba(255,255,255,0.3); font-size: 12px; }
  .breadcrumb-current {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--gold);
  }

  /* ══ SECTION SHARED ══ */
  .section-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 12px;
  }
  .section-heading {
    font-family: 'Playfair Display', serif;
    font-size: clamp(30px, 4vw, 44px); font-weight: 700;
    color: var(--charcoal); line-height: 1.15; margin-bottom: 20px;
  }
  .section-body { font-size: 15px; color: var(--mid); line-height: 1.75; }

  /* ══ INTRO STRIP — identical to Event Hall ══ */
  .intro-strip {
    background: var(--white); padding: 80px 32px;
    border-bottom: 1px solid var(--light-gray);
  }
  .intro-strip-inner {
    max-width: 1100px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 72px; align-items: center;
  }
  .intro-stat-row {
    display: grid; grid-template-columns: repeat(3,1fr); gap: 0;
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 8px; overflow: hidden;
  }
  .intro-stat {
    background: var(--cream); padding: 36px 24px;
    text-align: center; border-right: 2px solid var(--light-gray);
  }
  .intro-stat:last-child { border-right: none; }
  .intro-stat-num {
    font-family: 'Playfair Display', serif; font-size: 42px;
    font-weight: 900; color: var(--forest); line-height: 1;
    display: block; margin-bottom: 6px;
  }
  .intro-stat-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; color: var(--mid);
  }
  .intro-cta {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--forest); color: #fff !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    padding: 14px 34px; border-radius: 2px; margin-top: 28px;
    transition: background 0.2s, transform 0.2s; text-decoration: none !important;
  }
  .intro-cta:hover { background: var(--forest-light); transform: translateY(-2px); text-decoration: none !important; }

  /* ══ DIRECTIONS CARD — venue-card style like Event Hall ══ */
  .directions-section { background: var(--cream); padding: 80px 32px; }
  .directions-inner { max-width: 1200px; margin: 0 auto; }

  .venue-card {
    display: grid; grid-template-columns: 1fr 1fr;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 16px 64px rgba(0,0,0,0.12);
    margin-bottom: 60px; background: var(--white);
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .venue-card:hover { transform: translateY(-4px); box-shadow: 0 28px 80px rgba(0,0,0,0.18); }
  .venue-card.reverse { direction: rtl; }
  .venue-card.reverse > * { direction: ltr; }

  /* Photo / visual side */
  .vc-img {
    position: relative; overflow: hidden; min-height: 440px;
  }
  .vc-img img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transition: transform 0.6s ease;
  }
  .venue-card:hover .vc-img img { transform: scale(1.05); }
  .vc-num {
    position: absolute; top: 28px; left: 28px; z-index: 2;
    font-family: 'Playfair Display', serif; font-size: 13px;
    font-weight: 900; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); background: var(--forest-dark);
    padding: 6px 16px; border-radius: 2px; border-left: 3px solid var(--gold);
  }
  .vc-img::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(2,20,16,0.45) 0%, transparent 50%);
  }

  /* Info / body side */
  .vc-body {
    background: var(--white); padding: 52px 52px;
    display: flex; flex-direction: column; justify-content: center;
  }
  .vc-tag {
    display: inline-block; font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 14px;
  }
  .vc-name {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 3vw, 38px); font-weight: 900;
    color: var(--charcoal); line-height: 1.1; margin-bottom: 20px;
  }
  .vc-divider { width: 48px; height: 2px; background: var(--gold); margin-bottom: 24px; }
  .vc-desc { font-size: 14.5px; color: var(--mid); line-height: 1.85; margin-bottom: 32px; }

  /* Step list — styled numbered directions */
  .steps-list { display: flex; flex-direction: column; gap: 16px; margin-bottom: 32px; }
  .step-item {
    display: flex; align-items: flex-start; gap: 16px;
  }
  .step-num {
    flex-shrink: 0; width: 32px; height: 32px; border-radius: 50%;
    background: var(--forest); color: var(--white);
    font-family: 'Playfair Display', serif; font-size: 14px; font-weight: 900;
    display: flex; align-items: center; justify-content: center; margin-top: 1px;
  }
  .step-text {
    font-size: 14px; color: var(--mid); line-height: 1.7; padding-top: 5px;
  }
  .step-text strong { color: var(--charcoal); font-weight: 600; }

  .vc-btn {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--forest); color: #fff !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    padding: 14px 32px; border-radius: 2px; width: fit-content;
    transition: background 0.2s, transform 0.2s; text-decoration: none !important;
  }
  .vc-btn:hover { background: var(--forest-light); transform: translateY(-2px); text-decoration: none !important; }

  /* ══ MAP SECTION — same structure as Event Hall's gazebo section ══ */
  .map-section { background: var(--forest-dark); padding: 0 32px 80px; }
  .map-card {
    max-width: 1200px; margin: 0 auto;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 32px 80px rgba(0,0,0,0.5);
  }

  /* Map iframe wrap — same as gazebo-img-wrap but taller */
  .map-iframe-wrap {
    position: relative; height: 520px; overflow: hidden;
  }
  .map-iframe-wrap iframe {
    width: 100%; height: 100%; border: 0; display: block;
    filter: brightness(0.92) saturate(0.9);
  }
  /* Gold top border accent */
  .map-iframe-wrap::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0;
    height: 4px; background: var(--gold); z-index: 2;
  }

  /* Info bar below map — like gazebo-body */
  .map-body {
    background: #0d4d41; padding: 40px 56px;
    display: grid; grid-template-columns: 1fr auto; gap: 40px; align-items: center;
  }
  .map-address-block {}
  .map-address-eyebrow {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 8px; display: block;
  }
  .map-address-name {
    font-family: 'Playfair Display', serif; font-size: 22px;
    font-weight: 900; color: var(--white); margin-bottom: 6px; line-height: 1.2;
  }
  .map-address-text {
    font-size: 15px; color: rgba(255,255,255,0.65); line-height: 1.6;
  }
  .map-actions { display: flex; gap: 12px; flex-shrink: 0; flex-wrap: wrap; }
  .map-btn {
    display: inline-flex; align-items: center; gap: 10px;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    padding: 14px 28px; border-radius: 2px;
    transition: background 0.2s, transform 0.2s; text-decoration: none !important;
  }
  .map-btn.primary {
    background: var(--crimson); color: #fff !important;
    box-shadow: 0 6px 20px rgba(202,28,58,0.35);
  }
  .map-btn.primary:hover { background: var(--crimson-dark); transform: translateY(-2px); }
  .map-btn.secondary {
    background: rgba(255,255,255,0.10); color: rgba(255,255,255,0.85) !important;
    border: 1px solid rgba(200,169,110,0.3);
  }
  .map-btn.secondary:hover { background: rgba(255,255,255,0.16); transform: translateY(-2px); }

  /* ══ ADDRESS INFO STRIP — like Event Hall contact block ══ */
  .info-section { background: var(--white); padding: 80px 32px; border-top: 1px solid var(--light-gray); }
  .info-inner {
    max-width: 1100px; margin: 0 auto;
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px;
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 12px; overflow: hidden;
  }
  .info-block {
    background: var(--cream); padding: 44px 40px;
    display: flex; flex-direction: column; gap: 12px;
    border-right: 2px solid var(--light-gray); position: relative;
  }
  .info-block:last-child { border-right: none; }
  .info-icon {
    width: 48px; height: 48px; border-radius: 50%;
    background: var(--forest); display: flex; align-items: center; justify-content: center;
    margin-bottom: 8px;
  }
  .info-icon svg { width: 22px; height: 22px; stroke: var(--gold); fill: none; stroke-width: 1.8; }
  .info-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--gold);
  }
  .info-title {
    font-family: 'Playfair Display', serif; font-size: 20px;
    font-weight: 900; color: var(--charcoal); line-height: 1.2;
  }
  .info-detail {
    font-size: 14px; color: var(--mid); line-height: 1.7;
  }
  .info-link {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    color: var(--forest); display: inline-flex; align-items: center; gap: 6px;
    margin-top: 4px; text-decoration: none !important; transition: color 0.2s;
  }
  .info-link:hover { color: var(--forest-light); text-decoration: none !important; }
  .info-link svg { width: 12px; height: 12px; stroke: currentColor; fill: none; stroke-width: 2.5; }

  /* ══ CTA SECTION — identical to Event Hall ══ */
  .cta-section { background: var(--forest-dark); padding: 0 32px 80px; }
  .cta-card {
    max-width: 1200px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 32px 80px rgba(0,0,0,0.5);
  }
  .cta-left {
    background: #0a3d34; padding: 60px 56px;
    display: flex; flex-direction: column; justify-content: center;
  }
  .cta-badge {
    display: inline-block; background: var(--gold);
    color: var(--forest-dark); font-family: 'Barlow Condensed', sans-serif;
    font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
    padding: 6px 14px; border-radius: 3px; margin-bottom: 28px; width: fit-content;
  }
  .cta-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(32px, 3.5vw, 46px); font-weight: 900;
    color: var(--white); line-height: 1.08; margin-bottom: 18px;
  }
  .cta-desc {
    font-size: 15px; color: rgba(255,255,255,0.70);
    line-height: 1.75; margin-bottom: 36px; max-width: 380px;
  }
  .cta-btns { display: flex; flex-direction: column; gap: 12px; width: fit-content; }
  .cta-btn-primary {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--crimson); color: #fff !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    padding: 15px 36px; border-radius: 2px;
    transition: background 0.2s, transform 0.2s; text-decoration: none !important;
    box-shadow: 0 8px 24px rgba(202,28,58,0.4);
  }
  .cta-btn-primary:hover { background: var(--crimson-dark); transform: translateY(-2px); text-decoration: none !important; }
  .cta-btn-secondary {
    display: inline-flex; align-items: center; gap: 10px; justify-content: center;
    background: transparent; border: 1px solid rgba(255,255,255,0.3);
    color: rgba(255,255,255,0.85) !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    padding: 14px 36px; border-radius: 2px;
    transition: border-color 0.2s, background 0.2s; text-decoration: none !important;
  }
  .cta-btn-secondary:hover { border-color: rgba(255,255,255,0.6); background: rgba(255,255,255,0.07); text-decoration: none !important; }
  .cta-right {
    background: #0d4d41; padding: 52px 56px;
    display: flex; flex-direction: column; justify-content: center;
    border-left: 1px solid rgba(255,255,255,0.06);
  }
  .cta-checklist { display: flex; flex-direction: column; }
  .cta-check-item {
    display: flex; align-items: center; gap: 18px;
    padding: 20px 0; border-bottom: 1px solid rgba(255,255,255,0.07);
    color: rgba(255,255,255,0.85); font-size: 15px;
  }
  .cta-check-item:last-child { border-bottom: none; }
  .cta-check-icon {
    width: 34px; height: 34px; border-radius: 50%;
    border: 1.5px solid rgba(200,169,110,0.45); background: rgba(200,169,110,0.08);
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .cta-check-icon svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 2.5; }

  /* ══ FOOTER ══ */
  .site-footer { background-color: #9a3c48; padding: 24px 32px; margin-top: 0; }
  .site-footer .wrap { max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); letter-spacing: 0.5px; }

  /* ══ UTILS ══ */
  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .site-inner { background: var(--cream); position: relative; z-index: 1; }
  .genesis-skip-link { list-style: none; }
  .screen-reader-shortcut { position: absolute; left: -9999px; z-index: 999999; }
  .screen-reader-shortcut:focus { left: 0; top: 0; background: var(--forest); color: #fff; padding: 8px 16px; }
  .entry-header { display: none; }
  .slider-wrapper { display: none !important; }

  /* ══ RESPONSIVE ══ */
  @media (max-width: 1024px) {
    .venue-card, .venue-card.reverse { grid-template-columns: 1fr; direction: ltr; }
    .vc-img { min-height: 300px; }
    .vc-body { padding: 36px 32px; }
    .intro-strip-inner { grid-template-columns: 1fr; gap: 40px; }
    .cta-card { grid-template-columns: 1fr; }
    .cta-left, .cta-right { padding: 40px 32px; }
    .map-body { grid-template-columns: 1fr; gap: 24px; }
    .info-inner { grid-template-columns: 1fr; }
    .info-block { border-right: none; border-bottom: 2px solid var(--light-gray); }
    .info-block:last-child { border-bottom: none; }
  }
  @media (max-width: 768px) {
.directions-section, .intro-strip, .info-section { padding: 48px 20px; }
    .map-section, .cta-section { padding: 0 20px 48px; }
    .breadcrumb-bar { padding: 12px 20px; }
    .page-hero { height: 50vh; }
    .map-iframe-wrap { height: 320px; }
    .map-body { padding: 28px 24px; }
    .map-actions { flex-direction: column; }
  }
</style>

<script>
  if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    document.documentElement.classList.add('ghostkit-effects-enabled');
  }
</script>
</head>

<body class="wp-singular page-template-default page page-id-112 page-child parent-pageid-39 wp-theme-genesis wp-child-theme-altitude-pro custom-header header-image header-full-width full-width-content genesis-breadcrumbs-hidden genesis-footer-widgets-hidden">
<div class="site-container">

  <ul class="genesis-skip-link">
    <li><a href="#genesis-content" class="screen-reader-shortcut"> Skip to main content</a></li>
  </ul>

  <!-- HEADER — original markup preserved -->
  <header class="site-header">
    <div class="wrap">
      <div class="title-area">
        <p class="site-title"><a href="../../index.php">Chesapeake Golf</a></p>
        <p class="site-description">Chesapeake, VA</p>
      </div>
      
      <!-- Hamburger button -->
      <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="menu-top" type="button" aria-label="Toggle navigation">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>

      <nav class="nav-primary" aria-label="Main" id="genesis-nav-primary" id="genesis-nav-primary">
        <div class="wrap">
          <div class="nav-drawer-header">
            <div class="nav-drawer-brand">Menu</div>
            <button class="nav-drawer-close" id="nav-close" aria-label="Close navigation" type="button">&times;</button>
          </div>

          <ul id="menu-top" class="menu genesis-nav-menu menu-primary js-superfish">
            <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-54"><a href="../../index.php"><span>Home</span></a></li>
            <li id="menu-item-66" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-66"><a target="_blank" href="https://chesapeake-golf-club.book.teeitup.golf/"><span>Tee Times</span></a></li>
            <li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent menu-item-has-children menu-item-56">
              <a href="../index.php"><span>Course</span></a>
              <button class="sub-toggle" aria-label="Toggle Course submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li id="menu-item-122" class="menu-item menu-item-122"><a href="../rates/index.php"><span>Rates</span></a></li>
                <li id="menu-item-115" class="menu-item menu-item-115"><a href="../course-history/index.php"><span>Course History</span></a></li>
                <li id="menu-item-117" class="menu-item current-menu-item page_item page-item-112 current_page_item menu-item-117"><a href="index.php" aria-current="page"><span>Driving Directions</span></a></li>
              </ul>
            </li>
            <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-60">
              <a href="../../membership/index.php"><span>Membership</span></a>
              <button class="sub-toggle" aria-label="Toggle Membership submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li id="menu-item-91" class="menu-item menu-item-91"><a href="../../membership/hampton-roads-golf-associate-membership/index.php"><span>Hampton Roads Golf Associate Membership</span></a></li>
                <li id="menu-item-1867" class="menu-item menu-item-1867"><a href="../../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf"><span>Membership Pool</span></a></li>
              </ul>
            </li>
            <li id="menu-item-1904" class="menu-item menu-item-1904"><a href="../../event-hall/index.php"><span>Event Hall</span></a></li>
            <li id="menu-item-210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-210">
              <a href="../../golf/index.php"><span>Events</span></a>
              <button class="sub-toggle" aria-label="Toggle Events submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li id="menu-item-120" class="menu-item menu-item-120"><a href="../../golf/junior-camp/index.php"><span>Jr. Camp</span></a></li>
              </ul>
            </li>
            <li id="menu-item-64" class="menu-item menu-item-64"><a href="../../tournament/index.php"><span>Tournament</span></a></li>
            <li id="menu-item-55" class="menu-item menu-item-55"><a href="../../contact-us/index.php"><span>Contact Us</span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- Original slider — hidden, preserved for backend -->
  <div class="slider-wrapper theme-default"><div class="ribbon"></div><div id="nivoslider-306" class="nivoSlider"><img src="../../wp-content/uploads/sites/7040/2018/06/1.jpg" alt="" /><img src="../../wp-content/uploads/sites/7040/2018/06/2.jpg" alt="" /></div></div>
  <script type="text/javascript">
  jQuery(window).load(function(){
      jQuery("#nivoslider-306").nivoSlider({effect:"fade",slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:3000,startSlide:0,directionNav:false,controlNav:false,controlNavThumbs:false,pauseOnHover:false,manualAdvance:false,afterLoad:function(){caption_link();},afterChange:function(){caption_link();}});
  });
  function caption_link(){var link=jQuery(".nivoSlider").data("nivo:vars").currentImage.closest("a");if(link&&link.length>0){jQuery(".nivoSlider .nivo-caption").css("cursor","pointer").click(function(){window.location=link.attr("href");});}else{jQuery(".nivoSlider .nivo-caption").css("cursor","default").click(function(){return false;});}}
  </script>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="hero-eyebrow">Chesapeake Golf Club</p>
      <h1 class="page-hero-title">Driving Directions</h1>
      <p class="page-hero-sub">Find us in the heart of Chesapeake, Virginia — just 15 minutes from downtown Norfolk, off I-64.</p>
      <div class="hero-pill-row">
        <span class="hero-pill">Las Gaviotas · Chesapeake</span>
        <span class="hero-pill">15 Min from Norfolk</span>
        <span class="hero-pill">I-64 Exit 291B</span>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <div class="inner">
      <a href="../../index.php">Home</a>
      <span class="breadcrumb-sep">›</span>
      <a href="../index.php">Course</a>
      <span class="breadcrumb-sep">›</span>
      <span class="breadcrumb-current">Driving Directions</span>
    </div>
  </div>

  <!-- MAIN -->
  <div class="site-inner">
    <div class="content-sidebar-wrap">
      <main class="content" id="genesis-content">
        <article class="post-112 page type-page status-publish entry" aria-label="Driving Directions">
          <header class="entry-header"><h1 class="entry-title">Driving Directions</h1></header>
          <div class="entry-content">

     


            <!-- MAP SECTION — gazebo-section style with iframe -->
            <section class="map-section">
              <div class="map-card">

                <!-- Google Map iframe — original preserved -->
                <div class="map-iframe-wrap">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.4118274501525!2d-76.2874478!3d36.712669399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89baa52612c5980d%3A0x7ec2e2cb4ae9b922!2sChesapeake+Golf+Course!5e0!3m2!1sen!2s!4v1442821876470" width="100%" height="100%" frameborder="0" style="border:0" id="gmap1" allowfullscreen loading="lazy"></iframe>
                </div>
                <script type="text/javascript">
                $gmap_url = jQuery.noConflict();
                $gmap_url(document).ready(function() {
                    var expr = new RegExp( /^http:\/\// );
                    if( expr.exec( $gmap_url('#gmap1').attr( 'src' ) ) ) {
                        $gmap_url('#gmap1').attr( 'src', $gmap_url('#gmap1').attr( 'src' ).replace( 'index.php', 'index.php' ) );
                    }
                });
                </script>
           <!-- INFO BLOCKS -->
            <section class="info-section">
              <div class="info-inner">

                <div class="info-block">
                  <div class="info-icon">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                  </div>
                  <span class="info-label">Address</span>
                  <div class="info-title">Chesapeake Golf Club</div>
                  <div class="info-detail">1201 Clubhouse Drive<br>Las Gaviotas<br>Chesapeake, VA 23322</div>
                  <a href="https://www.google.com/maps/dir//Chesapeake+Golf+Course" target="_blank" class="info-link">
                    View on Map <svg viewBox="0 0 24 24"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                  </a>
                </div>

                <div class="info-block">
                  <div class="info-icon">
                    <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                  </div>
                  <span class="info-label">Nearest Landmark</span>
                  <div class="info-title">I-64 Exit 291B</div>
                  <div class="info-detail">Dominion Blvd / Elizabeth City exit.<br>Approximately 15 minutes from downtown Norfolk and most of South Hampton Roads.</div>
                </div>

                <div class="info-block">
                  <div class="info-icon">
                    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.81a19.79 19.79 0 01-3.07-8.64A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                  </div>
                  <span class="info-label">Contact Us</span>
                  <div class="info-title">Pro Shop</div>
                  <div class="info-detail">Call or visit us during business hours. Our staff are happy to help with tee times, rates, and membership enquiries.</div>
                  <a href="../../contact-us/index.php" class="info-link">
                    Contact Page <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                </div>

              </div>
            </section>
                <!-- Info bar below map — like gazebo-body -->
                <div class="map-body">
                  <div class="map-address-block">
                    <span class="map-address-eyebrow">Our Location</span>
                    <div class="map-address-name">Chesapeake Golf Club</div>
                    <div class="map-address-text">
                      1201 Clubhouse Drive, Las Gaviotas<br>
                      Chesapeake, Virginia 23322
                    </div>
                  </div>
                  <div class="map-actions">
                    <a href="https://www.google.com/maps/dir//Chesapeake+Golf+Course,+1201+Clubhouse+Dr,+Chesapeake,+VA+23322" target="_blank" class="map-btn primary">
                      Get Directions
                      <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                    </a>
                    <a href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank" class="map-btn secondary">
                      Book Tee Time
                      <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                  </div>
                </div>

              </div>
            </section>

 

            <!-- CTA — identical to Event Hall -->
            <section class="cta-section">
              <div class="cta-card">
                <div class="cta-left">
                  <span class="cta-badge">Ready to Play?</span>
                  <h2 class="cta-title">We'll See You<br>on the Course</h2>
                  <p class="cta-desc">Now that you know how to find us, book your tee time online or give us a call. Chesapeake Golf Club — Hampton Roads' best-kept secret — is waiting for you.</p>
                  <div class="cta-btns">
                    <a href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank" class="cta-btn-primary">
                      Book Tee Time
                      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="../rates/index.php" class="cta-btn-secondary">
                      View Rates
                      <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                  </div>
                </div>
                <div class="cta-right">
                  <div class="cta-checklist">
                    <div class="cta-check-item">
                      <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                      15 Minutes from Downtown Norfolk
                    </div>
                    <div class="cta-check-item">
                      <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                      Conveniently Located in South Hampton Roads
                    </div>
                    <div class="cta-check-item">
                      <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                      Ample Parking on Clubhouse Drive
                    </div>
                    <div class="cta-check-item">
                      <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                      Pro Shop, Driving Range &amp; Restaurant On-site
                    </div>
                    <div class="cta-check-item">
                      <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                      Open to the Public — All Skill Levels Welcome
                    </div>
                  </div>
                </div>
              </div>
            </section>

          </div>
        </article>
      </main>
    </div>
  </div>

  <!-- FOOTER — original preserved -->
  <footer class="site-footer">
    <div class="wrap">
      <div class="golfnow-footer text-white">
        <div class="copy">&copy; 2026 Chesapeake Golf, a Hampton Roads Golf Company. All Rights Reserved.</div>
      </div>
    </div>
  </footer>

</div><!-- .site-container -->

<!-- ALL ORIGINAL BACKEND SCRIPTS PRESERVED -->
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/sites\/7040\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/altitude-pro\/*","\/wp-content\/themes\/genesis\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<script type="text/javascript">IOM.run();</script>
<script type="text/javascript">
jQuery(document).ready(function() {
    IOM.run();
    jQuery('.menu-item-67 a').click(function() {
        var widgetUrl = 'https://shop.giftlocal.com/309-chesapeake-golf-club/';
        var widgetTitle = '';
        if (!IOM.open(widgetUrl, widgetTitle)) window.open(widgetUrl);
    });
});
</script>
<style type="text/css" media="screen"></style>
<script>
var url=window.location.toString();
var _comscore = _comscore || [];
_comscore.push({ c1: "2", c2: "6035083", c3: "", c4: url });
(function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
    s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
})();
</script>
<noscript><img src="https://b.scorecardresearch.com/p?c1=2&c2=6035083&c3=&c4=&c5=&c6=&c15=&cv=2.0&cj=1" /></noscript>

<link rel='stylesheet' id='nivoslider-css' href='../../wp-content/plugins/nivo-slider/assets/css/nivo-slider25b6.css?ver=2.3.5' media='all' />
<link rel='stylesheet' id='nivoslider-theme-default-css' href='../../wp-content/plugins/nivo-slider/assets/themes/default/default25b6.css?ver=2.3.5' media='all' />
<script type="text/javascript" src="../../wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script type="text/javascript" src="../../wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );</script>
<script type="text/javascript" src="../../wp-content/mu-plugins/wp-parsely-3.22/build/loader422d.js?ver=ecf94842061bea03d54b" id="wp-parsely-loader-js"></script>
<script type="text/javascript" data-parsely-site="vip.nbcsportsnext.com" src="../../../cdn.parsely.com/keys/vip.nbcsportsnext.com/p0599.js?ver=3.22.0" id="parsely-cfg"></script>
<script type="text/javascript" src="../../wp-content/plugins/ghostkit/assets/vendor/ivent/dist/ivent.mine480.js?ver=0.2.0" id="ivent-js"></script>
<script type="text/javascript" id="ghostkit-helper-js-extra">
var ghostkitVariables = {"version":"3.4.6","pro":"","themeName":"Genesis","settings":[],"disabledBlocks":[],"media_sizes":{"sm":576,"md":768,"lg":992,"xl":1200},"timezone":"UTC+00:00","googleMapsAPIKey":"","googleMapsAPIUrl":"https:\/\/maps.googleapis.com\/maps\/api\/js?v=3.exp&language=en","googleReCaptchaAPISiteKey":"","googleReCaptchaAPISecretKey":"","sidebars":{"sidebar":{"id":"sidebar","name":"Primary Sidebar"},"front-page-1":{"id":"front-page-1","name":"Front Page 1"},"front-page-2":{"id":"front-page-2","name":"Front Page 2"},"front-page-3":{"id":"front-page-3","name":"Front Page 3"},"front-page-4":{"id":"front-page-4","name":"Front Page 4"},"front-page-5":{"id":"front-page-5","name":"Front Page 5"},"front-page-6":{"id":"front-page-6","name":"Front Page 6"},"front-page-7":{"id":"front-page-7","name":"Front Page 7"},"footer-1":{"id":"footer-1","name":"Footer 1"},"after-entry":{"id":"after-entry","name":"After Entry"},"homepage-before-content":{"id":"homepage-before-content","name":"Homepage Before Content"}},"icons":[],"shapes":[],"fonts":[],"customTypographyList":[],"admin_url":"https:\/\/www.chesapeakegolfclub.com\/wp-admin\/","admin_templates_url":"https:\/\/www.chesapeakegolfclub.com\/wp-admin\/edit.php?post_type=ghostkit_template"};
</script>
<script type="text/javascript" id="ghostkit-helper-js-before">
if (ghostkitVariables) { ghostkitVariables.allowPluginColorPalette = true; }
if (ghostkitVariables) { ghostkitVariables.allowPluginCustomizer = true; }
</script>
<script type="text/javascript" src="../../wp-content/plugins/ghostkit/build/assets/js/helper4f85.js?ver=1403a9c18f9b7b6b9525" id="ghostkit-helper-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/ghostkit/build/assets/js/event-fallbacksd932.js?ver=decaba978f8c6159be7a" id="ghostkit-event-fallbacks-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/ghostkit/assets/vendor/motion/dist/motion.mina074.js?ver=11.15.0" id="motion-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/ghostkit/build/assets/js/mainfdcc.js?ver=e413b5dd702e70f45593" id="ghostkit-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/ghostkit/build/gutenberg/extend/effects/frontend18b9.js?ver=42f5f2cc501efadd2b31" id="ghostkit-extension-effects-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/ghostkit/build/gutenberg/style-variants/core-list/frontend9fa6.js?ver=a973ba5275fec96abda8" id="ghostkit-style-variant-core-list-js"></script>
<script type="text/javascript" src="../../wp-includes/js/hoverIntent.min3e5a.js?ver=1.10.2" id="hoverIntent-js"></script>
<script type="text/javascript" src="../../wp-content/themes/genesis/lib/js/menu/superfish.mina71a.js?ver=1.7.10" id="superfish-js"></script>
<script type="text/javascript" src="../../wp-content/themes/genesis/lib/js/menu/superfish.args.minaf6c.js?ver=3.6.0" id="superfish-args-js"></script>
<script type="text/javascript" src="../../wp-content/themes/genesis/lib/js/skip-links.minaf6c.js?ver=3.6.0" id="skip-links-js"></script>
<script type="text/javascript" id="altitude-responsive-menu-js-extra">
var genesis_responsive_menu = {"mainMenu":"Menu","subMenu":"Submenu","menuClasses":{"combine":[".nav-primary",".nav-secondary"]}};
</script>
<script type="text/javascript" src="../../wp-content/themes/altitude-pro/js/responsive-menus.minc358.js?ver=1.1.3" id="altitude-responsive-menu-js"></script>
<script type="text/javascript" id="golfnow-legacy-shortcodes-js-js-extra">
var genesis_shortcodes_strings = {"previous":"Previous","next":"Next"};
</script>
<script type="text/javascript" src="../../wp-content/plugins/golfnow-legacy-shortcodes/assets/js/genesis_shortcodes_frontend5152.js?ver=1.0" id="golfnow-legacy-shortcodes-js-js"></script>
<script type="text/javascript" src="../../wp-content/plugins/golfnow-customize/assets/dist/vendor/jquery.backstretchb3e8.js?ver=0.1" id="jquery-backstretch-js"></script>
<script type="text/javascript" id="golfnow-scripts-js-extra">
var GN = {"background_images":["https:\/\/www.chesapeakegolfclub.com\/wp-content\/uploads\/sites\/7040\/2018\/09\/thumbnail.jpg","index.php\/\/www.chesapeakegolfclub.com\/wp-content\/uploads\/sites\/7040\/2021\/10\/IMG_6867.jpg","https:\/\/www.chesapeakegolfclub.com\/wp-content\/uploads\/sites\/7040\/2021\/10\/IMG_6865.jpg"]};
</script>
<script type="text/javascript" src="../../wp-content/plugins/golfnow-customize/assets/dist/scripts.mindc63.js?ver=0.1.1" id="golfnow-scripts-js"></script>
<script type="text/javascript" id="jetpack-stats-js-before">
_stq = window._stq || [];
_stq.push([ "view", {"v":"ext","blog":"158795460","post":"112","tz":"0","srv":"www.chesapeakegolfclub.com","hp":"vip","j":"1:15.4"} ]);
_stq.push([ "clickTrackerInit", "158795460", "112" ]);
</script>
<script type="text/javascript" src="../../../stats.wp.com/e-202607.js" id="jetpack-stats-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="../../wp-content/plugins/nivo-slider/assets/js/jquery.nivo.slider.pack25b6.js?ver=2.3.5" id="nivoslider-js"></script>

<script>
(function () {
  var toggle  = document.getElementById('nav-toggle');
  var closeBtn = document.getElementById('nav-close');
  var nav     = document.getElementById('genesis-nav-primary');

  if (!toggle || !nav) return;

  function openNav() {
    nav.classList.add('open');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  function closeNav() {
    nav.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    nav.querySelectorAll('.menu-item-has-children').forEach(function(li) {
      li.classList.remove('sub-open');
    });
  }

  toggle.addEventListener('click', function () {
    nav.classList.contains('open') ? closeNav() : openNav();
  });

  if (closeBtn) closeBtn.addEventListener('click', closeNav);

  nav.addEventListener('click', function (e) {
    if (e.target === nav) closeNav();
  });

  var parents = nav.querySelectorAll('.menu-item-has-children');
  parents.forEach(function (li) {
    var btn = li.querySelector(':scope > .sub-toggle');
    if (!btn) return;
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      var wasOpen = li.classList.contains('sub-open');
      parents.forEach(function (p) { p.classList.remove('sub-open'); });
      if (!wasOpen) li.classList.add('sub-open');
    });
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 900) closeNav();
  });

  (function lockGreen() {
    var header = document.querySelector('.site-header');
    if (!header) return;
    function apply() {
      header.style.setProperty('background', '#034e42', 'important');
      header.style.setProperty('background-color', '#034e42', 'important');
    }
    apply();
    if (window.MutationObserver) {
      new MutationObserver(apply).observe(header, { attributes: true, attributeFilter: ['style', 'class'] });
    }
    window.addEventListener('scroll', apply, { passive: true });
  })();
})();
</script>

</body>
<!-- Mirrored from www.chesapeakegolfclub.com/course/driving-directions/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Feb 2026 07:31:51 GMT -->
</html>