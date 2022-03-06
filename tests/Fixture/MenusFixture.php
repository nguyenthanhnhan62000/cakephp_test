<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MenusFixture
 */
class MenusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'menus';
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
                'name' => 'Lorem ipsum dolor sit a',
                'status' => 1,
                'created' => '2022-03-05 07:22:36',
                'modified' => '2022-03-05 07:22:36',
            ],
        ];
        parent::init();
    }
}
