<?php
  /**
  * The template for displaying the footer.
  *
  * Contains the closing of the #content div and all content after
  *
  * @package storefront
  */
?>

    </div><!-- .col-full -->
  </div><!-- #content -->

  <?php do_action( 'storefront_before_footer' ); ?>

  <footer class="section-footer">
    <div class="footer-mobile">
      <div class="section-footer-logo">
        <a href="http://iidea.org.mx/iideahome/index.html">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo.svg' ?>" alt="iiDEA logo">
        </a>
      </div>
      <div class="section-footer-menu">
      <ul>
        <li class="iidea-firasans-bolditalic-hover">
          <a href="http://iidea.org.mx/iideahome/sectores.html">Cursos</a>
        </li>
        <li class="iidea-firasans-bolditalic-hover">
          <a href="http://iidea.org.mx/iideahome/nosotros.html">Nosotros</a>
        </li>
        <li class="iidea-firasans-bolditalic-hover">
          <a href="http://iidea.org.mx/iideahome/profesores.html">Profesores</a>
        </li>
        <li class="iidea-firasans-bolditalic-hover">
          <a href="http://iidea.org.mx/iideahome/aliados.html">Aliados</a>
        </li>
        <li class="iidea-firasans-bolditalic-hover">
          <a href="http://iidea.org.mx/iideahome/contacto.html">Contacto</a>
        </li>
      </ul>
      </div>
      <div class="section-footer-facebook">
        <a href="#">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/facebook-logo-button.svg' ?>">
        </a>
      </div>
    </div>
    <div class="section-footer-copy">
      <span class="iidea-firasans-regular">© Copyright, Iidea 2018</span>
    </div>
    <div class="section-footer-morelogo">
      <a href="http://getmore.mx/" target="_blank">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/favicon-more.png' ?>" alt="getmore-logo" class="more-logo">
      </a>
    </div>
  </footer>

  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
