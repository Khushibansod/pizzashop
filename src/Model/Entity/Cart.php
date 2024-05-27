<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cart Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property string $name
 * @property string $size
 * @property string $crust
 * @property string $description
 * @property int $quantity
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Product $product
 */
class Cart extends Entity
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
        'image' => true,
        'name' => true,
        'size' => true,
        'crust' => true,
        'description' => true,
        'quantity' => true,
        'user' => true,
        'product' => true,
    ];
}
