<!-- -*-html-helper-*- -->

<div class="panel-display panel-threecol-15-70-15-stacked clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel line">
    <div class="panel-panel unit panel-header lastUnit">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-fifteen firstUnit">
      <div class="inside">
        <?php print $content['left']; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-seventy">
      <div class="inside">
        <?php print $content['middle']; ?>
      </div>
    </div>

    <div class="panel-panel panel-col-fifteen lastUnit">
      <div class="inside">
        <?php print $content['right']; ?>
      </div>
    </div>
  </div>

  <div class="panel-panel panel-line">
    <div class="panel-panel unit panel-footer lastUnit">
      <?php print $content['footer']; ?>
    </div>
  </div>
</div>
