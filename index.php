<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Home - Chesapeake Golf</title>
<link rel="icon" href="wp-content/themes/altitude-pro/images/favicon.ico" />
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

  /* ─── HEADER ─── */
 .site-header {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 9999;
  background: #000000 !important;
  background-color: #000000 !important;
  box-shadow: 0 2px 24px rgba(0,0,0,0.25);
}
.site-header[style],
.site-header.dark,
.site-header.scrolled,
.site-header.sticky {
  background: #000000 !important;
  background-color: #000000 !important;
}
  .site-title a {
  display: block; width: 76px; height: 64px;     /* was 107px × 64px */
  background: url(wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat center/contain !important;
  text-indent: -9999px; overflow: hidden;
}
  .site-header .wrap {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 72px;
    position: relative;
  }
  .title-area { flex-shrink: 0; }
  .site-title { margin: 0; }
  /* .site-title a {
    display: block;
    width: 107px; height: 64px;
    background: url(wp-content/uploads/sites/7040/2018/06/Chesapeake_logo.png) no-repeat center/contain !important;
    text-indent: -9999px;
    overflow: hidden;
  } */
  .site-description { display: none; }

  /* Desktop nav */
  .nav-primary { margin: 0; }
  .nav-primary .wrap { padding: 0; height: auto; }
  ul#menu-top {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 4px;
    margin: 0; padding: 0;
  }
  ul#menu-top > li > a {
    color: rgba(255,255,255,0.88);
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    padding: 8px 14px;
    border-radius: 4px;
    display: block;
    transition: color 0.2s, background 0.2s;
    white-space: nowrap;
    background: transparent;
  }
  ul#menu-top > li > a:hover,
  ul#menu-top > li.current-menu-item > a {
    color: var(--white);
    background: rgba(255,255,255,0.12);
    text-decoration: none;
  }
  li.menu-item-has-children { position: relative; }
  .sub-menu {
    display: none;
    position: absolute;
    top: calc(100% + 4px);
    left: 0;
    background: var(--forest-dark);
    border-top: 2px solid var(--gold);
    border-radius: 0 0 6px 6px;
    min-width: 240px;
    list-style: none;
    padding: 8px 0;
    box-shadow: 0 12px 32px rgba(0,0,0,0.3);
    z-index: 10000;
  }
  li.menu-item-has-children:hover .sub-menu { display: block; }
  .sub-menu li a {
    display: block;
    padding: 10px 20px;
    color: rgba(255,255,255,0.82);
    font-family: 'Barlow', sans-serif;
    font-size: 13px;
    letter-spacing: 0.5px;
    transition: background 0.15s, color 0.15s;
  }
  .sub-menu li a:hover { background: var(--forest-light); color: #fff; text-decoration: none; }

  /* Hamburger — hidden on desktop */
  .nav-toggle { display: none; }
  /* Sub-menu arrow buttons — hidden on desktop */
  .sub-toggle { display: none; }

  /* ─── HERO ─── */
  #front-page-1 {
    position: relative;
    height: 100vh; min-height: 600px;
    display: flex; align-items: center; justify-content: center;
    background-image: url(wp-content/uploads/sites/7040/2018/09/thumbnail.jpg);
    background-size: cover; background-position: center; background-attachment: fixed;
    overflow: hidden;
  }
  #front-page-1::before {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(170deg, rgba(2,30,25,0.82) 0%, rgba(3,78,66,0.55) 50%, rgba(154,60,72,0.40) 100%);
  }
  .hero-content {
    position: relative; z-index: 2;
    text-align: center; padding: 0 24px;
    animation: heroReveal 1.2s cubic-bezier(0.22,1,0.36,1) both;
  }
  @keyframes heroReveal { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
  .hero-eyebrow { font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 600; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; }
  .hero-title { font-family: 'Playfair Display', serif; font-size: clamp(48px, 8vw, 88px); font-weight: 900; color: var(--white); line-height: 1.05; margin-bottom: 24px; text-shadow: 0 4px 32px rgba(0,0,0,0.4); }
  .hero-subtitle { font-size: 18px; font-weight: 300; color: rgba(255,255,255,0.80); letter-spacing: 0.5px; margin-bottom: 44px; max-width: 480px; margin-left: auto; margin-right: auto; line-height: 1.6; }
  .hero-cta { display: inline-flex; align-items: center; gap: 10px; background: var(--crimson); color: #fff !important; font-family: 'Barlow Condensed', sans-serif; font-size: 15px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 16px 40px; border-radius: 2px; transition: background 0.2s, transform 0.2s, box-shadow 0.2s; box-shadow: 0 8px 32px rgba(202,28,58,0.4); text-decoration: none !important; }
  .hero-cta:hover { background: var(--crimson-dark); transform: translateY(-2px); }
  .scroll-hint { position: absolute; bottom: 140px; left: 50%; transform: translateX(-50%); z-index: 2; display: flex; flex-direction: column; align-items: center; gap: 8px; animation: scrollFade 2s ease infinite; }
  .scroll-hint span { font-family: 'Barlow Condensed', sans-serif; font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.5); }
  .scroll-line { width: 1px; height: 40px; background: linear-gradient(to bottom, rgba(255,255,255,0.5), transparent); }
  @keyframes scrollFade { 0%, 100% { opacity: 0.5; transform: translateX(-50%) translateY(0); } 50% { opacity: 1; transform: translateX(-50%) translateY(6px); } }

  /* ─── QUICK LINKS ─── */
  #front-page-2 { background: var(--white); padding: 80px 32px; }
  .quicklinks-inner { max-width: 1100px; margin: 0 auto; }
  .section-label { font-family: 'Barlow Condensed', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 12px; }
  .section-heading { font-family: 'Playfair Display', serif; font-size: clamp(30px, 4vw, 44px); font-weight: 700; color: var(--charcoal); margin-bottom: 56px; line-height: 1.15; }
  .quicklinks-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; background: var(--light-gray); border: 2px solid var(--light-gray); border-radius: 8px; overflow: hidden; }
  .ql-card { background: var(--white); padding: 48px 36px; display: flex; flex-direction: column; align-items: flex-start; gap: 16px; transition: background 0.25s; position: relative; overflow: hidden; }
  .ql-card::before { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: var(--forest); transform: scaleX(0); transform-origin: left; transition: transform 0.3s ease; }
  .ql-card:hover::before { transform: scaleX(1); }
  .ql-card:hover { background: var(--cream); }
  .ql-icon { width: 52px; height: 52px; background: var(--forest); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .ql-icon svg { width: 24px; height: 24px; fill: none; stroke: #fff; stroke-width: 1.8; }
  .ql-title { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: var(--charcoal); }
  .ql-desc { font-size: 14px; color: var(--mid); line-height: 1.6; }
  .ql-link { display: inline-flex; align-items: center; gap: 6px; font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--forest); margin-top: auto; transition: gap 0.2s, color 0.2s; text-decoration: none !important; }
  .ql-link:hover { gap: 10px; color: var(--crimson); text-decoration: none !important; }

  /* ─── TOURNAMENT ─── */
  #front-page-3 { background: var(--forest-dark); padding: 60px 40px; }
  .tournament-card-wrap { max-width: 1200px; margin: 0 auto; }
  .tournament-card { display: grid; grid-template-columns: 1fr 1fr; border-radius: 16px; overflow: hidden; box-shadow: 0 32px 80px rgba(0,0,0,0.5); }
  .tc-left { background: #0a3d34; padding: 60px 56px; display: flex; flex-direction: column; justify-content: center; }
  .tc-badge { display: inline-block; background: var(--gold); color: var(--forest-dark); font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; padding: 6px 14px; border-radius: 3px; margin-bottom: 28px; width: fit-content; }
  .tc-title { font-family: 'Playfair Display', serif; font-size: clamp(38px, 4vw, 54px); font-weight: 900; color: var(--white); line-height: 1.08; margin-bottom: 20px; }
  .tc-desc { font-size: 15px; font-weight: 400; color: rgba(255,255,255,0.70); line-height: 1.75; margin-bottom: 40px; max-width: 400px; }
  .tc-cta { display: inline-flex; align-items: center; gap: 10px; background: var(--crimson); color: #fff !important; font-family: 'Barlow Condensed', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; padding: 15px 36px; border-radius: 2px; width: fit-content; transition: background 0.2s, transform 0.2s; text-decoration: none !important; box-shadow: 0 8px 24px rgba(202,28,58,0.4); }
  .tc-cta:hover { background: var(--crimson-dark); transform: translateY(-2px); }
  .tc-right { background: #0d4d41; padding: 52px 56px; display: flex; flex-direction: column; border-left: 1px solid rgba(255,255,255,0.06); }
  .tc-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; margin-bottom: 36px; padding-bottom: 36px; border-bottom: 1px solid rgba(255,255,255,0.10); }
  .tc-stat { text-align: center; padding: 0 8px; position: relative; }
  .tc-stat + .tc-stat::before { content: ''; position: absolute; left: 0; top: 10%; bottom: 10%; width: 1px; background: rgba(255,255,255,0.15); }
  .tc-stat-num { display: block; font-family: 'Playfair Display', serif; font-size: 52px; font-weight: 900; color: var(--gold); line-height: 1; }
  .tc-stat-label { display: block; font-family: 'Barlow Condensed', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.45); margin-top: 8px; }
  .tc-checklist { display: flex; flex-direction: column; }
  .tc-check-item { display: flex; align-items: center; gap: 18px; padding: 18px 0; border-bottom: 1px solid rgba(255,255,255,0.07); color: rgba(255,255,255,0.85); font-family: 'Barlow', sans-serif; font-size: 15px; font-weight: 400; }
  .tc-check-item:last-child { border-bottom: none; }
  .tc-check-icon { width: 32px; height: 32px; border-radius: 50%; border: 1.5px solid rgba(200,169,110,0.45); background: rgba(200,169,110,0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .tc-check-icon svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 2.5; }

  /* ─── CONTACT ─── */
  #front-page-7 { background: var(--charcoal); padding: 80px 32px; }
  .contact-inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1.6fr; gap: 64px; align-items: start; }
  .contact-label { font-family: 'Barlow Condensed', sans-serif; font-size: 12px; font-weight: 700; letter-spacing: 4px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; }
  .contact-heading { font-family: 'Playfair Display', serif; font-size: 36px; font-weight: 700; color: var(--white); margin-bottom: 32px; line-height: 1.2; }
  .contact-info { display: flex; flex-direction: column; gap: 20px; margin-bottom: 40px; }
  .contact-row { display: flex; align-items: flex-start; gap: 14px; color: rgba(255,255,255,0.75); font-size: 15px; line-height: 1.6; }
  .contact-icon { width: 36px; height: 36px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: 4px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px; }
  .contact-icon svg { width: 16px; height: 16px; stroke: var(--gold); fill: none; stroke-width: 1.8; }
  .social-row { display: flex; align-items: center; gap: 12px; margin-top: 8px; }
  .social-label { font-family: 'Barlow Condensed', sans-serif; font-size: 12px; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.4); margin-bottom: 16px; }
  .social-btn { width: 40px; height: 40px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.18); display: flex; align-items: center; justify-content: center; transition: border-color 0.2s, background 0.2s; text-decoration: none !important; }
  .social-btn:hover { border-color: var(--gold); background: rgba(200,169,110,0.12); }
  .social-btn img { width: 18px; height: 18px; object-fit: contain; }
  .map-frame { border-radius: 8px; overflow: hidden; box-shadow: 0 24px 64px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08); }
  .map-frame iframe { display: block; width: 100%; height: 380px; border: 0; filter: grayscale(20%) contrast(1.05); }

  /* ─── FOOTER ─── */
  .site-footer { background: var(--crimson-dark); padding: 24px 32px; }
  .site-footer .wrap { max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
  .copy { font-family: 'Barlow', sans-serif; font-size: 13px; color: rgba(255,255,255,0.7); letter-spacing: 0.5px; }

  /* ─── MISC ─── */
  .genesis-skip-link { list-style: none; }
  .screen-reader-shortcut { position: absolute; left: -9999px; z-index: 999999; }
  .screen-reader-shortcut:focus { left: 0; top: 0; background: var(--forest); color: #fff; padding: 8px 16px; }
  .screen-reader-text { border: 0; clip: rect(1px,1px,1px,1px); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute; width: 1px; }
  .site-container { min-height: 100vh; display: flex; flex-direction: column; }
  .site-inner { margin-top: 72px; flex: 1; }
  .widgettitle.widget-title { display: none; }

  /* ═══════════════════════════════════════════════
     TABLET  (769px – 1024px)
  ═══════════════════════════════════════════════ */
  @media (max-width: 1024px) {
    .quicklinks-grid { grid-template-columns: 1fr; }
    .tournament-card { grid-template-columns: 1fr; }
    .contact-inner { grid-template-columns: 1fr; }
    .tc-left, .tc-right { padding: 48px 40px; }
  }

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
    /* Backdrop */
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

    /* ── Menu list — full width, stacked ── */
    ul#menu-top {
      display: flex !important;
      flex-direction: column;
      width: 100%;
      padding: 8px 0 24px;
      gap: 0;
      flex: 1;
    }

    /* Each top-level item is a row */
    ul#menu-top > li {
      display: flex;
      flex-direction: row;
      align-items: stretch;
      flex-wrap: wrap;               /* sub-menu wraps below on its own row */
      border-bottom: 1px solid rgba(255,255,255,0.07);
      width: 100%;
    }
    ul#menu-top > li:last-child { border-bottom: none; }

    /* Main link — takes all available width minus arrow btn */
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

    /* Arrow toggle button — flush right, same height as the link */
    .sub-toggle {
      display: inline-flex !important;
      align-items: center;
      justify-content: center;
      width: 52px;
      align-self: stretch;          /* matches li height automatically */
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

    /* Sub-menu — full-width row below the link+button row */
    .sub-menu {
      position: static !important;
      display: none;
      width: 100%;                  /* fills the flex-wrap row */
      background: rgba(0,0,0,0.18);
      border-top: 1px solid rgba(255,255,255,0.06);
      border-radius: 0;
      box-shadow: none;
      min-width: 0;
      padding: 4px 0;
    }
    li.menu-item-has-children.sub-open > .sub-menu { display: block; }
    /* Disable hover-open on mobile */
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

    /* Book tee time CTA at the bottom of the drawer */
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

    /* Content adjustments */
    #front-page-2, #front-page-7 { padding: 60px 20px; }
    #front-page-3 { padding: 40px 16px; }
    .tc-left, .tc-right { padding: 36px 24px; }
    .hero-title { font-size: 40px; }
    .site-inner { margin-top: 64px; }
  }

  @media (max-width: 480px) {
    .hero-title { font-size: 34px; }
    .hero-subtitle { font-size: 16px; }
    .hero-cta { padding: 14px 28px; font-size: 13px; width: 100%; justify-content: center; }
    .tc-stat-num { font-size: 38px; }
    .ql-card { padding: 32px 24px; }
    .contact-heading { font-size: 28px; }
    .tc-stats { grid-template-columns: 1fr; gap: 20px; }
    .tc-stat + .tc-stat::before { display: none; }
  }
