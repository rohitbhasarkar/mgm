<?php

namespace Drupal\ajax_example\Controller;

use Drupal\ajax_example\PseudoTypes\message2;
use Drupal\ajax_example\PseudoTypes\BasicDemoTrait;
use Drupal\Core\Controller\ControllerBase;

/**
 * Class TraitController for Trait demonstrate.
 *
 * @package Drupal\ajax_example\Controller
 */
class TraitController extends ControllerBase {

  use BasicDemoTrait, message2;

  /**
   * Show trait output.
   */
  public function demoTrait() {
    return [
      '#type' => 'markup',
      '#markup' => $this->getMessage(),
    ];
  }

  /**
   * Return traits messages.
   *
   * @return string
   *   Returns string messages.
   */
  public function getMessage() {
    return $this->sendMessage2() . $this->whereAmI();
  }

}
