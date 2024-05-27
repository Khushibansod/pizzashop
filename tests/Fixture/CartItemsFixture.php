<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CartItemsFixture
 */
class CartItemsFixture extends TestFixture
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
                'product_id' => 1,
                'quantity' => 1,
                'created' => '2024-03-26',
                'modified' => '2024-03-26',
            ],
        ];
        parent::init();
    }
}
