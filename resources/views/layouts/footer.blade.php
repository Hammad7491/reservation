<footer class="gt-footer">
  <style>
    :root {
      --gt-primary: #2563eb;
      --gt-secondary: #06b6d4;
      --gt-bg-dark: #020617;
      --gt-bg-darker: #020314;
      --gt-text-light: #e5e7eb;
      --gt-text-muted: #9ca3af;
      --gt-border-soft: rgba(148, 163, 184, 0.3);
    }

    .gt-footer {
      background: radial-gradient(circle at top left, #0b1120, #020617 55%, #020314);
      color: var(--gt-text-light);
      padding-top: 42px;
      border-top: 3px solid rgba(37, 99, 235, 0.5);
    }

    .gt-footer-inner {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 18px 30px;
    }

    /* TOP GLOW LINE */
    .gt-footer-glow {
      width: 110px;
      height: 3px;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--gt-primary), var(--gt-secondary));
      margin-bottom: 20px;
    }

    /* MAIN GRID */
    .gt-footer-main {
      display: grid;
      grid-template-columns: minmax(0, 1.3fr) minmax(0, 1fr) minmax(0, 1.2fr);
      gap: 34px;
      padding-bottom: 30px;
      border-bottom: 1px solid var(--gt-border-soft);
    }

    .gt-footer h4 {
      font-size: 1rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .gt-footer p {
      margin: 0;
    }

    /* BRAND BLOCK */
    .gt-footer-brand {
      max-width: 380px;
    }

    .gt-footer-logo-row {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 8px;
    }

    .gt-footer-logo {
      width: 40px;
      height: 40px;
      border-radius: 14px;
      background: radial-gradient(circle at 0 0, #38bdf8, #1d4ed8);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
    }

    .gt-footer-brand-name {
      font-weight: 800;
      letter-spacing: 0.08em;
      font-size: 0.9rem;
      text-transform: uppercase;
    }

    .gt-footer-tagline {
      font-size: 0.9rem;
      color: var(--gt-text-muted);
      margin-bottom: 12px;
    }

    /* LINKS */
    .gt-footer-links-list {
      list-style: none;
      padding: 0;
      margin: 6px 0 0;
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 4px 16px;
    }

    .gt-footer-links-list a {
      text-decoration: none;
      font-size: 0.92rem;
      color: var(--gt-text-muted);
      transition: color 0.15s ease;
    }

    .gt-footer-links-list a:hover {
      color: #bfdbfe;
    }

    /* CONTACT */
    .gt-footer-contact-text {
      font-size: 0.92rem;
      color: var(--gt-text-muted);
      margin-bottom: 10px;
    }

    .gt-footer-phone-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 10px 22px;
      border-radius: 999px;
      border: 1px solid rgba(59, 130, 246, 0.9);
      background: #0b1120;
      color: #e5e7eb;
      font-size: 0.95rem;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 18px 50px rgba(37, 99, 235, 0.45);
      transition: transform 0.16s ease, box-shadow 0.16s ease,
        background 0.16s ease, border-color 0.16s ease;
      margin-bottom: 10px;
      white-space: nowrap;
    }

    .gt-footer-phone-btn::before {
      content: "📞";
      font-size: 1rem;
    }

    .gt-footer-phone-btn:hover {
      background: linear-gradient(120deg, #1d4ed8, #0ea5e9);
      border-color: transparent;
      transform: translateY(-1px);
      box-shadow: 0 24px 60px rgba(37, 99, 235, 0.7);
    }

    .gt-footer-phone-note {
      font-size: 0.82rem;
      color: var(--gt-text-muted);
    }

    .gt-footer-address {
      margin-top: 10px;
      font-size: 0.9rem;
      color: var(--gt-text-muted);
      line-height: 1.5;
    }

    /* BOTTOM BAR */
    .gt-footer-bottom {
      padding-top: 16px;
      font-size: 0.82rem;
      color: var(--gt-text-muted);
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 10px;
      align-items: center;
    }

    .gt-footer-bottom-links {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
    }

    .gt-footer-bottom-links a {
      color: var(--gt-text-muted);
      text-decoration: none;
      transition: color 0.15s ease;
    }

    .gt-footer-bottom-links a:hover {
      color: #bfdbfe;
    }

    /* DISCLAIMER BLOCK */
    .gt-footer-disclaimer {
      background: var(--gt-bg-darker);
      border-top: 1px solid rgba(31, 41, 55, 0.9);
      padding: 18px 18px 26px;
      margin-top: 10px;
    }

    .gt-footer-disclaimer-inner {
      max-width: 1200px;
      margin: 0 auto;
      font-size: 0.78rem;
      line-height: 1.6;
      color: #9ca3af;
    }

    .gt-footer-disclaimer-inner p {
      margin-bottom: 6px;
    }

    /* RESPONSIVE */
    @media (max-width: 960px) {
      .gt-footer-main {
        grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
      }
    }

    @media (max-width: 720px) {
      .gt-footer-main {
        grid-template-columns: minmax(0, 1fr);
      }

      .gt-footer {
        padding-top: 32px;
      }

      .gt-footer-bottom {
        flex-direction: column;
        align-items: flex-start;
      }
    }

    @media (max-width: 480px) {
      .gt-footer-inner {
        padding-inline: 16px;
      }
    }
  </style>

  <div class="gt-footer-inner">
    <div class="gt-footer-glow"></div>

    <div class="gt-footer-main">
      <!-- Brand -->
      <div class="gt-footer-brand">
        <div class="gt-footer-logo-row">
          <div class="gt-footer-logo">✈️</div>
          <div>
            <div class="gt-footer-brand-name">GLOBEL TOURS</div>
          </div>
        </div>
        <p class="gt-footer-tagline">
          Phone-based flight assistance for domestic and international routes — our partner
          agents help you find the right option in just a few minutes.
        </p>
      </div>

      <!-- Quick Links -->
      <div>
        <h4>Quick Links</h4>
        <ul class="gt-footer-links-list">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About Us</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/routes">Routes</a></li>
          <li><a href="/terms">Terms &amp; Conditions</a></li>
          <li><a href="/privacy">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4>Contact &amp; Booking Help</h4>
        <p class="gt-footer-contact-text">
          Speak with a travel specialist to check fares, routes, or finalize your booking.
        </p>
        <a href="tel:+18883609712" class="gt-footer-phone-btn">
          CALL (888) 360-9712
        </a>
        <p class="gt-footer-phone-note">
          Available 24/7 for new bookings, changes, and general questions.
        </p>
        <p class="gt-footer-address">
          2853 S Sossaman RD<br>
          Mesa, AZ 85212
        </p>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="gt-footer-bottom">
      <div>
        Copyright © 2025 Globeltoursreservation.com – All Rights Reserved.
      </div>
      <div class="gt-footer-bottom-links">
        <a href="{{ route('terms') }}">Terms &amp; Conditions</a>
        <span>•</span>
        <a href="{{ route('privacy') }}">Privacy Policy</a>
      </div>
    </div>
  </div>

  <!-- Disclaimer (last) -->
  <div class="gt-footer-disclaimer">
    <div class="gt-footer-disclaimer-inner">
      <p>
        Disclaimer: Globeltoursreservation.com connects users with partner travel agents who
        assist with flight bookings and related services over the phone. We do not offer direct
        online booking. All bookings are subject to the terms and conditions of the respective
        service providers. While we strive for accuracy, availability and pricing may vary. By
        using this site, you agree to our Terms &amp; Conditions and Privacy Policy.
      </p>
      <p>Copyright © 2025 Globeltoursreservation.com – All Rights Reserved.</p>
      <p>2853 S Sossaman RD Mesa, AZ 85212</p>
    </div>
  </div>
</footer>
