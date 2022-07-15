<?php
/**
 * --------------------------------------------------------------
 * File: mits_admin_images_time_param.php
 * Date: 15.07.2022
 * Time: 05:05
 *
 * Author: Hetfield
 * Copyright: (c) 2022 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */
?>
<script>
  $(document).ready(function(){
    $('img').each(function () {
      var curSrc = $(this).attr('src');
      $(this).attr('src', curSrc + '?t=<?php echo time();?>');
    });
  });
</script>
