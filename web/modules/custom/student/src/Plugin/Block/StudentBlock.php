<?php

namespace Drupal\student\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a block with simple text.
 *
 * @Block(
 *     id = "student_block",
 *     admin_label = @Translation("Student Block with form")
 * )
 */
class StudentBlock extends BlockBase {

  /**
   * Builds and returns the renderable array for this block plugin.
   *
   * If a block should not be rendered because it has no content, then this
   * method must also ensure to return no content: it must then only return an
   * empty array, or an empty array with #cache set (with cacheability metadata
   * indicating the circumstances for it being empty).
   *
   * @return array
   *   A renderable array representing the content of the block.
   *
   * @see \Drupal\block\BlockViewBuilder
   */
  public function build() {
//    return [
//      '#type' => 'markup',
//      '#markup' => 'This is Drupal 9 custom block.',
//    ];

    $form = \Drupal::formBuilder()->getForm('Drupal\student\Form\StudentForm');

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
//    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

//    $form['hello_block_name'] = [
//      '#type' => 'textfield',
//      '#title' => $this->t('Who'),
//      '#description' => $this->t('Who do you want to say hello to?'),
//      '#default_value' => $config['hello_block_name'] ? $config['hello_block_name'] : '',
//    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
//    $this->configuration['student_block_settings'] = $form_state->getValue('student_block_settings');
//    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();
    $this->configuration['student_block_settings'] = $values['student_block_settings'];
  }

}
