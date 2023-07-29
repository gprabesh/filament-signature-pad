<?php

namespace Gprabesh\SignaturePad\Forms\Components\Fields;

use Filament\Forms\Components\Field;
use Gprabesh\SignaturePad\Forms\Concerns;

class SignaturePad extends Field
{
    use Concerns\HasSignaturePadAttributes;

    protected string $view = 'filament-signature-pad::forms.components.fields.signature-pad';
}
