<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\CommentUserSignature.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that renders the user signature of a comment.
 *
 * @DsField(
 *   id = "comment_user_signature",
 *   title = @Translation("User signature"),
 *   entity_type = "comment",
 *   provider = "comment"
 * )
 */
class CommentUserSignature extends UserSignature {

  /**
   * {@inheritdoc}
   */
  public function render($field) {
    $comment = $field['entity'];
    $user_id = $comment->uid->target_id;
    $user = entity_load('user', $user_id);

    $key = $this->key();
    if (isset($user->{$key}->value)) {
      $format = $this->format();
      return check_markup($user->{$key}->value, $user->{$format}->value, '', TRUE);
    }
  }

}
