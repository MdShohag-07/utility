<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Statement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'statement_number', // Optional, but good for unique identifier
        'statement_date',   // <--- CRUCIAL for ordering
        'due_date',
        'total_amount',
        'status',           // e.g., 'issued', 'paid', 'overdue', 'draft'
        'previous_balance',
        'payments_received',
        'service_period_start',
        'service_period_end',
        'paid_at',
    ];

    protected $casts = [
        'statement_date' => 'date', // Use 'datetime' if you store time
        'due_date' => 'date',
        'total_amount' => 'decimal:2',
        'previous_balance' => 'decimal:2',
        'payments_received' => 'decimal:2',
        'service_period_start' => 'date',
        'service_period_end' => 'date',
        'paid_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // <--- THIS RELATIONSHIP
    }

    public function items(): HasMany
    {
        return $this->hasMany(StatementItem::class); // <--- THIS RELATIONSHIP
    }

    // Accessors for formatted dates (used in Blade views)
    public function getFormattedStatementDateAttribute(): ?string
    {
        return $this->statement_date ? Carbon::parse($this->statement_date)->format('F j, Y') : null;
    }

    public function getFormattedDueDateAttribute(): ?string
    {
        return $this->due_date ? Carbon::parse($this->due_date)->format('F j, Y') : null;
    }
}