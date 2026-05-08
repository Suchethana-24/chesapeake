<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Rates - Chesapeake Golf</title>
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
  body {
    font-family: 'Barlow', sans-serif;
    background: var(--cream); color: var(--charcoal); overflow-x: hidden;
  }
  a { color: var(--crimson); text-decoration: none; }
  a:focus, a:hover { color: var(--crimson-dark); text-decoration: underline; }

  /* HEADER */
  .site-header {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background-color: #034e42 !important;
    box-shadow: 0 2px 24px rgba(0,0,0,0.25);
  }
  .site-header .wrap {
    max-width: 1280px; margin: 0 auto; padding: 0 32px;
    display: flex; align-items: center; justify-content: space-between; height: 72px;
  }
  .title-area { flex-shrink: 0; width: 107px; }
  .site-title { margin: 0; }
  .site-title a {
    display: block; width: 107px; height: 64px;
    background: url(../../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat center/contain !important;
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
    text-decoration: none !important;
  }
  ul#menu-top > li > a:hover,
  ul#menu-top > li.current-menu-item > a { color: var(--white); background: rgba(255,255,255,0.12); }
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
    transition: background 0.15s, color 0.15s; background-color: #034e42;
  }
  .sub-menu li a:hover { background: var(--forest-light); color: #fff; text-decoration: none; }

  /* PAGE HERO */
  .page-hero {
    position: relative; margin-top: 72px;
    height: 56vh; min-height: 400px;
    display: flex; align-items: center; justify-content: center;
    background-image: url(../../wp-content/uploads/sites/7040/2018/06/Hole-5-web.jpg);
    background-size: cover; background-position: center 40%;
    overflow: hidden;
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
    letter-spacing: 0.4px; max-width: 560px; margin: 0 auto 40px; line-height: 1.65;
  }
  .hero-pill-row { display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; }
  .hero-pill {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold-light); border: 1px solid rgba(200,169,110,0.45);
    padding: 6px 18px; border-radius: 20px; background: rgba(200,169,110,0.08);
  }

  /* BREADCRUMB */
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

  /* RATES SECTION */
  .rates-section {
    background: var(--cream);
    padding: 72px 32px 80px;
  }
  .rates-inner { max-width: 960px; margin: 0 auto; }
  .section-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 12px;
  }
  .section-heading {
    font-family: 'Playfair Display', serif;
    font-size: clamp(30px, 4vw, 44px); font-weight: 700;
    color: var(--charcoal); line-height: 1.15; margin-bottom: 48px;
  }

  /* RATES TABLE CARD */
  .rates-card {
    background: var(--white);
    border-radius: 12px; overflow: hidden;
    box-shadow: 0 8px 40px rgba(0,0,0,0.10);
    border: 1px solid var(--light-gray);
  }
  .rates-card-header {
    background: var(--forest);
    padding: 32px 40px;
    display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;
  }
  .rates-card-header-title {
    font-family: 'Playfair Display', serif;
    font-size: 26px; font-weight: 700; color: var(--white);
  }
  .rates-card-header-sub {
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 12px; font-weight: 600; letter-spacing: 2px;
    text-transform: uppercase; color: rgba(255,255,255,0.6);
    margin-top: 4px;
  }
  .rates-badge {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    color: var(--forest-dark); background: var(--gold);
    padding: 6px 16px; border-radius: 3px;
  }

  /* TABLE STYLES */
  .rates-table-wrap { padding: 0 40px 40px; overflow-x: auto; }

  .rate-group { margin-top: 36px; }
  .rate-group-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); border-bottom: 2px solid var(--gold);
    padding-bottom: 8px; margin-bottom: 0;
    display: flex; align-items: center; gap: 8px;
  }
  .rate-group-label svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 2; }

  table.rates-table {
    width: 100%; border-collapse: collapse;
  }
  table.rates-table thead tr th {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    color: var(--mid); background: #f4f1eb;
    padding: 12px 16px; text-align: left; border-bottom: 1px solid var(--light-gray);
  }
  table.rates-table thead tr th:last-child,
  table.rates-table tbody tr td:last-child { text-align: right; }
  table.rates-table tbody tr td {
    font-family: 'Barlow', sans-serif; font-size: 15px;
    color: var(--charcoal); padding: 14px 16px;
    border-bottom: 1px solid #f0ece3;
    vertical-align: middle;
  }
  table.rates-table tbody tr:last-child td { border-bottom: none; }
  table.rates-table tbody tr:hover td { background: #faf8f4; }

  .rate-label { font-weight: 500; }
  .rate-note {
    display: block; font-size: 12px; color: var(--mid);
    font-weight: 400; margin-top: 2px; letter-spacing: 0.2px;
  }
  .rate-price {
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 20px; font-weight: 700; color: var(--forest);
    white-space: nowrap;
  }
  .rate-price-sub {
    font-family: 'Barlow', sans-serif;
    font-size: 11px; color: var(--mid); font-weight: 400;
    display: block; letter-spacing: 0.5px;
  }
  .weekend-price { color: var(--crimson); }

  /* DIVIDER */
  .rates-divider {
    height: 1px; background: var(--light-gray); margin: 8px 0;
  }

  /* FOOTER STRIP */
  .rates-card-footer {
    padding: 20px 40px;
    display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;
    border-top: 1px solid var(--light-gray);
    background: var(--white);
  }
  .rates-footer-note {
    font-family: 'Barlow', sans-serif; font-size: 13px;
    color: var(--mid); display: flex; align-items: center; gap: 7px;
  }
  .rates-footer-note svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 2; flex-shrink: 0; }
  .rates-book-btn {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--forest); color: #fff !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    padding: 12px 28px; border-radius: 2px;
    transition: background 0.2s, transform 0.2s; text-decoration: none !important;
  }
  .rates-book-btn:hover { background: var(--forest-light); transform: translateY(-1px); text-decoration: none !important; }
  .rates-book-btn svg { width: 12px; height: 12px; stroke: currentColor; fill: none; stroke-width: 2.5; }

  /* NOTES CARD */
  .rates-notes {
    margin-top: 24px;
    background: var(--white);
    border: 1px solid var(--light-gray);
    border-left: 4px solid var(--gold);
    border-radius: 0 8px 8px 0;
    padding: 20px 24px;
  }
  .rates-notes-title {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 12px;
  }
  .rates-notes ul {
    list-style: none; padding: 0; margin: 0;
    display: flex; flex-direction: column; gap: 8px;
  }
  .rates-notes ul li {
    font-size: 13px; color: var(--mid);
    display: flex; align-items: flex-start; gap: 8px; line-height: 1.5;
  }
  .rates-notes ul li::before {
    content: '';
    display: inline-block; width: 5px; height: 5px;
    background: var(--gold); border-radius: 50%;
    flex-shrink: 0; margin-top: 7px;
  }

  /* CTA SECTION */
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
  .cta-desc { font-size: 15px; color: rgba(255,255,255,0.70); line-height: 1.75; margin-bottom: 36px; max-width: 380px; }
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
  .cta-btn-secondary:hover { border-color: rgba(255,255,255,0.6); background: rgba(255,255,255,0.07); }
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

  /* FOOTER */
  .site-footer { background-color: #9a3c48; padding: 24px 32px; }
  .site-footer .wrap { max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); letter-spacing: 0.5px; }

  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .site-inner { margin-top: 0; }

  @media (max-width: 1024px) {
    .cta-card { grid-template-columns: 1fr; }
    .cta-left, .cta-right { padding: 40px 32px; }
  }
  @media (max-width: 768px) {
    .site-header .wrap { padding: 0 16px; height: 60px; }
    ul#menu-top { display: none; }
    .rates-section { padding: 48px 20px 56px; }
    .rates-card-header { padding: 24px 24px; }
    .rates-table-wrap { padding: 0 20px 32px; }
    .rates-card-footer { padding: 16px 24px; flex-direction: column; align-items: flex-start; }
    .cta-section { padding: 0 20px 48px; }
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

  <!-- HEADER -->
  <header class="site-header">
    <div class="wrap">
      <div class="title-area">
        <p class="site-title"><a href="#">Chesapeake Golf</a></p>
      </div>
      <nav aria-label="Main">
        <ul id="menu-top">
          <li><a href="../../index.php">Home</a></li>
          <li><a href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank">Tee Times</a></li>
          <li class="menu-item-has-children">
            <a href="../index.php">Course</a>
            <ul class="sub-menu">
              <li><a href="index.php">Rates</a></li>
              <li><a href="../course-history/index.php">Course History</a></li>
              <li><a href="../driving-directions/index.php">Driving Directions</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="../../membership/index.php">Membership</a>
            <ul class="sub-menu">
              <li><a href="../../membership/hampton-roads-golf-associate-membership/index.php">Hampton Roads Golf Associate Membership</a></li>
              <li><a href="../../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf">Membership Pool</a></li>
            </ul>
          </li>
          <li><a href="../../event-hall/index.php">Event Hall</a></li>
          <li class="menu-item-has-children">
            <a href="../../golf/index.php">Events</a>
            <ul class="sub-menu"><li><a href="../../golf/junior-camp/index.php">Jr. Camp</a></li></ul>
          </li>
          <li><a href="../../tournament/index.php">Tournament</a></li>
          <li><a href="../../contact-us/index.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="hero-eyebrow">Chesapeake Golf Club</p>
      <h1 class="page-hero-title">Green Fees &amp; Rates</h1>
      <p class="page-hero-sub">Transparent, competitive pricing for every round — weekdays, weekends, and twilight tee times at Chesapeake Golf Club.</p>
      <div class="hero-pill-row">
        <span class="hero-pill">Walking &amp; Riding</span>
        <span class="hero-pill">Weekday Rates</span>
        <span class="hero-pill">Weekend Rates</span>
        <span class="hero-pill">Twilight</span>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <div class="inner">
      <a href="#">Home</a>
      <span class="breadcrumb-sep">›</span>
      <a href="#">Course</a>
      <span class="breadcrumb-sep">›</span>
      <span class="breadcrumb-current">Rates</span>
    </div>
  </div>

  <!-- MAIN -->
  <div class="site-inner">
    <main id="genesis-content">

      <!-- RATES SECTION -->
      <section class="rates-section">
        <div class="rates-inner">
          <p class="section-label">Current Season</p>
          <h2 class="section-heading">Golf Rates</h2>

          <div class="rates-card">

            <!-- Card Header -->
            <div class="rates-card-header">
              <div>
                <div class="rates-card-header-title">Chesapeake Golf Club</div>
                <div class="rates-card-header-sub">18 Hole Green Fee Rates — Par 71</div>
              </div>
              <span class="rates-badge">2025 Season</span>
            </div>

            <!-- Table Content -->
            <div class="rates-table-wrap">

              <!-- Weekday Rates -->
              <div class="rate-group">
                <div class="rate-group-label">
                  <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                  Weekday Rates &nbsp;·&nbsp; Monday – Friday
                </div>
                <table class="rates-table">
                  <thead>
                    <tr>
                      <th style="width:55%">Rate Type</th>
                      <th>Details</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="rate-label">18 Holes with Cart</span></td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — 18 holes</span></td>
                      <td><span class="rate-price">$39<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                    <tr>
                      <td><span class="rate-label">18 Holes Walking</span></td>
                      <td><span style="font-size:13px;color:var(--mid);">Walking — 18 holes</span></td>
                      <td><span class="rate-price">$25<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                    <tr>
                      <td>
                        <span class="rate-label">Twilight with Cart</span>
                        <span class="rate-note">After 3:00 PM</span>
                      </td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — remaining holes</span></td>
                      <td><span class="rate-price">$25<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                    <tr>
                      <td>
                        <span class="rate-label">Super Twilight with Cart</span>
                        <span class="rate-note">After 5:00 PM</span>
                      </td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — remaining holes</span></td>
                      <td><span class="rate-price">$19<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Weekend / Holiday Rates -->
              <div class="rate-group">
                <div class="rate-group-label">
                  <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                  Weekend &amp; Holiday Rates &nbsp;·&nbsp; Sat, Sun &amp; Holidays
                </div>
                <table class="rates-table">
                  <thead>
                    <tr>
                      <th style="width:55%">Rate Type</th>
                      <th>Details</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="rate-label">18 Holes with Cart</span></td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — 18 holes</span></td>
                      <td><span class="rate-price weekend-price">$49<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                    <tr>
                      <td><span class="rate-label">18 Holes Walking</span></td>
                      <td><span style="font-size:13px;color:var(--mid);">Walking — 18 holes</span></td>
                      <td><span class="rate-price weekend-price">$35<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                    <tr>
                      <td>
                        <span class="rate-label">Twilight with Cart</span>
                        <span class="rate-note">After 3:00 PM</span>
                      </td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — remaining holes</span></td>
                      <td><span class="rate-price weekend-price">$35<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                    <tr>
                      <td>
                        <span class="rate-label">Super Twilight with Cart</span>
                        <span class="rate-note">After 5:00 PM</span>
                      </td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — remaining holes</span></td>
                      <td><span class="rate-price weekend-price">$25<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Senior / Junior -->
              <div class="rate-group">
                <div class="rate-group-label">
                  <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                  Discounted Rates &nbsp;·&nbsp; Senior &amp; Junior
                </div>
                <table class="rates-table">
                  <thead>
                    <tr>
                      <th style="width:55%">Rate Type</th>
                      <th>Details</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <span class="rate-label">Senior 18 Holes with Cart</span>
                        <span class="rate-note">Ages 60+ · Weekdays only</span>
                      </td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — 18 holes</span></td>
                      <td><span class="rate-price">$29<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                    <tr>
                      <td>
                        <span class="rate-label">Junior 18 Holes with Cart</span>
                        <span class="rate-note">Ages 17 &amp; under · Weekdays only</span>
                      </td>
                      <td><span style="font-size:13px;color:var(--mid);">Riding — 18 holes</span></td>
                      <td><span class="rate-price">$20<span class="rate-price-sub">per person</span></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div><!-- /rates-table-wrap -->

            <!-- Footer strip -->
            <div class="rates-card-footer">
              <span class="rates-footer-note">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                Rates subject to change. Tax not included.
              </span>
              <a href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank" class="rates-book-btn">
                Book Tee Time
                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>

          </div><!-- /rates-card -->

          <!-- Notes -->
          <div class="rates-notes">
            <div class="rates-notes-title">Rate Notes</div>
            <ul>
              <li>All rates are per person. Cart fees are included where listed.</li>
              <li>Senior and Junior discounts apply weekdays only (Monday–Friday, excluding holidays).</li>
              <li>Twilight and Super Twilight tee times are subject to daylight availability.</li>
              <li>Annual memberships are available — visit our Membership page for full details.</li>
              <li>Contact the pro shop for group rates, outings, and tournament pricing.</li>
            </ul>
          </div>

        </div>
      </section>

      <!-- CTA SECTION -->
      <section class="cta-section">
        <div class="cta-card">
          <div class="cta-left">
            <span class="cta-badge">Book Your Round</span>
            <h2 class="cta-title">Ready to Play<br>the Course?</h2>
            <p class="cta-desc">Reserve a tee time online 24/7 or contact our team to plan your next round at Chesapeake Golf Club.</p>
            <div class="cta-btns">
              <a href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank" class="cta-btn-primary">
                Book Tee Time
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
              <a href="#" class="cta-btn-secondary">
                Contact Us
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
              </a>
            </div>
          </div>
          <div class="cta-right">
            <div class="cta-checklist">
              <div class="cta-check-item">
                <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                Weekday &amp; Weekend Rates Available
              </div>
              <div class="cta-check-item">
                <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                Twilight &amp; Walking Rates
              </div>
              <div class="cta-check-item">
                <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                Annual Memberships for Regular Players
              </div>
              <div class="cta-check-item">
                <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                18-Hole Championship Course — Par 71
              </div>
              <div class="cta-check-item">
                <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                Online Booking Open 24/7
              </div>
            </div>
          </div>
        </div>
      </section>

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