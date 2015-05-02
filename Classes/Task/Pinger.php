<?php
namespace Cretection\CrtDevipmask\Task;
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
/**
 * Scheduler task doing GET-Requests.
 *
 * @author Gernot Leitgab <typo3@webentwickler.at>
 */
class Pinger extends \TYPO3\CMS\Scheduler\Task\AbstractTask {
	/**
	 * URL
	 *
	 * @var string
	 */
	public $url;
	/**
	 * Function execute from the Scheduler
	 *
	 * @return bool TRUE on successful execution, FALSE on error
	 */
	public function execute() {
		return true;
	}
	/**
	 * This method returns the configured URL as additional information
	 *
	 * @return string
	 */
	public function getAdditionalInformation() {
		$message = sprintf(
			$GLOBALS['LANG']->sL('LLL:EXT:crt_devipmask/Resources/Private/Language/locallang.xlf:label.getUrl.additionalInformationUrl'),
			$this->url
		);
		return $message;
	}
}