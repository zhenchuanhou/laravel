blade 模板引擎

blade 模板引擎简介
blade是laravel提供的一个既简单又强大的模板引擎
和其他流行的php模板引擎不一样，blade并不限制你在视图中使用原生的php代码
所有blade视图页面都将被编译成原生PHP代码并缓存起来，除非你的模板文件被修改了，否则不会重新编译

模板继承
section 视图片段 可扩展
yield 展示指定视图片段 相当于占位符 不可扩展
extends
parent

基础语法及include的使用
<!-- 1.模板中输出PHP变量-->
<p>{{$name}}</p>

{{--2.模板中调用PHP函数--}}
<p>{{time()}}</p>
<p>{{date('Y-m-d H:i:s', time())}}</p>
<p>{{isset($name2) ? $name2 : 'default'}}</p>
<p>{{$name or 'default'}}</p>
{{--3.原样输出--}}
<p>@{{ $name }}</p>
{{--4.模板中的注释--}}
{{--5.引入子视图 include--}}
@include('student/common1', ['message'=>'我是错误信息'])

流程控制
if
unless 相当于if取反
for
foreach

@if($name == 'haley')
I'm haley
@elseif($name == 'imooc')
I'm imooc
@else
Who am I?
@endif
<br>
@if(in_array($name, $arr))
true
@else
false
@endif
<br>
@unless($name != 'haley')
I'm haley
@endunless
<br>
@for($i=0;$i<5; $i++)
<p>{{$i}}</p>
@endfor
<br>
@foreach($students as $student)
<p>{{$student->name}}</p>
@endforeach

@forelse($students as $student)
<p>{{$student->name}}</p>
@empty
<p>没有数据</p>
@endforelse

模板中的URL
url() 通过路由的名称 常用
route() 通过路由的别名 常用
action() 指定控制器及方法名生成

<a href="{{url('urlTest')}}">url()</a>
<br>
<a href="{{action('StudentController@urlTest')}}">action()</a>
<br>
<a href="{{route('url')}}">route()</a>
<br>