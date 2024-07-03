<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "tbl_user";

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@example.com') && $this->hasVerifiedEmail();
    }

    public function itemusers() : HasMany
    {
        return $this->hasMany(Itemuser::class, 'user_id')->where('item_type_id', 11); 
    }

    public function profile() : HasOne
    {
        return $this->hasOne(Profile::class, 'user_profile_id');
    }

    public function usertype() : HasOne
    {
        return $this->hasOne(Itemuser::class, 'user_id');
    }

    public function getItemByTypeName($tableName)
    {
        $this->table = $tableName;

        return $this->select('*')
            ->where('item_type_name', 'user')
            ->get()
            ->toArray();
    }

    public function getItemTypesProfile($tableName)
    {
        $this->table = $tableName;

        return $this->select('*')
            ->where('item_type_name', 'user_profile')
            ->get()
            ->toArray();
    }

    public function getItemUserType($tableName)
    {
       $this->table = $tableName;

        return $this->select('*')
            ->where('item_type_name', 'user_type')
            ->get()
            ->toArray();
    }

    public function storeData($array, $tableName)
    {
        try {
            $model = new self; // Create a new instance of the model
            $model->setTable($tableName); // Set the table dynamically
            $id = $model->insertGetId($array); // Perform the insert operation
            return $id;
        } catch (\Exception $ex) {
            $error = $ex->getMessage();
            return ['success' => false, 'message' => $error];
        }
    }

    public function loginCredentials($tableName,$email, $password)
    {
        $this->table = $tableName;
        return $this->select('*')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
    }

    public function checkEmailExists($email)
    {
        $user = DB::table('tbl_user')->where('email', $email)->first();
        return $user !== null;
    }
}
