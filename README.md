<h1>Laravel - Mysql</h1>
<hr/>
<h3>Cách chạy project</h3>
<p>B1: composer install</p>
<p>B2: npm install</p>
<p>B3: cp .env.example .env</p>
<p>B4: php artisan key:generate</p>
<p>B5: tạo database "mobishop"</p>
<p>B6: php artisan migrate</p>
<p>B7: php artisan db:seed</p>
<p>B8: php artisan serve</p>
<p>B9: npm run ... (style và script)</p>
<p>B10: php artisan storage:link</p>
<hr/>
<h3>Tài khoản admin</h3>
<p>username: admin</p>
<p>password: 12345678</p>
<hr/>
<h3>Yêu cầu: </h3>
1. Tạo form đăng ký tài khoản - username và email không được trùng<br/>
2. Tạo form đăng nhập dựa vào thông tin đã đăng ký <br/>
3. Tạo form quên mật khẩu, gửi link reset mật khẩu về email và đổi mật khẩu<br/>
4. Tạo trang list danh sách user <br/>
5. Thêm trường role vào user, chỉ user nào role = 1 (admin) thì mới được vào trang list user để thao tác <br/>
6. Ở trang list user, có thêm phân trang, lọc user theo username, email <br/>
7. Thêm chức năng xóa user ở trang list user (popup lên hỏi có xóa hay không khi xóa?) <br/>
8. Chức năng thêm sửa xóa sản phẩm (tên sản phẩm, giá, hình ảnh), có danh mục sản phẩm <br/>
