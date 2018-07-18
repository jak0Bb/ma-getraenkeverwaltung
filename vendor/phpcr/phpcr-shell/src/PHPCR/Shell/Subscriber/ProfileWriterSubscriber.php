<?php

/*
 * This file is part of the PHPCR Shell package
 *
 * (c) Daniel Leech <daniel@dantleech.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace PHPCR\Shell\Subscriber;

use PHPCR\Shell\Config\ProfileLoader;
use PHPCR\Shell\Event\PhpcrShellEvents;
use PHPCR\Shell\Event\ProfileInitEvent;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ProfileWriterSubscriber implements EventSubscriberInterface
{
    protected $profileLoader;
    protected $questionHelper;

    public static function getSubscribedEvents()
    {
        return [
            PhpcrShellEvents::PROFILE_INIT => 'handleProfileInit',
        ];
    }

    public function __construct(ProfileLoader $profileLoader, $questionHelper)
    {
        $this->profileLoader = $profileLoader;
        $this->questionHelper = $questionHelper;
    }

    public function handleProfileInit(ProfileInitEvent $e)
    {
        $profile = $e->getProfile();
        $input = $e->getInput();
        $output = $e->getOutput();
        $noInteraction = $input->getOption('no-interaction');
        $transport = $input->getOption('transport');
        $profileName = $input->getOption('profile');

        // if both transport and profile specified, then user wants
        // to create or update an existing profile
        if ($profileName && $transport) {
            $profile->setName($profileName);
            $overwrite = false;

            if (file_exists($this->profileLoader->getProfilePath($profileName))) {
                $res = true;
                if (false === $noInteraction) {
                    $res = $this->questionHelper->ask($input, $output, new ConfirmationQuestion(sprintf('Update existing profile "%s"?', $profileName)));
                }
                $overwrite = true;
            } else {
                $res = true;

                if (false === $noInteraction) {
                    $res = $this->questionHelper->ask($input, $output, new ConfirmationQuestion(sprintf('Create new profile "%s"?', $profileName)));
                }
            }

            if ($res) {
                $this->profileLoader->saveProfile($profile, $overwrite);
            }
        }
    }
}
