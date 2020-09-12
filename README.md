โหลดไฟล์จาก github โดยตั้งชื่อโฟลเดอร์ว่า project200

## ใช้คำสั่ง 

1. composer install 
2. composer dump-autoload 
3. cp .env.example .env 
4. php artisan key:generate
5. ลบโฟลเดอร์ storage ใน project200/public/storage
6. ใช้คำสั่ง php artisan storage:link
7. copy ไฟล์ AuthenticatesUsers ในโฟล์เดอร์ project200/AuthenticatesUsers
8. วางแทนที่ไฟล์เก่าในโฟล์เดอร์ project200\vendor\laravel\framework\src\Illuminate\Foundation\Auth

สร้าง database ชื่อ shopping รหัส 1234 ใน laragon

เปิดไฟล์ .env แล้วแก้ให้เป็น 

DB_DATABASE=shopping

DB_USERNAME=shopping

DB_PASSWORD=1234

เปิด terminal ใช้คำสั่ง php artisan migrate 

แล้วตามด้วย php artisan db:seed

จากนั้นเปิด serve ด้วยคำสั่ง php artisan serve

หลังจากนั้นไปที่ http://127.0.0.1:8000/home เพื่อไปยังหน้าหลัก และกด login

## การล็อกอิน
สำหรับ admin ใช้
- username -> admin
- password -> 12345678

สำหรับ member ใช้
- username -> member
- password -> 12345678

