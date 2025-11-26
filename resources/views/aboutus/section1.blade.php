{{-- resources/views/aboutus/section1.blade.php --}}

<section id="about" class="gt-about">
  <style>
    .gt-about {
      background: #f3f4f6;
      padding: 80px 18px 90px;
    }

    .gt-about-inner {
      max-width: 1200px;
      margin: 0 auto;
    }

    .gt-about-grid {
      display: grid;
      grid-template-columns: minmax(0, 1.35fr) minmax(0, 0.95fr);
      gap: 40px;
      align-items: flex-start;
    }

    .gt-about-kicker {
      font-size: 0.82rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gt-muted);
      margin-bottom: 6px;
    }

    .gt-about-title {
      font-size: clamp(2rem, 3vw, 2.5rem);
      font-weight: 800;
      color: var(--gt-dark);
      margin-bottom: 12px;
    }

    .gt-about-underline {
      width: 80px;
      height: 3px;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--gt-primary), var(--gt-secondary));
      margin-bottom: 20px;
    }

    .gt-about-text {
      font-size: 0.97rem;
      color: var(--gt-muted);
      line-height: 1.75;
    }

    .gt-about-block {
      margin-bottom: 26px;
    }

    .gt-about-block h3 {
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--gt-dark);
      margin-bottom: 8px;
    }

    .gt-about-paragraph {
      margin-bottom: 10px;
    }

    .gt-about-list {
      list-style: none;
      padding-left: 0;
      margin: 8px 0 0;
    }

    .gt-about-list li {
      position: relative;
      padding-left: 20px;
      margin-bottom: 6px;
    }

    .gt-about-list li::before {
      content: "•";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--gt-primary);
      font-weight: 700;
    }

    /* RIGHT SIDE VISUAL */
    .gt-about-visual {
      position: relative;
    }

    .gt-about-card {
      border-radius: 32px;
      overflow: hidden;
      background: #020617;
      box-shadow: 0 28px 70px rgba(15, 23, 42, 0.55);
      border: 1px solid rgba(15, 23, 42, 0.18);
      position: relative;
    }

    .gt-about-card img {
      display: block;
      width: 100%;
      height: 100%;
      max-height: 460px;
      object-fit: cover;
      opacity: 0.95;
    }

    .gt-about-badge {
      position: absolute;
      top: 16px;
      left: 16px;
      padding: 8px 18px;
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

    .gt-about-badge span {
      font-weight: 600;
      color: #bfdbfe;
    }

    .gt-about-chip-row {
      position: absolute;
      bottom: 16px;
      left: 16px;
      right: 16px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .gt-about-chip {
      padding: 7px 14px;
      border-radius: 999px;
      font-size: 0.78rem;
      background: rgba(15, 23, 42, 0.88);
      color: #e5e7eb;
      border: 1px solid rgba(148, 163, 184, 0.45);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    /* RESPONSIVE */
    @media (max-width: 960px) {
      .gt-about {
        padding-top: 70px;
        padding-bottom: 70px;
      }

      .gt-about-grid {
        grid-template-columns: minmax(0, 1fr);
        gap: 28px;
      }

      .gt-about-visual {
        max-width: 520px;
        margin: 0 auto;
        order: -1;
      }
    }

    @media (max-width: 520px) {
      .gt-about {
        padding-inline: 16px;
      }

      .gt-about-chip-row {
        flex-direction: column;
      }

      .gt-about-chip {
        width: 100%;
      }
    }
  </style>

  <div class="gt-about-inner">
    <div class="gt-about-grid">
      <!-- TEXT SIDE -->
      <div class="gt-about-text">
        <div class="gt-about-kicker">ABOUT US</div>
        <h2 class="gt-about-title">GlobelTours</h2>
        <div class="gt-about-underline"></div>

        <div class="gt-about-block">
          <p class="gt-about-paragraph">
            At GlobelTours, we believe that travel is more than just moving from one place to another — it’s about creating experiences, memories, and connections that last a lifetime.
          </p>
          <p class="gt-about-paragraph">
            As an official affiliation partner of Infocom Media LLC, we are backed by strong industry expertise and a trusted network, giving us the ability to deliver exceptional value and service to our customers worldwide.
          </p>
        </div>

        <div class="gt-about-block">
          <h3>Who We Are</h3>
          <p class="gt-about-paragraph">
            GlobelTours was founded with a vision to make travel simple, affordable, and accessible for everyone. From booking flights and hotels to planning complete vacation packages, we provide end-to-end solutions for individuals, families, and businesses.
          </p>
          <p class="gt-about-paragraph">
            Our affiliation with Infocom Media LLC strengthens our ability to offer:
          </p>
          <ul class="gt-about-list">
            <li>Exclusive travel deals with competitive pricing.</li>
            <li>Reliable booking systems powered by modern technology.</li>
            <li>Global partnerships that open doors to the best airlines, hotels, and tour operators.</li>
          </ul>
        </div>

        <div class="gt-about-block">
          <h3>Why Choose Us</h3>
          <p class="gt-about-paragraph">
            We know that every traveler is unique — which is why we go beyond just offering tickets and reservations. We listen, understand, and design travel experiences tailored to your specific needs. Whether you’re looking for a luxury escape, a family adventure, or a quick business trip, GlobelTour ensures you get the best value with zero hassle.
          </p>
        </div>

        <div class="gt-about-block">
          <h3>What sets us apart:</h3>
          <ul class="gt-about-list">
            <li>Trust &amp; Reliability – Backed by Infocom Media LLC.</li>
            <li>24/7 Customer Support – Help is always just a call or message away.</li>
            <li>Personalized Service – Travel plans that fit your lifestyle and budget.</li>
            <li>Seamless Process – From booking to boarding, we simplify everything.</li>
          </ul>
        </div>

        <div class="gt-about-block">
          <h3>Our Mission</h3>
          <p class="gt-about-paragraph">
            Our mission is to inspire and enable people to travel confidently, explore freely, and create lasting memories. We want every journey with GlobelTours to feel smooth, secure, and unforgettable.
          </p>
        </div>

        <div class="gt-about-block">
          <h3>Our Promise</h3>
          <p class="gt-about-paragraph">
            With GlobelTours, you are not just booking a trip — you are choosing a trusted partner that is committed to your satisfaction from start to finish.
          </p>
          <p class="gt-about-paragraph">
            Travel smart. Travel safe. Travel with GlobelTours 
          </p>
        </div>
      </div>

      <!-- IMAGE SIDE -->
      <div class="gt-about-visual">
        <div class="gt-about-card">
          <img
            src="https://images.pexels.com/photos/1309644/pexels-photo-1309644.jpeg?auto=compress&cs=tinysrgb&w=1920"
            alt="Travelers at airport window with airplane outside">
          <div class="gt-about-badge">
            ✈️ Official affiliation partner
            <span>Infocom Media LLC</span>
          </div>
          <div class="gt-about-chip-row">
            <div class="gt-about-chip">End-to-end travel solutions</div>
            <div class="gt-about-chip">Global flight &amp; hotel network</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
