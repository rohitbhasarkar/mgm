<?php

namespace Drupal\student\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\TempStore\PrivateTempStoreFactory;

/**
 * Class HelloForm.
 *
 * @package Drupal\student\Form
 */
class HelloForm extends FormBase {
  /**
   * Tempstore service.
   *
   * @var \Drupal\Core\TempStore\PrivateTempStoreFactory
   */
  protected $tempStoreFactory;
  /**
   * Messenger service.
   *
   * @var \\Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;
  /**
   * The module request.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $requestStack;

  /**
   * HelloForm constructor.
   *
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   *   The module request.
   * @param PrivateTempStoreFactory $tempStoreFactory
   * @param MessengerInterface $messenger
   */
  public function __construct(RequestStack $request_stack,
                              PrivateTempStoreFactory $tempStoreFactory,
                              MessengerInterface $messenger) {
    $this->requestStack = $request_stack;
    $this->tempStoreFactory = $tempStoreFactory;
    $this->messenger = $messenger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('request_stack'),
      $container->get('tempstore.private'),
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
    return 'student_hello_form';
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
    // 1. Get the parameters from the tempstore.
    $tempstore = $this->tempStoreFactory->get('student');
    $params = $tempstore->get('params');
    $candidate_name = $params['candidate_name'];
    $candidate_mail = $params['candidate_mail'];
    $candidate_number = $params['candidate_number'];
    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('Please enter the address and accept the terms of use of the site.'),
    ];

    $form['candidate_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your Entered Candidate Name'),
      '#value' => $candidate_name,
      '#description' => $this->t('Enter the Name of the Candidate.'),
      '#required' => TRUE,
    ];
    $form['candidate_mail'] = [
      '#type' => 'email',
      '#title' => t('Your Entered Email ID'),
      '#value' => $candidate_mail,
      '#required' => TRUE,
    ];
    $form['candidate_number'] = [
      '#type' => 'tel',
      '#value' => $candidate_number,
      '#title' => t('Your Entered Mobile no'),
      '#required' => TRUE,
    ];
    $form['address'] = [
      '#type' => 'textfield',
      '#title' => t('Address'),
      '#description' => $this->t('Enter the Address of the Candidate.'),
      '#required' => TRUE,
    ];

    $form['accept'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('I accept the terms of use of the site'),
      '#description' => $this->t('Please read and accept the terms of use'),
      '#required' => TRUE,
    ];


    // Group submit handlers in an actions element with a key of "actions" so
    // that it gets styled correctly, and so that other modules may add actions
    // to the form. This is not required, but is convention.
    $form['actions'] = [
      '#type' => 'actions',
    ];

    // Add a submit button that handles the submission of the form.
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * Validate the title and the checkbox of the form.
   *
   * @param array $form
   *   Array form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Array form_state.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    $accept = $form_state->getValue('accept');
    if (empty($accept)) {
      // Set an error for the form element with a key of "accept".
      $form_state->setErrorByName('accept', $this->t('You must accept the terms of use to continue'));
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
      $tempstore = $this->tempStoreFactory->get('student');
      $params = $tempstore->get('params');
      $candidate_dob = $params['candidate_dob'];
      $candidate_gender = $params['candidate_gender'];
      $candidate_confirmation = $params['candidate_confirmation'];
      $candidate_copy = $params['candidate_copy'];

      $fields["candidate_name"] = $field['candidate_name'];
      $fields["email_id"] = $field['candidate_mail'];
      $fields["mobile_number"] = $field['candidate_number'];
      $fields["dob"] = $candidate_dob;
      $fields["gender"] = $candidate_gender;
      $fields["address"] = $field['address'];
      $fields["eighteen_old"] = $candidate_confirmation;
      $fields["copy_status"] = $candidate_copy;

      $conn = Database::getConnection();
      $conn->insert('students')->fields($fields)->execute();
      $this->messenger->addMessage($this->t('The Student data has been successfully saved'));

    }
    catch (\Exception $ex) {
      \Drupal::logger('dn_students')->error($ex->getMessage());
      // Log the exception to watchdog.
      watchdog_exception('type', $ex);
    }

    // Redirect to students record.
    $url = Url::fromRoute('view.students_record.student_page');
    $form_state->setRedirectUrl($url);
  }

}
