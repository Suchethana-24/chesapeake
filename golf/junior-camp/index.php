<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Jr. Camp - Chesapeake Golf</title>
<link rel="icon" href="../../wp-content/themes/altitude-pro/images/favicon.ico" />

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

  /* ══ HEADER ══ */
  .site-header {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background: var(--forest) !important;
    box-shadow: 0 2px 24px rgba(0,0,0,0.25);
  }
  .site-header .wrap {
    max-width: 1280px; margin: 0 auto; padding: 0 32px;
    display: flex; align-items: center; justify-content: space-between; height: 72px;
  }
  .title-area { flex-shrink: 0; }
  .site-title { margin: 0; }
  .site-title a {
    display: inline-flex; align-items: center; justify-content: center;
    width: auto; height: auto; padding: 0;
    text-indent: 0; overflow: visible; background: none !important;
  }
  .site-title a img {
    width: 107px; height: 64px; object-fit: contain; display: block;
  }
  .site-description { display: none; }
  ul#menu-top {
    list-style: none; display: flex; align-items: center; gap: 4px; margin: 0; padding: 0;
  }
  ul#menu-top > li > a {
    color: rgba(255,255,255,0.88);
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 13px; font-weight: 600; letter-spacing: 1.2px; text-transform: uppercase;
    padding: 8px 14px; border-radius: 4px; display: block;
    transition: color 0.2s, background 0.2s; white-space: nowrap; background: transparent;
  }
  ul#menu-top > li > a:hover,
  ul#menu-top > li.current-menu-item > a {
    color: var(--white); background: rgba(255,255,255,0.12); text-decoration: none;
  }
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
    font-family: 'Barlow', sans-serif; font-size: 13px;
    transition: background 0.15s, color 0.15s;
  }
  .sub-menu li a:hover { background: var(--forest-light); color: #fff; text-decoration: none; }

  /* ══ PAGE HERO — CSS background-image, same as Event Hall ══ */
  .page-hero {
    position: relative; margin-top: 72px; height: 56vh; min-height: 400px;
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
    max-width: 520px; margin: 0 auto 40px; line-height: 1.65;
  }
  .hero-pill-row {
    display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap;
  }
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

  /* ══ INTRO STRIP ══ */
  .intro-strip { background: var(--white); padding: 80px 32px; border-bottom: 1px solid var(--light-gray); }
  .intro-strip-inner {
    max-width: 1100px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: center;
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
    display: grid; grid-template-columns: repeat(3,1fr);
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 8px; overflow: hidden;
  }
  .intro-stat {
    background: var(--cream); padding: 36px 24px; text-align: center;
    border-right: 2px solid var(--light-gray);
  }
  .intro-stat:last-child { border-right: none; }
  .intro-stat-num {
    font-family: 'Playfair Display', serif; font-size: 38px;
    font-weight: 900; color: var(--forest); line-height: 1; display: block; margin-bottom: 6px;
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

  /* ══ CAMP CARD — identical layout to .venue-card in Event Hall ══ */
  .camps-section { background: var(--cream); padding: 80px 32px; }
  .camps-inner { max-width: 1200px; margin: 0 auto; }

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

  /* Photo side — .vc-img */
  .vc-img { position: relative; overflow: hidden; min-height: 440px; }
  .vc-img img {
    width: 100%; height: 100%; object-fit: cover; object-position: top center;
    display: block; transition: transform 0.6s ease;
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

  /* Info side — .vc-body */
  .vc-body {
    background: var(--white); padding: 52px 52px;
    display: flex; flex-direction: column; justify-content: center;
  }
  .vc-tag {
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 14px; display: block;
  }
  .vc-name {
    font-family: 'Playfair Display', serif;
    font-size: clamp(30px, 3vw, 40px); font-weight: 900;
    color: var(--charcoal); line-height: 1.1; margin-bottom: 20px;
  }
  .vc-divider { width: 48px; height: 2px; background: var(--gold); margin-bottom: 20px; }
  .vc-desc { font-size: 14.5px; color: var(--mid); line-height: 1.8; margin-bottom: 32px; }

  /* Capacity grid — .cap-grid */
  .cap-grid {
    display: grid; grid-template-columns: repeat(2,1fr); gap: 2px;
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 8px; overflow: hidden;
  }
  .cap-cell { background: var(--cream); padding: 18px 20px; display: flex; flex-direction: column; gap: 4px; }
  .cap-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 10px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; color: var(--gold);
  }
  .cap-val {
    font-family: 'Playfair Display', serif; font-size: 28px;
    font-weight: 900; color: var(--forest); line-height: 1;
  }

  /* ══ FULL-WIDTH PHOTO SECTION — identical to .gazebo-section in Event Hall ══ */
  .gazebo-section { background: var(--forest-dark); padding: 0 32px 80px; }
  .gazebo-card {
    max-width: 1200px; margin: 0 auto; border-radius: 16px; overflow: hidden;
    box-shadow: 0 32px 80px rgba(0,0,0,0.5);
  }
  .gazebo-img-wrap { position: relative; height: 520px; overflow: hidden; }
  .gazebo-img-wrap img {
    width: 100%; height: 100%; object-fit: cover; object-position: center 25%;
    display: block; transition: transform 0.7s ease;
  }
  .gazebo-card:hover .gazebo-img-wrap img { transform: scale(1.04); }
  .gazebo-img-wrap::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(2,20,16,0.82) 0%, rgba(3,78,66,0.3) 50%, transparent 75%);
  }
  .gazebo-overlay {
    position: absolute; bottom: 48px; left: 56px; right: 56px; z-index: 2;
    display: flex; align-items: flex-end; justify-content: space-between; gap: 32px;
  }
  .gazebo-eyebrow {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 10px; display: block;
  }
  .gazebo-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 5vw, 58px); font-weight: 900;
    color: var(--white); line-height: 1.05; text-shadow: 0 4px 24px rgba(0,0,0,0.4);
  }
  .gazebo-caps-overlay { display: flex; gap: 16px; flex-shrink: 0; }
  .gazebo-cap-box {
    background: rgba(255,255,255,0.10); backdrop-filter: blur(8px);
    border: 1px solid rgba(200,169,110,0.3); border-radius: 8px;
    padding: 18px 24px; text-align: center; min-width: 120px;
  }
  .gazebo-cap-num {
    display: block; font-family: 'Playfair Display', serif;
    font-size: 40px; font-weight: 900; color: var(--gold); line-height: 1;
  }
  .gazebo-cap-label {
    display: block; font-family: 'Barlow Condensed', sans-serif;
    font-size: 10px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: rgba(255,255,255,0.55); margin-top: 6px;
  }
  .gazebo-body { background: #0d4d41; padding: 40px 56px; }
  .gazebo-desc { font-size: 15px; color: rgba(255,255,255,0.72); line-height: 1.8; max-width: 720px; }
  .gazebo-body a { color: var(--gold); text-decoration: underline; }

  /* ══ CTA SECTION — identical to Event Hall ══ */
  .cta-section { background: var(--forest-dark); padding: 0 32px 80px; }
  .cta-card {
    max-width: 1200px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr;
    border-radius: 16px; overflow: hidden; box-shadow: 0 32px 80px rgba(0,0,0,0.5);
  }
  .cta-left {
    background: #0a3d34; padding: 60px 56px;
    display: flex; flex-direction: column; justify-content: center;
  }
  .cta-badge {
    display: inline-block; background: var(--gold); color: var(--forest-dark);
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
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
  .site-footer { background: var(--crimson-dark); padding: 24px 32px; }
  .site-footer .wrap {
    max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: center;
  }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); }

  /* ══ UTILS ══ */
  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .genesis-skip-link { list-style: none; }
  .screen-reader-shortcut { position: absolute; left: -9999px; }
  .screen-reader-shortcut:focus { left: 0; top: 0; background: var(--forest); color: #fff; padding: 8px 16px; }
  .entry-header { display: none; }

  /* ══ RESPONSIVE ══ */
  @media (max-width: 1024px) {
    .venue-card, .venue-card.reverse { grid-template-columns: 1fr; direction: ltr; }
    .vc-img { min-height: 300px; }
    .vc-body { padding: 36px 32px; }
    .intro-strip-inner { grid-template-columns: 1fr; gap: 40px; }
    .cta-card { grid-template-columns: 1fr; }
    .cta-left, .cta-right { padding: 40px 32px; }
    .gazebo-overlay { flex-direction: column; align-items: flex-start; gap: 20px; bottom: 28px; left: 28px; right: 28px; }
    .gazebo-body { padding: 36px 28px; }
  }
  @media (max-width: 768px) {
.camps-section, .intro-strip { padding: 48px 20px; }
    .gazebo-section, .cta-section { padding: 0 20px 48px; }
    .breadcrumb-bar { padding: 12px 20px; }
    .gazebo-img-wrap { height: 320px; }
    .gazebo-caps-overlay { flex-direction: column; gap: 10px; }
    .page-hero { height: 50vh; }
  }

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
        <p class="site-title"><a href="../../index.php"><img src="../../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png" alt="Chesapeake Golf"></a></p>
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

          <ul id="menu-top" class="menu genesis-nav-menu menu-primary">
            <li class="menu-item"><a href="../../index.php"><span>Home</span></a></li>
            <li class="menu-item"><a target="_blank" href="https://chesapeake-golf-club.book.teeitup.golf/"><span>Tee Times</span></a></li>
            <li class="menu-item menu-item-has-children">
              <a href="../../course/index.php"><span>Course</span></a>
              <button class="sub-toggle" aria-label="Toggle Course submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="../../course/rates/index.php"><span>Rates</span></a></li>
                <li><a href="../../course/course-history/index.php"><span>Course History</span></a></li>
                <li><a href="../../course/driving-directions/index.php"><span>Driving Directions</span></a></li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="../../membership/index.php"><span>Membership</span></a>
              <button class="sub-toggle" aria-label="Toggle Membership submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="../../membership/hampton-roads-golf-associate-membership/index.php"><span>Hampton Roads Golf Associate Membership</span></a></li>
                <li><a href="../../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf"><span>Membership Pool</span></a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="../../event-hall/index.php"><span>Event Hall</span></a></li>
            <li class="menu-item menu-item-has-children">
              <a href="../index.php"><span>Events</span></a>
              <button class="sub-toggle" aria-label="Toggle Events submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="index.php" aria-current="page"><span>Jr. Camp</span></a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="../../tournament/index.php"><span>Tournament</span></a></li>
            <li class="menu-item"><a href="../../contact-us/index.php"><span>Contact Us</span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- HERO — CSS background-image like Event Hall -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="hero-eyebrow">Chesapeake Golf Club</p>
      <h1 class="page-hero-title">Junior Golf Camp</h1>
      <p class="page-hero-sub">A fun, professional introduction to golf for young players — taught by PGA professionals on our beautiful course.</p>
      <div class="hero-pill-row">
        <span class="hero-pill">PGA Instruction</span>
        <span class="hero-pill">Summer 2025</span>
        <span class="hero-pill">All Skill Levels</span>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <div class="inner">
      <a href="../../index.php">Home</a>
      <span class="breadcrumb-sep">›</span>
      <a href="../index.php">Events</a>
      <span class="breadcrumb-sep">›</span>
      <span class="breadcrumb-current">Jr. Camp</span>
    </div>
  </div>

  <div class="site-inner">
    <main id="genesis-content">
      <article class="entry" aria-label="Jr. Camp">
        <header class="entry-header"><h1 class="entry-title">Jr. Camp</h1></header>
        <div class="entry-content">

          <!-- INTRO STRIP -->
          <section class="intro-strip">
            <div class="intro-strip-inner">
              <div>
                <p class="section-label">2025 Junior Golf Program</p>
                <h2 class="section-heading">Grow the Game<br>From the Ground Up</h2>
                <p class="section-body">Chesapeake Golf Club's Junior Camp is designed to introduce young golfers to the fundamentals of the game in a safe, encouraging, and fun environment. Led by our PGA-certified professionals, campers will develop skills on the range and on the course — building a foundation they'll carry for life.</p>
                <a href="../../wp-content/uploads/sites/7040/2025/05/2025-Junior-Camp-5.docx" class="intro-cta">
                  Download 2025 Camp Info
                  <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                </a>
              </div>
              <div class="intro-stat-row">
                <div class="intro-stat">
                  <span class="intro-stat-num">PGA</span>
                  <span class="intro-stat-label">Certified Pros</span>
                </div>
                <div class="intro-stat">
                  <span class="intro-stat-num">All</span>
                  <span class="intro-stat-label">Skill Levels</span>
                </div>
                <div class="intro-stat">
                  <span class="intro-stat-num">2025</span>
                  <span class="intro-stat-label">Summer Season</span>
                </div>
              </div>
            </div>
          </section>

          <!-- CAMP CARD — <img> tag, same structure as .venue-card Cedars/Fairlawns -->
          <section class="camps-section">
            <div class="camps-inner">
              <p class="section-label">Program Overview</p>
              <h2 class="section-heading">This Summer's Camp</h2>

              <div class="venue-card">
                <div class="vc-img">
                  <span class="vc-num">2025 Season</span>
                  <!-- Official 2025 Jr. Camp flyer image — same <img> pattern as venue photos -->
                  <img
                    decoding="async"
                    width="791" height="1024"
                    src="../../wp-content/uploads/sites/7040/2025/05/1746728734756-e389ec18-b052-49f8-818f-70edd3d1057c_1.jpg"
                    alt="2025 Junior Camp Flyer"
                    srcset="https://www.chesapeakegolfclub.com/wp-content/uploads/sites/7040/2025/05/1746728734756-e389ec18-b052-49f8-818f-70edd3d1057c_1.jpg 791w,
                            https://www.chesapeakegolfclub.com/wp-content/uploads/sites/7040/2025/05/1746728734756-e389ec18-b052-49f8-818f-70edd3d1057c_1.jpg?resize=232,300 232w,
                            https://www.chesapeakegolfclub.com/wp-content/uploads/sites/7040/2025/05/1746728734756-e389ec18-b052-49f8-818f-70edd3d1057c_1.jpg?resize=768,994 768w"
                    sizes="(max-width: 791px) 100vw, 791px"
                  />
                </div>
                <div class="vc-body">
                  <span class="vc-tag">Official Camp Flyer · Summer 2025</span>
                  <h3 class="vc-name">2025 Junior Camp</h3>
                  <div class="vc-divider"></div>
                  <p class="vc-desc">Everything you need to know about this summer's Junior Golf Camp is in the official 2025 Junior Camp document. Download it for full session dates, pricing, registration details, and what to bring on your first day. Spots are limited — register early to secure your junior golfer's place.</p>
                  <div class="cap-grid">
                    <div class="cap-cell">
                      <span class="cap-label">Instruction</span>
                      <span class="cap-val">PGA Pro</span>
                    </div>
                    <div class="cap-cell">
                      <span class="cap-label">Season</span>
                      <span class="cap-val">Summer</span>
                    </div>
                    <div class="cap-cell">
                      <span class="cap-label">Skill Level</span>
                      <span class="cap-val">All Ages</span>
                    </div>
                    <div class="cap-cell">
                      <span class="cap-label">Registration</span>
                      <span class="cap-val">Open</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <!-- FULL-WIDTH PHOTO — <img> tag, same structure as .gazebo-section -->
          <section class="gazebo-section">
            <div class="gazebo-card">
              <div class="gazebo-img-wrap">
                <!-- On-course junior camp photo from the original Jr. Camp page -->
                <img
                  loading="lazy"
                  decoding="async"
                  width="972" height="650"
                  src="../../wp-content/uploads/sites/7040/2019/08/IMG_24592dff.jpg"
                  alt="Junior Campers on the Course at Chesapeake Golf Club"
                />
                <div class="gazebo-overlay">
                  <div>
                    <span class="gazebo-eyebrow">On The Course · Chesapeake Golf Club</span>
                    <div class="gazebo-title">Junior Golfers<br>in Action</div>
                  </div>
                  <div class="gazebo-caps-overlay">
                    <div class="gazebo-cap-box">
                      <span class="gazebo-cap-num">PGA</span>
                      <span class="gazebo-cap-label">Certified Coaches</span>
                    </div>
                    <div class="gazebo-cap-box">
                      <span class="gazebo-cap-num">All</span>
                      <span class="gazebo-cap-label">Skill Levels</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gazebo-body">
                <p class="gazebo-desc">Our junior campers get real on-course experience at Chesapeake Golf Club — not just range sessions. From chipping and putting to full swing fundamentals, every session is designed to build confidence and a genuine love for the game. Download the 2025 Junior Camp document for full session details, or <a href="../../contact-us/index.php">contact us</a> to register today.</p>
              </div>
            </div>
          </section>

          <!-- CTA — identical to Event Hall -->
          <section class="cta-section">
            <div class="cta-card">
              <div class="cta-left">
                <span class="cta-badge">Register Your Junior Golfer</span>
                <h2 class="cta-title">Ready to Tee It Up<br>This Summer?</h2>
                <p class="cta-desc">Spots are limited each session. Reach out to our team today to enroll your junior golfer in the 2025 Junior Camp at Chesapeake Golf Club.</p>
                <div class="cta-btns">
                  <a href="../../contact-us/index.php" class="cta-btn-primary">
                    Contact Us to Register
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                  <a href="../../wp-content/uploads/sites/7040/2025/05/2025-Junior-Camp-5.docx" class="cta-btn-secondary">
                    Download Camp Details
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  </a>
                </div>
              </div>
              <div class="cta-right">
                <div class="cta-checklist">
                  <div class="cta-check-item">
                    <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                    PGA-Certified Instruction
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                    Beginner &amp; Intermediate Welcome
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                    Range &amp; On-Course Practice
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                    Fun, Safe Learning Environment
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                    Limited Spots — Register Early
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </article>
    </main>
  </div>

  <!-- FOOTER — identical to Event Hall -->
  <footer class="site-footer">
    <div class="wrap">
      <div class="golfnow-footer text-white">
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
