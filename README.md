# JMaatFrame
基于composer的个人框架，转载学习于https://lvwenhan.com/php/405.html

目录结构：

![目录结构](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/dir.jpg)

使用composer update，安装扩展包

index.php唯一入口文件，添加自动加载：

![自动加载配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/index_autoload.jpg)

路由加载：

![路由加载配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/index_routing.jpg)

数据库配置：

![数据库配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/routing.jpg)

路由使用扩展包： https://github.com/NoahBuscher/Macaw，对应的 Composer 包为 noahbuscher/macaw 

![routing配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/routing.jpg)

使用PHP内置HTTP服务器：
cd JMaatFrame/public && php -S 127.0.0.1:81

通过路由http://localhost:81/home访问

![home控制器配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/home.jpg)

在composer.json中，添加自动加载

![自动加载](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/autoload.jpg)

Model使用laravel的Eloqument的作为ORM包,对应的Composer包为illuminate/database

修改入口文件index.php,路由加载前，添加

![ORM配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/index_eloquent.jpg)

database.php配置：

![数据库配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/database.jpg)

Model文件:

![Model配置](https://github.com/it-hjm007/JMaatFrame/blob/master/public/img/readme/model.jpg)

基本架构搭成!!