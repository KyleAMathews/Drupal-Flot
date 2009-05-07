<?php
// $Id: flot-views-summary-style.tpl.php,v 1.1.2.1 2009/05/07 20:10:33 yhahn Exp $

/**
 * @file flot-views-summary-style.tpl.php
 * Template to display a flot summary view.
 *
 * - $element : An array representation of the flot DOM element.
 * - $data: A flotData object.
 * - $options: A flotStyle object.
 */
?>

<div class="views-flot <?php print $chart_type ?>">
  <?php print theme('flot_graph', $element, $data, $options); ?>
</div>
