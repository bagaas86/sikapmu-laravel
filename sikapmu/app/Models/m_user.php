<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_user extends Model
{
    use HasFactory;

    public function addData($data)
    {
        DB::table('users')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('users')->where('id', $id)->update($data);
    }
    public function id($email)
    {
        DB::table('users')->where('email', $email)->first();
    }
    public function deleteData($id)
    {
        DB::table('users')->where('id', $id)->delete();
    }
}
