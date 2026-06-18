<?php
/**
 * Template Name: Privacy Policy
 * Description: LeadZap Privacy Policy page matching Nimo dark theme
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?> LeadZap &mdash; Privacy Policy</title>
  <meta name="description" content="LeadZap Privacy Policy &mdash; How we collect, use, and protect your data.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
    *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
    html { scroll-behavior:smooth; }
    body {
      background:#111111; color:#b5b5b5;
      font-family:'Inter',sans-serif; font-size:18px; font-weight:400; line-height:1.6; overflow-x:hidden;
    }
    img { max-width:100%; display:block; }
    a { text-decoration:none; color:inherit; }
    ul { list-style:none; }
    .container { max-width:1320px; margin:0 auto; padding:0 24px; }
    :root { --body-bg:#111111; --text:#b5b5b5; --white:#ffffff; --lime:#d6f345; --dark-btn:#282828; --btn-text:#171619; --hero-bg:#000000; --tag-bg:#323232; --border-rgba:rgba(255,255,255,0.2); }

    /* ===== HEADER ===== */
    .header { position:fixed; top:0; left:0; right:0; z-index:1000; background:rgba(17,17,17,0.95); backdrop-filter:blur(20px); border-bottom:1px solid rgba(255,255,255,0.06); padding:18px 0; }
    .header-inner { display:flex; align-items:center; justify-content:space-between; }
    .header-logo { font-family:'Space Grotesk',sans-serif; font-size:28px; font-weight:700; color:#ffffff; }
    .header-nav { display:flex; align-items:center; gap:36px; }
    .header-nav a.nav-cta { background:#d6f345; color:#171619; padding:12px 28px; border-radius:100px; font-family:'Inter',sans-serif; font-weight:600; font-size:16px; }
    .header-nav a.nav-cta:hover { background:#c8e03a; }
    .hamburger { display:none; flex-direction:column; gap:5px; cursor:pointer; }
    .hamburger span { width:28px; height:3px; background:#fff; border-radius:3px; }
    .header-nav .nav-item { position:relative; list-style:none; }
    .header-nav .nav-item > a { font-family:'Space Grotesk',sans-serif; font-size:16px; font-weight:700; color:#fff; transition:color 0.3s; padding:12px 0; display:inline-block; }
    .header-nav .nav-item > a:hover { color:#d6f345; }
    .header-nav .sub-menu { position:absolute; top:100%; left:0; min-width:220px; display:block; background:#1a1a1a; border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:12px 0; opacity:0; visibility:hidden; transform:translateY(8px); transition:all 0.25s ease; z-index:999; pointer-events:none; box-shadow:0 20px 60px rgba(0,0,0,0.6); }
    .header-nav .menu-item-has-children:hover > .sub-menu,
    .header-nav .sub-menu:hover { opacity:1; visibility:visible; transform:translateY(0); pointer-events:auto; }
    .header-nav .sub-menu .nav-item > a { display:block; padding:10px 24px; font-size:15px; font-weight:500; color:#b5b5b5; }
    .header-nav .sub-menu .nav-item > a:hover { color:#d6f345; background:rgba(214,243,69,0.05); }
    .header-nav .sub-menu .sub-menu { left:100%; top:-12px; transform:translateX(8px); }
    .header-nav .menu-item-has-children > a::after { content:'▾'; display:inline-block; margin-left:6px; font-size:10px; color:#888; transition:transform 0.2s; }
    .header-nav .menu-item-has-children:hover > a::after { transform:rotate(180deg); }
    .header-nav ul { display:flex; align-items:center; gap:36px; margin:0; padding:0; list-style:none; }
    .header-nav ul .nav-cta a { background:#d6f345; color:#171619; padding:12px 28px; border-radius:100px; font-family:'Inter',sans-serif; font-weight:600; font-size:16px; }
    .header-nav ul .nav-cta a:hover { background:#c8e03a; color:#171619; }

    /* ===== LEGAL PAGE CONTENT ===== */
    .legal-page {
      padding:160px 0 100px;
      background:#111111;
      min-height:100vh;
    }
    .legal-page .container {
      max-width:820px;
    }
    .legal-header {
      margin-bottom:60px;
      text-align:center;
    }
    .legal-header .section-badge {
      display:inline-block;
      background:rgba(214,243,69,0.12);
      color:#d6f345;
      font-size:13px;
      font-weight:600;
      padding:6px 18px;
      border-radius:100px;
      margin-bottom:20px;
      text-transform:uppercase;
      letter-spacing:0.5px;
    }
    .legal-header h1 {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(36px,5vw,56px);
      font-weight:700;
      color:#ffffff;
      line-height:1.15;
      margin-bottom:16px;
    }
    .legal-header .last-updated {
      font-size:15px;
      color:#777;
    }
    .legal-content h2 {
      font-family:'Space Grotesk',sans-serif;
      font-size:26px;
      font-weight:700;
      color:#ffffff;
      margin-top:48px;
      margin-bottom:16px;
      line-height:1.3;
    }
    .legal-content h3 {
      font-family:'Space Grotesk',sans-serif;
      font-size:20px;
      font-weight:600;
      color:#ffffff;
      margin-top:32px;
      margin-bottom:12px;
      line-height:1.4;
    }
    .legal-content p {
      font-size:17px;
      color:#b5b5b5;
      line-height:1.8;
      margin-bottom:18px;
    }
    .legal-content ul {
      list-style:disc;
      padding-left:24px;
      margin-bottom:18px;
    }
    .legal-content ul li {
      font-size:17px;
      color:#b5b5b5;
      line-height:1.8;
      margin-bottom:8px;
    }
    .legal-content a {
      color:#d6f345;
      text-decoration:underline;
      text-underline-offset:3px;
    }
    .legal-content a:hover {
      color:#c8e03a;
    }
    .legal-content .highlight-box {
      background:#1a1a1a;
      border:1px solid rgba(214,243,69,0.15);
      border-radius:16px;
      padding:28px 32px;
      margin:32px 0;
    }
    .legal-content .highlight-box p {
      margin-bottom:0;
      font-size:16px;
    }

    /* ===== FOOTER ===== */
    .footer { background:#000000; padding:80px 0 30px; }
    .footer-top { text-align:center; margin-bottom:60px; }
    .footer-cta-btn { display:inline-block; background:#d6f345; color:#171619; padding:14px 36px; border-radius:100px; font-family:'Inter',sans-serif; font-size:16px; font-weight:600; transition:background 0.3s; cursor:pointer; border:none; text-decoration:none; }
    .footer-cta-btn:hover { background:#c8e03a; }
    .footer-top h2 { font-family:'Space Grotesk',sans-serif; font-size:clamp(36px,5vw,60px); font-weight:700; color:#ffffff; margin-bottom:24px; }
    .footer-grid { display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:40px; padding-bottom:50px; border-bottom:1px solid rgba(255,255,255,0.06); margin-bottom:30px; }
    .footer-col h4 { font-family:'Space Grotesk',sans-serif; font-size:20px; font-weight:700; color:#fff; margin-bottom:20px; }
    .footer-col p { font-size:15px; color:#b5b5b5; line-height:1.7; max-width:320px; }
    .footer-col ul li { margin-bottom:12px; }
    .footer-col ul li a { font-size:15px; color:#b5b5b5; transition:color 0.3s; }
    .footer-col ul li a:hover { color:#d6f345; }
    .footer-bottom { text-align:center; font-size:15px; color:#666; }

    @media(max-width:991px) {
      .header-nav ul { display:none; flex-direction:column; position:fixed; top:75px; left:0; right:0; background:#1a1a1a; padding:24px; gap:0; border-bottom:1px solid rgba(255,255,255,0.06); z-index:999; }
      .header-nav ul.open { display:flex; }
      .header-nav ul .nav-item > a { display:block; padding:14px 0; border-bottom:1px solid rgba(255,255,255,0.04); }
      .header-nav .sub-menu { position:static; opacity:1; visibility:visible; transform:none; pointer-events:auto; box-shadow:none; background:transparent; border:none; padding-left:20px; display:none; }
      .header-nav .menu-item-has-children.open > .sub-menu { display:block; }
      .header-nav .sub-menu .nav-item > a { padding:10px 0; }
      .hamburger { display:flex; }
      .footer-grid { grid-template-columns:1fr 1fr; }
    }
    @media(min-width:992px) { .hamburger { display:none; } .header-nav ul { display:flex; } }
    @media(max-width:767px) {
      .legal-page { padding:130px 0 60px; }
      .legal-content h2 { font-size:22px; }
      .footer-grid { grid-template-columns:1fr; }
    }
  </style>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
    <div class="container header-inner">
      <a href="<?php echo home_url('/'); ?>" class="header-logo">LeadZap.io</a>
      <nav class="header-nav">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => false,
            'fallback_cb' => false,
            'depth' => 3,
            'walker' => new Nimo_Walker_Nav_Menu(),
            'items_wrap' => '<ul>%3$s<li class="nav-cta"><a href="'.'/contact-us/'.'">Contact Us</a></li></ul>',
          ]);
        ?>
      </nav>
      <div class="hamburger"><span></span><span></span><span></span></div>
    </div>
  </header>

  <section class="legal-page">
    <div class="container">
      <div class="legal-header">
        <span class="section-badge">Legal</span>
        <h1>Privacy Policy</h1>
        <p class="last-updated">Last updated: June 18, 2026</p>
      </div>

      <div class="legal-content">

        <div class="highlight-box">
          <p><strong>LeadZap</strong> ("LeadZap," "we," "us," or "our") operates the website <a href="https://leadzap.io">leadzap.io</a> and provides digital marketing and lead generation services to home service contractors. This Privacy Policy explains how we collect, use, disclose, and safeguard your information. By accessing or using our website and services, you agree to the terms described in this policy.</p>
        </div>

        <h2>1. Information We Collect</h2>

        <h3>1.1 Information You Provide Directly</h3>
        <p>We collect information you voluntarily provide when you:</p>
        <ul>
          <li><strong>Fill out forms on our website</strong> -- including contact forms, quote request forms, consultation booking forms, and newsletter sign-ups. This may include your name, business name, email address, phone number, company details, website URL, and service interests.</li>
          <li><strong>Communicate with us</strong> -- via email, phone, SMS, or chat. We may retain records of those communications.</li>
          <li><strong>Create an account</strong> -- if you register for a client portal or service dashboard, we collect login credentials, billing information, and account preferences.</li>
          <li><strong>Engage our services</strong> -- when you become a client, we collect information necessary to deliver our services, including business data, target markets, service areas, and campaign objectives.</li>
        </ul>

        <h3>1.2 Information Collected Automatically</h3>
        <p>When you visit our website, we automatically collect certain information, including:</p>
        <ul>
          <li><strong>Log Data</strong> -- IP address, browser type, browser version, operating system, referring URLs, pages viewed, time and date of visit, time spent on pages, and other diagnostic data.</li>
          <li><strong>Device Information</strong> -- device type, screen resolution, and unique device identifiers.</li>
          <li><strong>Usage Data</strong> -- how you interact with our website, including clicks, scroll depth, and navigation patterns.</li>
          <li><strong>Geolocation Data</strong> -- approximate location derived from your IP address.</li>
        </ul>

        <h3>1.3 Information from Third Parties</h3>
        <p>We may receive information about you from third-party sources, including:</p>
        <ul>
          <li><strong>Google Analytics</strong> -- website usage statistics and demographic data.</li>
          <li><strong>Advertising platforms</strong> -- conversion data from Google Ads, Meta Ads, and LinkedIn Ads.</li>
          <li><strong>Lead generation partners</strong> -- referral partner data when you are referred to us.</li>
          <li><strong>Public data sources</strong> -- publicly available business information used in our lead generation services.</li>
        </ul>

        <h2>2. How We Use Your Information</h2>
        <p>We use the information we collect for the following purposes:</p>
        <ul>
          <li><strong>Service Delivery</strong> -- to provide, maintain, and improve our digital marketing and lead generation services.</li>
          <li><strong>Communication</strong> -- to respond to your inquiries, send service-related communications, provide customer support, and send marketing materials you have opted into.</li>
          <li><strong>Personalization</strong> -- to tailor our website content, service recommendations, and marketing messages to your interests and business needs.</li>
          <li><strong>Analytics and Improvement</strong> -- to analyze website usage, measure campaign performance, conduct market research, and improve our services.</li>
          <li><strong>Marketing and Advertising</strong> -- to deliver targeted advertising about our services that may be of interest to you, including retargeting campaigns.</li>
          <li><strong>Legal Compliance</strong> -- to comply with applicable laws, regulations, legal processes, or enforceable governmental requests.</li>
          <li><strong>Security</strong> -- to detect, prevent, and address fraud, unauthorized access, and other illegal activities.</li>
        </ul>

        <h2>3. Cookies and Tracking Technologies</h2>
        <p>We use cookies and similar tracking technologies to enhance your browsing experience and collect usage data. Cookies are small text files stored on your device by your web browser.</p>

        <h3>3.1 Types of Cookies We Use</h3>
        <ul>
          <li><strong>Essential Cookies</strong> -- necessary for the website to function properly. These enable basic functions like page navigation and access to secure areas.</li>
          <li><strong>Analytics Cookies</strong> -- help us understand how visitors interact with our website by collecting and reporting information anonymously (e.g., Google Analytics).</li>
          <li><strong>Marketing Cookies</strong> -- track visitors across websites to display relevant advertisements (e.g., Google Ads, Meta Pixel, LinkedIn Insight Tag).</li>
          <li><strong>Functional Cookies</strong> -- remember your preferences and choices to provide enhanced functionality (e.g., language preferences, form pre-fill).</li>
        </ul>

        <h3>3.2 Your Cookie Choices</h3>
        <p>Most web browsers allow you to control cookies through their settings. You can typically:</p>
        <ul>
          <li>View and delete cookies stored on your device.</li>
          <li>Block all cookies or third-party cookies.</li>
          <li>Clear cookies when you close your browser.</li>
          <li>Set "Do Not Track" preferences.</li>
        </ul>
        <p>Please note that disabling cookies may affect the functionality of our website and limit your ability to use certain features.</p>

        <h2>4. How We Share Your Information</h2>
        <p>We do not sell your personal information. We may share your information in the following circumstances:</p>
        <ul>
          <li><strong>Service Providers</strong> -- we engage trusted third-party companies to perform functions on our behalf, including hosting (cloud providers), analytics, email delivery, SMS services, payment processing, CRM systems, and customer support platforms. These providers have access only to the information necessary to perform their functions and are contractually obligated to maintain its confidentiality.</li>
          <li><strong>Advertising Partners</strong> -- we share anonymized or pseudonymized data with advertising networks (such as Google Ads and Meta) for campaign delivery and measurement.</li>
          <li><strong>Business Transfers</strong> -- in the event of a merger, acquisition, restructuring, or sale of all or a portion of our assets, your information may be transferred as part of that transaction.</li>
          <li><strong>Legal Requirements</strong> -- we may disclose information if required to do so by law, court order, or governmental regulation, or if we believe in good faith that such disclosure is necessary to protect our rights, your safety, or the safety of others.</li>
          <li><strong>With Your Consent</strong> -- we may share your information for any other purpose with your explicit consent.</li>
        </ul>

        <h2>5. Data Retention</h2>
        <p>We retain your personal information only for as long as necessary to fulfill the purposes for which it was collected, including to satisfy any legal, accounting, or reporting requirements. The criteria used to determine retention periods include:</p>
        <ul>
          <li>The duration of our business relationship with you.</li>
          <li>Legal and regulatory obligations that require us to retain certain records.</li>
          <li>The nature and sensitivity of the information.</li>
          <li>The potential risk of harm from unauthorized use or disclosure.</li>
        </ul>
        <p>When information is no longer needed, we securely delete or anonymize it.</p>

        <h2>6. Data Security</h2>
        <p>We implement appropriate technical and organizational measures to protect your personal information against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, or access. These measures include:</p>
        <ul>
          <li>Encryption of data in transit (TLS/SSL) and at rest.</li>
          <li>Regular security assessments and vulnerability scanning.</li>
          <li>Access controls and authentication mechanisms.</li>
          <li>Employee training on data protection and security practices.</li>
          <li>Regular backups and disaster recovery procedures.</li>
        </ul>
        <p>However, no method of electronic storage or transmission over the internet is 100% secure. While we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.</p>

        <h2>7. Your Rights and Choices</h2>
        <p>Depending on your jurisdiction, you may have the following rights regarding your personal information:</p>

        <h3>7.1 Access and Portability</h3>
        <p>You have the right to request access to the personal information we hold about you and to receive it in a structured, commonly used, and machine-readable format.</p>

        <h3>7.2 Correction</h3>
        <p>You have the right to request that we correct any inaccurate or incomplete personal information we hold about you.</p>

        <h3>7.3 Deletion</h3>
        <p>You have the right to request that we delete your personal information, subject to certain exceptions (such as legal retention obligations).</p>

        <h3>7.4 Marketing Opt-Out</h3>
        <p>You can opt out of marketing communications at any time by clicking the "unsubscribe" link in our emails, replying STOP to our SMS messages, or contacting us directly. Even after opting out, you may still receive transactional or service-related communications.</p>

        <h3>7.5 Do Not Track</h3>
        <p>Our website does not currently respond to browser "Do Not Track" signals. However, you can control tracking through your browser settings and the cookie controls described above.</p>

        <h3>7.6 California Residents (CCPA/CPRA)</h3>
        <p>If you are a California resident, you have additional rights under the California Consumer Privacy Act (CCPA) and the California Privacy Rights Act (CPRA), including the right to know what personal information we collect and share, the right to delete your information, and the right to opt out of the sale or sharing of your personal information. To exercise these rights, please contact us using the details below. We will not discriminate against you for exercising your CCPA/CPRA rights.</p>

        <h3>7.7 European Users (GDPR)</h3>
        <p>If you are located in the European Economic Area (EEA), the United Kingdom, or Switzerland, you have additional rights under the General Data Protection Regulation (GDPR), including the right to access, rectify, erase, restrict processing, object to processing, and data portability. Our legal basis for processing your personal information includes: consent, contractual necessity, legitimate interests, and compliance with legal obligations. You have the right to lodge a complaint with your local supervisory authority.</p>

        <h3>7.8 Exercising Your Rights</h3>
        <p>To exercise any of these rights, please contact us at <a href="mailto:privacy@leadzap.io">privacy@leadzap.io</a>. We will respond to your request within the timeframe required by applicable law. We may need to verify your identity before processing your request.</p>

        <h2>8. Children's Privacy</h2>
        <p>Our website and services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If we become aware that a child under 18 has provided us with personal information, we will take steps to delete such information. If you believe a child has provided us with personal information, please contact us immediately.</p>

        <h2>9. International Data Transfers</h2>
        <p>LeadZap is based in the United States, and our services are hosted on servers located in the United States. If you are accessing our website or services from outside the United States, your information may be transferred to, stored, and processed in the United States or other countries where our service providers operate. These jurisdictions may have data protection laws that differ from those in your country. By using our services, you consent to such transfers. We take appropriate safeguards to ensure your information remains protected in accordance with this Privacy Policy.</p>

        <h2>10. Third-Party Links and Services</h2>
        <p>Our website may contain links to third-party websites, plugins, and applications that are not operated by us. Clicking on those links may allow third parties to collect or share data about you. We do not control these third-party websites and are not responsible for their privacy practices. We encourage you to review the privacy policies of any third-party sites you visit.</p>

        <h2>11. Changes to This Privacy Policy</h2>
        <p>We may update this Privacy Policy from time to time to reflect changes in our practices, legal requirements, or operational needs. When we make changes, we will update the "Last updated" date at the top of this page and post the revised policy on our website. For material changes, we will provide additional notice, such as a prominent notification on our website or by email. We encourage you to review this Privacy Policy periodically to stay informed about how we protect your information.</p>

        <h2>12. Contact Us</h2>
        <p>If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us:</p>
        <ul>
          <li><strong>Email:</strong> <a href="mailto:privacy@leadzap.io">privacy@leadzap.io</a></li>
          <li><strong>Website:</strong> <a href="https://leadzap.io">leadzap.io</a></li>
          <li><strong>Contact Form:</strong> <a href="/contact-us/">leadzap.io/contact-us/</a></li>
        </ul>

      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <h2>Ready to make<br>your phone ring?</h2>
        <a href="<?php echo '/contact-us/'; ?>" class="footer-cta-btn">Claim Your Free Call</a>
      </div>
      <div class="footer-grid">
        <div class="footer-col">
          <h4>LeadZap</h4>
          <p>We help HVAC, plumbing, and electrical contractors get more leads through SEO, Google Ads, and conversion-focused websites. No fluff. Just results.</p>
        </div>
        <div class="footer-col">
          <h4>About</h4>
          <ul>
            <li><a href="<?php echo home_url('/#about'); ?>">About Us</a></li>
            <li><a href="<?php echo home_url('/#services'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('/#portfolio'); ?>">Portfolio</a></li>
            <li><a href="<?php echo home_url('/#team'); ?>">Our Team</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Features</h4>
          <ul>
            <li><a href="/case-studies/">Case Studies</a></li>
            <li><a href="/contact-us/">Careers</a></li>
            <li><a href="/#reviews">Testimonials</a></li>
            <li><a href="/contact-us/">Pricing</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="/privacy-policy/">Privacy Policy</a></li>
            <li><a href="/terms-of-service/">Terms of Service</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">&copy; <?php echo date('Y'); ?>. All rights reserved. LeadZap — Service Business Web Agency.</div>
    </div>
  </footer>

  <script>
    (function(){
      const hamburger = document.querySelector('.hamburger');
      const nav = document.querySelector('.header-nav ul');
      if(!hamburger || !nav) return;
      hamburger.addEventListener('click', function(){ nav.classList.toggle('open'); });
      if(window.innerWidth < 992){
        document.querySelectorAll('.header-nav .menu-item-has-children > a').forEach(function(link){
          link.addEventListener('click', function(e){
            if(window.innerWidth >= 992) return;
            e.preventDefault();
            this.parentElement.classList.toggle('open');
          });
        });
      }
      document.addEventListener('click', function(e){
        if(!e.target.closest('.header')) nav.classList.remove('open');
      });
    })();
  </script>
  <?php wp_footer(); ?>
</body>
</html>
