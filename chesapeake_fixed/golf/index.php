<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>EVENTS - Chesapeake Golf</title>
<link rel="canonical" href="index.php" />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Barlow:wght@300;400;500;600&family=Barlow+Condensed:wght@600;700&display=swap" rel="stylesheet">

<style>
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
  a { color: var(--crimson); text-decoration: none; }
  a:hover { color: var(--crimson-dark); text-decoration: underline; }

  /* ── HEADER ── */
  .site-header {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background: var(--forest); box-shadow: 0 2px 24px rgba(0,0,0,0.25);
  }
  .site-header .wrap {
    max-width: 1280px; margin: 0 auto; padding: 0 32px;
    display: flex; align-items: center; justify-content: space-between; height: 72px;
  }
  .title-area { flex-shrink: 0; }
  .site-title { margin: 0; }
  .site-title a {
    display: block; width: 107px; height: 64px;
    background: url(../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat center/contain;
    text-indent: -9999px; overflow: hidden;
  }
  .site-description { display: none; }
  ul#menu-top {
    list-style: none; display: flex; align-items: center; gap: 4px; margin: 0; padding: 0;
  }
  ul#menu-top > li > a {
    color: rgba(255,255,255,0.88);
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 13px; font-weight: 600; letter-spacing: 1.2px;
    text-transform: uppercase; padding: 8px 14px; border-radius: 4px;
    display: block; transition: color 0.2s, background 0.2s; white-space: nowrap;
  }
  ul#menu-top > li > a:hover,
  ul#menu-top > li.current-menu-item > a { color: var(--white); background: rgba(255,255,255,0.12); text-decoration: none; }
  li.menu-item-has-children { position: relative; }
  .sub-menu {
    display: none; position: absolute; top: calc(100% + 4px); left: 0;
    background: var(--forest-dark); border-top: 2px solid var(--gold);
    border-radius: 0 0 6px 6px; min-width: 240px; list-style: none; padding: 8px 0;
    box-shadow: 0 12px 32px rgba(0,0,0,0.3); z-index: 100;
  }
  li.menu-item-has-children:hover .sub-menu { display: block; }
  .sub-menu li a {
    display: block; padding: 10px 20px; color: rgba(255,255,255,0.82);
    font-family: 'Barlow', sans-serif; font-size: 13px; letter-spacing: 0.5px;
    transition: background 0.15s, color 0.15s;
  }
  .sub-menu li a:hover { background: var(--forest-light); color: #fff; text-decoration: none; }

  /* ── PAGE HERO ── */
  .page-hero {
    position: relative; margin-top: 72px;
    height: 56vh; min-height: 400px;
    display: flex; align-items: center; justify-content: center;
    background-image: url(../wp-content/uploads/sites/7040/2018/09/thumbnail.jpg);
    background-size: cover; background-position: center 30%; overflow: hidden;
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
    letter-spacing: 0.4px; max-width: 520px; margin: 0 auto 40px; line-height: 1.65;
  }
  .hero-pill-row { display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; }
  .hero-pill {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold-light); border: 1px solid rgba(200,169,110,0.45);
    padding: 6px 18px; border-radius: 20px; background: rgba(200,169,110,0.08);
  }

  /* ── BREADCRUMB ── */
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

  /* ── SHARED SECTION LABELS ── */
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

  /* ── EVENTS SECTION ── */
  .events-section { background: var(--cream); padding: 80px 32px; }
  .events-inner { max-width: 900px; margin: 0 auto; }

  /* 2-column grid, centred, max 900px so cards are wide and balanced */
  .events-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 32px;
    margin-top: 48px;
  }

  /* ── EVENT CARD ── */
  .event-card {
    background: var(--white);
    border-radius: 12px; overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.08);
    border: 1px solid var(--light-gray);
    display: flex; flex-direction: column;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .event-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 64px rgba(0,0,0,0.14);
  }
  .event-card-top { height: 4px; background: var(--forest); flex-shrink: 0; }
  .event-card.featured .event-card-top { background: var(--crimson); }
  .event-card.junior   .event-card-top { background: var(--gold); }

  .event-card-body { padding: 36px 36px 30px; display: flex; flex-direction: column; flex: 1; }

  .event-card-header {
    display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;
  }
  .event-tag {
    display: inline-block;
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 10px; font-weight: 700;
    letter-spacing: 2.5px; text-transform: uppercase;
    padding: 5px 12px; border-radius: 2px;
    background: rgba(3,78,66,0.08); color: var(--forest);
  }
  .event-card.featured .event-tag { background: rgba(202,28,58,0.08); color: var(--crimson); }
  .event-card.junior   .event-tag { background: rgba(200,169,110,0.18); color: #7a5c1e; }

  .event-card-icon {
    width: 44px; height: 44px; border-radius: 50%;
    border: 1.5px solid rgba(200,169,110,0.45);
    background: rgba(200,169,110,0.07);
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .event-card-icon svg { width: 18px; height: 18px; stroke: var(--gold); fill: none; stroke-width: 2; }

  .event-card-divider { width: 40px; height: 2px; background: var(--gold); margin-bottom: 16px; }

  .event-card-title {
    font-family: 'Playfair Display', serif;
    font-size: 24px; font-weight: 700;
    color: var(--charcoal); line-height: 1.2; margin-bottom: 14px;
  }
  .event-card-desc {
    font-size: 15px; color: var(--mid); line-height: 1.75; flex: 1; margin-bottom: 28px;
  }
  .event-card-footer {
    display: flex; align-items: center; justify-content: space-between;
    padding-top: 20px; border-top: 1px solid var(--light-gray); margin-top: auto;
  }
  .event-meta {
    display: flex; align-items: center; gap: 7px;
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 11px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--mid);
  }
  .event-meta svg { width: 13px; height: 13px; stroke: var(--gold); fill: none; stroke-width: 1.8; flex-shrink: 0; }
  .event-link {
    display: inline-flex; align-items: center; gap: 5px;
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    color: var(--forest); text-decoration: none;
    transition: gap 0.2s, color 0.2s;
  }
  .event-link:hover { gap: 9px; color: var(--crimson); text-decoration: none; }
  .event-link svg { width: 12px; height: 12px; stroke: currentColor; fill: none; stroke-width: 2.5; }

  /* ── CTA SECTION ── */
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
    transition: background 0.2s, transform 0.2s; text-decoration: none;
    box-shadow: 0 8px 24px rgba(202,28,58,0.4);
  }
  .cta-btn-primary:hover { background: var(--crimson-dark); transform: translateY(-2px); text-decoration: none; }
  .cta-btn-secondary {
    display: inline-flex; align-items: center; gap: 10px; justify-content: center;
    background: transparent; border: 1px solid rgba(255,255,255,0.3);
    color: rgba(255,255,255,0.85) !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    padding: 14px 36px; border-radius: 2px;
    transition: border-color 0.2s, background 0.2s; text-decoration: none;
  }
  .cta-btn-secondary:hover { border-color: rgba(255,255,255,0.6); background: rgba(255,255,255,0.07); text-decoration: none; }
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

  /* ── FOOTER ── */
  .site-footer { background: var(--crimson-dark); padding: 24px 32px; }
  .site-footer .wrap { max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); letter-spacing: 0.5px; }

  /* ── UTILS ── */
  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .genesis-skip-link { list-style: none; }
  .screen-reader-shortcut { position: absolute; left: -9999px; }
  .entry-header { display: none; }

  /* ── RESPONSIVE ── */
  @media (max-width: 768px) {
    .site-header .wrap { padding: 0 16px; height: 60px; }
    ul#menu-top { display: none; }
    .events-section { padding: 48px 20px; }
    .events-grid { grid-template-columns: 1fr; }
    .cta-section { padding: 0 20px 48px; }
    .cta-card { grid-template-columns: 1fr; }
    .cta-left, .cta-right { padding: 40px 28px; }
    .breadcrumb-bar { padding: 12px 20px; }
    .page-hero { height: 50vh; }
  }

    /* Hamburger hidden on desktop */
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
      display: inline-flex !important;
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
      z-index: 10002 !important;
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

    /* Drawer panel */
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
      pointer-events: auto !important;
    }
    .nav-primary.open { pointer-events: auto !important; }

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

    /* ── Menu list — full width, stacked ── */
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
</head>

