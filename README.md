# Laravel 10 購物型錄

透過型錄進行商品或服務之購買行為，型錄上可見到展示的商品名稱或服務項目名稱、商品的影像、價格、優惠條件、折扣券等相關資訊，以提供給消費者為購買的參考。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 gd 和 sodium，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行 __Artisan__ 指令的 __passport:install__ 來立用來產生安全 Access Token 的加密金鑰。此外，該指令會建立用於產生 Access Token 的「個人存取」與「密碼授權」的客戶端。
```sh
$ php artisan passport:install
```
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，建立一個從 `public/storage` 到 `storage/app/public` 的符號連結。
```sh
$ php artisan storage:link
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的管理者電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/dsDVRBg.png)
> 橫跨流行精品、居家生活、美妝保健，內在衣著，商品種類項目多樣

![](https://i.imgur.com/9Jqhh5p.png)
> 為廣大的消費者提供種類繁多的優質商品
