<!-- -*-html-helper-*- -->
<div class="panel-display panel-bricks-25-75-stacked clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  
  <div class="panel-panel line">
    <div class="panel-panel unit header-left firstUnit">
      <div class="inside">
        <?php print $content['header_left']; ?>
      </div>
    </div>

    <div class="panel-panel unit header-middle">
      <div class="inside">
        <?php print $content['header_middle']; ?>
      </div>
    </div>

    <div class="panel-panel header-right lastUnit">
      <div class="inside">
        <?php print $content['header_right']; ?>
      </div>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit top-stack lastUnit">
      <?php print $content['top_stack']; ?>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit left-column firstUnit">
      <div class="inside">
        <?php print $content['left_column']; ?>
      </div>
    </div>

    <div class="panel-panel unit right-column lastUnit">
      <div class="inside">
        <?php print $content['right_column']; ?>
      </div>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit bottom-unit firstUnit">
      <div class="inside">
        <?php print $content['bottom_left']; ?>
      </div>
    </div>

    <div class="panel-panel unit bottom-unit">
      <div class="inside">
        <?php print $content['bottom_middle_left']; ?>
      </div>
    </div>

    <div class="panel-panel unit bottom-unit">
      <div class="inside">
        <?php print $content['bottom_middle_right']; ?>
      </div>
    </div>

    <div class="panel-panel unit bottom-unit lastUnit">
      <div class="inside">
        <?php print $content['bottom_right']; ?>
      </div>
    </div>
  </div>
</div>
