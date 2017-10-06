<?php
foreach($images as $row) {
?>
    <div class="row">
<?php
    foreach($row as $image) {
?>
            <div class="col-sm-3 sm-margin-bottom-30">
                <a class="fancybox img-hover-v1" rel="gallery" href="<?php echo $image; ?>" title="">
                  <span>
                    <img class="img-responsive" alt="" src="<?php echo $image; ?>">
                  </span>
                </a>
            </div>
<?php
    }
?>
    </div>
<?php
}
