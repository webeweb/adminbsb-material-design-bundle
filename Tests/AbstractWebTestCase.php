<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests;

use DateInterval;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Entity\TestUser;
use WBW\Bundle\CoreBundle\Tests\AbstractWebTestCase as WebTestCase;

/**
 * Abstract web test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests
 * @abstract
 */
abstract class AbstractWebTestCase extends WebTestCase {

    /**
     * {@inheritDoc}
     */
    protected static function setUpUserFixtures(): void {

        $user = new TestUser();
        $user->setUsername("webeweb")
            ->setUsernameCanonical("webeweb")
            ->setEmail("webeweb@github.com")
            ->setEmailCanonical("webeweb@github.com")
            ->setEnabled(true)
            ->setSalt("salt")
            ->setPlainPassword("github")
            ->setConfirmationToken("confirmationToken")
            ->setLastLogin((new DateTime())->sub(new DateInterval("P1D")))
            ->setPasswordRequestedAt(new DateTime());

        /** @var EntityManagerInterface $em */
        $em = static::$kernel->getContainer()->get("doctrine.orm.entity_manager");

        $em->persist($user);
        $em->flush();
    }
}
