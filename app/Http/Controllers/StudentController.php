<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function test1()
    {
//        $student = DB::select('select * from student');
//        var_dump($student);
//        $bool = DB::insert('insert into student(name, age) values(?, ?)',
//            ['imooc', 19]);
//        var_dump($bool);
//        $bool = DB::update('update student set age=? where name=?',
//            [21, 'haley']);
//        var_dump($bool);
//        $student = DB::select('select * from student where id> ?',
//            [1001]);
//        dd($student);
//        $bool = DB::delete('delete from student where id>?',
//            [1001]);
//        var_dump($bool);
    }

    /**
     * 新增
     */
    public function query1()
    {
//        $bool = DB::table('student')->insert(
//            ['name'=>'imooc', 'age'=>18]
//        );
//        var_dump($bool);
//        $bool = DB::table('student')->insertGetId(
//            ['name'=>'aaa', 'age'=>18]
//        );
//        var_dump($bool);
//        $bool = DB::table('student')->insert([
//                ['name' => 'imooc1', 'age' => 20],
//                ['name' => 'imooc2', 'age' => 21]
//            ]
//        );
//        var_dump($bool);
    }

    /**
     * 修改
     */
    public function query2()
    {
//        $num = DB::table('student')->where('id', 1008)->update(['age' => 30]);
//        var_dump($num);
//        $num = DB::table('student')->increment('age');
//        $num = DB::table('student')->increment('age', 3);
//        $num = DB::table('student')->decrement('age');
//        $num = DB::table('student')
//            ->where('id', 1008)
//            ->decrement('age', 3, ['name'=>'wwwwww']);
//        var_dump($num);
    }

    /**
     * 使用查询构造器删除数据
     */
    public function query3()
    {
//        $num = DB::table('student')
//            ->where('id', 1008)
//            ->delete();
//        $num = DB::table('student')
//            ->where('id', 1008)
//            ->delete();
//        $num = DB::table('student')
//            ->where('id','>=', 1006)
//            ->delete();
//        var_dump($num);
        DB::table('student')->truncate();
    }

    /**
     * 使用查询构造器删除数据
     */
    public function query4()
    {
//        $bool = DB::table('student')->insert([
//            ['id'=>1001, 'name'=>'name1', 'age'=>18],
//            ['id'=>1002, 'name'=>'name2', 'age'=>19],
//            ['id'=>1003, 'name'=>'name3', 'age'=>20],
//            ['id'=>1004, 'name'=>'name4', 'age'=>21],
//            ['id'=>1005, 'name'=>'name5', 'age'=>22],
//        ]);
//        var_dump($bool);
//        $students = DB::table('student')->get();
//        dd($students);
//        $student = DB::table('student')
//            ->orderBy('id', 'desc')
//            ->first();
//        dd($student);
//        $students = DB::table('student')
//            ->where('id', '>=', 1002)
//            ->get();
//        $students = DB::table('student')
//            ->whereRaw('id>=? and age>?', [1001, 20])
//            ->get();
        //pluck 返回
//        $students = DB::table('student')
//            ->pluck('nameq');
        //lists
//        $students = DB::table('student')
//            ->lists('name', 'id');
        //select 指定字段
//        $students = DB::table('student')
//            ->select('id','name')
//            ->get();
//        dd($students);
        //chunk
//        DB::table('student')->chunk(2, function($students){
//            var_dump($students);
//            if(条件){
//                return false;
//            }
//        });
    }
    //聚合函数
    public function query5()
    {
//        $num = DB::table('student')->count();
//        var_dump($num);
//        $max = DB::table('student')->max('age');
//        var_dump($max);
//        $min = DB::table('student')->min('age');
//        var_dump($min);
//        $avg = DB::table('student')->avg('age');
//        var_dump($avg);
//        $sum = DB::table('student')->sum('age');
//        var_dump($sum);
    }
    public function orm1()
    {
        //all()
//        $students = Student::all();
//        var_dump($students);
        //find()
//        $student = Student::find(1001);
//        var_dump($student);
        //findOrFail()
//        $student = Student::findOrFail(1006);
//        var_dump($student);

//        $students = Student::get();
//        $student = Student::where('id', '>', 1001)
//        ->orderBy('age', 'desc')
//            ->first();
//        var_dump($student);
//        Student::chunk(2, function($sutdents){
//            var_dump($sutdents);
//        });
        //

    }
}