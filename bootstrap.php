<?php
/*
Author: Rory Murphy
Version: 1.0.0
License: Modified MIT License - See LICENSE.TXT
For more great plugins, code snippets, and ideas, see my GitHub at https://github.com/rorymurphy/
*/

function generate_bootstrap_less_file($dirname, $options){
    ob_start();
    ?>
/*!
 * Bootstrap v2.2.2
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */

// CSS Reset
@import "<?php print $dirname; ?>/reset.less";

// Core variables and mixins
@import "variables.less"; // Modify this for custom colors, font-sizes, etc
@import "<?php print $dirname; ?>/mixins.less";

// Grid system and page structure
@import "<?php print $dirname; ?>/scaffolding.less";
@import "<?php print $dirname; ?>/grid.less";
@import "<?php print $dirname; ?>/layouts.less";

// Base CSS
@import "<?php print $dirname; ?>/type.less";
@import "<?php print $dirname; ?>/code.less";
@import "<?php print $dirname; ?>/forms.less";
@import "<?php print $dirname; ?>/tables.less";

// Components: common
@import "<?php print $dirname; ?>/sprites.less";
@import "<?php print $dirname; ?>/dropdowns.less";
@import "<?php print $dirname; ?>/wells.less";
@import "<?php print $dirname; ?>/component-animations.less";
@import "<?php print $dirname; ?>/close.less";

// Components: Buttons & Alerts
@import "<?php print $dirname; ?>/buttons.less";
@import "<?php print $dirname; ?>/button-groups.less";
@import "<?php print $dirname; ?>/alerts.less"; // Note: alerts share common CSS with buttons and thus have styles in buttons.less

// Components: Nav
@import "<?php print $dirname; ?>/navs.less";
@import "<?php print $dirname; ?>/navbar.less";
@import "<?php print $dirname; ?>/breadcrumbs.less";
@import "<?php print $dirname; ?>/pagination.less";
@import "<?php print $dirname; ?>/pager.less";

// Components: Popovers
@import "<?php print $dirname; ?>/modals.less";
@import "<?php print $dirname; ?>/tooltip.less";
@import "<?php print $dirname; ?>/popovers.less";

// Components: Misc
@import "<?php print $dirname; ?>/thumbnails.less";
@import "<?php print $dirname; ?>/media.less";
@import "<?php print $dirname; ?>/labels-badges.less";
@import "<?php print $dirname; ?>/progress-bars.less";
@import "<?php print $dirname; ?>/accordion.less";
@import "<?php print $dirname; ?>/carousel.less";
@import "<?php print $dirname; ?>/hero-unit.less";

// Utility classes
@import "<?php print $dirname; ?>/utilities.less"; // Has to be last to override when necessary

<?php
    $result=ob_get_contents();
    ob_end_clean();
    return $result;

} ?>