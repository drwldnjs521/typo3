<?php

declare(strict_types=1);

/*
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

namespace TYPO3\CMS\Install\Compatibility;

use TYPO3\CMS\Core\Http\Uri;
use TYPO3\CMS\Extbase\SignalSlot\Dispatcher as SignalSlotDispatcher;
use TYPO3\CMS\Install\Service\Event\ModifyLanguagePackRemoteBaseUrlEvent;

/**
 * This class provides a replacement for all existing signals in EXT:install of TYPO3 Core, which now act as a
 * simple wrapper for PSR-14 events with a simple ("first prioritized") listener implementation.
 *
 * @internal Please note that this class will likely be removed in TYPO3 v11, and Extension Authors should
 * switch to PSR-14 event listeners.
 */
class SlotReplacement
{
    /**
     * @var SignalSlotDispatcher
     */
    protected $signalSlotDispatcher;

    public function __construct(SignalSlotDispatcher $signalSlotDispatcher)
    {
        $this->signalSlotDispatcher = $signalSlotDispatcher;
    }

    public function onLanguagePackProcessMirrorUrl(ModifyLanguagePackRemoteBaseUrlEvent $event): void
    {
        $languagePackBaseUrl = (string)$event->getBaseUrl();
        $this->signalSlotDispatcher->dispatch(
            'TYPO3\\CMS\\Lang\\Service\\TranslationService',
            'postProcessMirrorUrl',
            [
                'extensionKey' => $event->getPackageKey(),
                'mirrorUrl' => &$languagePackBaseUrl,
            ]
        );
        $event->setBaseUrl(new Uri($languagePackBaseUrl));
    }
}
