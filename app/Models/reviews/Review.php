<?php
namespace App\Models\reviews;
use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\OrderProductFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Review extends Model
{
    use HasFactory;
    //permission to write reviews
    public $increment = true;
    protected $fillable = [
        'user_id',
        'product_id',
        'rating',
        'title',
        'description',
        'verified'
    ];
    /**
     * Get the user that owns the Review
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
