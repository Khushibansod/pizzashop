<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $regular
 * @property int $medium
 * @property int $large
 * @property int $glutenfree
 * @property int $thincrust
 * @property int $stuffedcrust
 *
 * @property \App\Model\Entity\CartItem[] $cart_items
 */
class Product extends Entity
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
        'name' => true,
        'description' => true,
        'image' => true,
        'regular' => true,
        'medium' => true,
        'large' => true,
        'glutenfree' => true,
        'thincrust' => true,
        'stuffedcrust' => true,
        'cart_items' => true,
    ];
}
