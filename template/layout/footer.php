<?php
if(!isset($is404)) {
  /**
 * Common Page Footer
 * Based on the wrapbootstrap Unify theme
 */
?>
  <div class="footer-v1">

    <?php /** Copyright */ ?>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        The Lupin III Encyclopedia is &copy; <?php echo date('Y'); ?> by Luis A. Cruz. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6">
                  <ul class="footer-socials list-inline">
                    <li>
                      <a href="http://twitter.com/sprak" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/sprak" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://plus.google.com/101012483690037769237/posts" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </li>
                  </ul>
                </div>
            </div><?php /** /row */ ?>
        </div><?php /** /container */ ?>
    </div><?php /** /copyright */ ?>
    <?php /** End Copyright */ ?>

  </div>

  </div> <?php /** End wrapper in header */ ?>
<?php
}
?>

  <?php /** JS Global Compulsory */ ?>
  <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/bower_components/jquery-migrate/jquery-migrate.min.js"></script>
  <script type="text/javascript" src="/dist/js/wrapbootstrap/unify/HTML/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/dist/js/wrapbootstrap/unify/HTML/assets/plugins/flexslider/demo/js/jquery.easing.js"></script>

  <?php /** JS Page Level */ ?>
  <script type="text/javascript" src="/dist/js/wrapbootstrap/unify/HTML/assets/plugins/back-to-top.js"></script>
  <script type="text/javascript" src="/dist/js/wrapbootstrap/unify/HTML/assets/js/app.js"></script>
  <script type="text/javascript" src="/dist/js/wrapbootstrap/unify/HTML/assets/js/plugins/fancy-box.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function() {
          App.init();
      });
  </script>
  <!--[if lt IE 9]>
      <script src="/dist/js/wrapbootstrap/unify/HTML/assets/assets/plugins/respond.js"></script>
      <script src="/dist/js/wrapbootstrap/unify/HTML/assets/plugins/html5shiv.js"></script>
      <script src="/dist/js/wrapbootstrap/unify/HTML/assets/plugins/placeholder-IE-fixes.js"></script>
  <![endif]-->

<?php
/** File based JS */
if( isset( $includeJs ) && is_array( $includeJs ) && !empty( $includeJs ) )
{
  foreach( $includeJs as $js )
  {
?>
    <script type="text/javascript" src="<?php echo $js; ?>"></script>
<?php
  }
}

/** Inline JS */
if( isset( $inlineJs ) && is_array( $inlineJs ) && !empty( $inlineJs ) )
{
?>
    <script type="text/javascript">
      <?php echo implode("\r\n", $inlineJs); ?>
    </script>
<?php
}
?>
  </body>
</html>