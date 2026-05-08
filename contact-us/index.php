<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="index, follow" />
<title>Contact Us - Chesapeake Golf</title>
<link rel="canonical" href="index.php" />
<link rel="icon" href="../wp-content/themes/altitude-pro/images/favicon.ico" />
<script type="text/javascript" src="../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1"></script>
<script type="text/javascript" src="../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"></script>
<script type="text/javascript" src="../wp-content/themes/altitude-pro/js/global8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="../wp-content/plugins/golfnow-customize/assets/dist/vendor/jquery.backstretchb3e8.js?ver=0.1"></script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Barlow:wght@300;400;500;600&family=Barlow+Condensed:wght@600;700&display=swap" rel="stylesheet">

<style>
  :root {
    --forest: #034e42; --forest-light: #077362; --forest-dark: #022e27;
    --crimson: #ca1c3a; --crimson-dark: #9a3c48;
    --gold: #c8a96e; --gold-light: #e8d5a3;
    --cream: #f9f6f0; --white: #ffffff;
    --charcoal: #1a1a1a; --mid: #4a4a4a; --light-gray: #e8e4dc;
  }
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body { font-family: 'Barlow', sans-serif; background: var(--cream); color: var(--charcoal); overflow-x: hidden; }
  body::before { display: none !important; }
  body > .backstretch { display: none !important; }
  a { color: var(--crimson); text-decoration: none; }
  a:hover { color: var(--crimson-dark); text-decoration: underline; }
