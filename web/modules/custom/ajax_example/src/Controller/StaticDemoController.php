<?php

namespace Drupal\ajax_example\Controller;

/**
 * Class StaticDemoController demonstrate static functionality.
 *
 * @package Drupal\ajax_example\Controller
 */
class StaticDemoController {

  /**
   * Static function demo.
   *
   * @return string
   *   returns a string message.
   */
  public static function myMessage() {
    return "This is a static function call";
  }

}

echo StaticDemoController::myMessage();
