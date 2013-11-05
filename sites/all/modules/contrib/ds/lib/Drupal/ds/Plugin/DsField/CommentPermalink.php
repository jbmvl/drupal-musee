<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\CommentPermalink.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * Plugin that renders the permalink of a comment.
 *
 * @DsField(
 *   id = "comment_permalink",
 *   title = @Translation("Permalink"),
 *   entity_type = "comment",
 *   provider = "comment"
 * )
 */
class CommentPermalink extends PreprocessBase {

}
