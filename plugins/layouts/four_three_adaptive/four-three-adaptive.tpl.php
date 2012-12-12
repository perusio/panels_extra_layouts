<!-- -*- mode: html-helper; before-save-hook: nil -*- -->

<div class="panel-display panel-four-three-adaptive clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 <!-- 4x4 grid -->
 <?php
   for ($j = 0; $j < 16; $j += 4): 
     // Get the $content array keys of all non empty entries.
     $keys = array_keys(array_filter(array_slice($content, $j, 4, TRUE)));
     $h = panels_extra_layouts_adaptive_hash($keys, 4, 'panels_extra_layouts_adaptive_get_digit');
     // If all the row elements are empty then jump to the next row
     // immediately.
     if ($h == 0) continue;
 ?>
  
  <?php if ($h == 1): ?><!-- 100% - 1 column -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-one-hundred lastUnit">
      <?php print $content[$keys[0]]; ?>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 3): ?><!-- 25/75% - 2 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-seventy-five lastUnit">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 4): ?><!-- 50/50% - 2 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-fifty">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-fifty lastUnit">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 5): ?><!-- 75/25% - 2 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-seventy-five la">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h ==6 || $h == 9): ?><!-- 25/25/50% - 3 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-fifty lastUnit">
      <div class="inside">
        <?php print $content[$keys[2]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 7): ?><!-- 25/50/25% - 3 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-fifty">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five lastUnit">
      <div class="inside">
        <?php print $content[$keys[2]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 8): ?><!-- 50/25/25% - 3 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-fifty">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five lastUnit">
      <div class="inside">
        <?php print $content[$keys[2]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 10): ?><!-- 25/25/25/25% - 4 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five">
      <div class="inside">
        <?php print $content[$keys[2]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-twenty-five lastUnit">
      <div class="inside">
        <?php print $content[$keys[3]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
 <?php endfor; ?>

 <!-- 3x3 grid -->
 <?php
   for ($i = 16; $i < 25; $i += 3):
     // Get the $content array keys of all non empty entries.
     $keys = array_keys(array_filter(array_slice($content, $i, 3, TRUE)));
     $h = panels_extra_layouts_adaptive_hash($keys, 3, 'panels_extra_layouts_adaptive_get_digit');
     // If all the row elements are empty then jump to the next row
     // immediately.
     if ($h == 0) continue;
 ?>
  
  <?php if ($h == 1): ?><!-- 100% - 1 column -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-one-hundred lastUnit">
      <?php print $content[$keys[0]]; ?>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 3 || $h == 5): ?><!-- 33/66% - 2 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-thirty-three">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-sixty-six lastUnit">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 4): ?><!-- 66/33% - 2 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-sixty-six">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-thirty-three lastUnit">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($h == 6): ?><!-- 33/33/33% - 3 columns -->
  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-thirty-three">
      <div class="inside">
        <?php print $content[$keys[0]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-thirty-three">
      <div class="inside">
        <?php print $content[$keys[1]]; ?>
      </div>
    </div>

    <div class="panel-panel unit panel-col-thirty-three lastUnit">
      <div class="inside">
        <?php print $content[$keys[2]]; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
 <?php endfor; ?>
</div>
