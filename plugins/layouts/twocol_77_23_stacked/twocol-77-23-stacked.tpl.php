<?php
/**
 * @file   twocol-63-37-stacked.tpl.php
 * @author António P. P. Almeida <appa@perusio.net>
 * @date   Wed Apr 13 14:31:13 2011
 * 
 * @brief  Template for the 63/37 panels layout.
 * 
 * 
 */
?>
<div class="panel-display panel-twocol-63-37-stacked clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="panel-panel header">
    <div class="inside">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit left">
      <div class="inside">
        <?php print $content['left']; ?>
      </div>
    </div>

    <div class="panel-panel right lastUnit">
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
