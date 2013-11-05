<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\User.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that renders a view mode.
 *
 * @DsField(
 *   id = "user",
 *   title = @Translation("User"),
 *   entity_type = "node",
 *   provider = "user"
 * )
 */
class User extends Entity {

  /**
   * {@inhertidoc}
   */
  public function render($field) {
    $view_mode = $this->getViewMode($field);

    $node = $field['entity'];
    $uid = $node->getAuthorId();

    $user = entity_load('user', $uid);
    $build = entity_view($user, $view_mode);

    return drupal_render($build);
  }

  /**
   * {@inhertidoc}
   */
  public function entity() {
    return 'user';
  }

}
