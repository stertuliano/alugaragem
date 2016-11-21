<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property int $city_id
 * @property string $address
 * @property float $number
 * @property string $complement
 * @property string $neighborhood
 * @property string $zipcode
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Garage[] $garages
 * @property \App\Model\Entity\Townhouse[] $townhouse
 * @property \App\Model\Entity\User[] $users
 */
class Address extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
