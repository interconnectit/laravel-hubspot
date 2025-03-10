<?php

namespace STS\HubSpot\Crm;

use AllowDynamicProperties;
use STS\HubSpot\Api\Association;
use STS\HubSpot\Api\Collection;
use STS\HubSpot\Api\Model;

/**
 * @method Association companies()
 * @method Association deals()
 * @property-read Company|null $company
 * @property-read Collection $companies
 * @property-read Deal|null $deal
 * @property-read Collection $deals
 */

#[AllowDynamicProperties]
class Contact extends Model
{
    protected string $type = "contacts";
}