<body>
<div class="site-container">

  <ul class="genesis-skip-link">
    <li><a href="#genesis-content" class="screen-reader-shortcut">Skip to main content</a></li>
  </ul>

  <!-- HEADER -->
  <header class="site-header">
    <div class="wrap">
      <div class="title-area">
        <p class="site-title"><a href="../index.php">Chesapeake Golf</a></p>
        <p class="site-description">Chesapeake, VA</p>
      </div>
      <nav class="nav-primary" aria-label="Main">
        <div class="wrap">
          <ul id="menu-top">
            <li><a href="../index.php"><span>Home</span></a></li>
            <li><a target="_blank" href="https://chesapeake-golf-club.book.teeitup.golf/"><span>Tee Times</span></a></li>
            <li class="menu-item-has-children">
              <a href="../course/index.php"><span>Course</span></a>
              <ul class="sub-menu">
                <li><a href="../course/rates/index.php"><span>Rates</span></a></li>
                <li><a href="../course/course-history/index.php"><span>Course History</span></a></li>
                <li><a href="../course/driving-directions/index.php"><span>Driving Directions</span></a></li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="../membership/index.php"><span>Membership</span></a>
              <ul class="sub-menu">
                <li><a href="../membership/hampton-roads-golf-associate-membership/index.php"><span>Hampton Roads Golf Associate Membership</span></a></li>
                <li><a href="../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf"><span>Membership Pool</span></a></li>
              </ul>
            </li>
            <li><a href="../event-hall/index.php"><span>Event Hall</span></a></li>
            <li class="current-menu-item menu-item-has-children">
              <a href="index.php" aria-current="page"><span>Events</span></a>
              <ul class="sub-menu">
                <li><a href="junior-camp/index.php"><span>Jr. Camp</span></a></li>
              </ul>
            </li>
            <li><a href="../tournament/index.php"><span>Tournament</span></a></li>
            <li><a href="../contact-us/index.php"><span>Contact Us</span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="hero-eyebrow">Chesapeake Golf Club</p>
      <h1 class="page-hero-title">Events &amp; Programs</h1>
      <p class="page-hero-sub">From junior golf camps to tournaments and community outings — there's always something happening at Chesapeake Golf Club.</p>
      <div class="hero-pill-row">
        <span class="hero-pill">Tournaments</span>
        <span class="hero-pill">Junior Camp</span>
        <span class="hero-pill">Corporate Outings</span>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <div class="inner">
      <a href="../index.php">Home</a>
      <span class="breadcrumb-sep">›</span>
      <span class="breadcrumb-current">Events</span>
    </div>
  </div>

  <!-- MAIN -->
  <div class="site-inner">
    <main id="genesis-content">
      <article class="post-205 page type-page status-publish entry" aria-label="Events">
        <header class="entry-header"><h1 class="entry-title">Events</h1></header>
        <div class="entry-content">

          <!-- ── 2-CARD EVENTS SECTION ── -->
          <section class="events-section">
            <div class="events-inner">
              <p class="section-label">Upcoming &amp; Ongoing</p>
              <h2 class="section-heading">Events at the Club</h2>

              <div class="events-grid">

                <!-- Card 1: Tournament -->
                <div class="event-card featured">
                  <div class="event-card-top"></div>
                  <div class="event-card-body">
                    <div class="event-card-header">
                      <span class="event-tag">Tournament</span>
                      <div class="event-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M6 9H4.5a2.5 2.5 0 000 5H6"/><path d="M18 9h1.5a2.5 2.5 0 010 5H18"/><path d="M6 9h12v5a6 6 0 01-12 0V9z"/><line x1="12" y1="19" x2="12" y2="22"/><line x1="9" y1="22" x2="15" y2="22"/></svg>
                      </div>
                    </div>
                    <div class="event-card-divider"></div>
                    <div class="event-card-title">Club Tournament Series</div>
                    <p class="event-card-desc">Compete in our signature tournament series open to members and guests. Multiple flight categories ensure competitive play for all handicap levels.</p>
                    <div class="event-card-footer">
                      <span class="event-meta">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        Seasonal
                      </span>
                      <a href="../tournament/index.php" class="event-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                    </div>
                  </div>
                </div>

                <!-- Card 2: Junior Camp -->
                <div class="event-card junior">
                  <div class="event-card-top"></div>
                  <div class="event-card-body">
                    <div class="event-card-header">
                      <span class="event-tag">Junior Program</span>
                      <div class="event-card-icon">
                        <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                      </div>
                    </div>
                    <div class="event-card-divider"></div>
                    <div class="event-card-title">Junior Golf Camp</div>
                    <p class="event-card-desc">Our award-winning junior program teaches golf fundamentals in a fun, structured environment. Ages 6–17 welcome with certified PGA instruction.</p>
                    <div class="event-card-footer">
                      <span class="event-meta">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        Summer Sessions
                      </span>
                      <a href="junior-camp/index.php" class="event-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                    </div>
                  </div>
                </div>

              </div><!-- .events-grid -->
            </div>
          </section>

          <!-- ── CTA SECTION ── -->
          <section class="cta-section">
            <div class="cta-card">
              <div class="cta-left">
                <span class="cta-badge">Book Your Round</span>
                <h2 class="cta-title">Ready to Get<br>on the Course?</h2>
                <p class="cta-desc">Reserve a tee time online 24/7 or contact our team to book your next event, outing, or group round at Chesapeake Golf Club.</p>
                <div class="cta-btns">
                  <a href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank" class="cta-btn-primary">
                    Book Tee Time
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                  <a href="../contact-us/index.php" class="cta-btn-secondary">
                    Contact Us
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                  </a>
                </div>
              </div>
              <div class="cta-right">
                <div class="cta-checklist">
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Championship 18-Hole Course
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Seasonal Tournaments &amp; Competitions
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    PGA Certified Junior Golf Camp
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Corporate &amp; Charity Outing Packages
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    All Skill Levels Welcome
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </article>
    </main>
  </div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="wrap">
      <div class="copy">&copy; 2026 Chesapeake Golf, a Hampton Roads Golf Company. All Rights Reserved.</div>
    </div>
  </footer>

</div>

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
    if (window.innerWidth > 900) {
      closeNav();
    }
  });

  var header = document.querySelector('.site-header');
  if (header) {
    function applyGreen() {
      header.style.setProperty('background', '#034e42', 'important');
      header.style.setProperty('background-color', '#034e42', 'important');
    }
    applyGreen();
    if (window.MutationObserver) {
      new MutationObserver(applyGreen).observe(header, { attributes: true, attributeFilter: ['style', 'class'] });
    }
  }
})();
</script>

</body>
</html>