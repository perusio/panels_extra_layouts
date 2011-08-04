# Extra Layouts for the Panels Module

[Panels](http://drupal.org/project/panels) is one of the most, if not
the most, **powerful** modules for laying out a page in
[Drupal](http://drupal.org/project/drupal).

Panels builds on [CTools](http://drupal.org/project/ctools) which is
a swiss army knife for doing all sorts of elaborated things in Drupal
without having to hack the drupal core.

## The Bottom Line

This module provides a set of **fixed** and **adaptive** layouts for
Panels.

**Fixed layouts** are those that have a **fixed** geometry. Meaning
that no matter whatever is the content of each pane it will always use
the defined layout. 

**Adaptive layouts** are layouts that **adapt** to the
content. Meaning that if a pane is empty then the pane that has
content closer uses up that space. This idea is stolen from the
[Panels Three Four](http://drupal.org/project/panels_three_four_layout)
project. This idea has been developed so that the behaviour is
consistent and allows for the creation of **153664** different
layouts from a single template.

Note that adaptive layouts differ from the the flexible layouts
created via the Panels UI. Adaptive layouts are basically fixed
layouts that adapt when rendering to the way the content is
distributed throughout the various regions. While flexible layouts are
layouts that are built via the UI in which the template is generated
on the fly when using the Panels layout designer.

This module provides **5** [two column layouts](#twocol-fixed), **4**
[three column layouts](#threecol-fixed) and **2** [adaptive layouts](#adaptive).

## Installation

 1. Download and install the module as usual.
 
 2. Now when defining a new variant or redefining the layout of an
    existing one you should see the new layouts in the dropdown, under
    the `Columns: 2`, `Columns: 3` and a new item `Adaptive`.
    
 3. Select one of the above layouts.
 
 4. Proceed to add content to your liking.
 
 5. Done.


<h2 id="adaptive">Adaptive layouts</h2>

Adaptive layouts are sort of a *big deal*. This module provides the
following adaptive layouts:

 1. Adaptive 3x3 - 4x4
 
    It's a grid (matrix) with 25 elements. The top three rows are
    have 3 columns and the bottom 4 rows have 4 columns. Hence 25 (3x3
    \+ 4x4) elements.

    ![Adaptive 3x3 - 4x4](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/three_four_adaptive/three_four_adaptive.png)
 
    In each row any region/pane **expands to the right** until it finds
    another occupied region/pane. If the pane region is on the most
    to the right pane/region in a given column it **wraps** around,
    i.e., it uses the available space starting from the left. Consider
    an example where we use the center and right regions in row with 3
    elements the resulting layout will be 33/66.
    
    On a **3 column row** the 4 possible **layouts** are:
    
    100%, 33/66%, 66/33% and 33/33/33%  

    Since there are 3 rows with 3 columns we have 4x4x4 = 64 possible
    layouts on the 3x3 submatrix of the template.
    
    On a **4 column row** the 7 possible **layouts** are:
    
    100%, 25/75%, 75/25%, 50/50%, 25/50/25%, 50/25/25%, 25/25/50% and 25/25/25/25%.

    There are 4 rows with 4 columns hence 7x7x7x7 = 2401 possible
    layouts on the 4x4 submatrix of the template.
    
 2. Adaptive 4x4 - 3x3   
 
    ![Adaptive 4x4 - 3x3](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/four_three_adaptive/four_three_adaptive.png)
    
    This is the converse of the above layout, i.e., the 4x4 submatrix
    is on top and the 3x3 submatrix is below. The reasoning behind the
    architechture and usage is the same. Is just that now we have top
    part of the template on fourths the bottom part in thirds.
    
## Fixed layouts

<h3 id="twocol-fixed">Two columns</h3>

 1. 63% 37% stacked 
 
    ![two columns 63/37 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/twocol_63_37_stacked/twocol_63_37_stacked.png)

 2. 77% 23% stacked 

    ![two columns 77/23 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/twocol_77_23_stacked/twocol_77_23_stacked.png)

 3. Bricks 25% 75% stacked 

    ![two column bricks 72/25 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/bricks_25_75_stacked/bricks_25_75_stacked.png)

 4. 70% 30% stacked
 
    ![two column bricks 70/30 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/twocol_70_30_stacked/twocol_70_30_stacked.png)
 
 5. 30% 70% stacked
 
    ![two column bricks 30/70 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/twocol_30_70_stacked/twocol_30_70_stacked.png)
 
<h3 id="threecol-fixed">Three columns</h3>


 1. 42% 29% 29% stacked 

    ![three columns 42 29 29 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/threecol_42_29_29_stacked/threecol_42_29_29_stacked.png)

 2. 44% 37% 19% stacked 

    ![three columns 44 37 19 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/threecol_44_37_19_stacked/threecol_44_37_19_stacked.png)

 3. 44% 35% 21% stacked 

    ![three columns 44 35 21 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/threecol_44_35_21_stacked/threecol_44_35_21_stacked.png)

 4. 15% 70% 15% stacked
 
    ![three columns 25 70 15 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/threecol_15_70_15_stacked/threecol_15_70_15_stacked.png)
 
 5. 7% 62% 31%
 
    ![three columns 7 62 31 stacked](https://github.com/perusio/panels_extra_layouts/raw/7.x-1.x/plugins/layouts/threecol_7_62_31/threecol_7_62_31.png)

## Using this module as an example and contributing back

You can use this module as an example of a CTools layout
plugin. Imagine that we can create a central repository of layout
plugins. Albeit being true that creating a layout plugin is not
terribly hard, time can be saved if there's a plethora of available
layouts to choose from.

Please contribute back to this project by providing your
layouts. Place a
[pull request](http://help.github.com/pull-requests/).
