<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Infra;

use Danilocgsilva\DevCenter\Entities\VM;

interface VMInterface
{
    public function on(VM $vm);

    public function down(VM $vm);
}
