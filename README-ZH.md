# laravel-reset-password-via-queue
在 laravel 5中，使用队列发送重置密码邮件

## 如何使用
- 下载该项目并解压该 zip 包
- 拷贝该项目下的文件到`path/to/your-project/app`目录中
- 修改`config/app.php`文件，删除`Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,`并添加`App\Providers\PasswordResetServiceProvider::class,`
- 完成

## 扩展阅读
http://stackoverflow.com/questions/34409236/how-to-send-the-password-reset-link-via-email-using-queue-in-laravel-5
https://gist.github.com/jamesfairhurst/a30f034f6aeef45fe32f17e5588c1adf#file-passwordbroker-php
