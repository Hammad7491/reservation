<section class="gt-hero">
  <style>
    :root {
      --gt-primary: #2563eb;   /* blue */
      --gt-secondary: #06b6d4; /* teal */
      --gt-dark: #111827;
      --gt-muted: #4b5563;
      --gt-soft: #f9fafb;
    }

    .gt-hero {
      position: relative;
      min-height: calc(100vh - 90px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 72px 18px 72px;
      color: var(--gt-dark);
      overflow: hidden;
      background-image:
        linear-gradient(to bottom, rgba(15, 23, 42, 0.12), rgba(249, 250, 251, 0.96)),
        url("https://images.pexels.com/photos/358220/pexels-photo-358220.jpeg?auto=compress&cs=tinysrgb&w=1920");
      background-size: cover;
      background-position: center;
    }

    .gt-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 10% 0, rgba(37, 99, 235, 0.28), transparent 55%),
                  radial-gradient(circle at 90% 90%, rgba(6, 182, 212, 0.3), transparent 55%);
      mix-blend-mode: soft-light;
      pointer-events: none;
    }

    .gt-hero-inner {
      position: relative;
      max-width: 1100px;
      margin: 0 auto;
      text-align: center;
      z-index: 1;
    }

    /* Top pill */
    .gt-hero-pill-top {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 26px;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.7);
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
      font-size: 0.82rem;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      color: var(--gt-muted);
      margin-bottom: 26px;
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.18);
    }

    .gt-hero-pill-top span {
      margin-left: 8px;
      font-weight: 600;
      color: var(--gt-primary);
    }

    /* Headings */
    .gt-hero-title {
      font-size: clamp(2.2rem, 4vw, 3.4rem);
      line-height: 1.1;
      font-weight: 800;
      letter-spacing: -0.03em;
      margin-bottom: 18px;
    }

    .gt-hero-title span {
      color: var(--gt-primary);
    }

    .gt-hero-subtitle-main {
      font-size: clamp(1.15rem, 2vw, 1.5rem);
      font-weight: 600;
      margin-bottom: 20px;
      text-decoration: underline;
      text-decoration-thickness: 2px;
      text-decoration-color: rgba(37, 99, 235, 0.65);
      text-underline-offset: 4px;
    }

    .gt-hero-body {
      max-width: 780px;
      margin: 0 auto 14px;
      font-size: 1rem;
      line-height: 1.6;
      color: var(--gt-muted);
    }

    .gt-hero-body-strong {
      font-weight: 600;
      color: var(--gt-dark);
      margin-bottom: 24px;
    }

    /* Status pills row */
    .gt-hero-status-row {
      display: flex;
      gap: 18px;
      justify-content: center;
      flex-wrap: wrap;
      margin: 18px auto 30px;
      max-width: 800px;
    }

    .gt-hero-status-pill {
      flex: 1 1 260px;
      max-width: 380px;
      padding: 12px 22px;
      border-radius: 999px;
      border: 1px solid rgba(249, 115, 22, 0.6);
      background: rgba(255, 247, 237, 0.96);
      color: #ea580c;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      box-shadow: 0 12px 28px rgba(248, 113, 22, 0.18);
    }

    .gt-hero-status-pill--blue {
      border-color: rgba(37, 99, 235, 0.7);
      background: rgba(219, 234, 254, 0.96);
      color: var(--gt-primary);
      box-shadow: 0 12px 28px rgba(37, 99, 235, 0.2);
    }

    .gt-hero-status-pill-icon {
      font-size: 1rem;
    }

    /* DOMESTIC / INTERNATIONAL link */
    .gt-hero-domestic-int {
      margin: 2px 0 26px;
      font-weight: 600;
      letter-spacing: 0.15em;
      font-size: 0.85rem;
      text-transform: uppercase;
      color: var(--gt-primary);
    }

    /* CTA row */
    .gt-hero-cta-row {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 26px;
      flex-wrap: wrap;
      margin-top: 8px;
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
        color 0.16s ease;
      white-space: nowrap;
    }

    .gt-hero-cta-primary {
      background: radial-gradient(circle at 0 0, #111827, #020617);
      color: #ffffff;
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.65);
    }

    .gt-hero-cta-primary span.gt-cta-icon {
      width: 26px;
      height: 26px;
      border-radius: 999px;
      background: #ffffff;
      color: #111827;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
    }

    .gt-hero-cta-primary:hover {
      transform: translateY(-1px);
      box-shadow: 0 22px 50px rgba(15, 23, 42, 0.8);
    }

    .gt-hero-cta-secondary {
      background: rgba(255, 255, 255, 0.96);
      color: var(--gt-primary);
      border: 1px solid rgba(37, 99, 235, 0.7);
      box-shadow: 0 14px 32px rgba(37, 99, 235, 0.28);
    }

    .gt-hero-cta-secondary::before {
      content: "📞";
      font-size: 1rem;
    }

    .gt-hero-cta-secondary:hover {
      background: linear-gradient(120deg, rgba(37, 99, 235, 0.06), rgba(6, 182, 212, 0.06));
      transform: translateY(-1px);
      box-shadow: 0 20px 46px rgba(37, 99, 235, 0.4);
    }

    /* Responsive tweaks */
    @media (max-width: 900px) {
      .gt-hero {
        padding-top: 80px;
        padding-bottom: 56px;
        background-position: 40% 0;
      }

      .gt-hero-status-row {
        gap: 12px;
      }

      .gt-hero-cta-row {
        gap: 18px;
      }
    }

    @media (max-width: 640px) {
      .gt-hero {
        min-height: 0;
        padding-top: 80px;
      }

      .gt-hero-bar {
        border-radius: 26px;
      }

      .gt-hero-cta-row {
        flex-direction: column;
      }

      .gt-hero-cta-primary,
      .gt-hero-cta-secondary {
        width: 100%;
        max-width: 320px;
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
      <span>with Global Tours</span>
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

    <!-- CTAs -->
    <div class="gt-hero-cta-row">
      <a href="#book-flight" class="gt-hero-cta-primary">
        Book Your Flight
        <span class="gt-cta-icon">➜</span>
      </a>

      <a href="tel:+18339011182" class="gt-hero-cta-secondary">
        CALL (833) 901-1182
      </a>
    </div>
  </div>
</section>
