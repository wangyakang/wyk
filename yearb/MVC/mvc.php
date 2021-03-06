<?php
//MVC:编程架构(主流的编程架构模式)面向对象的编程思想      mvvm             编程模式：php观察者模式
//    基于b/s架构的应用
//   视图：html+css(模板)   数据：mysql (存储数据的容器或逻辑)    后台语言：php (组织者)
//M:modle //模型：有规律，有逻辑   存储数据的结构
//V:view  //视图     前台
//C:controller   //逻辑控制系统   通过路由方式
代码模块化，分离，控制器将数据与视图分离开
class db{
    public $aa="aa";  //封装，   公开
    private $bb="bb"; //私有  外部无法访问,只能在自己本类的内部访问,不可继承
    protected $cc="cc";  //受保护，只能在本类或子类访问
    //对象的属性和方法   $obj->aa

    static  $dd="dd"; //该方法或属性只能作用在类的内部   属于类的方法,静态的
    //封装     继承      多态
    function say(){
        echo db::$dd;//self::$dd
        echo $this->bb;
        echo $this->cc;
    }
}
new db();

所有页面都通过index页面进行访问
//路由：根据不同的请求分发路径

//模板引擎    php是完美的模板引擎
//为了使用户界面与业务数据分离开    smarty模板引擎

//核心文件:module

mvc：
//单页面的应用  index.php->
//    设置常量：
//    载入核心类：数据库处理类、路由处理类、图形处理类、session处理类、模板引擎类、主类
//    实例化路由：
//        1）通过判断地址栏的相关参数进行路由的分发
//                m 模块文件夹
//                f 文件
//                类 class.php
//                a 方法：操作数据库、
//                        视图的指定：模板引擎 (解析模板中的特殊语法->生成编译文件->运行编译文件)

//基于mvc架构的博客系统
前台：展示内容   -分类-
      留言
      登录注册   -个人中心
      查看内容->点赞->评论
1.分类表
2.内容表  ：标题、内容、作者、时间、点赞数、评论、分类
3.用户表 ：用户头像、id、昵称、性别、邮箱、密码、手机
4.留言表
5.推荐位
6.管理员表：用户名、密码、权限