<?php

namespace DealerInventory\Client\Dto;

/**
 * @property string name
 * @property string email
 * @property string phone
 * @property string how
 * @property string offer
 * @property string message
 */
class MessageDto extends Base
{
    /** @var string */
    public $vehicle_slug;
}
