<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Hampton Roads Golf Associate Membership - Chesapeake Golf</title>
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
    display: inline-flex; align-items: center; justify-content: center;
    width: auto; height: auto; padding: 0;
    text-indent: 0; overflow: visible; background: none !important;
  }
  .site-title a img {
    width: 107px; height: 64px; object-fit: contain; display: block;
  }
  .site-description { display: none; }
  .nav-primary { margin: 0; }
  .nav-primary .wrap { padding: 0; }
  ul#menu-top {
    list-style: none; display: flex; align-items: center; gap: 4px;
    margin: 0; padding: 0;
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
  ul#menu-top > li.current-menu-ancestor > a {
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
    font-family: 'Barlow', sans-serif; font-size: 13px; letter-spacing: 0.5px;
    transition: background 0.15s, color 0.15s;
  }
  .sub-menu li a:hover { background: var(--forest-light); color: #fff; text-decoration: none; }

  /* ── PAGE HERO ── */
  .page-hero {
    position: relative; margin-top: 72px;
    height: 56vh; min-height: 400px;
    display: flex; align-items: center; justify-content: center;
    background-image: url(../../wp-content/uploads/sites/7040/2018/06/1.jpg);
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
    font-size: clamp(40px, 7vw, 72px); font-weight: 900;
    color: var(--white); line-height: 1.05; margin-bottom: 20px;
    text-shadow: 0 4px 32px rgba(0,0,0,0.4);
  }
  .page-hero-sub {
    font-size: 17px; font-weight: 300; color: rgba(255,255,255,0.78);
    letter-spacing: 0.4px; max-width: 540px; margin: 0 auto 40px;
    line-height: 1.65;
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
  .breadcrumb-bar {
    background: var(--forest); padding: 14px 32px;
  }
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

  /* ── SHARED LABELS ── */
  .section-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 12px;
  }
  .section-heading {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 3.5vw, 42px); font-weight: 700;
    color: var(--charcoal); line-height: 1.15; margin-bottom: 20px;
  }
  .section-body {
    font-size: 15px; color: var(--mid); line-height: 1.75;
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
  .intro-stat-row {
    display: grid; grid-template-columns: repeat(3,1fr); gap: 0;
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 8px; overflow: hidden;
  }
  .intro-stat {
    background: var(--cream); padding: 36px 24px;
    text-align: center;
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
  .intro-cta {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--forest); color: #fff !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
    padding: 14px 34px; border-radius: 2px; margin-top: 28px;
    transition: background 0.2s, transform 0.2s;
    text-decoration: none !important;
  }
  .intro-cta:hover { background: var(--forest-light); transform: translateY(-2px); text-decoration: none !important; }

  /* ── MEMBERSHIP TIERS ── */
  .tiers-section { background: var(--cream); padding: 80px 32px; }
  .tiers-inner { max-width: 1200px; margin: 0 auto; }

  .tier-card {
    display: grid; grid-template-columns: 1fr 1fr;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 16px 64px rgba(0,0,0,0.12);
    margin-bottom: 60px;
    background: var(--white);
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .tier-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 28px 80px rgba(0,0,0,0.18);
  }
  .tier-card.reverse { direction: rtl; }
  .tier-card.reverse > * { direction: ltr; }

  .tc-img {
    position: relative; overflow: hidden; min-height: 440px;
  }
  .tc-img img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transition: transform 0.6s ease;
  }
  .tier-card:hover .tc-img img { transform: scale(1.05); }
  .tc-badge {
    position: absolute; top: 28px; left: 28px;
    font-family: 'Playfair Display', serif; font-size: 13px;
    font-weight: 900; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); background: var(--forest-dark);
    padding: 6px 16px; border-radius: 2px;
    border-left: 3px solid var(--gold);
    z-index: 2;
  }
  .tc-img::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(2,20,16,0.45) 0%, transparent 50%);
  }

  .tc-body {
    background: var(--white); padding: 52px 52px;
    display: flex; flex-direction: column; justify-content: center;
  }
  .tc-tag {
    display: inline-block;
    font-family: 'Barlow Condensed', sans-serif; font-size: 11px;
    font-weight: 700; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 14px;
  }
  .tc-name {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 2.8vw, 38px); font-weight: 900;
    color: var(--charcoal); line-height: 1.1; margin-bottom: 20px;
  }
  .tc-divider {
    width: 48px; height: 2px; background: var(--gold); margin-bottom: 20px;
  }
  .tc-desc {
    font-size: 14.5px; color: var(--mid); line-height: 1.8; margin-bottom: 28px;
  }

  /* Price grid */
  .price-grid {
    display: grid; grid-template-columns: repeat(2,1fr); gap: 2px;
    background: var(--light-gray); border: 2px solid var(--light-gray);
    border-radius: 8px; overflow: hidden; margin-bottom: 28px;
  }
  .price-cell {
    background: var(--cream); padding: 18px 20px;
    display: flex; flex-direction: column; gap: 4px;
  }
  .price-label {
    font-family: 'Barlow Condensed', sans-serif; font-size: 10px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold);
  }
  .price-val {
    font-family: 'Playfair Display', serif; font-size: 30px;
    font-weight: 900; color: var(--forest); line-height: 1;
  }
  .price-note {
    font-family: 'Barlow', sans-serif; font-size: 11px;
    color: var(--mid); margin-top: 2px;
  }

  /* Benefits list */
  .benefits-list { list-style: none; display: flex; flex-direction: column; gap: 10px; }
  .benefits-list li {
    display: flex; align-items: flex-start; gap: 12px;
    font-size: 14px; color: var(--mid); line-height: 1.5;
  }
  .benefits-list li::before {
    content: '';
    display: inline-block; width: 18px; height: 18px; flex-shrink: 0;
    background: var(--forest); border-radius: 50%; margin-top: 1px;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolyline points='20 6 9 17 4 12' stroke='%23c8a96e' stroke-width='2.5' fill='none'/%3E%3C/svg%3E");
    background-size: 12px; background-repeat: no-repeat; background-position: center;
  }

  /* ── COURSES DARK PANEL (like Gazebo) ── */
  .courses-section {
    background: var(--forest-dark); padding: 0 32px 80px;
  }
  .courses-card {
    max-width: 1200px; margin: 0 auto;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 32px 80px rgba(0,0,0,0.5);
  }
  .courses-img-wrap {
    position: relative; height: 480px; overflow: hidden;
  }
  .courses-img-wrap img {
    width: 100%; height: 100%; object-fit: cover; display: block;
    transition: transform 0.7s ease;
  }
  .courses-card:hover .courses-img-wrap img { transform: scale(1.04); }
  .courses-img-wrap::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(2,20,16,0.85) 0%, rgba(3,78,66,0.3) 50%, transparent 75%);
  }
  .courses-overlay {
    position: absolute; bottom: 48px; left: 56px; right: 56px;
    z-index: 2; display: flex; align-items: flex-end;
    justify-content: space-between; gap: 32px;
  }
  .courses-title-block {}
  .courses-eyebrow {
    font-family: 'Barlow Condensed', sans-serif; font-size: 12px;
    font-weight: 700; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 10px; display: block;
  }
  .courses-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(32px, 4.5vw, 52px); font-weight: 900;
    color: var(--white); line-height: 1.05;
    text-shadow: 0 4px 24px rgba(0,0,0,0.4);
  }
  .courses-stats {
    display: flex; gap: 16px; flex-shrink: 0;
  }
  .course-stat-box {
    background: rgba(255,255,255,0.10); backdrop-filter: blur(8px);
    border: 1px solid rgba(200,169,110,0.3); border-radius: 8px;
    padding: 18px 24px; text-align: center; min-width: 120px;
  }
  .course-stat-num {
    display: block; font-family: 'Playfair Display', serif;
    font-size: 36px; font-weight: 900; color: var(--gold); line-height: 1;
  }
  .course-stat-label {
    display: block; font-family: 'Barlow Condensed', sans-serif;
    font-size: 10px; font-weight: 700; letter-spacing: 2.5px;
    text-transform: uppercase; color: rgba(255,255,255,0.55); margin-top: 6px;
  }
  .courses-body {
    background: #0d4d41; padding: 40px 56px;
    display: grid; grid-template-columns: 1fr 1fr; gap: 40px;
  }
  .course-detail-block {}
  .course-detail-name {
    font-family: 'Playfair Display', serif; font-size: 22px;
    font-weight: 700; color: var(--gold); margin-bottom: 10px;
  }
  .course-detail-desc {
    font-size: 14px; color: rgba(255,255,255,0.70); line-height: 1.75;
  }

  /* ── CTA SECTION ── */
  .cta-section {
    background: var(--forest-dark); padding: 0 32px 80px;
  }
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

  /* ── FORM SECTION ── */
  .form-section {
    background: var(--forest-dark); padding: 0 32px 80px;
  }
  .form-card {
    max-width: 1200px; margin: 0 auto;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 32px 80px rgba(0,0,0,0.5);
    background: #0d4d41;
  }
  .form-card-header {
    background: #0a3d34; padding: 44px 56px 36px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .form-card-header .section-label { margin-bottom: 8px; }
  .form-card-title {
    font-family: 'Playfair Display', serif; font-size: clamp(28px, 3vw, 40px);
    font-weight: 900; color: var(--white); line-height: 1.1;
  }
  .form-card-body {
    padding: 48px 56px;
    display: grid; grid-template-columns: 1fr 1fr; gap: 40px;
    align-items: start;
  }
  .form-img-col img {
    width: 100%; border-radius: 10px;
    box-shadow: 0 16px 48px rgba(0,0,0,0.4);
    margin-bottom: 16px;
  }
  .form-img-col img + img { margin-top: 4px; }
  .form-download-btn {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--crimson); color: #fff !important;
    font-family: 'Barlow Condensed', sans-serif; font-size: 13px;
    font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
    padding: 14px 32px; border-radius: 2px; margin-top: 20px;
    transition: background 0.2s, transform 0.2s; text-decoration: none !important;
    box-shadow: 0 8px 24px rgba(202,28,58,0.4);
    width: fit-content;
  }
  .form-download-btn:hover { background: var(--crimson-dark); transform: translateY(-2px); text-decoration: none !important; }
  .form-info-col {}
  .form-info-title {
    font-family: 'Playfair Display', serif; font-size: 24px;
    font-weight: 700; color: var(--gold); margin-bottom: 16px;
  }
  .form-info-text {
    font-size: 14px; color: rgba(255,255,255,0.72); line-height: 1.8;
    margin-bottom: 24px;
  }
  .form-steps { display: flex; flex-direction: column; gap: 16px; margin-bottom: 32px; }
  .form-step {
    display: flex; align-items: flex-start; gap: 16px;
  }
  .step-num {
    width: 36px; height: 36px; border-radius: 50%; flex-shrink: 0;
    background: var(--gold); color: var(--forest-dark);
    font-family: 'Playfair Display', serif; font-size: 16px; font-weight: 900;
    display: flex; align-items: center; justify-content: center;
  }
  .step-content {}
  .step-title {
    font-family: 'Barlow Condensed', sans-serif; font-size: 14px;
    font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase;
    color: var(--white); margin-bottom: 4px;
  }
  .step-desc { font-size: 13px; color: rgba(255,255,255,0.6); line-height: 1.6; }

  /* ── FOOTER ── */
  .site-footer { background: var(--crimson-dark); padding: 24px 32px; }
  .site-footer .wrap {
    max-width: 1280px; margin: 0 auto;
    display: flex; align-items: center; justify-content: center;
  }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); letter-spacing: 0.5px; }

  /* ── UTILS ── */
  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .genesis-skip-link { list-style: none; }
  .screen-reader-shortcut { position: absolute; left: -9999px; }
  .entry-header { display: none; }

  /* ── RESPONSIVE ── */
  @media (max-width: 1024px) {
    .tier-card, .tier-card.reverse { grid-template-columns: 1fr; direction: ltr; }
    .tc-img { min-height: 300px; }
    .tc-body { padding: 36px 32px; }
    .intro-strip-inner { grid-template-columns: 1fr; gap: 40px; }
    .cta-card { grid-template-columns: 1fr; }
    .cta-left, .cta-right { padding: 40px 32px; }
    .courses-body { grid-template-columns: 1fr; gap: 24px; }
    .courses-overlay { flex-direction: column; align-items: flex-start; gap: 20px; bottom: 28px; left: 28px; right: 28px; }
    .form-card-body { grid-template-columns: 1fr; }
    .form-card-header, .form-card-body { padding: 36px 32px; }
  }
  @media (max-width: 768px) {
    .site-header .wrap { padding: 0 16px; height: 60px; }
    ul#menu-top { display: none; }
    .tiers-section, .intro-strip { padding: 48px 20px; }
    .courses-section, .cta-section, .form-section { padding: 0 20px 48px; }
    .breadcrumb-bar { padding: 12px 20px; }
    .courses-img-wrap { height: 320px; }
    .courses-stats { flex-direction: column; gap: 10px; }
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
        <p class="site-title"><a href="../../index.php"><img src="../../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png" alt="Chesapeake Golf"></a></p>
        <p class="site-description">Chesapeake, VA</p>
      </div>
      <nav class="nav-primary" aria-label="Main" id="genesis-nav-primary">
        <div class="wrap">
          <ul id="menu-top" class="menu genesis-nav-menu menu-primary">
            <li class="menu-item menu-item-home"><a href="../../index.php"><span>Home</span></a></li>
            <li class="menu-item"><a target="_blank" href="https://chesapeake-golf-club.book.teeitup.golf/"><span>Tee Times</span></a></li>
            <li class="menu-item menu-item-has-children">
              <a href="../../course/index.php"><span>Course</span></a>
              <ul class="sub-menu">
                <li><a href="../../course/rates/index.php"><span>Rates</span></a></li>
                <li><a href="../../course/course-history/index.php"><span>Course History</span></a></li>
                <li><a href="../../course/driving-directions/index.php"><span>Driving Directions</span></a></li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children current-menu-ancestor">
              <a href="../index.php"><span>Membership</span></a>
              <ul class="sub-menu">
                <li class="current-menu-item"><a href="index.php" aria-current="page"><span>Hampton Roads Golf Associate Membership</span></a></li>
                <li><a href="../../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf"><span>Membership Pool</span></a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="../../event-hall/index.php"><span>Event Hall</span></a></li>
            <li class="menu-item menu-item-has-children">
              <a href="../../golf/index.php"><span>Events</span></a>
              <ul class="sub-menu">
                <li><a href="../../golf/junior-camp/index.php"><span>Jr. Camp</span></a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="../../tournament/index.php"><span>Tournament</span></a></li>
            <li class="menu-item"><a href="../../contact-us/index.php"><span>Contact Us</span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="hero-eyebrow">Chesapeake Golf Club &amp; Honey Bee Golf Club</p>
      <h1 class="page-hero-title">Associate Membership</h1>
      <p class="page-hero-sub">Two courses, one membership. Enjoy special privileges at TWO courses for one low price.</p>
      <div class="hero-pill-row">
        <span class="hero-pill">2 Courses</span>
        <span class="hero-pill">1 Membership</span>
        <span class="hero-pill">Hampton Roads Golf</span>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <div class="inner">
      <a href="../../index.php">Home</a>
      <span class="breadcrumb-sep">›</span>
      <a href="../index.php">Membership</a>
      <span class="breadcrumb-sep">›</span>
      <span class="breadcrumb-current">Hampton Roads Golf Associate Membership</span>
    </div>
  </div>

  <div class="site-inner">
    <main id="genesis-content">
      <article class="entry" aria-label="Hampton Roads Golf Associate Membership">
        <header class="entry-header"><h1 class="entry-title">Hampton Roads Golf Associate Membership</h1></header>
        <div class="entry-content">

          <!-- INTRO STRIP -->
          <section class="intro-strip">
            <div class="intro-strip-inner">
              <div>
                <p class="section-label">Golf · Value · Privileges</p>
                <h2 class="section-heading">Play More.<br>Pay Less.</h2>
                <p class="section-body">The Hampton Roads Golf Associate Membership gives you access to two premier golf courses — Chesapeake Golf Club and Honey Bee Golf Club — under a single, affordable membership. Whether you're a frequent player or a weekend warrior, this membership was built for you.</p>
                <a href="../../contact-us/index.php" class="intro-cta">
                  Get Started
                  <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                </a>
              </div>
              <div class="intro-stat-row">
                <div class="intro-stat">
                  <span class="intro-stat-num">2</span>
                  <span class="intro-stat-label">Courses</span>
                </div>
                <div class="intro-stat">
                  <span class="intro-stat-num">1</span>
                  <span class="intro-stat-label">Membership</span>
                </div>
                <div class="intro-stat">
                  <span class="intro-stat-num">∞</span>
                  <span class="intro-stat-label">Golf Days</span>
                </div>
              </div>
            </div>
          </section>

          <!-- MEMBERSHIP TIERS -->
          <section class="tiers-section">
            <div class="tiers-inner">
              <p class="section-label">Membership Options</p>
              <h2 class="section-heading">Choose Your Membership</h2>

              <!-- INDIVIDUAL -->
              <div class="tier-card">
                <div class="tc-img">
                  <span class="tc-badge">Individual</span>
                  <img src="../../wp-content/uploads/sites/7040/2018/06/1.jpg" alt="Individual Membership" />
                </div>
                <div class="tc-body">
                  <span class="tc-tag">Solo Golfer</span>
                  <h3 class="tc-name">Individual Membership</h3>
                  <div class="tc-divider"></div>
                  <p class="tc-desc">Perfect for the solo golfer who wants maximum flexibility at both Chesapeake Golf Club and Honey Bee Golf Club. Enjoy unlimited access, preferred tee times, and significant savings on green fees throughout the season.</p>
                  <div class="price-grid">
                    <div class="price-cell">
                      <span class="price-label">Annual Fee</span>
                      <span class="price-val">$899</span>
                      <span class="price-note">Per person / year</span>
                    </div>
                    <div class="price-cell">
                      <span class="price-label">Cart Fees</span>
                      <span class="price-val">Incl.</span>
                      <span class="price-note">Weekday rounds</span>
                    </div>
                  </div>
                  <ul class="benefits-list">
                    <li>Unlimited weekday rounds at both courses</li>
                    <li>Discounted weekend rates</li>
                    <li>Priority tee time reservations</li>
                    <li>Member-only tournaments &amp; events</li>
                  </ul>
                </div>
              </div>

              <!-- COUPLE / FAMILY -->
              <div class="tier-card reverse">
                <div class="tc-img">
                  <span class="tc-badge">Couple</span>
                  <img src="../../wp-content/uploads/sites/7040/2018/06/2.jpg" alt="Couple Membership" />
                </div>
                <div class="tc-body">
                  <span class="tc-tag">Two Golfers · Best Value</span>
                  <h3 class="tc-name">Couple Membership</h3>
                  <div class="tc-divider"></div>
                  <p class="tc-desc">The best value for two golfers. Share the game with your partner and enjoy all the same great benefits at Chesapeake Golf Club and Honey Bee Golf Club — together. The couple membership offers the most savings per round of any option we offer.</p>
                  <div class="price-grid">
                    <div class="price-cell">
                      <span class="price-label">Annual Fee</span>
                      <span class="price-val">$1,399</span>
                      <span class="price-note">For two / year</span>
                    </div>
                    <div class="price-cell">
                      <span class="price-label">Savings vs.</span>
                      <span class="price-val">$399</span>
                      <span class="price-note">vs. two individual</span>
                    </div>
                  </div>
                  <ul class="benefits-list">
                    <li>Unlimited weekday rounds — both members</li>
                    <li>Discounted weekend rates for both</li>
                    <li>Priority tee time reservations</li>
                    <li>Access to all member events &amp; clinics</li>
                  </ul>
                </div>
              </div>

            </div>
          </section>

          <!-- COURSES PANEL -->
          <section class="courses-section">
            <div class="courses-card">
              <div class="courses-img-wrap">
                <img src="../../wp-content/uploads/sites/7040/2021/09/Cedar-12dff.jpg" alt="Hampton Roads Golf Courses" />
                <div class="courses-overlay">
                  <div class="courses-title-block">
                    <span class="courses-eyebrow">2 Courses · 1 Membership</span>
                    <div class="courses-title">Your Courses</div>
                  </div>
                  <div class="courses-stats">
                    <div class="course-stat-box">
                      <span class="course-stat-num">36</span>
                      <span class="course-stat-label">Total Holes</span>
                    </div>
                    <div class="course-stat-box">
                      <span class="course-stat-num">2</span>
                      <span class="course-stat-label">Courses</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="courses-body">
                <div class="course-detail-block">
                  <div class="course-detail-name">Chesapeake Golf Club</div>
                  <p class="course-detail-desc">A beautifully maintained 18-hole course in the heart of Chesapeake, VA. With challenging fairways, pristine greens, and a welcoming atmosphere, Chesapeake Golf Club is a local favorite for golfers of all skill levels.</p>
                </div>
                <div class="course-detail-block">
                  <div class="course-detail-name">Honey Bee Golf Club</div>
                  <p class="course-detail-desc">Another premier Hampton Roads golf experience, Honey Bee Golf Club offers a distinct layout and unique challenge. Your associate membership grants you full access to tee times, member events, and all privileges at both facilities.</p>
                </div>
              </div>
            </div>
          </section>

          <!-- FORM / DOWNLOAD SECTION -->
          <section class="form-section">
            <div class="form-card">
              <div class="form-card-header">
                <p class="section-label">Membership Application</p>
                <h2 class="form-card-title">Ready to Join?</h2>
              </div>
              <div class="form-card-body">
                <div class="form-img-col">
                  <img src="../../wp-content/uploads/sites/7040/2025/06/2025-2-Course-Associate-Membership-Form_Page_1_90d7c5.jpg" alt="Membership Form Page 1" />
                  <img src="../../wp-content/uploads/sites/7040/2025/06/2025-2-Course-Associate-Membership-Form_Page_2.jpg" alt="Membership Form Page 2" />
                  <a href="../../wp-content/uploads/sites/7040/2025/06/2025-2-Course-Associate-Membership-Form.docx" class="form-download-btn" download>
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download Membership Form
                  </a>
                </div>
                <div class="form-info-col">
                  <div class="form-info-title">How to Sign Up</div>
                  <p class="form-info-text">Joining the Hampton Roads Golf Associate Membership is quick and easy. Download the form, fill it out, and bring it to the pro shop at either course — or contact us and we'll walk you through the process.</p>
                  <div class="form-steps">
                    <div class="form-step">
                      <div class="step-num">1</div>
                      <div class="step-content">
                        <div class="step-title">Download the Form</div>
                        <div class="step-desc">Click the button to download the 2025 Associate Membership application form.</div>
                      </div>
                    </div>
                    <div class="form-step">
                      <div class="step-num">2</div>
                      <div class="step-content">
                        <div class="step-title">Complete &amp; Sign</div>
                        <div class="step-desc">Fill in your personal information, select your membership type, and sign the form.</div>
                      </div>
                    </div>
                    <div class="form-step">
                      <div class="step-num">3</div>
                      <div class="step-content">
                        <div class="step-title">Submit &amp; Pay</div>
                        <div class="step-desc">Bring the completed form to the pro shop at Chesapeake Golf Club or Honey Bee Golf Club and submit your payment.</div>
                      </div>
                    </div>
                    <div class="form-step">
                      <div class="step-num">4</div>
                      <div class="step-content">
                        <div class="step-title">Start Playing</div>
                        <div class="step-desc">Your membership is active immediately. Book your first round and enjoy your courses!</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CTA SECTION -->
          <section class="cta-section">
            <div class="cta-card">
              <div class="cta-left">
                <span class="cta-badge">Get on the Course</span>
                <h2 class="cta-title">Start Your<br>Membership Today</h2>
                <p class="cta-desc">Have questions about the membership? Our team is happy to help you find the right option and get you out on the course as soon as possible.</p>
                <div class="cta-btns">
                  <a href="../../contact-us/index.php" class="cta-btn-primary">
                    Contact Us
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                  <a href="../../wp-content/uploads/sites/7040/2025/06/2025-2-Course-Associate-Membership-Form.docx" class="cta-btn-secondary" download>
                    Download Application
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  </a>
                </div>
              </div>
              <div class="cta-right">
                <div class="cta-checklist">
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Access to Two Premier Courses
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Unlimited Weekday Rounds
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Priority Tee Time Reservations
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Member-Only Tournaments &amp; Events
                  </div>
                  <div class="cta-check-item">
                    <div class="cta-check-icon">
                      <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    Discounted Weekend Rates
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