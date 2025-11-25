<section class="gt-services">
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

    .gt-services {
      background: var(--gt-bg-soft);
      padding: 80px 16px 90px;
    }

    .gt-services-inner {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* ====== TOP TITLE ====== */
    .gt-services-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .gt-services-kicker {
      font-size: 0.82rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gt-text-muted);
      margin-bottom: 6px;
    }

    .gt-services-title {
      font-size: clamp(1.9rem, 3vw, 2.4rem);
      font-weight: 800;
      color: var(--gt-text-dark);
      margin-bottom: 10px;
    }

    .gt-services-underline {
      width: 80px;
      height: 3px;
      border-radius: 999px;
      margin: 0 auto 14px;
      background: linear-gradient(90deg, var(--gt-primary), var(--gt-secondary));
    }

    .gt-services-subtitle {
      max-width: 620px;
      margin: 0 auto;
      font-size: 0.98rem;
      color: var(--gt-text-muted);
    }

    /* ====== SERVICE CARDS ====== */
    .gt-services-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 24px;
      margin-top: 40px;
      margin-bottom: 56px;
    }

    .gt-service-card {
      background: var(--gt-card);
      border-radius: 26px;
      padding: 22px 22px 24px;
      border: 1px solid var(--gt-border);
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.06);
      display: flex;
      flex-direction: column;
      height: 100%;
      transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease;
    }

    .gt-service-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
      border-color: rgba(37, 99, 235, 0.35);
    }

    .gt-service-icon {
      width: 44px;
      height: 44px;
      border-radius: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
      font-size: 1.4rem;
      color: #ffffff;
    }

    .gt-service-icon--blue {
      background: linear-gradient(135deg, #2563eb, #38bdf8);
    }

    .gt-service-icon--pink {
      background: linear-gradient(135deg, #ec4899, #a855f7);
    }

    .gt-service-icon--orange {
      background: linear-gradient(135deg, #f97316, #fbbf24);
    }

    .gt-service-title {
      font-size: 1.18rem;
      font-weight: 700;
      color: var(--gt-text-dark);
      margin-bottom: 8px;
    }

    .gt-service-text {
      font-size: 0.96rem;
      color: var(--gt-text-muted);
      line-height: 1.6;
    }

    /* ====== WHY CHOOSE SECTION (TEXT + IMAGE) ====== */
    .gt-why-grid {
      display: grid;
      grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
      gap: 40px;
      align-items: center;
    }

    .gt-why-heading {
      font-size: clamp(1.8rem, 3vw, 2.2rem);
      font-weight: 800;
      color: var(--gt-text-dark);
      margin-bottom: 8px;
    }

    .gt-why-text-main {
      font-size: 0.98rem;
      color: var(--gt-text-muted);
      margin-bottom: 24px;
      max-width: 520px;
    }

    .gt-why-pills {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-bottom: 26px;
    }

    .gt-why-pill {
      padding: 10px 22px;
      border-radius: 999px;
      border: 1px solid rgba(248, 171, 94, 0.8);
      background: radial-gradient(circle at 0 0, rgba(248, 171, 94, 0.2), #fff7ed);
      color: #b45309;
      font-size: 0.9rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 12px 30px rgba(248, 171, 94, 0.35);
      white-space: nowrap;
    }

    .gt-why-pill--blue {
      border-color: rgba(37, 99, 235, 0.9);
      background: radial-gradient(circle at 0 0, rgba(37, 99, 235, 0.18), #dbeafe);
      color: var(--gt-primary);
      box-shadow: 0 12px 30px rgba(37, 99, 235, 0.35);
    }

    .gt-why-pill-icon {
      font-size: 1rem;
    }

    .gt-why-list {
      display: flex;
      flex-direction: column;
      gap: 18px;
      margin-top: 4px;
    }

    .gt-why-item {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 12px 16px;
      align-items: flex-start;
    }

    .gt-why-badge {
      width: 36px;
      height: 36px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      background: #eff6ff;
      color: var(--gt-primary);
    }

    .gt-why-item-title {
      font-weight: 700;
      font-size: 1rem;
      color: var(--gt-text-dark);
      margin-bottom: 4px;
    }

    .gt-why-item-text {
      font-size: 0.95rem;
      color: var(--gt-text-muted);
      line-height: 1.6;
    }

    /* Image side */
    .gt-why-image-wrap {
      position: relative;
    }

    .gt-why-image-card {
      border-radius: 32px;
      overflow: hidden;
      background: #000;
      box-shadow: 0 28px 70px rgba(15, 23, 42, 0.65);
      border: 1px solid rgba(15, 23, 42, 0.12);
    }

    .gt-why-image-card img {
      display: block;
      width: 100%;
      height: 100%;
      max-height: 460px;
      object-fit: cover;
    }

    .gt-why-floating-pill {
      position: absolute;
      bottom: 14px;
      left: 16px;
      padding: 9px 16px;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.86);
      color: #e5e7eb;
      font-size: 0.8rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    .gt-why-floating-pill span {
      font-weight: 600;
      color: #bfdbfe;
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 1024px) {
      .gt-services-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .gt-why-grid {
        grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
        gap: 28px;
      }
    }

    @media (max-width: 768px) {
      .gt-services {
        padding-top: 60px;
        padding-bottom: 70px;
      }

      .gt-services-grid {
        grid-template-columns: minmax(0, 1fr);
      }

      .gt-why-grid {
        grid-template-columns: minmax(0, 1fr);
      }

      .gt-why-image-wrap {
        order: -1;
        max-width: 480px;
        margin: 0 auto 26px;
      }

      .gt-why-floating-pill {
        bottom: 10px;
        left: 10px;
      }
    }

    @media (max-width: 480px) {
      .gt-why-pills {
        gap: 10px;
      }

      .gt-why-pill,
      .gt-why-pill--blue {
        width: 100%;
        justify-content: center;
        white-space: normal;
        text-align: center;
      }
    }
  </style>

  <div class="gt-services-inner">
    <!-- TOP TITLE -->
    <div class="gt-services-header">
      <div class="gt-services-kicker">OUR FLIGHT SOLUTIONS</div>
      <h2 class="gt-services-title">Comprehensive Flight Services</h2>
      <div class="gt-services-underline"></div>
      <p class="gt-services-subtitle">
        From booking to boarding, we handle every step of your journey with care, clarity,
        and expert support.
      </p>
    </div>

    <!-- SERVICE CARDS -->
    <div class="gt-services-grid">
      <!-- Card 1 -->
      <article class="gt-service-card">
        <div class="gt-service-icon gt-service-icon--blue">📅</div>
        <h3 class="gt-service-title">Reserve Your Flight</h3>
        <p class="gt-service-text">
          Book flights to your preferred destination with our best price options and instant
          confirmations sent straight to your inbox.
        </p>
      </article>

      <!-- Card 2 -->
      <article class="gt-service-card">
        <div class="gt-service-icon gt-service-icon--pink">⏱️</div>
        <h3 class="gt-service-title">Change Flight Details</h3>
        <p class="gt-service-text">
          Plans changed? We help you adjust travel dates, times, and passenger details quickly
          while keeping your costs under control.
        </p>
      </article>

      <!-- Card 3 -->
      <article class="gt-service-card">
        <div class="gt-service-icon gt-service-icon--orange">🛡️</div>
        <h3 class="gt-service-title">Cancel with Confidence</h3>
        <p class="gt-service-text">
          Enjoy flexible cancellation policies with clear guidance and support to process
          refunds, credits, or rebookings.
        </p>
      </article>
    </div>

    <!-- WHY CHOOSE + IMAGE IN SAME SECTION -->
    <div class="gt-why-grid">
      <!-- TEXT SIDE -->
      <div>
        <h2 class="gt-why-heading">Why Travelers Choose Global Tours</h2>
        <p class="gt-why-text-main">
          We combine smart technology with dedicated travel experts to deliver a smoother,
          more reliable booking experience for every trip you take.
        </p>

        <!-- Pills -->
        <div class="gt-why-pills">
          <div class="gt-why-pill">
            <span class="gt-why-pill-icon">🕒</span>
            <span>We are open and ready to help 24/7!</span>
          </div>
          <div class="gt-why-pill gt-why-pill--blue">
            <span class="gt-why-pill-icon">✈️</span>
            <span>All major airlines available</span>
          </div>
        </div>

        <!-- Bullet list -->
        <div class="gt-why-list">
          <div class="gt-why-item">
            <div class="gt-why-badge">🏅</div>
            <div>
              <div class="gt-why-item-title">Best Quality &amp; Service Promise</div>
              <div class="gt-why-item-text">
                We match or beat comparable offers while keeping our service standards high for
                every booking.
              </div>
            </div>
          </div>

          <div class="gt-why-item">
            <div class="gt-why-badge">📞</div>
            <div>
              <div class="gt-why-item-title">24/7 Customer Support</div>
              <div class="gt-why-item-text">
                Our travel specialists are always on hand to assist with new bookings, changes,
                and last-minute questions.
              </div>
            </div>
          </div>

          <div class="gt-why-item">
            <div class="gt-why-badge">🔒</div>
            <div>
              <div class="gt-why-item-title">Secure &amp; Trusted</div>
              <div class="gt-why-item-text">
                Your data and payments are protected with modern security practices so you can
                confirm your trip with confidence.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- IMAGE SIDE -->
      <div class="gt-why-image-wrap">
        <div class="gt-why-image-card">
          <!-- Replace src with your actual airport / travelers image -->
          <img
           src="{{ asset('assets/images/travel.png') }}" alt="Airport travelers">

            
        </div>
        <div class="gt-why-floating-pill">
          ✈️ Trusted by frequent flyers worldwide
          <span>Global Tours</span>
        </div>
      </div>
    </div>
  </div>
</section>
