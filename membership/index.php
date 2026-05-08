<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Membership - Chesapeake Golf</title>
<link rel="icon" href="../wp-content/themes/altitude-pro/images/favicon.ico" />
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
    position: fixed; top: 0; left: 0; right: 0;
    z-index: 1000;
    background: var(--forest) !important;
    box-shadow: 0 2px 24px rgba(0,0,0,0.25);
  }
  .site-header .wrap {
    max-width: 1280px; margin: 0 auto; padding: 0 32px;
    display: flex; align-items: center; justify-content: space-between;
    height: 72px;
  }
  .title-area { flex-shrink: 0; }
  .site-title { margin: 0; }
  .site-title a {
    display: block; width: 107px; height: 64px;
    background: url(../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat center/contain !important;
    text-indent: -9999px; overflow: hidden;
  }
  .site-description { display: none; }
  ul#menu-top {
    list-style: none; display: flex; align-items: center; gap: 4px;
    margin: 0; padding: 0;
  }

  /* ─── defaults (desktop: hide toggle and sub-toggle) ─── */
.nav-toggle { display: none; }
.sub-toggle { display: none; }
.nav-drawer-header { display: none; }
.nav-drawer-cta { display: none; }

  ul#menu-top > li > a {
    color: rgba(255,255,255,0.88);
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 13px; font-weight: 600; letter-spacing: 1.2px;
    text-transform: uppercase; padding: 8px 14px; border-radius: 4px;
    display: block; transition: color 0.2s, background 0.2s;
    white-space: nowrap; background: transparent;
  }
  ul#menu-top > li > a:hover,
  ul#menu-top > li.current-menu-item > a {
    color: var(--white); background: rgba(255,255,255,0.12); text-decoration: none;
  }
  li.menu-item-has-children { position: relative; }
  .sub-menu {
    display: none; position: absolute;
    top: calc(100% + 4px); left: 0;
    background: var(--forest-dark);
    border-top: 2px solid var(--gold);
    border-radius: 0 0 6px 6px;
    min-width: 260px; list-style: none; padding: 8px 0;
    box-shadow: 0 12px 32px rgba(0,0,0,0.3); z-index: 100;
  }
  li.menu-item-has-children:hover .sub-menu { display: block; }
  .sub-menu li a {
    display: block; padding: 10px 20px;
    color: rgba(255,255,255,0.82);
    font-family: 'Barlow', sans-serif; font-size: 13px;
    transition: background 0.15s, color 0.15s;
  }
  .sub-menu li a:hover { background: var(--forest-light); color: #fff; text-decoration: none; }

  /* ── HERO ── */
  .page-hero {
    position: relative; margin-top: 72px;
    height: 56vh; min-height: 400px;
    display: flex; align-items: center; justify-content: center;
    background-image: url(../wp-content/uploads/sites/7040/2018/06/1.jpg);
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
    max-width: 500px; margin: 0 auto 40px; line-height: 1.65;
  }
  .hero-pill-row {
    display: flex; align-items: center; justify-content: center;
    gap: 12px; flex-wrap: wrap;
  }
  .hero-pill {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold-light); border: 1px solid rgba(200,169,110,0.45);
    padding: 6px 18px; border-radius: 20px;
    background: rgba(200,169,110,0.08);
  }

  /* ── BREADCRUMB ── */
  .breadcrumb-bar { background: var(--forest); padding: 14px 32px; }
  .breadcrumb-bar .inner {
    max-width: 1280px; margin: 0 auto;
    display: flex; align-items: center; gap: 8px;
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
    font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase;
    color: var(--gold);
  }

  /* ── INTRO STRIP ── */
  .intro-strip {
    background: var(--white); padding: 80px 32px;
    border-bottom: 1px solid var(--light-gray);
  }
  .intro-strip-inner {
    max-width: 1100px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 72px; align-items: center;
  }
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
  .intro-stat-row {
    display: grid; grid-template-columns: repeat(3,1fr); gap: 0;
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 8px; overflow: hidden;
  }
  .intro-stat {
    background: var(--cream); padding: 36px 24px; text-align: center;
    border-right: 2px solid var(--light-gray);
  }
  .intro-stat:last-child { border-right: none; }
  .intro-stat-num {
    font-family: 'Playfair Display', serif; font-size: 42px;
    font-weight: 900; color: var(--forest); line-height: 1;
    display: block; margin-bottom: 6px;
  }
  .intro-stat-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--mid);
  }

  /* ── MEMBERSHIP CARDS (like venue cards) ── */
  .memberships-section { background: var(--cream); padding: 80px 32px; }
  .memberships-inner { max-width: 1200px; margin: 0 auto; }

  .mem-card {
    display: grid; grid-template-columns: 1fr 1fr;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 16px 64px rgba(0,0,0,0.12);
    margin-bottom: 60px; background: var(--white);
    transition: transform 0.3s, box-shadow 0.3s;
    text-decoration: none !important;
  }
  .mem-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 28px 80px rgba(0,0,0,0.18);
    text-decoration: none !important;
  }
  .mem-card.reverse { direction: rtl; }
  .mem-card.reverse > * { direction: ltr; }

  .mc-img {
    position: relative; overflow: hidden; min-height: 420px;
  }
  .mc-img img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transition: transform 0.6s ease;
  }
  .mem-card:hover .mc-img img { transform: scale(1.05); }
  .mc-badge {
    position: absolute; top: 28px; left: 28px;
    font-family: 'Playfair Display', serif; font-size: 13px;
    font-weight: 900; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); background: var(--forest-dark);
    padding: 6px 16px; border-radius: 2px;
    border-left: 3px solid var(--gold); z-index: 2;
  }
  .mc-img::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(2,20,16,0.55) 0%, transparent 55%);
  }

  .mc-body {
    background: var(--white); padding: 52px 52px;
    display: flex; flex-direction: column; justify-content: center;
  }
  .mc-tag {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 14px; display: inline-block;
  }
  .mc-name {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 2.8vw, 38px); font-weight: 900;
    color: var(--charcoal); line-height: 1.1; margin-bottom: 20px;
  }
  .mc-divider { width: 48px; height: 2px; background: var(--gold); margin-bottom: 20px; }
  .mc-desc { font-size: 14.5px; color: var(--mid); line-height: 1.8; margin-bottom: 32px; }

  .mc-perks {
    display: grid; grid-template-columns: 1fr 1fr; gap: 2px;
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 8px; overflow: hidden; margin-bottom: 28px;
  }
  .mc-perk {
    background: var(--cream); padding: 16px 20px;
    display: flex; align-items: center; gap: 10px;
    font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--mid);
  }
  .mc-perk-icon {
    width: 28px; height: 28px; border-radius: 50%; flex-shrink: 0;
    background: var(--forest);
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolyline points='20 6 9 17 4 12' stroke='%23c8a96e' stroke-width='2.5' fill='none'/%3E%3C/svg%3E");
    background-size: 14px; background-repeat: no-repeat; background-position: center;
  }

  .mc-cta {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--forest); color: #fff !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    padding: 14px 32px; border-radius: 2px; width: fit-content;
    transition: background 0.2s, transform 0.2s; text-decoration: none !important;
  }
  .mc-cta:hover { background: var(--forest-light); transform: translateY(-2px); text-decoration: none !important; }

  /* ── DARK DOWNLOADS PANEL (like Gazebo) ── */
  .downloads-section {
    background: var(--forest-dark); padding: 0 32px 80px;
  }
  .downloads-card {
    max-width: 1200px; margin: 0 auto;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 32px 80px rgba(0,0,0,0.5);
  }
  .downloads-img-wrap {
    position: relative; height: 420px; overflow: hidden;
  }
  .downloads-img-wrap img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transition: transform 0.7s ease;
  }
  .downloads-card:hover .downloads-img-wrap img { transform: scale(1.04); }
  .downloads-img-wrap::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(2,20,16,0.88) 0%, rgba(3,78,66,0.3) 50%, transparent 75%);
  }
  .downloads-overlay {
    position: absolute; bottom: 48px; left: 56px; right: 56px;
    z-index: 2; display: flex; align-items: flex-end;
    justify-content: space-between; gap: 32px;
  }
  .downloads-eyebrow {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 10px; display: block;
  }
  .downloads-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(32px, 4.5vw, 52px); font-weight: 900;
    color: var(--white); line-height: 1.05;
    text-shadow: 0 4px 24px rgba(0,0,0,0.4);
  }
  .downloads-body {
    background: #0d4d41; padding: 48px 56px;
    display: grid; grid-template-columns: 1fr 1fr; gap: 32px;
  }
  .dl-item {
    display: flex; align-items: center; gap: 20px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(200,169,110,0.2); border-radius: 10px;
    padding: 28px 28px; transition: background 0.2s, border-color 0.2s;
    text-decoration: none !important;
  }
  .dl-item:hover {
    background: rgba(255,255,255,0.10);
    border-color: rgba(200,169,110,0.5);
    text-decoration: none !important;
  }
  .dl-icon {
    width: 52px; height: 52px; border-radius: 10px; flex-shrink: 0;
    background: var(--gold); display: flex; align-items: center; justify-content: center;
  }
  .dl-icon svg { width: 24px; height: 24px; stroke: var(--forest-dark); fill: none; stroke-width: 2.5; }
  .dl-content {}
  .dl-title {
    font-family: 'Playfair Display', serif; font-size: 18px;
    font-weight: 700; color: var(--white); margin-bottom: 6px;
  }
  .dl-sub {
    font-family: 'Barlow', sans-serif; font-size: 13px;
    color: rgba(255,255,255,0.55); margin-bottom: 12px; line-height: 1.5;
  }
  .dl-btn {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold); border-bottom: 1px solid rgba(200,169,110,0.4);
    padding-bottom: 2px;
  }

  /* ── CTA ── */
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
    font-size: clamp(30px, 3vw, 44px); font-weight: 900;
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
  .cta-btn-primary:hover { background: var(--crimson-dark); transform: translateY(-2px); }
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
    padding: 18px 0; border-bottom: 1px solid rgba(255,255,255,0.07);
    color: rgba(255,255,255,0.85); font-size: 14.5px;
  }
  .cta-check-item:last-child { border-bottom: none; }
  .cta-check-icon {
    width: 34px; height: 34px; border-radius: 50%;
    border: 1.5px solid rgba(200,169,110,0.45);
    background: rgba(200,169,110,0.08);
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  }
  .cta-check-icon svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 2.5; }

  /* ── FOOTER ── */
  .site-footer { background: var(--crimson-dark); padding: 24px 32px; }
  .site-footer .wrap {
    max-width: 1280px; margin: 0 auto;
    display: flex; align-items: center; justify-content: center;
  }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); }

  /* ── UTILS ── */
  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .genesis-skip-link { list-style: none; }
  .screen-reader-shortcut { position: absolute; left: -9999px; }
  .entry-header { display: none; }

  /* ── RESPONSIVE ── */
  @media (max-width: 1024px) {
    .mem-card, .mem-card.reverse { grid-template-columns: 1fr; direction: ltr; }
    .mc-img { min-height: 300px; }
    .mc-body { padding: 36px 32px; }
    .intro-strip-inner { grid-template-columns: 1fr; gap: 40px; }
    .cta-card { grid-template-columns: 1fr; }
    .cta-left, .cta-right { padding: 40px 32px; }
    .downloads-body { grid-template-columns: 1fr; }
    .downloads-overlay { flex-direction: column; align-items: flex-start; gap: 16px; bottom: 28px; left: 28px; right: 28px; }
  }
  @media (max-width: 768px) {
.memberships-section, .intro-strip { padding: 48px 20px; }
    .downloads-section, .cta-section { padding: 0 20px 48px; }
    .breadcrumb-bar { padding: 12px 20px; }
    .downloads-img-wrap { height: 300px; }
    .downloads-body { padding: 32px 24px; gap: 20px; }
    .page-hero { height: 50vh; }
    .mc-perks { grid-template-columns: 1fr; }
  }

  /* ─── defaults (desktop: hide toggle and sub-toggle) ─── */
  .nav-toggle { display: none; }
  .sub-toggle { display: none; }
  .nav-drawer-header { display: none; }

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
      
      <!-- Hamburger button -->
      <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="menu-top" type="button" aria-label="Toggle navigation">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>

      <nav class="nav-primary" aria-label="Main" id="genesis-nav-primary">
        <div class="wrap">
          <div class="nav-drawer-header">
            <div class="nav-drawer-brand">Menu</div>
            <button class="nav-drawer-close" id="nav-close" aria-label="Close navigation" type="button">&times;</button>
          </div>

          <ul id="menu-top" class="menu genesis-nav-menu menu-primary">
            <li class="menu-item menu-item-home"><a href="../index.php"><span>Home</span></a></li>
            <li class="menu-item"><a target="_blank" href="https://chesapeake-golf-club.book.teeitup.golf/"><span>Tee Times</span></a></li>
            <li class="menu-item menu-item-has-children">
              <a href="../course/index.php"><span>Course</span></a>
              <button class="sub-toggle" aria-label="Toggle Course submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="../course/rates/index.php"><span>Rates</span></a></li>
                <li><a href="../course/course-history/index.php"><span>Course History</span></a></li>
                <li><a href="../course/driving-directions/index.php"><span>Driving Directions</span></a></li>
              </ul>
            </li>
            <li class="menu-item current-menu-item menu-item-has-children">
              <a href="index.php" aria-current="page"><span>Membership</span></a>
              <button class="sub-toggle" aria-label="Toggle Membership submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="hampton-roads-golf-associate-membership/index.php"><span>Hampton Roads Golf Associate Membership</span></a></li>
                <li><a href="../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf"><span>Membership Pool</span></a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="../event-hall/index.php"><span>Event Hall</span></a></li>
            <li class="menu-item menu-item-has-children">
              <a href="../golf/index.php"><span>Events</span></a>
              <button class="sub-toggle" aria-label="Toggle Events submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="../golf/junior-camp/index.php"><span>Jr. Camp</span></a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="../tournament/index.php"><span>Tournament</span></a></li>
            <li class="menu-item"><a href="../contact-us/index.php"><span>Contact Us</span></a></li>
          </ul>

          <a href="https://chesapeake-golf-club.book.teeitup.golf/" class="nav-drawer-cta" target="_blank">Book Tee Time</a>
        </div>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="hero-eyebrow">Chesapeake Golf Club</p>
      <h1 class="page-hero-title">Membership</h1>
      <p class="page-hero-sub">Exclusive access, great value, and the courses you love — all wrapped in one membership built for Hampton Roads golfers.</p>
      <div class="hero-pill-row">
        <span class="hero-pill">Golf Memberships</span>
        <span class="hero-pill">Pool Membership</span>
        <span class="hero-pill">2 Courses</span>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <div class="inner">
      <a href="../index.php">Home</a>
      <span class="breadcrumb-sep">›</span>
      <span class="breadcrumb-current">Membership</span>
    </div>
  </div>

  <div class="site-inner">
    <main id="genesis-content">
      <article class="entry" aria-label="Membership">
        <header class="entry-header"><h1 class="entry-title">Membership</h1></header>
        <div class="entry-content">

          <!-- INTRO STRIP -->
          <section class="intro-strip">
            <div class="intro-strip-inner">
              <div>
                <p class="section-label">Golf · Pool · Community</p>
                <h2 class="section-heading">Belong to Something<br>Worth Playing For</h2>
                <p class="section-body">Chesapeake Golf Club offers membership options designed for every golfer and every family. Whether you're looking for unlimited rounds across two courses or full access to our resort-style pool, we have a membership that fits your life.</p>
              </div>
              <div class="intro-stat-row">
                <div class="intro-stat">
                  <span class="intro-stat-num">2</span>
                  <span class="intro-stat-label">Courses</span>
                </div>
                <div class="intro-stat">
                  <span class="intro-stat-num">2</span>
                  <span class="intro-stat-label">Memberships</span>
                </div>
                <div class="intro-stat">
                  <span class="intro-stat-num">1</span>
                  <span class="intro-stat-label">Community</span>
                </div>
              </div>
            </div>
          </section>

          <!-- MEMBERSHIP CARDS -->
          <section class="memberships-section">
            <div class="memberships-inner">
              <p class="section-label">Our Memberships</p>
              <h2 class="section-heading">Choose Your Membership</h2>

              <!-- GOLF ASSOCIATE -->
              <a href="hampton-roads-golf-associate-membership/index.php" class="mem-card">
                <div class="mc-img">
                  <span class="mc-badge">Golf</span>
                  <img src="../wp-content/uploads/sites/7040/2018/06/1.jpg" alt="Hampton Roads Golf Associate Membership" />
                </div>
                <div class="mc-body">
                  <span class="mc-tag">2 Courses · 1 Membership</span>
                  <h3 class="mc-name">Hampton Roads Golf Associate Membership</h3>
                  <div class="mc-divider"></div>
                  <p class="mc-desc">Enjoy special privileges at TWO courses for one low price — Chesapeake Golf Club and Honey Bee Golf Club. The best value for golfers who want maximum access across Hampton Roads' premier courses.</p>
                  <div class="mc-perks">
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Unlimited Weekday Rounds
                    </div>
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Two Premier Courses
                    </div>
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Priority Tee Times
                    </div>
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Member Events &amp; Clinics
                    </div>
                  </div>
                  <span class="mc-cta">
                    View Golf Membership
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </span>
                </div>
              </a>

              <!-- POOL MEMBERSHIP -->
              <a href="../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf" class="mem-card reverse" target="_blank">
                <div class="mc-img">
                  <span class="mc-badge">Pool</span>
                  <img src="../wp-content/uploads/sites/7040/2018/06/2.jpg" alt="Pool Membership" />
                </div>
                <div class="mc-body">
                  <span class="mc-tag">Summer · Family · Recreation</span>
                  <h3 class="mc-name">Chesapeake Golf Club Pool Membership</h3>
                  <div class="mc-divider"></div>
                  <p class="mc-desc">Make the most of your summer with full access to Chesapeake Golf Club's resort-style pool. Perfect for families and individuals looking for a relaxing, social experience right here in Chesapeake.</p>
                  <div class="mc-perks">
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Full Season Pool Access
                    </div>
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Family-Friendly Facility
                    </div>
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Member-Only Hours
                    </div>
                    <div class="mc-perk">
                      <span class="mc-perk-icon"></span>
                      Guest Privileges Available
                    </div>
                  </div>
                  <span class="mc-cta">
                    View Pool Membership
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </span>
                </div>
              </a>

            </div>
          </section>

          <!-- DOWNLOADS DARK PANEL -->
          <section class="downloads-section">
            <div class="downloads-card">
              <div class="downloads-img-wrap">
                <img src="../wp-content/uploads/sites/7040/2021/09/Cedar-12dff.jpg" alt="Membership Downloads" />
                <div class="downloads-overlay">
                  <div>
                    <span class="downloads-eyebrow">Forms &amp; Applications</span>
                    <div class="downloads-title">Download &amp;<br>Get Started</div>
                  </div>
                </div>
              </div>
              <div class="downloads-body">
                <a href="../wp-content/uploads/sites/7040/2025/05/2025-2-Course-Associate-Membership-Form-1.docx" class="dl-item" download>
                  <div class="dl-icon">
                    <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  </div>
                  <div class="dl-content">
                    <div class="dl-title">2025 Golf Membership Form</div>
                    <div class="dl-sub">2-Course Associate Membership Application — Chesapeake &amp; Honey Bee</div>
                    <span class="dl-btn">
                      Download .docx
                      <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                    </span>
                  </div>
                </a>
                <a href="../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf" class="dl-item" target="_blank">
                  <div class="dl-icon">
                    <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  </div>
                  <div class="dl-content">
                    <div class="dl-title">Pool Membership Info</div>
                    <div class="dl-sub">Chesapeake Golf Club Pool Membership — Rates, benefits &amp; application</div>
                    <span class="dl-btn">
                      View PDF
                      <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </section>

          <!-- CTA -->
          <section class="cta-section">
            <div class="cta-card">
              <div class="cta-left">
                <span class="cta-badge">Join Today</span>
                <h2 class="cta-title">Ready to Become<br>a Member?</h2>
                <p class="cta-desc">Our team is ready to help you find the right membership and get started. Contact us with any questions or simply download a form and bring it by the pro shop.</p>
                <div class="cta-btns">
                  <a href="../contact-us/index.php" class="cta-btn-primary">
                    Contact Us
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                  <a href="hampton-roads-golf-associate-membership/index.php" class="cta-btn-secondary">
                    Golf Membership Details
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
                    Two Membership Options Available
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Access to Two Golf Courses
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Resort-Style Pool Access
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Member-Only Events &amp; Tournaments
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Friendly, Experienced Staff
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
      <div class="golfnow-footer">
        <div class="copy">&copy; 2026 Chesapeake Golf, a Hampton Roads Golf Company. All Rights Reserved.</div>
      </div>
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
</html>