<?php

namespace Nidavellir\Trading\Models;

use Nidavellir\Trading\Abstracts\AbstractModel;

class Exchange extends AbstractModel
{
    public function symbols()
    {
        return $this->belongsToMany(Symbol::class);
    }
}