/* ─── defaults (desktop: hide toggle and sub-toggle) ─── */
.nav-toggle { display: none; }
.sub-toggle { display: none; }
.nav-drawer-header { display: none; }
.nav-drawer-cta { display: none; }
  /* ── HEADER ── */
  .site-header {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background: var(--forest) !important; background-color: var(--forest) !important;
    box-shadow: 0 2px 24px rgba(0,0,0,0.25);
  }
  .site-header[style], .site-header.dark, .site-header.scrolled, .site-header.sticky {
    background: var(--forest) !important; background-color: var(--forest) !important;
  }
  .site-header .wrap {
    max-width: 1280px; margin: 0 auto; padding: 0 32px;
    display: flex; align-items: center; justify-content: space-between; height: 72px;
  }
  .title-area { flex-shrink: 0; }
  .site-title { margin: 0; }
  .site-title a {
    display: block; width: 107px; height: 64px;
    background: url(../wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat center/contain !important;
    text-indent: -9999px; overflow: hidden;
  }
  .site-description { display: none; }
  .nav-primary { margin: 0; }
  .nav-primary .wrap { padding: 0; }
  ul#menu-top { list-style: none; display: flex; align-items: center; gap: 4px; margin: 0; padding: 0; }
  ul#menu-top > li > a {
    color: rgba(255,255,255,0.88); font-family: 'Barlow Condensed', sans-serif;
    font-size: 13px; font-weight: 600; letter-spacing: 1.2px; text-transform: uppercase;
    padding: 8px 14px; border-radius: 4px; display: block;
    transition: color 0.2s, background 0.2s; white-space: nowrap; background: transparent;
  }
  ul#menu-top > li > a:hover, ul#menu-top > li.current-menu-item > a {
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

  /* ── PAGE HERO ── */
  .page-hero {
    position: relative; margin-top: 72px; height: 56vh; min-height: 400px;
    display: flex; align-items: center; justify-content: center;
    background-image: url(../wp-content/uploads/sites/7040/2018/09/thumbnail.jpg);
    background-size: cover; background-position: center 30%; overflow: hidden;
  }
  .page-hero::before {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(170deg, rgba(2,30,25,0.88) 0%, rgba(3,78,66,0.62) 55%, rgba(154,60,72,0.42) 100%);
  }
  .page-hero-content { position: relative; z-index: 2; text-align: center; padding: 0 24px; animation: heroReveal 1.1s cubic-bezier(0.22,1,0.36,1) both; }
  @keyframes heroReveal { from { opacity: 0; transform: translateY(36px); } to { opacity: 1; transform: translateY(0); } }
  .hero-eyebrow { font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 600; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; }
  .page-hero-title { font-family: 'Playfair Display', serif; font-size: clamp(48px, 8vw, 80px); font-weight: 900; color: var(--white); line-height: 1.05; margin-bottom: 20px; text-shadow: 0 4px 32px rgba(0,0,0,0.4); }
  .page-hero-sub { font-size: 17px; font-weight: 300; color: rgba(255,255,255,0.78); max-width: 500px; margin: 0 auto 40px; line-height: 1.65; }
  .hero-pill-row { display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; }
  .hero-pill { font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; color: var(--gold-light); border: 1px solid rgba(200,169,110,0.45); padding: 6px 18px; border-radius: 20px; background: rgba(200,169,110,0.08); }

  /* ── BREADCRUMB ── */
  .breadcrumb-bar { background: var(--forest); padding: 14px 32px; }
  .breadcrumb-bar .inner { max-width: 1280px; margin: 0 auto; display: flex; align-items: center; gap: 8px; }
  .breadcrumb-bar a { font-family: 'Barlow Condensed', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(255,255,255,0.6); transition: color 0.2s; }
  .breadcrumb-bar a:hover { color: var(--gold); text-decoration: none; }
  .breadcrumb-sep { color: rgba(255,255,255,0.3); font-size: 12px; }
  .breadcrumb-current { font-family: 'Barlow Condensed', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--gold); }

  /* ── SHARED ── */
  .section-label { font-family: 'Barlow Condensed', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 12px; }
  .section-heading { font-family: 'Playfair Display', serif; font-size: clamp(30px, 4vw, 44px); font-weight: 700; color: var(--charcoal); line-height: 1.15; margin-bottom: 20px; }
  .section-body { font-size: 15px; color: var(--mid); line-height: 1.75; }

  /* ── INTRO STRIP ── */
  .intro-strip { background: var(--white); padding: 80px 32px; border-bottom: 1px solid var(--light-gray); }
  .intro-strip-inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: center; }
  .contact-info-list { display: flex; flex-direction: column; gap: 20px; margin-top: 28px; }
  .contact-info-row { display: flex; align-items: flex-start; gap: 16px; }
  .contact-icon-box { width: 44px; height: 44px; background: var(--forest); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .contact-icon-box svg { width: 20px; height: 20px; stroke: #fff; fill: none; stroke-width: 1.8; }
  .contact-info-text { display: flex; flex-direction: column; gap: 2px; }
  .contact-info-label { font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; color: var(--gold); }
  .contact-info-value { font-size: 15px; color: var(--charcoal); font-weight: 500; line-height: 1.5; }
  .contact-info-value a { color: var(--crimson); }
  .social-row { display: flex; gap: 10px; margin-top: 32px; flex-wrap: wrap; }
  .social-pill { display: inline-flex; align-items: center; gap: 8px; background: var(--cream); border: 1px solid var(--light-gray); border-radius: 20px; padding: 8px 18px; font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: var(--mid); transition: border-color 0.2s, background 0.2s, color 0.2s; text-decoration: none !important; }
  .social-pill img { width: 16px; height: 16px; object-fit: contain; }
  .social-pill:hover { background: var(--forest); border-color: var(--forest); color: #fff; text-decoration: none !important; }
  .intro-stat-row { display: grid; grid-template-columns: repeat(2,1fr); gap: 2px; background: var(--light-gray); border: 2px solid var(--light-gray); border-radius: 8px; overflow: hidden; }
  .intro-stat { background: var(--cream); padding: 36px 28px; text-align: center; border-right: 2px solid var(--light-gray); border-bottom: 2px solid var(--light-gray); }
  .intro-stat:nth-child(2n) { border-right: none; }
  .intro-stat:nth-child(3), .intro-stat:nth-child(4) { border-bottom: none; }
  .intro-stat-num { font-family: 'Playfair Display', serif; font-size: 38px; font-weight: 900; color: var(--forest); line-height: 1; display: block; margin-bottom: 6px; }
  .intro-stat-label { font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; color: var(--mid); }

  /* ── STAFF SECTION ── */
  .staff-section { background: var(--cream); padding: 80px 32px; }
  .staff-inner { max-width: 1200px; margin: 0 auto; }
  .staff-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 2px; background: var(--light-gray); border: 2px solid var(--light-gray); border-radius: 16px; overflow: hidden; box-shadow: 0 8px 32px rgba(0,0,0,0.08); }
  .staff-card { background: var(--white); padding: 44px 36px; display: flex; flex-direction: column; position: relative; transition: background 0.25s; }
  .staff-card::before { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: var(--forest); transform: scaleX(0); transform-origin: left; transition: transform 0.3s; }
  .staff-card:hover::before { transform: scaleX(1); }
  .staff-card:hover { background: var(--cream); }
  .staff-avatar { width: 56px; height: 56px; border-radius: 50%; background: var(--forest); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
  .staff-avatar svg { width: 26px; height: 26px; stroke: rgba(255,255,255,0.9); fill: none; stroke-width: 1.6; }
  .staff-role { font-family: 'Barlow Condensed', sans-serif; font-size: 10px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--gold); margin-bottom: 8px; }
  .staff-name { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: var(--charcoal); line-height: 1.2; margin-bottom: 12px; }
  .staff-divider { width: 40px; height: 2px; background: var(--light-gray); margin-bottom: 16px; }
  .staff-email { display: inline-flex; align-items: center; gap: 6px; font-size: 13px; color: var(--crimson); font-weight: 500; word-break: break-word; }
  .staff-email:hover { color: var(--crimson-dark); text-decoration: underline; }
  .staff-email svg { width: 13px; height: 13px; stroke: currentColor; fill: none; stroke-width: 2; flex-shrink: 0; }

  /* ── EVENTS PARTNER — dark panel ── */
  .events-section { background: var(--forest-dark); padding: 0 32px 80px; }
  .events-card { max-width: 1200px; margin: 0 auto; border-radius: 16px; overflow: hidden; box-shadow: 0 32px 80px rgba(0,0,0,0.5); }
  .events-header { background: linear-gradient(135deg, #0a3d34 0%, #0d4d41 100%); padding: 60px 56px; display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: start; }
  .events-badge { display: inline-block; background: var(--gold); color: var(--forest-dark); font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; padding: 6px 14px; border-radius: 3px; margin-bottom: 24px; width: fit-content; }
  .events-title { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3.5vw, 44px); font-weight: 900; color: var(--white); line-height: 1.05; margin-bottom: 16px; }
  .events-desc { font-size: 15px; color: rgba(255,255,255,0.70); line-height: 1.75; }
  .events-contacts { display: flex; flex-direction: column; gap: 20px; }
  .events-contact-card { background: rgba(255,255,255,0.06); border: 1px solid rgba(200,169,110,0.2); border-radius: 10px; padding: 24px 28px; display: flex; flex-direction: column; gap: 8px; transition: background 0.2s; }
  .events-contact-card:hover { background: rgba(255,255,255,0.10); }
  .events-contact-name { font-family: 'Playfair Display', serif; font-size: 20px; font-weight: 700; color: var(--white); }
  .events-contact-phone { display: flex; align-items: center; gap: 8px; font-size: 14px; color: var(--gold); font-weight: 500; }
  .events-contact-phone svg { width: 14px; height: 14px; stroke: currentColor; fill: none; stroke-width: 2; }
  .events-contact-email { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.6); }
  .events-contact-email svg { width: 13px; height: 13px; stroke: currentColor; fill: none; stroke-width: 2; }
  .events-contact-email a { color: rgba(255,255,255,0.75); }
  .events-contact-email a:hover { color: var(--gold); text-decoration: underline; }

  /* ── DIRECTIONS + MAP ── */
  .directions-section { background: var(--forest-dark); padding: 0 32px 80px; }
  .directions-card { max-width: 1200px; margin: 0 auto; border-radius: 16px; overflow: hidden; box-shadow: 0 32px 80px rgba(0,0,0,0.5); }
  .directions-map { position: relative; height: 460px; overflow: hidden; }
  .directions-map iframe { display: block; width: 100%; height: 100%; border: 0; filter: saturate(0.9) contrast(1.05); }
  .directions-map::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 120px; background: linear-gradient(to top, rgba(2,20,16,0.75), transparent); pointer-events: none; }
  .directions-body { background: #0d4d41; padding: 48px 56px; display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start; }
  .directions-eyebrow { font-family: 'Barlow Condensed', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 12px; display: block; }
  .directions-title { font-family: 'Playfair Display', serif; font-size: clamp(26px, 3vw, 36px); font-weight: 900; color: var(--white); line-height: 1.1; margin-bottom: 16px; }
  .directions-text { font-size: 14.5px; color: rgba(255,255,255,0.70); line-height: 1.8; }
  .directions-detail { display: flex; flex-direction: column; gap: 16px; }
  .dir-row { display: flex; align-items: flex-start; gap: 14px; }
  .dir-icon { width: 38px; height: 38px; border-radius: 50%; border: 1.5px solid rgba(200,169,110,0.4); background: rgba(200,169,110,0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .dir-icon svg { width: 16px; height: 16px; stroke: var(--gold); fill: none; stroke-width: 2; }
  .dir-label { font-family: 'Barlow Condensed', sans-serif; font-size: 10px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; color: rgba(255,255,255,0.45); margin-bottom: 2px; }
  .dir-value { font-size: 14px; color: rgba(255,255,255,0.82); font-weight: 500; line-height: 1.5; }
  .dir-value a { color: var(--gold); }

  /* ── CTA SECTION ── */
  .cta-section { background: var(--forest-dark); padding: 0 32px 80px; }
  .cta-card { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; border-radius: 16px; overflow: hidden; box-shadow: 0 32px 80px rgba(0,0,0,0.5); }
  .cta-left { background: #0a3d34; padding: 60px 56px; display: flex; flex-direction: column; justify-content: center; }
  .cta-badge { display: inline-block; background: var(--gold); color: var(--forest-dark); font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; padding: 6px 14px; border-radius: 3px; margin-bottom: 28px; width: fit-content; }
  .cta-title { font-family: 'Playfair Display', serif; font-size: clamp(32px, 3.5vw, 46px); font-weight: 900; color: var(--white); line-height: 1.08; margin-bottom: 18px; }
  .cta-desc { font-size: 15px; color: rgba(255,255,255,0.70); line-height: 1.75; margin-bottom: 36px; max-width: 380px; }
  .cta-btns { display: flex; flex-direction: column; gap: 12px; width: fit-content; }
  .cta-btn-primary { display: inline-flex; align-items: center; gap: 10px; background: var(--crimson); color: #fff !important; font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; padding: 15px 36px; border-radius: 2px; transition: background 0.2s, transform 0.2s; text-decoration: none !important; box-shadow: 0 8px 24px rgba(202,28,58,0.4); }
  .cta-btn-primary:hover { background: var(--crimson-dark); transform: translateY(-2px); text-decoration: none !important; }
  .cta-btn-secondary { display: inline-flex; align-items: center; gap: 10px; justify-content: center; background: transparent; border: 1px solid rgba(255,255,255,0.3); color: rgba(255,255,255,0.85) !important; font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; padding: 14px 36px; border-radius: 2px; transition: border-color 0.2s, background 0.2s; text-decoration: none !important; }
  .cta-btn-secondary:hover { border-color: rgba(255,255,255,0.6); background: rgba(255,255,255,0.07); text-decoration: none !important; }
  .cta-right { background: #0d4d41; padding: 52px 56px; display: flex; flex-direction: column; justify-content: center; border-left: 1px solid rgba(255,255,255,0.06); }
  .cta-checklist { display: flex; flex-direction: column; }
  .cta-check-item { display: flex; align-items: center; gap: 18px; padding: 20px 0; border-bottom: 1px solid rgba(255,255,255,0.07); color: rgba(255,255,255,0.85); font-size: 15px; }
  .cta-check-item:last-child { border-bottom: none; }
  .cta-check-icon { width: 34px; height: 34px; border-radius: 50%; border: 1.5px solid rgba(200,169,110,0.45); background: rgba(200,169,110,0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .cta-check-icon svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 2.5; }

  /* ── FOOTER ── */
  .site-footer { background: var(--crimson-dark); padding: 24px 32px; margin-top: 0; }
  .site-footer .wrap { max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); letter-spacing: 0.5px; }

  /* ── UTILS ── */
  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .site-inner { background: var(--cream); position: relative; z-index: 1; }
  .genesis-skip-link { list-style: none; }
  .screen-reader-shortcut { position: absolute; left: -9999px; z-index: 999999; }
  .screen-reader-shortcut:focus { left: 0; top: 0; background: var(--forest); color: #fff; padding: 8px 16px; }
  .entry-header { display: none; }
  .slider-wrapper { display: none !important; }

  /* ── RESPONSIVE 1024 ── */
  @media (max-width: 1024px) {
    .intro-strip-inner { grid-template-columns: 1fr; gap: 40px; }
    .staff-grid { grid-template-columns: 1fr; }
    .events-header { grid-template-columns: 1fr; gap: 40px; padding: 44px 36px; }
    .directions-body { grid-template-columns: 1fr; gap: 36px; padding: 44px 36px; }
    .cta-card { grid-template-columns: 1fr; }
    .cta-left, .cta-right { padding: 40px 32px; }
  }
  @media (max-width: 768px) {
    .staff-section, .intro-strip { padding: 48px 20px; }
    .events-section, .directions-section, .cta-section { padding: 0 20px 48px; }
    .breadcrumb-bar { padding: 12px 20px; }
    .page-hero { height: 50vh; }
    .directions-map { height: 280px; }
  }

  /* ── MOBILE NAV DEFAULTS ── */
  .nav-toggle { display: none; }
  .sub-toggle { display: none; }

  /* ── MOBILE NAV (≤900px) ── */
  @media (max-width: 900px) {
    .site-header .wrap { padding: 0 16px; height: 64px; }
    .nav-toggle { display: inline-flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px; width: 44px; height: 44px; border: 1.5px solid rgba(255,255,255,0.25); border-radius: 10px; background: rgba(255,255,255,0.08); cursor: pointer; padding: 0; flex-shrink: 0; position: relative; z-index: 10001; transition: background 0.2s; }
    .nav-toggle:hover { background: rgba(255,255,255,0.18); }
    .nav-toggle .bar { display: block; width: 20px; height: 2px; background: #fff; border-radius: 2px; transition: transform 0.3s, opacity 0.3s; transform-origin: center; }
    .nav-toggle[aria-expanded="true"] .bar:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .nav-toggle[aria-expanded="true"] .bar:nth-child(2) { opacity: 0; transform: scaleX(0); }
    .nav-toggle[aria-expanded="true"] .bar:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
    .nav-primary { position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 10000; pointer-events: none; }
    .nav-primary::before { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.55); opacity: 0; transition: opacity 0.3s ease; pointer-events: none; }
    .nav-primary.open::before { opacity: 1; pointer-events: auto; }
    .nav-primary .wrap { position: absolute; top: 0; left: 0; width: min(300px, 85vw); height: 100%; background: var(--forest-dark); border-right: 2px solid rgba(200,169,110,0.4); box-shadow: 8px 0 40px rgba(0,0,0,0.5); transform: translateX(-100%); transition: transform 0.35s cubic-bezier(0.4,0,0.2,1); display: flex; flex-direction: column; overflow-y: auto; pointer-events: none; padding: 0; -webkit-overflow-scrolling: touch; }
    .nav-primary.open .wrap { transform: translateX(0); pointer-events: auto; }
    .nav-primary.open { pointer-events: auto; }
    .nav-drawer-header { display: flex; align-items: center; justify-content: space-between; padding: 0 20px; height: 64px; border-bottom: 1px solid rgba(255,255,255,0.10); flex-shrink: 0; background: #022e27; }
    .nav-drawer-brand { font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: var(--gold); }
    .nav-drawer-close { width: 36px; height: 36px; border: 1.5px solid rgba(255,255,255,0.2); border-radius: 8px; background: rgba(255,255,255,0.06); color: #fff; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 20px; line-height: 1; transition: background 0.2s; }
    .nav-drawer-close:hover { background: rgba(255,255,255,0.15); }
    ul#menu-top { display: flex !important; flex-direction: column; width: 100%; padding: 8px 0 24px; gap: 0; flex: 1; }
    ul#menu-top > li { display: flex; flex-direction: row; align-items: stretch; flex-wrap: wrap; border-bottom: 1px solid rgba(255,255,255,0.07); width: 100%; }
    ul#menu-top > li:last-child { border-bottom: none; }
    ul#menu-top > li > a { flex: 1; padding: 16px 20px; font-family: 'Barlow Condensed', sans-serif; font-size: 14px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(255,255,255,0.88); border-radius: 0; display: flex; align-items: center; transition: background 0.2s, padding-left 0.2s; white-space: nowrap; }
    ul#menu-top > li > a:hover, ul#menu-top > li.current-menu-item > a { background: rgba(255,255,255,0.07); color: #fff; padding-left: 26px; text-decoration: none; }
    .sub-toggle { display: inline-flex !important; align-items: center; justify-content: center; width: 52px; align-self: stretch; border: none; border-left: 1px solid rgba(255,255,255,0.10); background: rgba(255,255,255,0.05); color: rgba(255,255,255,0.6); cursor: pointer; flex-shrink: 0; transition: background 0.2s, color 0.2s; padding: 0; }
    .sub-toggle:hover, li.menu-item-has-children.sub-open > .sub-toggle { background: rgba(200,169,110,0.15); color: var(--gold); }
    .sub-toggle svg { transition: transform 0.3s ease; pointer-events: none; }
    li.menu-item-has-children.sub-open > .sub-toggle svg { transform: rotate(180deg); }
    .sub-menu { position: static !important; display: none; width: 100%; background: rgba(0,0,0,0.18); border-top: 1px solid rgba(255,255,255,0.06); border-radius: 0; box-shadow: none; min-width: 0; padding: 4px 0; }
    li.menu-item-has-children.sub-open > .sub-menu { display: block; }
    li.menu-item-has-children:hover .sub-menu { display: none; }
    li.menu-item-has-children.sub-open > .sub-menu { display: block !important; }
    li.menu-item-has-children > a::after { display: none; }
    .sub-menu li { border: none; width: 100%; }
    .sub-menu li a { display: block; padding: 12px 20px 12px 36px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 400; letter-spacing: 0.4px; color: rgba(255,255,255,0.65); border-radius: 0; transition: background 0.15s, color 0.15s, padding-left 0.15s; }
    .sub-menu li a:hover { background: rgba(255,255,255,0.07); color: #fff; padding-left: 42px; text-decoration: none; }
    .nav-drawer-cta { margin: 12px 16px 20px; padding: 14px 20px; background: var(--crimson); color: #fff !important; font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; border-radius: 4px; text-align: center; display: block; text-decoration: none !important; transition: background 0.2s; }
    .nav-drawer-cta:hover { background: var(--crimson-dark); }
    .site-inner { margin-top: 64px; }
  }
</style>
</head>

<body class="wp-singular page-template-default page page-id-52 wp-theme-genesis wp-child-theme-altitude-pro custom-header header-image header-full-width full-width-content genesis-breadcrumbs-hidden genesis-footer-widgets-hidden">
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
      <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="menu-top" type="button" aria-label="Toggle navigation">
        <span class="bar"></span><span class="bar"></span><span class="bar"></span>
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
              <button class="sub-toggle" aria-label="Toggle Course submenu" type="button"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></button>
              <ul class="sub-menu">
                <li><a href="../course/rates/index.php"><span>Rates</span></a></li>
                <li><a href="../course/course-history/index.php"><span>Course History</span></a></li>
                <li><a href="../course/driving-directions/index.php"><span>Driving Directions</span></a></li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="../membership/index.php"><span>Membership</span></a>
              <button class="sub-toggle" aria-label="Toggle Membership submenu" type="button"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></button>
              <ul class="sub-menu">
                <li><a href="../membership/hampton-roads-golf-associate-membership/index.php"><span>Hampton Roads Golf Associate Membership</span></a></li>
                <li><a href="../wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf"><span>Membership Pool</span></a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="../event-hall/index.php"><span>Event Hall</span></a></li>
            <li class="menu-item menu-item-has-children">
              <a href="../golf/index.php"><span>Events</span></a>
              <button class="sub-toggle" aria-label="Toggle Events submenu" type="button"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></button>
              <ul class="sub-menu"><li><a href="../golf/junior-camp/index.php"><span>Jr. Camp</span></a></li></ul>
            </li>
            <li class="menu-item"><a href="../tournament/index.php"><span>Tournament</span></a></li>
            <li class="menu-item current-menu-item"><a href="index.php" aria-current="page"><span>Contact Us</span></a></li>
          </ul>
          <a href="https://chesapeake-golf-club.book.teeitup.golf/" class="nav-drawer-cta" target="_blank">Book Tee Time</a>
        </div>
      </nav>
    </div>
  </header>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="hero-eyebrow">Chesapeake Golf Club</p>
      <h1 class="page-hero-title">Contact Us</h1>
      <p class="page-hero-sub">We're here to help — reach out for tee times, event bookings, memberships, or anything else you need.</p>
      <div class="hero-pill-row">
        <span class="hero-pill">Pro Shop</span>
        <span class="hero-pill">Event Inquiries</span>
        <span class="hero-pill">Memberships</span>
        <span class="hero-pill">Directions</span>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <div class="inner">
      <a href="../index.php">Home</a>
      <span class="breadcrumb-sep">›</span>
      <span class="breadcrumb-current">Contact Us</span>
    </div>
  </div>

  <!-- MAIN -->
  <div class="site-inner">
    <main id="genesis-content">
      <article class="post-52 page type-page status-publish entry" aria-label="Contact Us">
        <header class="entry-header"><h1 class="entry-title">Contact Us</h1></header>
        <div class="entry-content">

          <!-- INTRO STRIP -->
          <section class="intro-strip">
            <div class="intro-strip-inner">
              <div>
                <p class="section-label">Location &amp; Contact</p>
                <h2 class="section-heading">Find Us on<br>Club House Drive</h2>
                <p class="section-body">Chesapeake Golf Club is located in the heart of Chesapeake, Virginia — easily accessible from I-64 and serving Hampton Roads golfers for over 30 years.</p>
                <div class="contact-info-list">
                  <div class="contact-info-row">
                    <div class="contact-icon-box">
                      <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div class="contact-info-text">
                      <span class="contact-info-label">Address</span>
                      <span class="contact-info-value">1201 Club House Drive<br>Chesapeake, VA 23322</span>
                    </div>
                  </div>
                  <div class="contact-info-row">
                    <div class="contact-icon-box">
                      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.06 2.18 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                    </div>
                    <div class="contact-info-text">
                      <span class="contact-info-label">Pro Shop</span>
                      <span class="contact-info-value"><a href="tel:7575471122">(757) 547-1122</a></span>
                    </div>
                  </div>
                  <div class="contact-info-row">
                    <div class="contact-icon-box">
                      <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><polyline points="3 8 12 13 21 8"/></svg>
                    </div>
                    <div class="contact-info-text">
                      <span class="contact-info-label">Pro Shop Email</span>
                      <span class="contact-info-value"><a href="mailto:proshop@chesapeakegolfclub.com">proshop@chesapeakegolfclub.com</a></span>
                    </div>
                  </div>
                </div>
                <div class="social-row">
                  <a class="social-pill" target="_blank" href="https://www.facebook.com/Bestgolfcourseintidewater/">
                    <img src="../wp-content/uploads/sites/7040/2020/02/FacebookOriginalBlueSquareWhiteF.png" alt="Facebook"> Facebook
                  </a>
                  <a class="social-pill" target="_blank" href="https://twitter.com/ChesapeakeGC">
                    <img src="../wp-content/uploads/sites/7040/2020/02/TwitterLogoBlue.png" alt="Twitter"> Twitter
                  </a>
                  <a class="social-pill" target="_blank" href="https://www.instagram.com/chesapeakegolfclub">
                    <img src="../wp-content/uploads/sites/7040/2020/02/InstagramLogoRainbow-1.png" alt="Instagram"> Instagram
                  </a>
                </div>
              </div>
              <div class="intro-stat-row">
                <div class="intro-stat"><span class="intro-stat-num">18</span><span class="intro-stat-label">Holes</span></div>
                <div class="intro-stat"><span class="intro-stat-num">30+</span><span class="intro-stat-label">Years Serving</span></div>
                <div class="intro-stat"><span class="intro-stat-num">7am</span><span class="intro-stat-label">Opens Daily</span></div>
                <div class="intro-stat"><span class="intro-stat-num">3</span><span class="intro-stat-label">Event Spaces</span></div>
              </div>
            </div>
          </section>

          <!-- STAFF CARDS -->
          <section class="staff-section">
            <div class="staff-inner">
              <p class="section-label">Our Team</p>
              <h2 class="section-heading">The People Behind<br>the Course</h2>
              <div class="staff-grid">
                <div class="staff-card">
                  <div class="staff-avatar"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                  <span class="staff-role">Pro Shop</span>
                  <h3 class="staff-name">Bill Corrigan</h3>
                  <div class="staff-divider"></div>
                  <a class="staff-email" href="mailto:proshop@chesapeakegolfclub.com">
                    <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><polyline points="3 8 12 13 21 8"/></svg>
                    proshop@chesapeakegolfclub.com
                  </a>
                </div>
                <div class="staff-card">
                  <div class="staff-avatar"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                  <span class="staff-role">Superintendent</span>
                  <h3 class="staff-name">Ron McMaster</h3>
                  <div class="staff-divider"></div>
                  <a class="staff-email" href="mailto:superintendent@hamptonroadsgolf.com">
                    <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><polyline points="3 8 12 13 21 8"/></svg>
                    superintendent@hamptonroadsgolf.com
                  </a>
                </div>
                <div class="staff-card">
                  <div class="staff-avatar"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg></div>
                  <span class="staff-role">HR &amp; Accounting</span>
                  <h3 class="staff-name">Chasity Jones</h3>
                  <div class="staff-divider"></div>
                  <a class="staff-email" href="mailto:bookkeeper@hamptonroadsgolf.com">
                    <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><polyline points="3 8 12 13 21 8"/></svg>
                    bookkeeper@hamptonroadsgolf.com
                  </a>
                </div>
              </div>
            </div>
          </section>

          <!-- MY JOY LUXURY EVENTS -->
          <section class="events-section">
            <div class="events-card">
              <div class="events-header">
                <div>
                  <span class="events-badge">Event Catering &amp; Planning</span>
                  <h2 class="events-title">My Joy Luxury Events<br>@ Chesapeake Golf Club</h2>
                  <p class="events-desc">Planning your next event at Chesapeake Golf Club? Our dedicated luxury event coordinators are ready to bring your vision to life — from intimate gatherings to grand celebrations.</p>
                </div>
                <div class="events-contacts">
                  <div class="events-contact-card">
                    <div class="events-contact-name">Felicia Howard</div>
                    <div class="events-contact-phone">
                      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.06 2.18 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                      <a href="tel:7577247265" style="color:inherit;text-decoration:none;">757-724-7265</a>
                    </div>
                    <div class="events-contact-email">
                      <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><polyline points="3 8 12 13 21 8"/></svg>
                      <a href="mailto:luxandgrill@gmail.com">luxandgrill@gmail.com</a>
                    </div>
                  </div>
                  <div class="events-contact-card">
                    <div class="events-contact-name">KeShara McIntyre</div>
                    <div class="events-contact-phone">
                      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.06 2.18 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
                      <a href="tel:7577181896" style="color:inherit;text-decoration:none;">757-718-1896</a>
                    </div>
                    <div class="events-contact-email">
                      <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><polyline points="3 8 12 13 21 8"/></svg>
                      <a href="mailto:luxandgrill@gmail.com">luxandgrill@gmail.com</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- DIRECTIONS + MAP -->
          <section class="directions-section">
            <div class="directions-card">
              <div class="directions-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.409181045713!2d-76.29000472520286!3d36.71273297227222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89baa52612c5980d%3A0x7ec2e2cb4ae9b922!2sChesapeake%20Golf%20Club!5e0!3m2!1sen!2sin!4v1770977146629!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="directions-body">
                <div>
                  <span class="directions-eyebrow">Getting Here</span>
                  <h2 class="directions-title">Directions to<br>Chesapeake Golf Club</h2>
                  <p class="directions-text">From I-64, take Exit 291B toward Battlefield Boulevard South (VA-168 S). Continue south on Battlefield Boulevard for approximately five miles. Turn left onto Club House Drive. Chesapeake Golf Club will be on the left at 1201 Club House Drive.</p>
                </div>
                <div class="directions-detail">
                  <div class="dir-row">
                    <div class="dir-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div>
                      <div class="dir-label">Address</div>
                      <div class="dir-value">1201 Club House Drive, Chesapeake, VA 23322</div>
                    </div>
                  </div>
                  <div class="dir-row">
                    <div class="dir-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.06 2.18 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg></div>
                    <div>
                      <div class="dir-label">Phone</div>
                      <div class="dir-value"><a href="tel:7575471122">(757) 547-1122</a></div>
                    </div>
                  </div>
                  <div class="dir-row">
                    <div class="dir-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                    <div>
                      <div class="dir-label">Exit from I-64</div>
                      <div class="dir-value">Exit 291B — Battlefield Blvd South (VA-168 S)</div>
                    </div>
                  </div>
                  <div class="dir-row">
                    <div class="dir-icon"><svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg></div>
                    <div>
                      <div class="dir-label">Turn</div>
                      <div class="dir-value">Left onto Club House Drive after ~5 miles south</div>
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
                <span class="cta-badge">Ready to Play?</span>
                <h2 class="cta-title">Book Your Round<br>Today</h2>
                <p class="cta-desc">Reserve your tee time online 24/7, or call our Pro Shop for assistance. We look forward to welcoming you to Chesapeake Golf Club.</p>
                <div class="cta-btns">
                  <a href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank" class="cta-btn-primary">
                    Book Tee Time
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                  <a href="../event-hall/index.php" class="cta-btn-secondary">
                    View Event Hall
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                </div>
              </div>
              <div class="cta-right">
                <div class="cta-checklist">
                  <div class="cta-check-item"><div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Online Booking Available 24/7</div>
                  <div class="cta-check-item"><div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Pro Shop: (757) 547-1122</div>
                  <div class="cta-check-item"><div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Event Hall &amp; Wedding Inquiries</div>
                  <div class="cta-check-item"><div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Membership Information Available</div>
                  <div class="cta-check-item"><div class="cta-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Friendly Staff Ready to Assist</div>
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
      <div class="golfnow-footer text-white">
        <div class="copy">&copy; 2026 Chesapeake Golf, a Hampton Roads Golf Company. All Rights Reserved.</div>
      </div>
    </div>
  </footer>

</div>

<!-- ORIGINAL BACKEND SCRIPTS PRESERVED -->
<script type="text/javascript">if(typeof IOM!=='undefined')IOM.run();</script>
<script type="text/javascript">
jQuery(document).ready(function(){
  if(typeof IOM!=='undefined')IOM.run();
  jQuery('.menu-item-67 a').click(function(){
    var u='https://shop.giftlocal.com/309-chesapeake-golf-club/';
    if(typeof IOM!=='undefined'&&!IOM.open(u,''))window.open(u); else window.open(u);
  });
});
</script>
<script type="text/javascript" id="golfnow-scripts-js-extra">var GN={"background_images":["https:\/\/www.chesapeakegolfclub.com\/wp-content\/uploads\/sites\/7040\/2018\/09\/thumbnail.jpg"]};</script>
<script type="text/javascript" src="../wp-content/plugins/golfnow-customize/assets/dist/scripts.mindc63.js?ver=0.1.1"></script>
<script>
var url=window.location.toString();
var _comscore=_comscore||[];_comscore.push({c1:"2",c2:"6035083",c3:"",c4:url});
(function(){var s=document.createElement("script"),el=document.getElementsByTagName("script")[0];s.async=true;s.src=(document.location.protocol=="https:"?"https://sb":"http://b")+".scorecardresearch.com/beacon.js";el.parentNode.insertBefore(s,el);})();
</script>
<script>
(function(){
  var toggle=document.getElementById('nav-toggle');
  var closeBtn=document.getElementById('nav-close');
  var nav=document.getElementById('genesis-nav-primary');
  if(!toggle||!nav)return;
  function openNav(){nav.classList.add('open');toggle.setAttribute('aria-expanded','true');document.body.style.overflow='hidden';}
  function closeNav(){nav.classList.remove('open');toggle.setAttribute('aria-expanded','false');document.body.style.overflow='';nav.querySelectorAll('.menu-item-has-children').forEach(function(li){li.classList.remove('sub-open');});}
  toggle.addEventListener('click',function(){nav.classList.contains('open')?closeNav():openNav();});
  if(closeBtn)closeBtn.addEventListener('click',closeNav);
  nav.addEventListener('click',function(e){if(e.target===nav)closeNav();});
  var parents=nav.querySelectorAll('.menu-item-has-children');
  parents.forEach(function(li){
    var btn=li.querySelector(':scope > .sub-toggle');
    if(!btn)return;
    btn.addEventListener('click',function(e){e.stopPropagation();var wasOpen=li.classList.contains('sub-open');parents.forEach(function(p){p.classList.remove('sub-open');});if(!wasOpen)li.classList.add('sub-open');});
  });
  document.addEventListener('keydown',function(e){if(e.key==='Escape')closeNav();});
  window.addEventListener('resize',function(){if(window.innerWidth>900)closeNav();});
  (function lockGreen(){
    var header=document.querySelector('.site-header');
    if(!header)return;
    function apply(){header.style.setProperty('background','#034e42','important');header.style.setProperty('background-color','#034e42','important');}
    apply();
    if(window.MutationObserver){new MutationObserver(apply).observe(header,{attributes:true,attributeFilter:['style','class']});}
    window.addEventListener('scroll',apply,{passive:true});
  })();
})();
</script>

</body>
</html>