<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property string $service
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\MonthTip[] $month_tips
 * @property \App\Model\Entity\Service[] $services
 * @property \App\Model\Entity\Tip[] $tips
 */
class Staff extends Entity
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
        'lastname' => true,
        'firstname' => true,
        'service' => true,
        'created' => true,
        'modified' => true,
        'month_tips' => true,
        'services' => true,
        'tips' => true,
    ];
}
