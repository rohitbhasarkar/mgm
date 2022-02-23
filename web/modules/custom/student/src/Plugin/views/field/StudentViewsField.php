<?php

namespace Drupal\student\Plugin\views\field;

use Drupal\Component\Utility\Random;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * A handler to provide a field that is completely custom by the administrator.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("student_views_field")
 */
class StudentViewsField extends FieldPluginBase
{
  /**
   * {@inheritdoc}
   */
  public function usesGroupBy()
  {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function query()
  {
    // Do nothing -- to override the parent query.
  }

  /**
   * {@inheritdoc}
   */
  protected function defineOptions()
  {
    $options = parent::defineOptions();
    $options['counter_start'] = ['default' => 1];
    $options['hide_alter_empty'] = ['default' => FALSE];
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state)
  {
    $form['counter_start'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Starting value'),
      '#default_value' => $this->options['counter_start'],
      '#description' => $this->t('Specify the number the counter should start at.'),
      '#size' => 2,
    ];
    parent::buildOptionsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function render(ResultRow $values)
  {
    // Note:  1 is subtracted from the counter start value below because the
    // counter value is incremented by 1 at the end of this function.
    $count = is_numeric($this->options['counter_start']) ? $this->options['counter_start'] - 1 : 0;
    $pager = $this->view->pager;
    // Get the base count of the pager.
    if ($pager->usePager()) {
      $count += ($pager->getItemsPerPage() * $pager->getCurrentPage() + $pager->getOffset());
    }
    // Add the counter for the current site.
    $count += $this->view->row_index + 1;
    return $count;
  }
}
