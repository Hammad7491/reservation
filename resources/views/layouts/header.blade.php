<header class="gt-header">
  <style>
    :root {
      --gt-primary: #2563eb;   /* deep blue */
      --gt-secondary: #06b6d4; /* teal */
      --gt-dark: #0f172a;
      --gt-muted: #6b7280;
      --gt-bg: #eef3ff;
      --gt-border: rgba(148, 163, 184, 0.35);
    }

    /* === HEADER WRAPPER === */
    .gt-header {
      position: sticky;
      top: 0;
      z-index: 50;
      width: 100%;
      background: radial-gradient(circle at top left, #e0f2fe 0, #eef3ff 35%, #ffffff 80%);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(148, 163, 184, 0.25);
    }

    .gt-shell {
      max-width: 1200px;
      margin: 0 auto;
      padding: 10px 18px 14px;
    }

    .gt-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 18px;
      padding: 10px 18px;
      background: rgba(255, 255, 255, 0.86);
      border-radius: 999px;
      border: 1px solid var(--gt-border);
      box-shadow: 0 16px 40px rgba(15, 23, 42, 0.10);
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
    }

    /* === BRAND === */
    .gt-brand {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      white-space: nowrap;
    }

    .gt-logo {
      width: 40px;
      height: 40px;
      border-radius: 12px;
      overflow: hidden;
      background: radial-gradient(circle at top, #38bdf8, #2563eb);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .gt-logo img {
      width: 70%;
      height: 70%;
      object-fit: contain;
    }

    .gt-brand-text {
      display: flex;
      flex-direction: column;
      line-height: 1.1;
    }

    .gt-brand-main {
      font-size: 1.05rem;
      font-weight: 700;
      letter-spacing: 0.03em;
      background: linear-gradient(120deg, var(--gt-primary), var(--gt-secondary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .gt-brand-sub {
      font-size: 0.73rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      color: var(--gt-muted);
    }

    /* === NAVIGATION === */
    .gt-nav {
      display: flex;
      align-items: center;
      gap: 26px;
      margin-left: auto;
      font-size: 0.97rem;
    }

    .gt-nav-link {
      position: relative;
      text-decoration: none;
      color: var(--gt-muted);
      font-weight: 500;
      letter-spacing: 0.01em;
      padding-block: 4px;
      transition: color 0.18s ease;
      white-space: nowrap;
    }

    .gt-nav-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 0;
      height: 2px;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--gt-primary), var(--gt-secondary));
      transition: width 0.18s ease;
    }

    .gt-nav-link:hover {
      color: var(--gt-dark);
    }

    .gt-nav-link:hover::after,
    .gt-nav-link.gt-active::after {
      width: 100%;
    }

    .gt-nav-link.gt-active {
      color: var(--gt-primary);
    }

    /* === PHONE BUTTON === */
    .gt-phone-btn {
      text-decoration: none;
      border-radius: 999px;
      padding: 10px 26px;
      font-weight: 600;
      font-size: 0.96rem;
      background: linear-gradient(120deg, var(--gt-primary), var(--gt-secondary));
      color: #ffffff;
      box-shadow: 0 14px 30px rgba(37, 99, 235, 0.35);
      border: 1px solid rgba(15, 23, 42, 0.05);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      white-space: nowrap;
      transition: transform 0.15s ease, box-shadow 0.15s ease, filter 0.15s ease;
    }

    .gt-phone-btn span {
      font-size: 1.02rem;
    }

    .gt-phone-btn::before {
      content: "📞";
      font-size: 1rem;
    }

    .gt-phone-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 18px 40px rgba(37, 99, 235, 0.45);
      filter: brightness(1.05);
    }

    /* === MOBILE TOGGLE === */
    .gt-toggle {
      display: none;
      width: 40px;
      height: 40px;
      border-radius: 999px;
      border: 1px solid var(--gt-border);
      background: rgba(255, 255, 255, 0.94);
      display: none;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      padding: 0;
      margin-left: auto;
    }

    .gt-toggle-lines {
      width: 19px;
      height: 2px;
      background: var(--gt-dark);
      position: relative;
      transition: background 0.2s ease;
    }

    .gt-toggle-lines::before,
    .gt-toggle-lines::after {
      content: "";
      position: absolute;
      left: 0;
      width: 19px;
      height: 2px;
      background: var(--gt-dark);
      transition: transform 0.2s ease, top 0.2s ease, opacity 0.2s ease;
    }

    .gt-toggle-lines::before {
      top: -6px;
    }

    .gt-toggle-lines::after {
      top: 6px;
    }

    .gt-toggle.is-open .gt-toggle-lines {
      background: transparent;
    }

    .gt-toggle.is-open .gt-toggle-lines::before {
      top: 0;
      transform: rotate(45deg);
    }

    .gt-toggle.is-open .gt-toggle-lines::after {
      top: 0;
      transform: rotate(-45deg);
    }

    /* === RESPONSIVE === */
    @media (max-width: 960px) {
      .gt-bar {
        padding-inline: 14px;
      }

      .gt-toggle {
        display: inline-flex;
      }

      .gt-nav {
        position: absolute;
        left: 0;
        right: 0;
        top: calc(100% + 10px);
        margin: 0;
        padding: 12px 18px 16px;
        background: rgba(255, 255, 255, 0.98);
        border-bottom: 1px solid var(--gt-border);
        border-radius: 0 0 26px 26px;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.18);
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
        transform-origin: top;
        transform: scaleY(0.8);
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s ease, transform 0.2s ease;
      }

      .gt-nav.is-open {
        opacity: 1;
        pointer-events: auto;
        transform: scaleY(1);
      }

      .gt-phone-btn {
        width: 100%;
        justify-content: center;
        margin-top: 2px;
      }

      .gt-shell {
        padding-inline: 10px;
      }
    }

    @media (max-width: 520px) {
      .gt-bar {
        gap: 10px;
      }

      .gt-logo {
        width: 34px;
        height: 34px;
      }

      .gt-brand-main {
        font-size: 0.98rem;
      }

      .gt-brand-sub {
        display: none;
      }
    }
  </style>

  <div class="gt-shell">
    <div class="gt-bar">
      <!-- Brand -->
      <a href="/" class="gt-brand">
        <div class="gt-logo">
          <!-- Replace with your own logo -->
          <img src="global-logo.png" alt="Global Tours Logo">
        </div>
        <div class="gt-brand-text">
          <span class="gt-brand-main">Global Tours</span>
          <span class="gt-brand-sub">Premium Travel & Reservations</span>
        </div>
      </a>

      <!-- Mobile toggle -->
      <button class="gt-toggle" type="button" aria-label="Toggle navigation">
        <span class="gt-toggle-lines"></span>
      </button>

      <!-- Navigation -->
      <nav class="gt-nav">
        <a href="/" class="gt-nav-link gt-active">Home</a>
        <a href="/about" class="gt-nav-link">About Us</a>
        <a href="/services" class="gt-nav-link">Services</a>
        <a href="/routes" class="gt-nav-link">Routes</a>

        <a href="tel:+18339011182" class="gt-phone-btn">
          <span>(833) 901-1182</span>
        </a>
      </nav>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggle = document.querySelector(".gt-toggle");
      const nav = document.querySelector(".gt-nav");

      if (!toggle || !nav) return;

      toggle.addEventListener("click", function () {
        toggle.classList.toggle("is-open");
        nav.classList.toggle("is-open");
      });

      // Close nav when clicking a link on mobile
      nav.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function () {
          if (window.innerWidth <= 960) {
            toggle.classList.remove("is-open");
            nav.classList.remove("is-open");
          }
        });
      });
    });
  </script>
</header>
