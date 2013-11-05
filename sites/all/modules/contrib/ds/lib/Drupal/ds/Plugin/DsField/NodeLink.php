<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\NodeTitle.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that renders the 'read more' link of a node.
 *
 * @DsField(
 *   id = "node_link",
 *   title = @Translation("Read more"),
 *   entity_type = "node",
 *   provider = "node"
 * )
 */
class NodeLink extends Link {

}
