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
//        DB::table('student')->truncate();
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

        //get() where() find() orderBy() first() chunk()
//        $students = Student::get();
//        $student = Student::where('id', '>', 1001)
//        ->orderBy('age', 'desc')
//            ->first();
//        var_dump($student);
//        Student::chunk(2, function($sutdents){
//            var_dump($sutdents);
//        });
        //聚合函数 count
//        $num = Student::count();
//        $num = Student::where('id', '>', 1000)->max('age');
//        var_dump($num);
    }
    /*
     * 使用eloquent orm 中增加数据，自定义时间戳及批量赋值
     */
    public function orm2()
    {
//        $student = new Student();
//        $student->name = 'haley1';
//        $student->age = 19;
//        $bool = $student->save();
//        var_dump($bool);
//        $student = Student::find(1008);
//        echo $student->created_at;
        //使用模型的 create 方法新增数据
//        $student = Student::create(
//            ['name'=>'haley3', 'age'=>23]
//        );
//        var_dump($student);
        //firstOrCreate 根据属性查找 存在返回，不存在新增并返回
//        $student = Student::firstOrCreate(
//            ['name'=>'haley4']
//        );
//        var_dump($student);
//        firstOrNew 根据属性查找 存在返回，不存在创建实例返回，并不保存，需要自己save()
        $student = Student::firstOrNew(
            ['name'=>'haley5']
        );
        $bool = $student->save();
        var_dump($bool);
//        var_dump($student);
    }

    /**
     * 使用eloquent orm 修改数据
     */
    public function orm3()
    {
        //通过模型更新
//        $student = Student::find(1012);
//        $student->name = 'kitty';
//        $bool = $student->save();
//        var_dump($bool);
        //结合查询语句 批量更新
        $num = Student::where('id', '>', 1010)->update(
            ['age'=>41]
        );
        var_dump($num);
    }

    /**
     * 使用eloquent orm 删除数据
     */
    public function orm4()
    {
        //通过模型删除
//        $student = Student::find(1005);
//        $bool = $student->delete();
//        var_dump($bool);
        //通过主键删除 可以多条1010, 1009 或者 [1010, 1009]
//        $num = Student::destroy(1010, 1009);
//        $num = Student::destroy(1007, 1008);
//        var_dump($num);
        //根据指定条件删除
//        $num = Student::where('id', '>',1005 )->delete();
//        var_dump($num);
    }

    public function section1()
    {
        $name = 'haley';
        $arr = ['haley', 'imooc'];
        $students = Student::get();
        $students = [];
        return view('student/section1', [
            'name'=>$name,
            'arr'=>$arr,
            'students'=>$students
        ]);
    }

    public function urlTest()
    {
        return 'urlTest';
    }


}