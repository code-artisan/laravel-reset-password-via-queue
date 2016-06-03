# laravel-reset-password-via-queue
在 laravel 5中，使用队列发送重置密码邮件

## 如何使用？
- 下载该项目并解压
- 拷贝该项目下的文件到`path/to/your-project/app`目录中
- 修改`config/app.php`文件，删除`Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,`并添加`App\Providers\PasswordResetServiceProvider::class,`
- 完成
