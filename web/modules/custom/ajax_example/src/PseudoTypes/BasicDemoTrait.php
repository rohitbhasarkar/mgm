<?php

namespace Drupal\ajax_example\PseudoTypes;

/**
 * Trait BasicDemoTrait demo.
 *
 * @package Drupal\ajax_example\PseudoTypes
 */
trait BasicDemoTrait {

  /**
   * Calling trait function for demonstrate.
   */
  public function whereAmI() {
    return "<br>" . __CLASS__ . "<br>" . 'On Line' . __LINE__ . '<br>';
  }

}

/**
 * Trait message2 for send message2.
 */
trait message2 {

  /**
   * Send message function 2.
   */
  public function sendMessage2() {
    return "This is trait message 2";
  }

}
