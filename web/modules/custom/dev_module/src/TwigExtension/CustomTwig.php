<?php

namespace Drupal\dev_module\TwigExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Custom twig functions.
 *
 * @package Drupal\dev_module
 */
class CustomTwig extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return [
      new TwigFilter('replace_wth_x', [$this, 'replaceWithX']),
    ];
  }

  /**
   * Replace string with x.
   *
   * @param string $text
   *   Take a text input.
   *
   * @return null|string|string[]
   *   Returns formatted string.
   */
  public function replaceWithX($text) {
    $text = preg_replace('/[^\s]/', 'x', $text);
    return $text;
  }

  /**
   * Get all twig functions.
   *
   * @return array|\Twig\TwigFunction[]
   *   Returns output.
   */
  public function getFunctions() {
    return [
      new TwigFunction('print_author', [$this, 'printAuthor']),
      new TwigFunction('add_number', [$this, 'addNumber']),
    ];
  }

  /**
   * Print author name.
   */
  public function printAuthor() {
    $currentAccount = \Drupal::currentUser();
    // $output = fopen('php://memory', 'r+b');
    // echo "<pre>" . print_r($currentAccount) . "</pre>";

    return $currentAccount->getAccountName();
  }

  /**
   * Print addition of numbers.
   *
   * @param int $num1
   *   First number.
   * @param int $num2
   *   Second number.
   *
   * @return int
   *   Returns addition.
   */
  public function addNumber($num1, $num2) {
    return $num1 + $num2;
  }

}
