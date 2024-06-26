<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Checkout Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string $crust
 * @property string $size
 * @property int $quantity
 *
 * @property \App\Model\Entity\Product $product
 */
class Checkout extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'product_id' => true,
        'name' => true,
        'image' => true,
        'description' => true,
        'crust' => true,
        'size' => true,
        'quantity' => true,
        'product' => true,
    ];
}
