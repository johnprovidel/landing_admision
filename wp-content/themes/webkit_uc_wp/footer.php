<footer id="tag__footer">
  <section id="prefooter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 id="contacto" class="container-center">
            ¿Tienes dudas? Contáctanos
          </h2>
        </div>	 
        <?php
          dynamic_sidebar('footer1_mobile');
        ?>
        <?php
          dynamic_sidebar('footer1');
        ?>
        <?php
          dynamic_sidebar('footer2_mobile');
        ?>
        <?php
          dynamic_sidebar('footer2_desktop');
        ?>
        <?php
          dynamic_sidebar('footer3');
        ?>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <a href="#top" class="btn-scroll pull-right">
            <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Arriba
          </a>
        </div>
      </div>
    </div>
    <div class="container container__link container-center">
      <div class="row">
        <div class="col-sm-12">
          <h4>
            <a href="http://admisionyregistros.uc.cl/" target="_blank">Ir a Postgrado y otras admisiones</a>
          </h4>
        </div>
      </div>
    </div>
  </section>
  <div class="container-footer container--grey container-center">
    <div class="row">
      <div class="col-xs-6 col-sm-3 col-sm-offset-2 hidden-md hidden-lg">
        <a href="http://www.uc.cl" target="_blank">
          <div class="logo"></div>
        </a>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-12 hidden-md hidden-lg"><nav>
      <ul>
      <li><a href="http://www.uc.cl/?m=1">La Universidad</a></li>
      <li><a href="http://www.uc.cl/es/la-universidad/autoridades/519">Facultades</a></li>
      <li><a href="http://www.uc.cl/es/organizaciones-vinculadas">Organizaciones</a></li>
      <li><a href="http://bibliotecas.uc.cl/">Bibliotecas</a></li>
      <li><a href="https://sso.uc.cl/cas/login?service=https%3A%2F%2Fportal.uc.cl%2Fc%2Fportal%2Flogin%3Bjsessionid%3D68223AE5C89F4A0D4E8CEA793EE60973">Mi Portal UC</a></li>
      <li><a href="https://webaccess.uc.cl/simplesaml/index.php">Correo UC</a></li>
      </ul>
      </nav></div>
      <div class="col-xs-12 col-sm-12 contacto">
        <p>
         2019 - Pontificia Universidad Católica de Chile - Avda. Libertador Bernardo OHiggins 340 - Santiago - Chile - <a href="http://www.uc.cl/es/mapas" target="_blank">¿Cómo llegar?</a> - Mesa central <a href="tel:%2B56223544000" target="_blank">(+56) 22354 4000</a>
         <br>
         <a href="http://www.uc.cl/es/politicas-de-privacidad" target="_blank">Políticas de privacidad</a> | <a href="http://www.uc.cl/codigodehonor" target="_blank">Código de Honor</a>
       </p>
      </div>
    </div>
  </div>
  <div class="container-footer container--dark container-center">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
       <h5>Desarrollado por Dirección Digital - Prorrectoría UC.</h5>
      </div>
    </div>
  </div>
</footer> <!-- end of: FOOTER -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<?php wp_footer(); ?>
</body>
</html>
