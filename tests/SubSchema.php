<?php

declare(strict_types=1);

namespace Conia\Sire\Tests;

use Conia\Sire\Schema;

class SubSchema extends Schema
{
    public function rules(): void
    {
        $this->add('inner_int', 'int', 'required')->label('Int');
        $this->add('inner_email', 'text', 'required', 'email')->label('Email');
    }
}
