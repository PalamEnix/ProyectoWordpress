<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?>
	<!-- Site footer -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre Mí</h6>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac pharetra lorem. Aenean mattis, risus sed maximus cursus, magna erat scelerisque ligula, a pellentesque mi velit eu tortor. Nulla eu eleifend mauris, ut tristique metus. Mauris sed arcu sit amet ipsum laoreet iaculis nec sed magna.</p>
          </div>

          <div class="col-xs-6 col-md-3">	           
			<img src="https://s.w.org/style/images/about/WordPress-logotype-wmark-white.png" alt="..." style="width: 100px; margin-top: 2rem; margin-left: 5rem">			  
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Más Contenido</h6>
            <ul class="footer-links">
              <li><a href="#">Mi Currículum</a></li>       
              <li><a href="#">Política de Privacidad</a></li>            
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 Todos los derechos a
         <a href="#">Marco Pal'Jim</a>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a class="behance" href="#"><i class="fa fa-behance"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
