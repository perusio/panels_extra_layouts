<!-- -*-html-helper-*- -->
<div class="panel-display panel-threecol-42-29-29-stacked clear-block"
<?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-forty-two firstUnit">
      <div class="inside">
        <?php print $content['left']; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-nine">
      <div class="inside">
        <?php print $content['middle']; ?>
      </div>
    </div>

    <div class="panel-panel panel-col-twenty-nine lastUnit">
      <div class="inside">
        <?php print $content['right']; ?>
      </div>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit panel-bottom lastUnit">
      <?php print $content['bottom_above']; ?>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit panel-bottom lastUnit">
      <?php print $content['bottom_below']; ?>
    </div>
  </div>
</div>
