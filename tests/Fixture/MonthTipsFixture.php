<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MonthTipsFixture
 */
class MonthTipsFixture extends TestFixture
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
                'pay' => 1,
                'staff_id' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-03-11 15:03:52',
                'modified' => '2022-03-11 15:03:52',
            ],
        ];
        parent::init();
    }
}
