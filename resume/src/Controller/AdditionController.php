<?php

/**
 * @file
 * Contains \drupal\resume\Controller\AdditionController
 */

namespace Drupal\resume\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class AdditionController extends ControllerBase {

  public function add($first, $second, $third) {

    $total[] = $first + $second + $third;

    $render_array['addition_arguments'] = array(
      // The theme function to apply to the #items
      '#theme' => 'item_list',
      // The list itself.
      '#items' => $total ,
      '#title' => $this->t('Addition of 3 values'),
    );
    return $render_array;
  }
}
?>





