# developer-presenter

## 說明



# 安裝

```bash
composer require stormsq/developer-presenter
```

如果你的laravel <= 5.4或是你的Laravel專案沒有啟動自動擴充包導入，你需要在你的config/app.php下面引入：

```php
'providers' => [
     STORMSQ\DeveloperPresenter\DeveloperPresenterProvider::class,
 ];
'aliases' => [
    'PresenterBuilder' => STORMSQ\DeveloperPresenter\PresenterBuilder::class,
 ],
```

別忘了生成一個設定檔

```bash
php artisan vendor:publish
```

你會在config底下看到一個developer-presenter.php

# 設定

config/developer-presenter.php

```php
return [
    'icon'=>[
        'useitag'=>'1', //是否使用i tag
        'linkclass'=>'0',
        'default'=>'fa fa-sort', //預設css
        'asc'=>'fa fa-sort-asc', //正序 css
        'desc'=>'fa fa-sort-desc', //倒序 css
    ]          
];

```



# 使用方法



## Presenter

presenter是一個搭配blade使用的開發概念，將不好維護的blade語句獨立到presenter中，使用時再注入到blade

產生一個Presenter

```bash
php artisan developer:make:presenter "Presenter名稱" //Presenters/Admin/DemoPresenter
```

基本路徑與Service一樣，在app底下

```php
<?php
namespace App\Prestenters;
use STORMSQ\DeveloperPresenter\PresenterBuilder;

class DemoPresenter extends Presenter{

    public function __construct()
    {
        //
    }
}
```

presenter可用方法

getTableHeader(array)

參數array 格式為 '排序名'=>'欄位名稱'