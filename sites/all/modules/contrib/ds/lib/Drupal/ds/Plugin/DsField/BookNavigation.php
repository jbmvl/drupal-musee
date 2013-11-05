<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\BookNavigation.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that the book naviation.
 *
 * @DsField(
 *   id = "book_navigation",
 *   title = @Translation("Book navigation"),
 *   entity_type = "node",
 *   provider = "book"
 * )
 */
class BookNavigation extends DsFieldBase {

  /**
   * {@inheritdoc}
   */
  public function isAllowed($bundle, $view_mode) {

    // We only allow the 'full' view mode
    if ($view_mode != 'full') {
      return FALSE;
    }

    // Get all the allowed types
    $types = \Drupal::config('book.settings')->get('allowed_types');

    $displays = array();
    if (!empty($types)) {
      foreach ($types as $type) {
        if ($type)
         return TRUE;
      }
    }

    // Return false when there where no displays
    return FALSE;
  }

}
