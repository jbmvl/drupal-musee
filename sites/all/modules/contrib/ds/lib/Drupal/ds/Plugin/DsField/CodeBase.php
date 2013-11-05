<?php

/**
 * @file
 * Contains \Drupal\ds\Plugin\DsField\CodeBase.
 */

namespace Drupal\ds\Plugin\DsField;

/**
 * The base plugin to create DS code fields.
 */
abstract class CodeBase extends DsFieldBase {

  /**
   * {@inheritdoc}
   */
  public function render($field) {
    $code = $this->code();
    if ($code) {
      $format = $this->format();
      if ($format == 'ds_code' && \Drupal::moduleHandler()->moduleExists('ds_code')) {
        // TODO fix this, use the filter plugin we made to
        //$value = ds_code_php_eval($code, $field['entity'], isset($field['build']) ? $field['build'] : array());
        $value = '';
      }
      else {
        $value = check_markup($code, $format);
      }
      // Token support - check on token property so we don't run every single field through token.
      $uses_tokens = $this->usesTokens();
      if ($uses_tokens == TRUE) {
        $value = token_replace($value, array($field['entity_type'] => $field['entity']), array('clear' => TRUE));
      }
      return $value;
    }
  }

  /**
   * Returns the format of the code field.
   */
  protected function format() {
    return 'plain_text';
  }

  /**
   * Returns the value of the code field.
   */
  protected function code() {
    return '';
  }

  /**
   * Returns if the code makes use of tokens.
   */
  protected function usesTokens() {
    return FALSE;
  }

}
