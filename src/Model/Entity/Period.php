<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Period Entity
 *
 * @property int $id
 * @property int $garage_id
 * @property string $name
 * @property \Cake\I18n\Time $start_time
 * @property \Cake\I18n\Time $end_time
 * @property bool $available
 *
 * @property \App\Model\Entity\Garage $garage
 */
class Period extends Entity
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
