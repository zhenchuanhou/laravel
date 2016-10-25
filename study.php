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

controller
1.request
laravel请求中使用的是symfony/http-foundation组件
请求中存放了 $_GET,$_POST,$_COOKIE,$_FILES,$_SERVER等数据
获取请求的值
获取请求类型
session简介
由于http协议是无状态的（stateless）的，所以session 提供了一种保存用户数据的方法
laravel 支持了多种session 后端驱动，并提供清楚、统一的API。也内置支持如memcache、redistribute和数据库的后端驱动。默认使用file的session驱动
session的配置文件配置在config/session.php中
laravel 中使用session有三种方式
http request类的session()方法
session() 辅助函数
session facade

response
相应的常见类型
字符串
视图
json
重定向

middleware
laravel中间件提供了一个方便的机制来过滤进入应用程序的http请求
新建中间件
注册中间件
使用中间件
中间件的前置和后置操作

玩转laravel表单
1，案例演示
2，静态资源管理及模板布局
3，表单列表及分页实现
4，通过表单实现新增及操作状态提示功能
5，表单验证及数据保持详解
6，通过模型处理性别
7，通过表单实现修改
8，表单中查看详情及删除

