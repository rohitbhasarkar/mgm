<?php

namespace Drupal\dev_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ModuleController for demo.
 *
 * @package Drupal\dev_module\Controller
 */
class ModuleController extends ControllerBase {

  /**
   * Return html response.
   *
   * @return mixed
   *   returns html format.
   */
  public function myData() {
    return new Response('<html><body>Hello, Word! </body></html>');
  }

  /**
   * Check Json output.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   Returning json format data.
   */
  public function sayHelloJson() {
    $data['type'] = 'JSON';
    return new JsonResponse($data);
  }

  /**
   * Rendering template file.
   *
   * @return array
   *   Returns replace data on template file.
   */
  public function demoTemplate() {

    return [
      '#theme' => 'my_demo_template',
      '#curr_string' => $this->t('This is Test Data'),
    ];

  }

}
