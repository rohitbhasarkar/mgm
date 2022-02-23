<?php

namespace Drupal\ajax_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AjaxController for demonstrating purpose.
 *
 * @package Drupal\ajax_example\Controller
 */
class AjaxController extends ControllerBase {

  /**
   * Display template file.
   *
   * @return array
   *   Returns array template.
   */
  public function content() {

    return [
      '#theme' => 'ajax_example_template',
      '#test_var' => $this->t('Test Value'),
    ];

  }

}
