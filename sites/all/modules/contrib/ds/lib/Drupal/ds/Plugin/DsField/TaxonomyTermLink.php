<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\TaxonomyTermLink.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that renders the the read more link on taxonomy.
 *
 * @DsField(
 *   id = "taxonomy_term_link",
 *   title = @Translation("Read more"),
 *   entity_type = "taxonomy_term",
 *   provider = "taxonomy"
 * )
 */
class TaxonomyTermLink extends Link {

}
