<?php

namespace Drupal\ajax_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class BasicController for demonstrating purpose.
 *
 * @package Drupal\ajax_example\Controller
 */
class BasicController extends ControllerBase {

  /**
   * Variable for First name.
   *
   * @var firstName
   */
  protected $firstName;

  /**
   * BasicController constructor.
   */
  public function __construct() {
  }

  /**
   * Set Name of a person.
   *
   * @return string
   *   return a string name.
   */
  public function setName() {
    $this->firstName = "Rohit";
    return $this->firstName;
  }

  /**
   * Get name of a person.
   */
  public function getName() {
    $name = $this->setName();
    return [
      '#type' => 'markup',
      '#markup' => $name,
    ];
  }

}
