<section class="gt-hero" id="home">
  <style>
    :root {
      --gt-primary: #2563eb;   /* blue */
      --gt-secondary: #06b6d4; /* teal */
      --gt-light: #e5e7eb;
      --gt-white: #f9fafb;
      --gt-dark: #020617;
    }

    .gt-hero {
      position: relative;
      min-height: calc(100vh - 90px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 96px 16px 80px;
      color: var(--gt-white);
      overflow: hidden;

      /* Strong dark overlay for perfect readability */
      background-image:
        linear-gradient(115deg, rgba(2, 6, 23, 0.90), rgba(15, 23, 42, 0.82)),
        url("https://images.pexels.com/photos/358220/pexels-photo-358220.jpeg?auto=compress&cs=tinysrgb&w=1920");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .gt-hero-inner {
      position: relative;
      max-width: 1100px;
      margin: 0 auto;
      text-align: center;
      padding: 28px 20px 32px;
    }

    /* Top pill */
    .gt-hero-pill-top {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 26px;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.7);
      background: rgba(15, 23, 42, 0.7);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      font-size: 0.78rem;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      color: var(--gt-light);
      margin-bottom: 22px;
    }

    .gt-hero-pill-top span {
      margin-left: 6px;
      font-weight: 600;
      color: #bfdbfe;
    }

    /* Headings */
    .gt-hero-title {
      font-size: clamp(2.4rem, 4.3vw, 3.6rem);
      line-height: 1.1;
      font-weight: 800;
      letter-spacing: -0.03em;
      margin-bottom: 16px;
      color: var(--gt-white);
    }

    .gt-hero-title span {
      background: linear-gradient(120deg, #60a5fa, #22d3ee);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .gt-hero-subtitle-main {
      font-size: clamp(1.1rem, 2vw, 1.4rem);
      font-weight: 500;
      margin-bottom: 16px;
      color: #e5e7eb;
      text-decoration: underline;
      text-underline-offset: 5px;
      text-decoration-thickness: 2px;
      text-decoration-color: rgba(96, 165, 250, 0.75);
    }

    /* Body text */
    .gt-hero-body {
      max-width: 760px;
      margin: 0 auto;
      font-size: 0.98rem;
      line-height: 1.7;
      color: #cbd5f5;
      margin-bottom: 10px;
    }

    .gt-hero-body-strong {
      font-weight: 600;
      color: #e5e7eb;
      margin-bottom: 22px;
    }

    /* Status pills row */
    .gt-hero-status-row {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
      margin: 18px auto 26px;
      max-width: 820px;
    }

    .gt-hero-status-pill {
      flex: 1 1 260px;
      max-width: 380px;
      padding: 11px 22px;
      border-radius: 999px;
      border: 1px solid rgba(248, 171, 94, 0.8);
      background: radial-gradient(circle at 0 0, rgba(248, 171, 94, 0.35), rgba(15, 23, 42, 0.96));
      color: #fed7aa;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
      box-shadow: 0 14px 36px rgba(0, 0, 0, 0.55);
    }

    .gt-hero-status-pill--blue {
      border-color: rgba(59, 130, 246, 0.9);
      background: radial-gradient(circle at 0 0, rgba(59, 130, 246, 0.4), rgba(15, 23, 42, 0.96));
      color: #dbeafe;
    }

    .gt-hero-status-pill-icon {
      font-size: 1rem;
    }

    /* Domestic / International */
    .gt-hero-domestic-int {
      margin-bottom: 24px;
      font-weight: 600;
      letter-spacing: 0.22em;
      font-size: 0.82rem;
      text-transform: uppercase;
      color: #bfdbfe;
    }

    /* CTA buttons */
    .gt-hero-cta-row {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 22px;
      flex-wrap: wrap;
      margin-top: 6px;
    }

    .gt-hero-cta-primary,
    .gt-hero-cta-secondary {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      border-radius: 999px;
      padding: 13px 34px;
      font-size: 0.98rem;
      font-weight: 600;
      cursor: pointer;
      border: none;
      text-decoration: none;
      transition: transform 0.16s ease, box-shadow 0.16s ease, background 0.16s ease,
        color 0.16s ease, border-color 0.16s ease;
      white-space: nowrap;
    }

    .gt-hero-cta-primary {
      background: radial-gradient(circle at 0 0, #111827, #020617);
      color: #f9fafb;
      box-shadow: 0 22px 60px rgba(0, 0, 0, 0.85);
    }

    .gt-hero-cta-primary span.gt-cta-icon {
      width: 26px;
      height: 26px;
      border-radius: 999px;
      background: #f9fafb;
      color: #020617;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
    }

    .gt-hero-cta-primary:hover {
      transform: translateY(-1px);
      box-shadow: 0 26px 70px rgba(0, 0, 0, 0.95);
    }

    .gt-hero-cta-secondary {
      background: transparent;
      color: #e0edff;
      border: 1px solid rgba(191, 219, 254, 0.9);
      box-shadow: 0 18px 50px rgba(15, 23, 42, 0.7);
    }

    .gt-hero-cta-secondary::before {
      content: "📞";
      font-size: 1rem;
    }

    .gt-hero-cta-secondary:hover {
      background: linear-gradient(120deg, rgba(37, 99, 235, 0.35), rgba(59, 130, 246, 0.35));
      color: #ffffff;
      border-color: transparent;
      transform: translateY(-1px);
    }

    /* Responsive */
    @media (max-width: 960px) {
      .gt-hero {
        padding-top: 88px;
        padding-bottom: 64px;
        background-attachment: scroll;
      }

      .gt-hero-inner {
        padding-inline: 10px;
      }
    }

    @media (max-width: 640px) {
      .gt-hero {
        min-height: 0;
        padding-top: 80px;
        padding-bottom: 56px;
      }

      .gt-hero-cta-row {
        flex-direction: column;
        gap: 14px;
      }

      .gt-hero-cta-primary,
      .gt-hero-cta-secondary {
        width: 100%;
        max-width: 320px;
      }

      .gt-hero-status-row {
        gap: 12px;
      }

      .gt-hero-status-pill {
        flex-basis: 100%;
      }
    }
  </style>

  <div class="gt-hero-inner">
    <!-- Top pill -->
    <div class="gt-hero-pill-top">
      PREMIUM FLIGHT BOOKING SERVICE
      <span>WITH GLOBAL TOURS</span>
    </div>

    <!-- Headings -->
    <h1 class="gt-hero-title">
      From Flight Search to Boarding — <span>We Handle It All</span>
    </h1>
    <p class="gt-hero-subtitle-main">
      Book with a team that treats every journey like it’s their own.
    </p>

    <!-- Descriptions -->
    <p class="gt-hero-body">
      Lock in great fares, manage changes, and secure last-minute seats without the stress.
      Our specialists compare routes and airlines to find the option that fits your time and budget.
    </p>
    <p class="gt-hero-body-strong">
      Reserve your next trip with Global Tours today and enjoy worry-free travel support.
    </p>

    <!-- Status pills -->
    <div class="gt-hero-status-row">
      <div class="gt-hero-status-pill">
        <span class="gt-hero-status-pill-icon">🕒</span>
        <span>We are open and ready to help 24/7!</span>
      </div>
      <div class="gt-hero-status-pill gt-hero-status-pill--blue">
        <span class="gt-hero-status-pill-icon">✈️</span>
        <span>All major airlines available</span>
      </div>
    </div>

    <!-- Domestic / International -->
    <div class="gt-hero-domestic-int">
      DOMESTIC &amp; INTERNATIONAL
    </div>

    <!-- CTA buttons -->
    <div class="gt-hero-cta-row">
      <a href="tel:+18883609712" class="gt-hero-cta-primary">
        Book Your Flight
        <span class="gt-cta-icon">➜</span>
      </a>

              <a href="tel:+18883609712" class="gt-phone-btn">
          <span>(888) 360-9712</span>
        </a>

    </div>
  </div>
</section>
