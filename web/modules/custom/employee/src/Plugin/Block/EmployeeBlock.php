<?php

/**
 * @file
 * Contains \Drupal\employee\Plugin\Block\EmployeeBlock.
 */

namespace Drupal\employee\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'employee' block.
 *
 * @Block(
 *   id = "employee_block",
 *   admin_label = @Translation("Employee block"),
 *   category = @Translation("Employee Form")
 * )
 */
class EmployeeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\employee\Form\WorkForm');

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {

    $config = $this->getConfiguration();

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->configuration['employee_block_settings'] = $values['employee_block_settings'];
  }

}
