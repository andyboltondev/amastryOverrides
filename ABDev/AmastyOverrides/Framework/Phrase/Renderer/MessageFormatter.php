<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare (strict_types = 1);

namespace ABDev\AmastyOverrides\Framework\Phrase\Renderer;

use Magento\Framework\Phrase\RendererInterface;

/**
 * Process texts to resolve ICU MessageFormat
 */
class MessageFormatter extends \Magento\Framework\Phrase\Renderer\MessageFormatter implements RendererInterface {
  // /** @var TranslateInterface */
  // private $translate;

  // /**
  //  * @param TranslateInterface $translate
  //  */
  // public function __construct(TranslateInterface $translate) {
  //   $this->translate = $translate;
  // }

  /**
   * @inheritdoc
   */
  public function render(array $source, array $arguments) {
    $text = end($source);

    if (strpos($text, '{') === false || empty($arguments)) {
      // About 5x faster for non-MessageFormatted strings
      // Only slightly slower for MessageFormatted strings (~0.3x)
      return $text;
    }

    $result = \MessageFormatter::formatMessage($this->translate->getLocale(), $text, $arguments);
    return $result !== false ? $result : $text;
  }
}
