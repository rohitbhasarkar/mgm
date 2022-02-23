<?php

namespace Drupal\ajax_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class TemplateController for twig rendering.
 *
 * @package Drupal\ajax_example\Controller
 */
class TemplateController extends ControllerBase {

  /**
   * Rendering template file.
   *
   * @return array
   *   Returns template with data.
   */
  public function content() {

    return [
      '#theme' => 'my_template_file',
      '#title' => $this->t("my custom template file for twig."),
      '#body' => "   body data for twig.   ",
      '#items' => ["Amravati", "Nagpur", "Pune", "Beed"],
    ];

  }

  /**
   * Rendering template file.
   *
   * @return array
   *   Returns template with data.
   */
  public function secondTemplate() {

    return [
      '#theme' => 'my_second_template_file',
      '#test_var' => $this->t('This is Test Value'),
      '#title' => $this->t("Second Custom Template File."),
    ];

  }

}
