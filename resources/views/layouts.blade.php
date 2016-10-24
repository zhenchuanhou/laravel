<html>
<head>
    <title>轻松学会laravel - @yield('title', '首页')</title>
    <meta name="description" content="." />
    <meta name="keywords" content="谁能帮我实现这个简单的htm页面布局吗？" />

    <style>
        *{margin:0px; padding:0px;}
        .header,.main,.footer{margin:0px auto; width:1000px;}
        .sidebar{width:400px; height:700px; float:left;}
        .content{width:600px; height:700px; float:left;}
        .clear{clear:both;}
        .foot_one{height:80px; width:100%; background:#356894;}
    </style>

</head>
<div class="header">
    @section('header')
    头部
    @show
</div>
<div class="main">
    <div class="sidebar">
        @section('sidebar')
        侧边栏
        @show
    </div>
    <div class="content">
        @yield('content', '主要内容区域')
    </div>
    <div class="clear"></div>
</div>
<div class=footer>
    @section('footer')
    底部
    @show
</div>