</style>
</head>

<body class="home front-page">
<div class="site-container">

  <ul class="genesis-skip-link">
    <li><a href="#genesis-content" class="screen-reader-shortcut">Skip to main content</a></li>
  </ul>

  <!-- HEADER -->
  <header class="site-header">
    <div class="wrap">
      <div class="title-area">
        <p class="site-title"><a href="index.php">Chesapeake Golf</a></p>
      </div>

      <!-- Hamburger button -->
      <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="menu-top" type="button" aria-label="Toggle navigation">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>

      <nav class="nav-primary" id="genesis-nav-primary" aria-label="Main">
        <div class="wrap">

          <ul id="menu-top" role="menubar">
            <li class="menu-item current-menu-item">
              <a href="index.php" aria-current="page"><span>Home</span></a>
            </li>
            <li class="menu-item">
              <a target="_blank" href="https://chesapeake-golf-club.book.teeitup.golf/"><span>Tee Times</span></a>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="course/index.php"><span>Course</span></a>
              <button class="sub-toggle" aria-label="Toggle Course submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="course/rates/index.php">Rates</a></li>
                <li><a href="course/course-history/index.php">Course History</a></li>
                <li><a href="course/driving-directions/index.php">Driving Directions</a></li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="membership/index.php"><span>Membership</span></a>
              <button class="sub-toggle" aria-label="Toggle Membership submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="membership/hampton-roads-golf-associate-membership/index.php">Hampton Roads Golf Associate Membership</a></li>
                <li><a href="wp-content/uploads/sites/7040/2025/02/Chesapeake-Golf-Club-Pool-Membership.pdf">Membership Pool</a></li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="event-hall/index.php"><span>Event Hall</span></a>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="golf/index.php"><span>Events</span></a>
              <button class="sub-toggle" aria-label="Toggle Events submenu" type="button">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
              </button>
              <ul class="sub-menu">
                <li><a href="golf/junior-camp/index.php">Jr. Camp</a></li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="tournament/index.php"><span>Tournament</span></a>
            </li>
            <li class="menu-item">
              <a href="contact-us/index.php"><span>Contact Us</span></a>
            </li>
          </ul>

        </div>
      </nav>
    </div>
  </header>

  <!-- MAIN -->
  <div class="site-inner">
    <main id="genesis-content">

      <!-- HERO -->
      <div id="front-page-1">
        <div class="hero-content">
          <p class="hero-eyebrow">Chesapeake, Virginia</p>
          <h1 class="hero-title">Welcome to<br>Chesapeake Golf Club</h1>
          <p class="hero-subtitle">A premier golf destination in the heart of Hampton Roads — where every round is an experience.</p>
          <a class="hero-cta" href="https://chesapeake-golf-club.book.teeitup.golf/" target="_blank">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Book Your Tee Time
          </a>
        </div>
        <div class="scroll-hint">
          <div class="scroll-line"></div>
          <span>Scroll</span>
        </div>
      </div>

      <!-- QUICK LINKS -->
      <div id="front-page-2">
        <div class="quicklinks-inner">
          <p class="section-label">What We Offer</p>
          <h2 class="section-heading">Everything You Need<br>on the Course</h2>
          <div class="quicklinks-grid">
            <div class="ql-card">
              <div class="ql-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
              <div class="ql-title">Membership</div>
              <p class="ql-desc">Join our community of golfers and enjoy exclusive access, member rates, and premier amenities year-round.</p>
              <a href="membership/index.php" class="ql-link">Explore Membership <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
            <div class="ql-card">
              <div class="ql-icon"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
              <div class="ql-title">Tee Times</div>
              <p class="ql-desc">Reserve your spot on our beautifully maintained course. Online booking available 24/7 for your convenience.</p>
              <a href="https://chesapeake-golf-club.play.teeitup.golf/" target="_blank" class="ql-link">Book Now <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
            <div class="ql-card">
              <div class="ql-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
              <div class="ql-title">Scorecard</div>
              <p class="ql-desc">View hole-by-hole details, par information, and yardage for our 18-hole championship layout.</p>
              <a href="#" class="ql-link">View Scorecard <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
          </div>
        </div>
      </div>

      <!-- TOURNAMENT -->
      <div id="front-page-3">
        <div class="tournament-card-wrap">
          <div class="tournament-card">
            <div class="tc-left">
              <span class="tc-badge">Tournament Play</span>
              <h2 class="tc-title">Host Your<br>Tournament Here</h2>
              <p class="tc-desc">Chesapeake Golf Club offers a premier venue for tournaments of all sizes — from corporate outings to charity events. Our dedicated staff ensures an unforgettable experience.</p>
              <a href="tournament/index.php" class="tc-cta">
                Plan Your Tournament
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
            <div class="tc-right">
              <div class="tc-stats">
                <div class="tc-stat"><span class="tc-stat-num">18</span><span class="tc-stat-label">Holes</span></div>
                <div class="tc-stat"><span class="tc-stat-num">72</span><span class="tc-stat-label">Par</span></div>
                <div class="tc-stat"><span class="tc-stat-num">30+</span><span class="tc-stat-label">Years</span></div>
              </div>
              <div class="tc-checklist">
                <div class="tc-check-item"><div class="tc-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Tournament Package Available</div>
                <div class="tc-check-item"><div class="tc-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Tournament Menu Package</div>
                <div class="tc-check-item"><div class="tc-check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>Tournament Contract Included</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CONTACT -->
      <div id="front-page-7">
        <div class="contact-inner">
          <div class="contact-left">
            <p class="contact-label">Find Us</p>
            <h2 class="contact-heading">Visit Chesapeake<br>Golf Club</h2>
            <div class="contact-info">
              <div class="contact-row">
                <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <div>1201 Clubhouse Drive<br>Chesapeake, VA 23322</div>
              </div>
              <div class="contact-row">
                <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.06 2.18 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg></div>
                <div>(757) 547-1122</div>
              </div>
            </div>
            <p class="social-label">Follow Us</p>
            <div class="social-row">
              <a class="social-btn" target="_blank" href="https://www.facebook.com/Bestgolfcourseintidewater/"><img src="wp-content/uploads/sites/7040/2020/02/FacebookOriginalBlueSquareWhiteF.png" alt="Facebook" width="18"></a>
              <a class="social-btn" target="_blank" href="https://twitter.com/ChesapeakeGC"><img src="wp-content/uploads/sites/7040/2020/02/TwitterLogoBlue.png" alt="Twitter" width="18"></a>
              <a class="social-btn" target="_blank" href="https://www.instagram.com/chesapeakegolfclub"><img alt="Instagram" src="wp-content/uploads/sites/7040/2020/02/InstagramLogoRainbow-1.png" width="18"></a>
            </div>
          </div>
          <div class="contact-right">
            <div class="map-frame">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.4116492678745!2d-76.28963648440566!3d36.71267368032086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89baa52612c5980d%3A0x7ec2e2cb4ae9b922!2sChesapeake+Golf+Club!5e0!3m2!1sen!2stw!4v1528098744974" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

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
    // also collapse all sub-menus when drawer closes
    nav.querySelectorAll('.menu-item-has-children').forEach(function(li) {
      li.classList.remove('sub-open');
    });
  }

  toggle.addEventListener('click', function () {
    nav.classList.contains('open') ? closeNav() : openNav();
  });

  if (closeBtn) closeBtn.addEventListener('click', closeNav);

  // Tap backdrop to close
  nav.addEventListener('click', function (e) {
    if (e.target === nav) closeNav();
  });

  // Sub-menu accordion — arrow button only
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

  // ESC closes drawer
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  // Reset on resize to desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth > 900) {
      closeNav();
    }
  });

  // Keep header green always
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