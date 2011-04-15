# Extra layouts for the Panels Drupal module

## Introduction

[Panels](http://drupal.org/project/panels) is one of the most, if not
the most, **powerful** modules for laying out a page in
[Drupal](http://drupal.org/project/drupal).

Panels builds on [CTools](http://drupal.org/project/ctools) which is
a swiss army knife for doing all sorts of elaborated things in Drupal
without having to hack the drupal core.

## Layout Plugins

CTools provides both **style** and **layout** plugins. 

 + Style plugins define styles that are made available to any panel or
   mini-panel. 
   
 + Layout plugins define layouts that are made available to any panel or
   mini-panel.
   
 This module deals only with **layouts**.
 
## Defining a layout
 
To define a layout several things are needed:
 
 1. An include file that defines the plugin array.
  
 2. A template file that defines the layout template.
  
 3. A CSS file that defines the CSS classes for the layout.
  
 4. A Icon that displays a screenshot of the layout geometry.
 
 
Each layout must either be under one of the predefined categories
like `Columns: 2` or define a new category.
 
## What this module does
 
This module defines a set of extra layouts to be used by panels. It
includes the following layouts:
 
### Defined layouts

 1. Two columns 63% 37% stacked 

    ![two columns 63/37 stacked](https://github.com/perusio/panels_extra_layouts/raw/master/plugins/layouts/twocol_63_37_stacked/twocol_63_37_stacked.png)

 2. Two columns 77% 23% stacked 

    ![two columns 77/23 stacked](https://github.com/perusio/panels_extra_layouts/raw/master/plugins/layouts/twocol_77_23_stacked/twocol_77_23_stacked.png)

 3. Two column bricks 25% 75% stacked 

    ![two column bricks 72/25 stacked](https://github.com/perusio/panels_extra_layouts/raw/master/plugins/layouts/bricks_25_75_stacked/bricks_25_75_stacked.png)

 4. Three columns 42% 29% 29% stacked 

    ![three columns 42 29 29 stacked](https://github.com/perusio/panels_extra_layouts/raw/master/plugins/layouts/threecol_42_29_29_stacked/threecol_42_29_29_stacked.png)

 5. Three columns 44% 37% 19% stacked 

    ![three columns 44 37 19 stacked](https://github.com/perusio/panels_extra_layouts/raw/master/plugins/layouts/threecol_44_37_19_stacked/threecol_44_37_19_stacked.png)

 6. Three columns 44% 35% 21% stacked 

    ![three columns 44 35 21 stacked](https://github.com/perusio/panels_extra_layouts/raw/master/plugins/layouts/threecol_44_35_21_stacked/threecol_44_35_21_stacked.png)

## Using this module as an example and contributing back

You can use this module as an example of a CTools layout
plugin. Imagine that we can create a central repository of layout
plugins. Albeit being true that creating a layout plugin is not
terribly hard, time can be saved if there's a plethora of available
layouts to choose from.

Please contribute back to this project by providing your
layouts. Place a
[pull request](http://help.github.com/pull-requests/).
