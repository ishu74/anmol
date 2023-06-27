<?php
namespace app\models;
use yii\db\ActiveRecord;
class Posts extends ActiveRecord
{
    private $fname;
    private $mname;
    private $lname;
    private $mobileno;
    private $address;
    private $pincode;
    private $joining_date;
    private $leaving_date;
    private $month_salary;
    private $annual_salary;
    private $status;


    public  function rules(){
        return[
          [['fname', 'mname', 'lname','mobileno', 'address', 'pincode','joining_date', 'leaving_date', 'month_salary','annual_salary', 'status'], 'required']
        ];
    }
}
?>