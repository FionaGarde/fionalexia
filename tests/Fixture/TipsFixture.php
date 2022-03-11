<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipsFixture
 */
class TipsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'numberTable' => 'Lorem ipsum dolor sit amet',
                'amountTable' => 'Lorem ipsum dolor sit amet',
                'payment' => 'Lorem ipsum dolor ',
                'amountTip' => 'Lorem ipsum dolor sit amet',
                'staff_id' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-03-11 15:03:44',
                'modified' => '2022-03-11 15:03:44',
            ],
        ];
        parent::init();
    }
}
