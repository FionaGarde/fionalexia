<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicesFixture
 */
class ServicesFixture extends TestFixture
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
                'start' => '15:03:35',
                'end' => '15:03:35',
                'staff_id' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-03-11 15:03:35',
                'modified' => '2022-03-11 15:03:35',
            ],
        ];
        parent::init();
    }
}
