<?php

namespace Drupal\student\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;
use Drupal\Core\Routing;

/**
 * Provides the form for adding countries.
 */
class SessionSecondForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'student_sessionsecond_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $tempstore = \Drupal::service('tempstore.private')->get('student');
    $fname = $tempstore->get('firstname');

    $form['description'] = [
      '#type' => 'item',
      '#markup' => $fname,
    ];
    $form['fname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name'),
      '#required' => TRUE,
      '#maxlength' => 20,
      '#default_value' => '',
    ];
    $form['sname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Second Name'),
      '#required' => TRUE,
      '#maxlength' => 20,
      '#default_value' => '',
    ];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#button_type' => 'primary',
      '#default_value' => 'Next',
    ];

    return $form;

  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {


  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {


  }

}
