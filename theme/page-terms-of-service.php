<?php
/**
 * Template Name: Terms of Service
 * Description: LeadZap Terms of Service page matching Nimo dark theme
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?> LeadZap &mdash; Terms of Service</title>
  <meta name="description" content="LeadZap Terms of Service &mdash; The rules and guidelines for using our digital marketing and lead generation services.">
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
        <h1>Terms of Service</h1>
        <p class="last-updated">Last updated: June 18, 2026</p>
      </div>

      <div class="legal-content">

        <div class="highlight-box">
          <p>These Terms of Service ("Terms") govern your access to and use of the <strong>leadzap.io</strong> website (the "Website") and the digital marketing and lead generation services (collectively, the "Services") provided by <strong>LeadZap</strong> ("LeadZap," "we," "us," or "our"). By accessing our Website or engaging our Services, you agree to be bound by these Terms. If you do not agree to these Terms, you may not access or use our Services.</p>
        </div>

        <h2>1. Definitions</h2>
        <p>For the purposes of these Terms:</p>
        <ul>
          <li><strong>"Client," "You," "Your"</strong> -- refers to the individual or business entity that accesses or uses our Services.</li>
          <li><strong>"Services"</strong> -- refers to all digital marketing, lead generation, website design, SEO, Google Ads management, social media marketing, reputation management, email and SMS campaigns, branding, B2B commercial lead generation, and any other services offered by LeadZap.</li>
          <li><strong>"Content"</strong> -- refers to text, images, graphics, code, data, and any other materials created, uploaded, or provided through our Services.</li>
          <li><strong>"Agreement"</strong> -- refers to these Terms of Service together with any applicable Service Agreement, Statement of Work (SOW), or proposal accepted by both parties.</li>
        </ul>

        <h2>2. Acceptance of Terms</h2>
        <p>By accessing our Website, submitting a contact form, requesting a quote, or entering into a Service Agreement with LeadZap, you acknowledge that you have read, understood, and agree to be bound by these Terms. You represent that you are at least 18 years of age and have the legal authority to enter into this Agreement on behalf of yourself or the business entity you represent.</p>

        <h2>3. Services</h2>

        <h3>3.1 Service Description</h3>
        <p>LeadZap provides digital marketing and lead generation services to HVAC, plumbing, electrical, roofing, landscaping, and other home service contractors. Our Services include, but are not limited to:</p>
        <ul>
          <li>Search Engine Optimization (SEO)</li>
          <li>Google Ads management and pay-per-click (PPC) advertising</li>
          <li>Lead generation, including Google Maps scraping and permit tracking</li>
          <li>Website design, development, and optimization</li>
          <li>Social media marketing and management</li>
          <li>Online reputation management</li>
          <li>Email and SMS marketing campaigns</li>
          <li>Branding and creative services</li>
          <li>B2B commercial lead generation</li>
        </ul>

        <h3>3.2 Service Agreements</h3>
        <p>Specific Services, deliverables, timelines, fees, and terms will be outlined in a separate Service Agreement, Statement of Work, or proposal (collectively, "Service Agreement") executed between LeadZap and the Client. In the event of any conflict between these Terms and a Service Agreement, the Service Agreement shall prevail with respect to the specific Services covered therein.</p>

        <h3>3.3 Modifications to Services</h3>
        <p>We reserve the right to modify, suspend, or discontinue any aspect of our Services at any time, with or without notice. We shall not be liable to you or any third party for any modification, suspension, or discontinuation of Services.</p>

        <h2>4. Client Obligations and Responsibilities</h2>
        <p>As a Client, you agree to:</p>
        <ul>
          <li>Provide accurate, complete, and current information about your business, including contact details, service areas, target customers, and any other information reasonably required for us to perform the Services.</li>
          <li>Respond to our requests for feedback, approvals, or information in a timely manner. Delays in communication may affect project timelines and results.</li>
          <li>Grant LeadZap the necessary access to your website, hosting accounts, DNS settings, Google Business Profile, Google Ads, Google Analytics, social media accounts, and any other third-party platforms as needed to perform the Services.</li>
          <li>Ensure you have the rights and permissions for any Content you provide to us, including logos, images, text, and brand assets.</li>
          <li>Comply with all applicable laws, regulations, and industry standards in your business operations and marketing practices.</li>
          <li>Not use our Services to engage in or promote any illegal, fraudulent, or deceptive activities, including but not limited to spam, phishing, false advertising, or unfair business practices.</li>
        </ul>

        <h2>5. Payment Terms</h2>

        <h3>5.1 Fees</h3>
        <p>Fees for our Services will be set forth in the applicable Service Agreement. All fees are quoted in United States Dollars (USD) unless otherwise specified. Fees are exclusive of applicable taxes, which shall be added to invoices where required by law.</p>

        <h3>5.2 Payment Schedule</h3>
        <p>Payment terms (including due dates, recurring billing cycles, and accepted payment methods) will be specified in the Service Agreement. Unless otherwise agreed in writing, invoices are due upon receipt. Late payments may incur interest at the rate of 1.5% per month or the maximum rate permitted by law, whichever is lower.</p>

        <h3>5.3 Non-Payment</h3>
        <p>If payment is not received by the due date, we reserve the right to suspend or terminate Services until all outstanding amounts are paid in full. You shall remain responsible for all fees incurred during the term of the Agreement, including fees for Services rendered prior to termination.</p>

        <h3>5.4 Refunds</h3>
        <p>Unless otherwise specified in the Service Agreement, all fees are non-refundable. Setup fees, strategy fees, and any one-time project fees are earned upon payment and are non-refundable. Requests for refunds on recurring services will be evaluated on a case-by-case basis at our sole discretion.</p>

        <h2>6. Intellectual Property</h2>

        <h3>6.1 Our Intellectual Property</h3>
        <p>All Content, materials, and deliverables created by LeadZap in the course of providing Services, including but not limited to website designs, code, graphics, copy, strategies, reports, tools, methodologies, and proprietary data (collectively, "Work Product"), shall remain the sole and exclusive property of LeadZap until all applicable fees have been paid in full. Upon full payment, we grant you a non-exclusive, non-transferable, perpetual license to use the Work Product for your business purposes.</p>

        <h3>6.2 Your Intellectual Property</h3>
        <p>You retain all rights to any Content, materials, logos, trademarks, and brand assets you provide to us ("Client Materials"). You grant LeadZap a limited, non-exclusive, royalty-free license to use, reproduce, and display Client Materials solely as necessary to perform the Services.</p>

        <h3>6.3 Third-Party Components</h3>
        <p>Our Work Product may incorporate third-party software, plugins, fonts, images, or other components that are subject to their own license terms. We will inform you of any material third-party components used, and you agree to comply with applicable third-party license terms.</p>

        <h2>7. Confidentiality</h2>
        <p>Each party ("Receiving Party") agrees to maintain in confidence all non-public, proprietary information disclosed by the other party ("Disclosing Party"), whether in written, oral, or electronic form ("Confidential Information"). Confidential Information includes, but is not limited to, business strategies, client lists, pricing information, technical data, trade secrets, and campaign performance data. The Receiving Party shall not disclose Confidential Information to any third party without the prior written consent of the Disclosing Party and shall use the same degree of care to protect Confidential Information as it uses to protect its own confidential information of a similar nature, but in no event less than reasonable care. These obligations shall survive termination of the Agreement for a period of two (2) years or as long as such information remains a trade secret under applicable law, whichever is longer.</p>

        <h2>8. Third-Party Services and Platforms</h2>
        <p>Our Services may involve the use of third-party platforms and services, including but not limited to Google Ads, Google Analytics, Google Business Profile, Meta (Facebook/Instagram), LinkedIn, email marketing platforms, SMS gateways, hosting providers, and domain registrars. We are not responsible for the availability, performance, or policies of these third-party platforms. Changes to third-party platform policies, algorithms, or services may affect our ability to deliver results, and LeadZap shall not be liable for any such impacts.</p>

        <h2>9. Limitation of Liability</h2>
        <p>TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW:</p>
        <ul>
          <li>LEADZAP SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO LOSS OF PROFITS, LOSS OF REVENUE, LOSS OF DATA, LOSS OF BUSINESS OPPORTUNITIES, OR BUSINESS INTERRUPTION, WHETHER BASED ON WARRANTY, CONTRACT, TORT (INCLUDING NEGLIGENCE), STATUTE, OR ANY OTHER LEGAL THEORY, EVEN IF LEADZAP HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</li>
          <li>LEADZAP'S TOTAL AGGREGATE LIABILITY FOR ANY CLAIMS ARISING OUT OF OR RELATING TO THESE TERMS OR THE SERVICES SHALL NOT EXCEED THE TOTAL AMOUNT OF FEES PAID BY YOU TO LEADZAP DURING THE TWELVE (12) MONTH PERIOD IMMEDIATELY PRECEDING THE EVENT GIVING RISE TO THE CLAIM.</li>
          <li>LEADZAP MAKES NO GUARANTEES REGARDING SPECIFIC RESULTS, INCLUDING BUT NOT LIMITED TO LEAD VOLUME, LEAD QUALITY, CONVERSION RATES, REVENUE, SEARCH ENGINE RANKINGS, OR RETURN ON INVESTMENT. MARKETING OUTCOMES ARE INFLUENCED BY NUMEROUS FACTORS BEYOND OUR CONTROL, INCLUDING MARKET CONDITIONS, COMPETITION, CONSUMER BEHAVIOR, AND THIRD-PARTY PLATFORM ALGORITHMS.</li>
        </ul>

        <h2>10. Disclaimer of Warranties</h2>
        <p>THE WEBSITE AND SERVICES ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS, WITHOUT ANY WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED. TO THE FULLEST EXTENT PERMITTED BY LAW, LEADZAP DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT. LEADZAP DOES NOT WARRANT THAT THE WEBSITE OR SERVICES WILL BE UNINTERRUPTED, ERROR-FREE, SECURE, OR FREE FROM VIRUSES OR OTHER HARMFUL COMPONENTS, OR THAT ANY DEFECTS WILL BE CORRECTED.</p>

        <h2>11. Indemnification</h2>
        <p>You agree to indemnify, defend, and hold harmless LeadZap, its affiliates, officers, directors, employees, agents, and contractors from and against any and all claims, damages, losses, liabilities, costs, and expenses (including reasonable attorneys' fees) arising out of or relating to: (a) your use of the Website or Services; (b) your violation of these Terms or any applicable law; (c) any Content or Client Materials you provide; or (d) any claims by third parties relating to your business operations, products, or services.</p>

        <h2>12. Term and Termination</h2>

        <h3>12.1 Term</h3>
        <p>The term of this Agreement shall commence upon your first use of our Website or Services and shall continue until terminated as provided herein. For Clients with a Service Agreement, the term shall be as specified in that agreement.</p>

        <h3>12.2 Termination by Client</h3>
        <p>You may terminate a Service Agreement by providing written notice in accordance with the cancellation provisions set forth in the applicable Service Agreement. If no specific cancellation terms are provided, you may terminate by providing thirty (30) days' written notice to <a href="mailto:support@leadzap.io">support@leadzap.io</a>.</p>

        <h3>12.3 Termination by LeadZap</h3>
        <p>We reserve the right to terminate or suspend your access to the Website or Services, with or without cause and with or without notice, including but not limited to if: (a) you breach any provision of these Terms; (b) you fail to pay fees when due; (c) your conduct could harm our reputation or business interests; or (d) we discontinue the Services (in whole or in part).</p>

        <h3>12.4 Effect of Termination</h3>
        <p>Upon termination: (a) all rights granted to you under these Terms shall immediately cease; (b) you shall pay all outstanding fees for Services rendered through the date of termination; (c) we may delete or archive your data in accordance with our data retention policies; and (d) provisions of these Terms that by their nature should survive termination shall survive, including but not limited to intellectual property, confidentiality, limitation of liability, indemnification, and governing law.</p>

        <h2>13. Website Use and Acceptable Use Policy</h2>
        <p>When using our Website, you agree not to:</p>
        <ul>
          <li>Use the Website in any way that violates any applicable federal, state, local, or international law or regulation.</li>
          <li>Engage in any conduct that restricts or inhibits anyone's use or enjoyment of the Website.</li>
          <li>Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of the Website, the server on which the Website is stored, or any server, computer, or database connected to the Website.</li>
          <li>Use any robot, spider, scraper, or other automated means to access the Website for any purpose without our express written permission, except for standard search engine indexing.</li>
          <li>Introduce any viruses, trojans, worms, logic bombs, or other material that is malicious or technologically harmful.</li>
          <li>Use the Website to transmit or procure the sending of any unsolicited or unauthorized advertising, promotional material, spam, or similar solicitation.</li>
        </ul>

        <h2>14. SMS and Email Communications</h2>
        <p>By providing your phone number and/or email address to LeadZap, you consent to receive communications from us, including marketing messages, service updates, and transactional notifications. For SMS communications, message and data rates may apply, and you may opt out at any time by replying STOP. For email communications, you may unsubscribe using the link provided in each email. We reserve the right to send essential service-related communications regardless of your marketing opt-out preferences.</p>

        <h2>15. Governing Law and Dispute Resolution</h2>

        <h3>15.1 Governing Law</h3>
        <p>These Terms shall be governed by and construed in accordance with the laws of the State of Delaware, United States, without regard to its conflict of law principles. You agree that any legal action or proceeding arising out of or relating to these Terms shall be brought exclusively in the federal or state courts located in Delaware, and you consent to the personal jurisdiction of such courts.</p>

        <h3>15.2 Dispute Resolution</h3>
        <p>Before initiating any formal legal action, you agree to first contact us at <a href="mailto:legal@leadzap.io">legal@leadzap.io</a> and attempt to resolve the dispute informally. If the dispute cannot be resolved within thirty (30) days, either party may pursue available legal remedies. You agree to resolve any disputes on an individual basis and waive any right to participate in a class action, class-wide arbitration, or any other representative proceeding.</p>

        <h2>16. Force Majeure</h2>
        <p>LeadZap shall not be liable for any failure or delay in performance of its obligations under these Terms resulting from causes beyond its reasonable control, including but not limited to acts of God, natural disasters, war, terrorism, civil unrest, government orders, labor disputes, internet or telecommunications outages, third-party platform failures, pandemics, or any other event not reasonably foreseeable and beyond the affected party's control.</p>

        <h2>17. Changes to These Terms</h2>
        <p>We reserve the right to modify or replace these Terms at any time at our sole discretion. We will provide notice of material changes by posting the updated Terms on our Website with a revised "Last updated" date and, where appropriate, via email notification or a prominent notice on the Website. Your continued use of the Website or Services after any such changes constitutes your acceptance of the new Terms. If you do not agree to the revised Terms, you must discontinue use of the Website and Services.</p>

        <h2>18. General Provisions</h2>

        <h3>18.1 Entire Agreement</h3>
        <p>These Terms, together with any applicable Service Agreement, constitute the entire agreement between you and LeadZap regarding the subject matter herein and supersede all prior and contemporaneous understandings, agreements, representations, and warranties, both written and oral.</p>

        <h3>18.2 Severability</h3>
        <p>If any provision of these Terms is held to be invalid, illegal, or unenforceable by a court of competent jurisdiction, such provision shall be modified to the minimum extent necessary to make it enforceable, or if modification is not possible, severed from these Terms. The remaining provisions shall continue in full force and effect.</p>

        <h3>18.3 Waiver</h3>
        <p>Our failure to enforce any right or provision of these Terms shall not constitute a waiver of such right or provision. No waiver of any term or condition shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition.</p>

        <h3>18.4 Assignment</h3>
        <p>You may not assign or transfer these Terms, or any rights or obligations hereunder, without our prior written consent. We may assign or transfer these Terms without restriction, including to our affiliates or in connection with a merger, acquisition, or sale of assets.</p>

        <h3>18.5 Relationship of the Parties</h3>
        <p>Nothing in these Terms shall be construed as creating a partnership, joint venture, agency, or employment relationship between you and LeadZap. Each party is an independent contractor.</p>

        <h3>18.6 Notices</h3>
        <p>All notices required or permitted under these Terms shall be in writing. Notices to LeadZap shall be sent to <a href="mailto:legal@leadzap.io">legal@leadzap.io</a>. Notices to you may be sent to the email address or physical address you provided when engaging our Services, or posted on our Website.</p>

        <h2>19. Contact Information</h2>
        <p>For questions, concerns, or notices regarding these Terms of Service, please contact us:</p>
        <ul>
          <li><strong>Email (Legal):</strong> <a href="mailto:legal@leadzap.io">legal@leadzap.io</a></li>
          <li><strong>Email (General):</strong> <a href="mailto:support@leadzap.io">support@leadzap.io</a></li>
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
