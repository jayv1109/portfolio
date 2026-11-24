 <?php
/**
 * Template Name: SEO Works & Wins Page
 */

get_header(); 
?>

<main class="seo-page">
    <section class="seo-hero">
        <div class="container seo-hero-content">
            <div>
                <div class="seo-label">
                    <span></span>
                    SEO PORTFOLIO
                </div>
                <h1>
                    SEO Works
                    <span>& Wins.</span>
                </h1>
                <p>
                    A look at the SEO strategies, performance data, content work, and search visibility improvements I've worked on.
                </p>
                <div class="seo-hero-buttons">
                    <a href="#metrics" class="btn btn-primary">Explore the results ↘</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-secondary">Back to portfolio</a>
                </div>
            </div>
        </div>
    </section>


  <div class="container seo-hero-content">
    <div>
      <div class="seo-label">
        <span></span>
        SEO PORTFOLIO
      </div>
      <h1>
        SEO Works
        <span>& Wins.</span>
      </h1>
      <p>
        A look at the SEO strategies, performance data,
        content work, and search visibility improvements
        I've worked on.
      </p>
      <div class="seo-hero-buttons">
        <a href="#metrics" class="btn btn-primary">Explore the results ↘</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-secondary">Back to portfolio</a>
      </div>
    </div>

    <div class="seo-stat-bubble">
      <span>CONTENT</span>
      <strong>2,000+</strong>
      <p>SEO-optimized content pieces developed across different industries and objectives.</p>
    </div>
  </div>
</section>

<!-- QUICK NUMBERS -->
<section class="seo-overview">
  <div class="container">
    <div class="overview-grid">
      <div class="overview-card purple">
        <span>01</span>
        <strong>SEO Metrics</strong>
        <p>Domain rating, backlinks, organic traffic and keywords.</p>
      </div>
      <div class="overview-card pink">
        <span>02</span>
        <strong>Search Console</strong>
        <p>Clicks, impressions, CTR and search visibility.</p>
      </div>
      <div class="overview-card cream">
        <span>03</span>
        <strong>SEO Content</strong>
        <p>Research-driven content built around search intent.</p>
      </div>
      <div class="overview-card dark">
        <span>04</span>
        <strong>Client Feedback</strong>
        <p>Quality checks focused on clarity, usefulness and SEO.</p>
      </div>
    </div>
  </div>
</section>

<!-- SEO METRICS -->
<section class="seo-section" id="metrics">
  <div class="container">
    <div class="seo-section-heading">
      <div>
        <span class="section-tag">PERFORMANCE</span>
        <h2>SEO <span>Metrics.</span></h2>
      </div>
      <p>Performance snapshots showing improvements across domain rating, backlinks, organic traffic, and organic keywords.</p>
    </div>

    <!-- DECEMBER / MARCH -->
    <div class="case-study-card">
      <div class="case-study-header">
        <div>
          <span class="case-number">01</span>
          <h3>December 2023 → March 2024</h3>
        </div>
        <span class="case-label">SEO METRICS</span>
      </div>
      <div class="metric-image">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/seo-metrics-blog2.png' ); ?>" width="1687" height="284" alt="Ahrefs metrics for a blog: 1.8K organic traffic, 214 backlinks, 203 organic keywords and Domain Rating 14" loading="lazy" />
      </div>
      <div class="case-study-footer">
        <div class="result-highlight">
          <span>RESULT</span>
          <strong>Improved SEO visibility</strong>
        </div>
        <p>Traffic 19 → 1.8K · Backlinks 29 → 214 · Keywords 13 → 203 · Domain Rating 4 → 14</p>
      </div>
    </div>
  </div>
</section>

