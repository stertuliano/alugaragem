<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Garage Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $address_id
 * @property int $vehicle_type_id
 * @property int $plan_id
 * @property int $payment_type_id
 * @property string $tittle
 * @property string $description
 * @property \Cake\I18n\Time $add_date
 * @property bool $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\VehiclesType $vehicles_type
 * @property \App\Model\Entity\Plan $plan
 * @property \App\Model\Entity\PaymentsType $payments_type
 * @property \App\Model\Entity\GaragesTowhouse[] $garages_towhouses
 * @property \App\Model\Entity\Period[] $periods
 */
class Garage extends Entity
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
