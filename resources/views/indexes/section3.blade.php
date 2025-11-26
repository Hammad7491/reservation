<section class="gt-routes" id="routes">
  <style>
    :root {
      --gt-primary: #2563eb;
      --gt-secondary: #06b6d4;
      --gt-accent: #f97316;
      --gt-bg-soft: #f3f4f6;
      --gt-card: #ffffff;
      --gt-text-dark: #111827;
      --gt-text-muted: #6b7280;
      --gt-border: #e5e7eb;
    }

    .gt-routes {
      background: var(--gt-bg-soft);
      padding: 80px 18px 90px;
    }

    .gt-routes-inner {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* ===== HEADER ===== */
    .gt-routes-header {
      text-align: center;
      margin-bottom: 26px;
    }

    .gt-routes-title {
      font-size: clamp(2rem, 3vw, 2.5rem);
      font-weight: 800;
      color: var(--gt-text-dark);
      margin-bottom: 8px;
    }

    .gt-routes-underline {
      width: 90px;
      height: 3px;
      border-radius: 999px;
      margin: 0 auto 14px;
      background: linear-gradient(90deg, var(--gt-primary), var(--gt-secondary));
    }

    .gt-routes-subtitle {
      max-width: 600px;
      margin: 0 auto;
      font-size: 0.98rem;
      color: var(--gt-text-muted);
    }

    /* ===== PILLS ===== */
    .gt-routes-pills {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 14px;
      margin: 28px auto 30px;
      max-width: 800px;
    }

    .gt-routes-pill {
      padding: 10px 24px;
      border-radius: 999px;
      font-size: 0.9rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
      box-shadow: 0 16px 40px rgba(15, 23, 42, 0.07);
    }

    .gt-routes-pill--orange {
      border: 1px solid rgba(248, 171, 94, 0.9);
      background: radial-gradient(circle at 0 0, rgba(248, 171, 94, 0.22), #fff7ed);
      color: #b45309;
    }

    .gt-routes-pill--blue {
      border: 1px solid rgba(37, 99, 235, 0.9);
      background: radial-gradient(circle at 0 0, rgba(37, 99, 235, 0.18), #dbeafe);
      color: var(--gt-primary);
    }

    .gt-routes-pill-icon {
      font-size: 1rem;
    }

    /* ===== ROUTE GRID ===== */
    .gt-routes-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 22px;
    }

    .gt-route-card {
      background: var(--gt-card);
      border-radius: 26px;
      padding: 18px 20px 20px;
      border: 1px solid var(--gt-border);
      box-shadow: 0 20px 50px rgba(15, 23, 42, 0.06);
      display: flex;
      flex-direction: column;
      gap: 10px;
      position: relative;
      overflow: hidden;
      transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease;
    }

    .gt-route-card::before {
      content: "";
      position: absolute;
      inset-inline: 18px;
      top: 0;
      height: 3px;
      border-radius: 999px;
      background: linear-gradient(
        90deg,
        rgba(37, 99, 235, 0.9),
        rgba(6, 182, 212, 0.9)
      );
      opacity: 0;
      transform: translateY(-8px);
      transition: opacity 0.18s ease, transform 0.18s ease;
    }

    .gt-route-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 26px 70px rgba(15, 23, 42, 0.1);
      border-color: rgba(37, 99, 235, 0.35);
    }

    .gt-route-card:hover::before {
      opacity: 1;
      transform: translateY(6px);
    }

    .gt-route-top {
      display: grid;
      grid-template-columns: auto 1fr auto;
      align-items: center;
      gap: 10px;
    }

    .gt-route-country {
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--gt-text-muted);
    }

    .gt-route-main {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      text-align: center;
    }

    .gt-route-city {
      font-size: 0.96rem;
      font-weight: 700;
      color: var(--gt-text-dark);
      white-space: nowrap;
    }

    .gt-route-city span {
      font-weight: 500;
      color: var(--gt-text-muted);
    }

    .gt-route-arrow {
      font-size: 1.05rem;
      color: var(--gt-accent);
    }

    .gt-route-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-top: 4px;
      font-size: 0.78rem;
      color: var(--gt-text-muted);
    }

    .gt-route-tag-pill {
      padding: 4px 10px;
      border-radius: 999px;
      background: #eff6ff;
      color: #1d4ed8;
      font-weight: 500;
    }

    .gt-route-airlines {
      font-size: 0.86rem;
      color: var(--gt-text-muted);
      margin-top: 4px;
    }

    /* ===== PHONE CTA ===== */
    .gt-routes-call {
      margin-top: 40px;
      text-align: center;
    }

    .gt-routes-call-text {
      font-size: 0.95rem;
      color: var(--gt-text-muted);
      margin-bottom: 10px;
    }

    .gt-routes-call-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 14px;
    }

    .gt-routes-call-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 11px 26px;
      border-radius: 999px;
      font-size: 0.95rem;
      font-weight: 600;
      text-decoration: none;
      cursor: pointer;
      transition: transform 0.16s ease, box-shadow 0.16s ease,
        background 0.16s ease, color 0.16s ease, border-color 0.16s ease;
      white-space: nowrap;
    }

    .gt-routes-call-btn--primary {
      background: #ffffff;
      color: var(--gt-primary);
      border: 1px solid rgba(37, 99, 235, 0.9);
      box-shadow: 0 20px 50px rgba(37, 99, 235, 0.25);
    }

    .gt-routes-call-btn--secondary {
      background: #0f172a;
      color: #e5e7eb;
      border: 1px solid rgba(15, 23, 42, 0.8);
      box-shadow: 0 20px 60px rgba(15, 23, 42, 0.7);
    }

    .gt-routes-call-btn::before {
      content: "📞";
      font-size: 1rem;
    }

    .gt-routes-call-btn--primary:hover {
      background: linear-gradient(120deg, rgba(37, 99, 235, 0.06), rgba(6, 182, 212, 0.06));
      transform: translateY(-1px);
    }

    .gt-routes-call-btn--secondary:hover {
      background: linear-gradient(120deg, #0b1120, #020617);
      transform: translateY(-1px);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
      .gt-routes-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 768px) {
      .gt-routes {
        padding-top: 60px;
        padding-bottom: 70px;
      }

      .gt-routes-grid {
        grid-template-columns: minmax(0, 1fr);
      }

      .gt-route-card {
        padding-inline: 18px;
      }
    }

    @media (max-width: 480px) {
      .gt-routes-pills {
        gap: 10px;
      }

      .gt-routes-pill,
      .gt-routes-pill--blue {
        width: 100%;
        justify-content: center;
        white-space: normal;
        text-align: center;
      }

      .gt-routes-call-buttons {
        flex-direction: column;
      }

      .gt-routes-call-btn {
        width: 100%;
        max-width: 320px;
      }
    }
  </style>

  <div class="gt-routes-inner">
    <!-- Header -->
    <div class="gt-routes-header">
      <h2 class="gt-routes-title">Popular Flight Routes</h2>
      <div class="gt-routes-underline"></div>
      <p class="gt-routes-subtitle">
        Discover our most-traveled international routes with smart fares and trusted airlines.
      </p>
    </div>

    <!-- Pills -->
    <div class="gt-routes-pills">
      <div class="gt-routes-pill gt-routes-pill--orange">
        <span class="gt-routes-pill-icon">🕒</span>
        <span>We are open and ready to help 24/7!</span>
      </div>
      <div class="gt-routes-pill gt-routes-pill--blue">
        <span class="gt-routes-pill-icon">✈️</span>
        <span>All major airlines available</span>
      </div>
    </div>

    <!-- Routes grid -->
    <div class="gt-routes-grid">
      <!-- 1 -->
      <article class="gt-route-card">
        <div class="gt-route-top">
          <div class="gt-route-country">US</div>
          <div class="gt-route-main">
            <div class="gt-route-city">New York <span>(JFK)</span></div>
            <div class="gt-route-arrow">✈</div>
            <div class="gt-route-city">London <span>(LHR)</span></div>
          </div>
          <div class="gt-route-country">GB</div>
        </div>
        <div class="gt-route-tags">
          <span class="gt-route-tag-pill">Nonstop options</span>
        </div>
        <div class="gt-route-airlines">
          British Airways · American Airlines · Delta
        </div>
      </article>

      <!-- 2 -->
      <article class="gt-route-card">
        <div class="gt-route-top">
          <div class="gt-route-country">US</div>
          <div class="gt-route-main">
            <div class="gt-route-city">Los Angeles <span>(LAX)</span></div>
            <div class="gt-route-arrow">✈</div>
            <div class="gt-route-city">Tokyo <span>(NRT)</span></div>
          </div>
          <div class="gt-route-country">JP</div>
        </div>
        <div class="gt-route-tags">
          <span class="gt-route-tag-pill">Great for connections</span>
        </div>
        <div class="gt-route-airlines">
          ANA · Japan Airlines · United · American
        </div>
      </article>

      <!-- 3 -->
      <article class="gt-route-card">
        <div class="gt-route-top">
          <div class="gt-route-country">US</div>
          <div class="gt-route-main">
            <div class="gt-route-city">Chicago <span>(ORD)</span></div>
            <div class="gt-route-arrow">✈</div>
            <div class="gt-route-city">Frankfurt <span>(FRA)</span></div>
          </div>
          <div class="gt-route-country">DE</div>
        </div>
        <div class="gt-route-tags">
          <span class="gt-route-tag-pill">Business favorite</span>
        </div>
        <div class="gt-route-airlines">
          Lufthansa · United
        </div>
      </article>

      <!-- 4 -->
      <article class="gt-route-card">
        <div class="gt-route-top">
          <div class="gt-route-country">US</div>
          <div class="gt-route-main">
            <div class="gt-route-city">Miami <span>(MIA)</span></div>
            <div class="gt-route-arrow">✈</div>
            <div class="gt-route-city">Madrid <span>(MAD)</span></div>
          </div>
          <div class="gt-route-country">ES</div>
        </div>
        <div class="gt-route-tags">
          <span class="gt-route-tag-pill">Sunny gateway</span>
        </div>
        <div class="gt-route-airlines">
          Iberia · American Airlines
        </div>
      </article>

      <!-- 5 -->
      <article class="gt-route-card">
        <div class="gt-route-top">
          <div class="gt-route-country">US</div>
          <div class="gt-route-main">
            <div class="gt-route-city">San Francisco <span>(SFO)</span></div>
            <div class="gt-route-arrow">✈</div>
            <div class="gt-route-city">Paris <span>(CDG)</span></div>
          </div>
          <div class="gt-route-country">FR</div>
        </div>
        <div class="gt-route-tags">
          <span class="gt-route-tag-pill">Evening departures</span>
        </div>
        <div class="gt-route-airlines">
          Air France · United · French Bee
        </div>
      </article>

      <!-- 6 -->
      <article class="gt-route-card">
        <div class="gt-route-top">
          <div class="gt-route-country">US</div>
          <div class="gt-route-main">
            <div class="gt-route-city">Atlanta <span>(ATL)</span></div>
            <div class="gt-route-arrow">✈</div>
            <div class="gt-route-city">Amsterdam <span>(AMS)</span></div>
          </div>
          <div class="gt-route-country">NL</div>
        </div>
        <div class="gt-route-tags">
          <span class="gt-route-tag-pill">Hub-to-hub route</span>
        </div>
        <div class="gt-route-airlines">
          Delta · KLM
        </div>
      </article>
    </div>

    <!-- PHONE CTA -->
    <div class="gt-routes-call">
      <p class="gt-routes-call-text">
        Need help choosing the best route or fare? Our agents can book for you in minutes.
      </p>
      <div class="gt-routes-call-buttons">
        
        <a href="tel:+18883609712" class="gt-routes-call-btn gt-routes-call-btn--secondary">
          CALL (888) 360-9712
        </a>
      </div>
    </div>
  </div>
</section>