<!-- GOOGLE SEARCH CONSOLE -->
<section class="gsc-section">
  <div class="container">
    <div class="seo-section-heading light-heading">
      <div>
        <span class="section-tag">SEARCH PERFORMANCE</span>
        <h2>Google Search <span>Console.</span></h2>
      </div>
      <p>Search performance snapshots showing impressions, clicks, CTR and average search position.</p>
    </div>

    <div class="gsc-grid">
      <!-- GSC 01 -->
      <article class="gsc-card">
        <div class="gsc-card-top">
          <span>01</span>
          <strong>Blog Performance</strong>
        </div>
        <div class="gsc-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/gsc-blog-1.png' ); ?>" alt="Google Search Console blog performance" loading="lazy" />
        </div>
        <div class="gsc-data">
          <div><strong>98</strong><span>Clicks</span></div>
          <div><strong>5.85K</strong><span>Impressions</span></div>
          <div><strong>1.7%</strong><span>CTR</span></div>
          <div><strong>24.4</strong><span>Avg. Position</span></div>
        </div>
      </article>

      <!-- GSC 02 -->
      <article class="gsc-card">
        <div class="gsc-card-top">
          <span>02</span>
          <strong>Blog Performance</strong>
        </div>
        <div class="gsc-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/gsc-blog-2.png' ); ?>" alt="Google Search Console second blog performance" loading="lazy" />
        </div>
        <div class="gsc-data">
          <div><strong>38</strong><span>Clicks</span></div>
          <div><strong>3.54K</strong><span>Impressions</span></div>
          <div><strong>1.1%</strong><span>CTR</span></div>
          <div><strong>25</strong><span>Avg. Position</span></div>
        </div>
      </article>

      <!-- GSC 03 -->
      <article class="gsc-card">
        <div class="gsc-card-top">
          <span>03</span>
          <strong>Blog Performance</strong>
        </div>
        <div class="gsc-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/gsc-blog-3.png' ); ?>" alt="Google Search Console third blog performance" loading="lazy" />
        </div>
        <div class="gsc-data">
          <div><strong>8</strong><span>Clicks</span></div>
          <div><strong>2.26K</strong><span>Impressions</span></div>
          <div><strong>0.4%</strong><span>CTR</span></div>
          <div><strong>19</strong><span>Avg. Position</span></div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- CLIENT QC -->
<section class="qc-section">
  <div class="container">
    <div class="seo-section-heading">
      <div>
        <span class="section-tag">CONTENT QUALITY</span>
        <h2>Client QC <span>Feedback.</span></h2>
      </div>
      <p>Examples of content quality feedback covering clarity, organization, technical detail, keyword integration and usefulness.</p>
    </div>

    <div class="feedback-grid">
      <div class="feedback-card">
        <div class="quote-mark">“</div>
        <p>No obvious typos or misspellings were found. The content is detailed, organized, and provides useful, specific information.</p>
        <span>CONTENT QUALITY</span>
      </div>
      <div class="feedback-card">
        <div class="quote-mark">“</div>
        <p>The content is direct, well-organized, and focused on service and benefits.</p>
        <span>CONTENT QUALITY</span>
      </div>
      <div class="feedback-card">
        <div class="quote-mark">“</div>
        <p>The writing is direct, technical, and provides specific local value.</p>
        <span>TECHNICAL CONTENT</span>
      </div>
      <div class="feedback-card">
        <div class="quote-mark">“</div>
        <p>The tone is empathetic but professional, with specific industry details.</p>
        <span>INDUSTRY CONTENT</span>
      </div>
      <div class="feedback-card wide-feedback">
        <div class="quote-mark">“</div>
        <p>No obvious spelling errors were identified. Keywords are integrated naturally into service descriptions without keyword stuffing.</p>
        <span>SEO CONTENT</span>
      </div>
    </div>

    <div class="ranking-callout">
      <span>SEARCH VISIBILITY</span>
      <h3>Local keywords reaching positions 2–3.</h3>
      <div class="keyword-list">
        <span>storm damage company Wilmington</span>
        <span>storm damage repair Wilmington</span>
        <span>storm damage restoration Wilmington</span>
      </div>
    </div>
  </div>
</section>

<!-- CONTENT PORTFOLIO -->
<section class="content-section">
  <div class="container">
    <div class="content-card">
      <div class="content-number">2K+</div>
      <div>
        <span class="section-tag">SEO CONTENT DEVELOPED</span>
        <h2>2,000+ pieces.</h2>
        <p>I've developed 2,000+ SEO-optimized content pieces across different industries and objectives. The works featured in this portfolio are only selected samples of my SEO content work.</p>
        <a href="https://docs.google.com/spreadsheets/d/1y_K97oGSCyugAd6szy8OZVsfL1lAACaEe2WHTtbrVJs/edit?usp=sharing" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
          View Content Portfolio ↗
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="seo-cta">
  <div class="container">
    <span class="section-tag">LET'S WORK TOGETHER</span>
    <h2>Ready to grow <span>your search presence?</span></h2>
    <p>From technical SEO and content strategy to WordPress implementation, I can help turn search opportunities into measurable work.</p>
    <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary">Let's talk ↗</a>
  </div>
</section>

</main>

<?php 
get_footer(); 
?>