<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum MatchStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';

    case Processing = 'processing';

    case Approved = 'approved';

    case Cancelled = 'cancelled';

    public function getLabel(): string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Processing => 'Processing',
            self::Approved => 'Approved',
            self::Cancelled => 'Cancelled',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Pending => 'info',
            self::Processing => 'warning',
            self::Approved => 'success',
            self::Cancelled => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Pending => 'heroicon-m-sparkles',
            self::Processing => 'heroicon-m-arrow-path',
            self::Approved => 'heroicon-m-sparkles',
            self::Cancelled => 'heroicon-m-x-circle',
        };
    }
}
