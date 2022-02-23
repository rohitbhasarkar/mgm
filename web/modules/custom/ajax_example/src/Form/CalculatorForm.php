<?php

namespace Drupal\ajax_example\Form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class AjaxForm for creating simple AJAX Examples.
 *
 * @package Drupal\ajax_example\Form
 */
class CalculatorForm extends FormBase {
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
    return 'ajax_example_calculator_form';
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

    // $form['#attached']['library'][] = 'ajax_example/ajax_example_dialog';
    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('Ajax Functionality without submitting form.'),
    ];
    $form['my_message'] = [
      '#type' => 'text',
      '#title' => $this->t('Your Message'),
      '#description' => $this->t('Type your message.'),
      '#required' => TRUE,
    ];
    $form['value_one'] = [
      '#type' => 'number',
      '#step' => 'any',
      '#title' => $this->t('1st Number'),
      '#description' => $this->t('Enter the 1st Number.'),
      '#required' => TRUE,
    ];
    $form['value_two'] = [
      '#type' => 'number',
      '#step' => 'any',
      '#title' => $this->t('2nd Number'),
      '#description' => $this->t('Enter the 2nd Number.'),
      '#required' => TRUE,
    ];

    $operations = [
      '' => $this->t('--Select One--'),
      'add' => $this->t('Addition (+)'),
      'sub' => $this->t('Subtraction (-)'),
      'mul' => $this->t('Multiplication (*)'),
      'div' => $this->t('Division (/)'),
    ];
    $form['operation'] = [
      '#title' => $this->t('Select Operation'),
      '#type' => 'select',
      '#description' => $this->t("Select the operation you want to perform."),
      '#options' => $operations,
      '#required' => TRUE,
    ];
    $form['actions'] = [
      '#type' => 'button',
      '#value' => $this->t('Calculate'),
      '#ajax' => [
        'callback' => '::calculateResult',
      ],
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

  /**
   * Calculate result and fill textbox with the result.
   *
   * @param array $form
   *   Array form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Array form_state.
   *
   * @return mixed
   *   AJAX response return
   */
  public function calculateResult(array &$form, FormStateInterface $form_state) {
    $selectedText = 'Nothing Selected';
    $field = $form_state->getValues();
    $operation = $field['operation'];
    $result = 0;
    if ($selectedValue = $operation) {
      // Get the text of the selected option.
      $selectedText = $form['operation']['#options'][$selectedValue];

      $value_one = $field['value_one'];
      $value_two = $field['value_two'];

      switch ($operation) {
        case 'add':
          $result = $value_one + $value_two;
          break;

        case 'sub':
          $result = $value_one - $value_two;
          break;

        case 'mul':
          $result = $value_one * $value_two;
          break;

        case 'div':
          $result = $value_one / $value_two;
          break;

        default:
          $result = 0;
      }

    }
    // Create a new textfield element containing the selected text.
    $elem = [
      '#type' => 'textfield',
      '#size' => '60',
      '#disabled' => TRUE,
      '#value' => "Result is: $result!",
      '#attributes' => [
        'id' => ['result-output'],
      ],
    ];

    // Attach the javascript library for the dialog box command
    // in the same way you would attach your custom JS scripts.
    $dialogText['#attached']['library'][] = 'core/drupal.dialog.ajax';
    $dialogText['#markup'] = "Result: $result";

    // If we want to execute AJAX commands our callback needs to return
    // an AjaxResponse object. let's create it and add our commands.
    $response = new AjaxResponse();
    // Issue a command that replaces the element #result-output
    // with the rendered markup of the field created above.
    // ReplaceCommand() will take care of rendering our text field into HTML.
    $response->addCommand(new ReplaceCommand('#result-output', $elem));
    // Show the dialog box.
    $response->addCommand(new OpenModalDialogCommand($selectedText, $dialogText, ['width' => '300']));

    return $response;
  }

}
