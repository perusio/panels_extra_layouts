<!-- -*-html-helper-*- -->
<div class="panel-display panel-threecol-44-35-21-stacked clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\"";} ?>>

  <div class="panel-panel line">
    <div class="panel-panel unit left">
      <div class="inside">
        <?php print $content['left']; ?>
      </div>
    </div>

    <div class="panel-panel unit right lastUnit">
      <div class="panel-panel line">
        <div class="panel-panel unit top-middle">
          <div class="inside">
            <?php print $content['top_middle']; ?>
          </div>
        </div>

        <div class="panel-panel unit top-right lastUnit">
          <div class="inside">
            <?php print $content['top_right']; ?>
          </div>
        </div>
      </div>

      <div class="inside">
        <?php print $content['right']; ?>
      </div>
    </div>
  </div>

  <div class="panel-panel footer">
    <div class="inside">
      <?php print $content['footer']; ?>
    </div>
  </div>
</div>
