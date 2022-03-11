<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tip Entity
 *
 * @property int $id
 * @property string $numberTable
 * @property string $amountTable
 * @property string $payment
 * @property string $amountTip
 * @property string $staff_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Staff $staff
 */
class Tip extends Entity
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
        'numberTable' => true,
        'amountTable' => true,
        'payment' => true,
        'amountTip' => true,
        'staff_id' => true,
        'created' => true,
        'modified' => true,
        'staff' => true,
    ];
}
