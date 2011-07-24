<!-- -*-html-helper-*- -->

<div class="panel-display panel-threecol-7-72-31-stacked clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel line">
    <div class="inside">
      <div class="panel-panel unit panel-col-seven firstUnit">
        <?php print $content['left']; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-sixtytwo">
      <div class="inside">
        <?php print $content['middle']; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-thirtyone lastUnit">
      <div class="inside">
        <?php print $content['right']; ?>
      </div>
    </div>
  </div>
</div>
