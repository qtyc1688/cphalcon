<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Storage\Serializer\Msgpack;

use Phalcon\Storage\Serializer\Msgpack;
use UnitTester;

/**
 * Class SerializeCest
 */
class SerializeCest
{
    /**
     * Tests Phalcon\Storage\Serializer\Msgpack :: serialize()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-03-30
     */
    public function storageSerializerMsgpackSerialize(UnitTester $I)
    {
        $I->wantToTest('Storage\Serializer\Msgpack - serialize()');
        $data       = ["Phalcon Framework"];
        $serializer = new Msgpack($data);

        $expected = msgpack_pack($data);
        $actual   = $serializer->serialize();
        $I->assertEquals($expected, $actual);
    }
}
