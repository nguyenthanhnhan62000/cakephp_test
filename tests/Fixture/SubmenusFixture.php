<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubmenusFixture
 */
class SubmenusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'submenus';
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
                'menu_id' => 1,
                'name' => 'Lorem ipsum dolor sit a',
                'status' => 1,
                'created' => '2022-03-05 08:48:55',
                'modified' => '2022-03-05 08:48:55',
            ],
        ];
        parent::init();
    }
}
