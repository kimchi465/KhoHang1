# Dự án Kho hàng

## Cách sử dụng code
### 1. Clone source hoặc Download
Nếu clone sử dụng cú pháp
```
git clone https://github.com/kimchi465/KhoHang1.git
```

### 2. Hiệu chỉnh database
Hiệu chỉnh database file `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=khohang
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Thực thi migrate
Chạy câu lệnh sau để tạo schema database
```
php artisan migrate
```

### 4. Khởi tạo dữ liệu mẫu
Chạy câu lệnh sau để tạo dữ liệu mẫu
```
php artisan db:seed
```

### 5. Tạo liên kết hiển thị hình ảnh
Chạy câu lệnh sau để tạo liên kết
```
php artisan storage:link
```

### 6. Chạy server Development
```
php artisan serve
```
- Truy cập link để test: [http://localhost:8000]
### 7. Ghi chú
```
Tài khoản: admin     -> mật khẩu: 123456 -> quyền: quản trị
Tài khoản: Taikhoanb -> mật khẩu: 123456 -> quyền: người dùng
```