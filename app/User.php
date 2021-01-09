<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // table users and roles n-n
    public function roles(){
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }

    //Hàm này sử dụng cho gate phân quyền
    public function checkPermissionAccess($permissionCheck){
       //B1: lấy tất cả các quyền của user
       //b2: so sánh giá trị đưa vào của router hiện tại xem có trong các quyền đã lấy hay k
       $user = Auth()->user();
       // lấy ra các vai trò của user
        $roleUser = $user->roles;
        // vòng lặp lấy ra các quyền của vai trò đó, nếu trùng trả về true
        foreach($roleUser as $role){
            $permissions = $role->permissions;
            // kiểm tra có tồn tại hay k
            if($permissions->contains('key_code',$permissionCheck)){
                return true;
            }
        }
        return false;
    }
}
