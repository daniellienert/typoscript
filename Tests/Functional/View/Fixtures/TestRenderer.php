<?php
namespace TYPO3\TypoScript\Tests\Functional\View\Fixtures;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.TypoScript".           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Test renderer
 */
class TestRenderer extends \TYPO3\TypoScript\TypoScriptObjects\AbstractTsObject {

	/**
	 * {@inheritdoc}
	 *
	 * @return string
	 */
	public function evaluate() {
		$context = $this->tsRuntime->getCurrentContext();
		return 'TestRenderer called' . (isset($context['test']) ? $context['test'] : '');
	}
}
?>