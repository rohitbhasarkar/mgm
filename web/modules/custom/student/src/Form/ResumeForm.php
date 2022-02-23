<?php

namespace Drupal\student\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\TempStore\PrivateTempStoreFactory;

/**
 * Class ResumeForm.
 *
 * @package Drupal\student\Form
 */
class ResumeForm extends FormBase {
  /**
   * Drupal\Core\Messenger\MessengerInterface definition.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;
  /**
   * Drupal\Core\TempStore\PrivateTempStoreFactory definition.
   *
   * @var \Drupal\Core\TempStore\PrivateTempStoreFactory
   */
  private $tempStoreFactory;

  /**
   * Constructs a new WithControllerForm object.
   * @param MessengerInterface $messenger
   * @param PrivateTempStoreFactory $tempStoreFactory
   */
  public function __construct(
    MessengerInterface $messenger,
    PrivateTempStoreFactory $tempStoreFactory
  ) {
    $this->messenger = $messenger;
    $this->tempStoreFactory = $tempStoreFactory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger'),
      $container->get('tempstore.private')
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
    return 'resume_form';
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
    $form['candidate_name'] = [
      '#type' => 'textfield',
      '#title' => t('Candidate Name'),
      '#maxlength' => 40,
      '#required' => TRUE,
    ];
    $form['candidate_mail'] = [
      '#type' => 'email',
      '#title' => t('Email ID'),
      '#maxlength' => 80,
      '#required' => TRUE,
    ];
    $form['candidate_number'] = [
      '#type' => 'tel',
      '#title' => t('Mobile no'),
      '#maxlength' => 10,
      '#required' => TRUE,
    ];
    $form['candidate_dob'] = [
      '#type' => 'date',
      '#title' => t('DOB'),
      '#required' => TRUE,
    ];
    $form['candidate_gender'] = [
      '#type' => 'select',
      '#title' => ('Gender'),
      '#options' => [
        'Female' => t('Female'),
        'male' => t('Male'),
      ],
    ];
    $form['candidate_confirmation'] = [
      '#type' => 'radios',
      '#title' => ('Are you above 18 years old?'),
      '#options' => [
        'Yes' => t('Yes'),
        'No' => t('No'),
      ],
    ];
    $form['candidate_copy'] = [
      '#type' => 'checkbox',
      '#title' => t('Send me a copy of the application.'),
    ];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Next'),
      '#button_type' => 'primary',
    ];
    return $form;
  }

  /**
   * Validate the candidate number of the form.
   *
   * @param array $form
   *   Array form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Array form_state.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('candidate_number')) < 10) {
      $form_state->setErrorByName('candidate_number', $this->t('Mobile number is too short.'));
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
    // 1. Set the $params array with the values of the form
    // to save those values in the store.
    $params['candidate_name'] = $form_state->getValue('candidate_name');
    $params['candidate_mail'] = $form_state->getValue('candidate_mail');
    $params['candidate_number'] = $form_state->getValue('candidate_number');
    $params['candidate_dob'] = $form_state->getValue('candidate_dob');
    $params['candidate_gender'] = $form_state->getValue('candidate_gender');
    $params['candidate_confirmation'] = $form_state->getValue('candidate_confirmation');
    $params['candidate_copy'] = $form_state->getValue('candidate_copy');
    // 2. Create a PrivateTempStore object with the collection 'student'.
    $tempstore = $this->tempStoreFactory->get('student');
    // 3. Store the $params array with the key 'params'.
    try {
      $tempstore->set('params', $params);
      // 4. Redirect to second form.
      $form_state->setRedirect('student.hello_form');
    }
    catch (\Exception $error) {
      // Store this error in the log.
      $this->loggerFactory->get('student')->alert(t('@err', ['@err' => $error]));
      // Show the user a message.
      $this->messenger->addWarning(t('Unable to proceed, please try again.'));
    }
  }

}
