<?php

namespace Drupal\dev_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class DummyForm for field type change.
 *
 * @package Drupal\dev_module\Form
 */
class DummyForm extends FormBase {
  /**
   * Messenger service.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;
  /**
   * The module request.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $requestStack;

  /**
   * AjaxForm constructor.
   *
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   *   The module request.
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   Messenger request.
   */
  public function __construct(RequestStack $request_stack,
                              MessengerInterface $messenger) {
    $this->requestStack = $request_stack;
    $this->messenger = $messenger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('request_stack'),
      $container->get('messenger')
    );
  }

  /**
   * Returns a unique string identifying the form.
   *
   * The returned ID should be a unique string that can be a valid PHP function
   * name, since it's used in hook implementation names such as
   * hook_form_FORM_ID_alter().
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'dev_module_field_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form_state->setMethod('GET');

    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('Changing field type of form.'),
    ];
    $form['my_message'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your Message'),
      '#placeholder' => $this->t('Enter your message'),
      '#description' => $this->t('Type your message.'),
      '#required' => TRUE,
    ];
    $form['actions'] = [
      '#type' => 'button',
      '#value' => $this->t('Submit'),
    ];
    return $form;
  }

  /**
   * Validate the numbers of the form.
   *
   * @param array $form
   *   Array form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Array form_state.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    $value_one = $form_state->getValue('value_one');
    $value_two = $form_state->getValue('value_two');
    if (empty($value_one)) {
      // Set an error for the form element with a key of "value_one".
      $form_state->setErrorByName('value_one', $this->t('You must enter a 1st valid number to continue'));
    }
    if (empty($value_two)) {
      // Set an error for the form element with a key of "value_two".
      $form_state->setErrorByName('value_two', $this->t('You must enter a 2nd valid number to continue'));
    }
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

}
