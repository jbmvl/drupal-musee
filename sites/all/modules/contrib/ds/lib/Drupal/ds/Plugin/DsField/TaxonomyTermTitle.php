<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\TaxonomyTermTitle.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that renders the title of a term.
 *
 * @DsField(
 *   id = "taxonomy_term_title",
 *   title = @Translation("Name"),
 *   entity_type = "taxonomy_term",
 *   provider = "taxonomy"
 * )
 */
class TaxonomyTermTitle extends Title {

  /**
   * {@inheritdoc}
   */
  public function entityRenderKey() {
    return 'name';
  }

}
