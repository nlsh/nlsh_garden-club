<?php
/**
 * PHPUnitTest
 *
 * PHPUnitTest der Klasse NlshGardenClub
 *
 * @package   nlsh_NlshGardenClub
 * @author    Nils Heinold
 * @copyright Nils Heinold (c) 2020
 * @link      https://github.com/nlsh/nlsh_garden-club
 * @license   LGPL
 */

use PHPUnit\Framework\TestCase;
use NlshGardenClub\classes\NlshGardenClub;

/**
 * Test- Klasse
 */
class NlshGardenClubTest extends TestCase
{

    /**
     * Testobjekt durch Klasse NlshGardenClub erzeugen
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = new NlshGardenClub();

    }//end setUp()

    /**
     * Testobjekt wieder löschen!
     *
     * Nach jedem Durchlauf einer Test- Methode
     * wird das zu testende Objekt wieder gelÃ¶scht.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        $this->object = false;

    }//end tearDown()

}//end class
