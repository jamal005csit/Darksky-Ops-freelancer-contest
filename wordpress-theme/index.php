<?php
/**
 * Darksky Ops — Main Template File
 *
 * This is the primary template for the one-page WordPress theme.
 * All page content is rendered from this single file.
 * No page builders. No Gutenberg overhead. Raw, clean output.
 */

get_header(); ?>

<main id="main-content" role="main">

  <!-- ══════════════════════════════════════════
       HERO
  ══════════════════════════════════════════ -->
  <section id="hero" aria-labelledby="hero-headline">
    <div class="hero-grid" aria-hidden="true"></div>
    <div class="container">
      <div class="hero-content">
        <div class="hero-eyebrow" aria-hidden="true">Operational Security · Est. 2019</div>
        <h1 class="hero-headline" id="hero-headline">
          What you can't<br/>
          see <em>controls</em><br/>
          everything.
        </h1>
        <p class="hero-subtext">
          We operate in the gap between what attackers know and what they don't.
          Penetration testing, infrastructure hardening, and classified-grade
          security operations — for institutions that cannot afford a second chance.
        </p>
        <div class="hero-cta">
          <a href="#contact" class="btn-primary">
            Initiate Contact
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
              <path d="M2 7H12M12 7L8 3M12 7L8 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"/>
            </svg>
          </a>
          <a href="#services" class="btn-ghost">View Operations</a>
        </div>
      </div>
    </div>
    <div class="hero-status" aria-hidden="true">
      <div class="status-dot"></div>
      Systems Active
    </div>
  </section>

  <div class="divider"></div>

  <!-- ══════════════════════════════════════════
       MISSION
  ══════════════════════════════════════════ -->
  <section id="mission" aria-labelledby="mission-heading">
    <div class="container">
      <span class="section-label reveal">01 / Mission</span>
      <div class="mission-layout">
        <div>
          <h2 class="mission-statement reveal" data-delay="1" id="mission-heading">
            We don't sell<br/>
            <em>peace of mind.</em><br/>
            We eliminate the<br/>
            need for it.
          </h2>
        </div>
        <ul class="mission-principles" aria-label="Core principles">
          <li class="reveal" data-delay="2">
            <div class="principle-title">Silence Over Signal</div>
            <p class="principle-body">Our engagements leave no trace in your systems beyond the report. No residual footprint. No escalating retainer.</p>
          </li>
          <li class="reveal" data-delay="3">
            <div class="principle-title">Threat-First Thinking</div>
            <p class="principle-body">We map attack surfaces the way adversaries do — before they find them. Every assessment assumes breach is already in progress.</p>
          </li>
          <li class="reveal" data-delay="4">
            <div class="principle-title">Deliverables, Not Decks</div>
            <p class="principle-body">Reports are classified-format, actionable within 48 hours. No vendor pitch embedded. No upsell. Just findings and remediation paths.</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- ══════════════════════════════════════════
       SERVICES
  ══════════════════════════════════════════ -->
  <section id="services" aria-labelledby="services-heading">
    <div class="container--wide">
      <div class="services-header">
        <div>
          <span class="section-label reveal">02 / Operations</span>
          <h2 class="services-title reveal" data-delay="1" id="services-heading">
            Three disciplines.<br/>No overlap.
          </h2>
        </div>
        <p class="services-note reveal" data-delay="2">
          Each operation is scoped, contained, and reported to a single authorized contact. No third-party subcontracting.
        </p>
      </div>

      <div class="services-grid" role="list">

        <article class="service-card reveal" data-delay="1" role="listitem">
          <div class="service-index" aria-hidden="true">OPS-01</div>
          <svg class="service-icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <circle cx="20" cy="20" r="10" stroke="currentColor" stroke-width="1"/>
            <circle cx="20" cy="20" r="17" stroke="currentColor" stroke-width="0.75" opacity="0.4"/>
            <path d="M20 10V13M20 27V30M10 20H13M27 20H30" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
            <circle cx="20" cy="20" r="2.5" fill="currentColor"/>
          </svg>
          <h3 class="service-name">Network Penetration Testing</h3>
          <p class="service-desc">
            Full-spectrum adversarial simulation against your network perimeter, internal segments, and cloud boundaries.
            Red-team methodology adapted from nation-state TTPs. We find what automated scanners cannot.
          </p>
          <div class="service-tags">
            <span class="tag">External Perimeter</span>
            <span class="tag">Internal Pivoting</span>
            <span class="tag">Zero-Day Surface</span>
            <span class="tag">Cloud Boundaries</span>
          </div>
        </article>

        <article class="service-card reveal" data-delay="2" role="listitem">
          <div class="service-index" aria-hidden="true">OPS-02</div>
          <svg class="service-icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <rect x="5" y="12" width="30" height="18" rx="1" stroke="currentColor" stroke-width="1"/>
            <path d="M5 18H35" stroke="currentColor" stroke-width="0.75" opacity="0.4"/>
            <path d="M13 24H27" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
            <path d="M13 27H20" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
            <path d="M20 5V12M16 8L20 5L24 8" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
          </svg>
          <h3 class="service-name">Infrastructure Hardening</h3>
          <p class="service-desc">
            Systematic elimination of attack surface across physical, virtual, and hybrid environments.
            Firewall re-architecture, identity segmentation, protocol enforcement. We rebuild what should not have been built the first time.
          </p>
          <div class="service-tags">
            <span class="tag">Firewall Architecture</span>
            <span class="tag">Identity Segmentation</span>
            <span class="tag">Zero Trust Posture</span>
            <span class="tag">Hybrid Environments</span>
          </div>
        </article>

        <article class="service-card reveal" data-delay="3" role="listitem">
          <div class="service-index" aria-hidden="true">OPS-03</div>
          <svg class="service-icon" viewBox="0 0 40 40" fill="none" aria-hidden="true">
            <path d="M20 5L33 12V21C33 27.5 27.5 33.5 20 36C12.5 33.5 7 27.5 7 21V12L20 5Z" stroke="currentColor" stroke-width="1"/>
            <path d="M20 13L26 16.5V21.5C26 24.8 23.3 27.8 20 29C16.7 27.8 14 24.8 14 21.5V16.5L20 13Z" stroke="currentColor" stroke-width="0.75" opacity="0.5"/>
            <circle cx="20" cy="21" r="2.5" fill="currentColor"/>
          </svg>
          <h3 class="service-name">Security Operations Support</h3>
          <p class="service-desc">
            Classified-level advisory engagements for government bodies, critical infrastructure operators, and high-value private entities.
            Threat intelligence integration, incident response posture, and pre-breach protocol design.
          </p>
          <div class="service-tags">
            <span class="tag">Gov / Critical Infra</span>
            <span class="tag">Threat Intel</span>
            <span class="tag">IR Posture</span>
            <span class="tag">Classified Engagements</span>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
       CLEARANCE BAR
  ══════════════════════════════════════════ -->
  <div class="clearance-bar" aria-label="Operations statistics">
    <div class="container">
      <div class="clearance-inner">
        <div class="clearance-stat reveal">
          <div class="clearance-number">340<span>+</span></div>
          <div class="clearance-label">Engagements Completed</div>
        </div>
        <div class="clearance-divider" aria-hidden="true"></div>
        <div class="clearance-stat reveal" data-delay="1">
          <div class="clearance-number">0</div>
          <div class="clearance-label">Client Breaches Post-Engagement</div>
        </div>
        <div class="clearance-divider" aria-hidden="true"></div>
        <div class="clearance-stat reveal" data-delay="2">
          <div class="clearance-number">48<span>h</span></div>
          <div class="clearance-label">Report Delivery SLA</div>
        </div>
        <div class="clearance-divider" aria-hidden="true"></div>
        <div class="clearance-stat reveal" data-delay="3">
          <div class="clearance-number">100<span>%</span></div>
          <div class="clearance-label">NDA-Bound Operations</div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════════════════
       CONTACT
  ══════════════════════════════════════════ -->
  <section id="contact" aria-labelledby="contact-heading">
    <div class="container">
      <div class="contact-eyebrow reveal">03 / Contact</div>
      <h2 class="contact-headline reveal" data-delay="1" id="contact-heading">
        If you're here,<br/>you already know<br/>what you need.
      </h2>
      <p class="contact-sub reveal" data-delay="2">
        First contact is encrypted. Responses are signed. Expect a reply within one business day — or a confirmation that we cannot engage.
      </p>
      <a href="mailto:<?php echo esc_attr( get_theme_mod('darksky_contact_email', 'contact@darkskyops.com') ); ?>"
         class="contact-email reveal" data-delay="3">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <rect x="1" y="3" width="14" height="10" rx="1" stroke="currentColor" stroke-width="1"/>
          <path d="M1 5L8 9.5L15 5" stroke="currentColor" stroke-width="1"/>
        </svg>
        <?php echo esc_html( get_theme_mod('darksky_contact_email', 'contact@darkskyops.com') ); ?>
      </a>
      <div class="contact-protocol reveal" data-delay="4" role="note">
        <svg class="protocol-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M8 2L14 5V9C14 12 11.5 14.5 8 15.5C4.5 14.5 2 12 2 9V5L8 2Z" stroke="currentColor" stroke-width="1"/>
          <circle cx="8" cy="9" r="1.5" fill="currentColor"/>
          <line x1="8" y1="6" x2="8" y2="7.5" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
        </svg>
        <span class="protocol-text">PGP Key available on request · No unsolicited proposals · NDAs precede all scoping</span>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
