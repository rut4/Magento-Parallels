<?php
/**
 * Oggetto Web Parallels extension for Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade
 * the Oggetto Parallels module to newer versions in the future.
 * If you wish to customize the Oggetto Parallels module for your needs
 * please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Oggetto
 * @package    Oggetto_Parallels
 * @copyright  Copyright (C) 2014
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Parallels driver system source test
 *
 * @category   Oggetto
 * @package    Oggetto_Parallels
 * @subpackage Test
 * @author     Eduard Paliy <epaliy@oggettoweb.com>
 */
class Oggetto_Parallels_Test_Model_Driver_SystemSource extends EcomDev_PHPUnit_Test_Case
{
    /**
     * Test returns drivers as option array
     *
     * @return void
     */
    public function testReturnsDriversAsOptionArray()
    {
        $this->assertEquals([
            'exec' => 'Exec',
            'mq'   => 'MQ messenger'
        ], Mage::getModel('parallels/driver_systemSource')->toOptionArray());
    }
}
