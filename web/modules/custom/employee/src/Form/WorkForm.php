<?php

namespace Drupal\employee\Form;

/**
 * @file
 * Contains \Drupal\employee\Form\WorkForm.
 */

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the form for adding employee details.
 */
class WorkForm extends FormBase {
  /**
   * Drupal\Core\Messenger\MessengerInterface definition.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;

  /**
   * WorkForm constructor.
   *
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   Messenger service.
   */
  public function __construct(
    MessengerInterface $messenger
  ) {
    $this->messenger = $messenger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'employee_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['employee_name'] = [
      '#type' => 'textfield',
      '#title' => t('Employee Name:'),
      '#required' => TRUE,
    ];

    $form['employee_number'] = [
      '#type' => 'number',
      '#title' => t('Employee Number:'),
      '#required' => TRUE,
    ];
    $form['employee_mail'] = [
      '#type' => 'email',
      '#title' => t('Email ID:'),
      '#required' => TRUE,
    ];
    $form['employee_address'] = [
      '#type' => 'textarea',
      '#row' => '4',
      '#title' => t('Employee Address:'),
      '#required' => TRUE,
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    ];
    return $form;
  }

  /**
   * Validate the employee number of the form.
   *
   * @param array $form
   *   Array form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Array form_state.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('employee_number')) < 10) {
      $form_state->setErrorByName('employee_number', $this->t('Mobile number is too short.'));
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
    try {
      $field = $form_state->getValues();

      $fields["employee_name"] = $field['employee_name'];
      $fields["mobile_number"] = $field['employee_number'];
      $fields["email_id"] = $field['employee_mail'];
      $fields["address"] = $field['employee_address'];
      // $fields["created"] = '0.000';
      $conn = Database::getConnection();
      $conn->insert('employee')->fields($fields)->execute();
      $this->messenger->addMessage($this->t('@emp_name ,Your application is being submitted!', [
        '@emp_name' => $field['employee_name'],
      ]));
    } catch (\Exception $ex) {
      \Drupal::logger('dn_employee')->error($ex->getMessage());
      // Log the exception to watchdog.
      watchdog_exception('type', $ex);
    }

    // Redirect to students record.
    // $url = Url::fromRoute('view.students_record.student_page');
    // $form_state->setRedirectUrl($url);
  }

}
