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

namespace PHPCR\Shell\Console\Helper;

class TextHelperTest extends \PHPUnit_Framework_TestCase
{
    protected $textHelper;

    public function setUp()
    {
        $this->textHelper = new TextHelper();
    }

    public function provideTruncate()
    {
        return [
            [
                'this is some text',
                5,
                null,
                null,
                'th...',
            ],
            [
                'this is some text',
                5,
                'right',
                null,
                '...xt',
            ],
            [
                'this is some text',
                5,
                'right',
                '-',
                '-text',
            ],
            [
                'th',
                5,
                'right',
                '-',
                'th',
            ],
            [
                'this is some more text',
                5,
                'right',
                '-----',
                '-----',
            ],
            [
                'this is some more text',
                5,
                'right',
                '--------',
                '-----',
                'Delimiter length "8" cannot be greater',
            ],
        ];
    }

    /**
     * @dataProvider provideTruncate
     */
    public function testTruncate($text, $length, $alignment, $truncateString, $expected, $expectedException = null)
    {
        if ($expectedException) {
            $this->setExpectedException('InvalidArgumentException', $expectedException);
        }
        $res = $this->textHelper->truncate($text, $length, $alignment, $truncateString);
        $this->assertEquals($expected, $res);
    }
}
