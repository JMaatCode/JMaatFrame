<?php
/**
 * Created by PhpStorm.
 * User: qqdd
 * Date: 2018/3/19
 * Time: 21:18
 */

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class ActicleModel extends Model
{
    public $timestamps = false;
    protected $table = 'test';

    /*public static function first(){
        $connection = mysqli_connect('127.0.0.1','root','root');
        if(!$connection){
            die('Could not connect: '.mysqli_error());
        }
        mysqli_set_charset($connection,'UTF8');
        mysqli_select_db($connection,'test');
        $result = mysqli_query($connection,'select * from test');
        if($row = mysqli_fetch_assoc($result)){
            return $row;
        }
        mysqli_close($connection);
    }*/
}