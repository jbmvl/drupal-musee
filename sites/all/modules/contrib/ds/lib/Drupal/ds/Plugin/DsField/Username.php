<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\Username.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that renders the username.
 *
 * @DsField(
 *   id = "username",
 *   title = @Translation("Username"),
 *   entity_type = "user",
 *   provider = "user"
 * )
 */
class Username extends Title {

  /**
   * {@inheritdoc}
   */
  public function entityRenderKey() {
    return 'name';
  }

}
