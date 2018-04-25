# 9x9-Portal-Login
use php html css

HW1
1.使用者可以利用中大 portal 帳號登入
2.登入後顯示表單可輸入兩數 m, n
3.利用 post 方式送出資料 (請考慮輸入的正確)
4.印出 m*n 乘法表
5.利用 session or cookie 儲存 m, n，使用者再度開啟網頁要能看到最後一次設定的m, n 並了解 cookie, session 的差異
6.登出功能(登出自己的程式，portal必須另外請使用者另外登出)

HW2
*套用 bootstrap 樣板
瞭解 grid system
要有 navbar
有一個註冊按鈕、登入按鈕
*使用者系統
建立資料庫、資料表，欄位包含姓名, email, 帳號, 密碼
登入改成自行撰寫使用者系統
guest(尚未登入使用者) 要能註冊 (表單可選擇性套用bootstrap)
註冊表單欄位包含姓名, email, 帳號, 密碼
欄位確實檢查( 嘗試用前端檢查+後端檢查 )
密碼請加密儲存
( MySQL的部分, 用Prepared statement )
guest可以登入系統
*整合
guest 看到 註冊、登入
登入後的user 把"登入"按鈕，改為 dropdown
dropdown 顯示user的姓名，展開有”修改密碼”和”登出” 參考下圖最右邊
user(登入後的使用者) 可以修改密碼
登入後才能使用 HW1 的乘法表
