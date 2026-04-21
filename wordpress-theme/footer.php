<footer role="contentinfo">
  <div class="footer-brand">
    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <path d="M24 4L42 14V34L24 44L6 34V14L24 4Z" stroke="#4af0b0" stroke-width="1" fill="none" opacity="0.3"/>
      <path d="M24 12L36 19V33L24 40L12 33V19L24 12Z" stroke="#4af0b0" stroke-width="1" fill="none" opacity="0.6"/>
      <circle cx="24" cy="26" r="3" fill="#4af0b0"/>
    </svg>
    <span class="footer-brand-name"><?php bloginfo('name'); ?></span>
  </div>
  <p class="footer-copy">
    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All engagements confidential.
  </p>
  <p class="footer-legal">
    No affiliation with government entities.<br/>All marks reserved.
  </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
