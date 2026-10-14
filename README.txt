# ATUS Clothing WordPress Theme

Theme WordPress dành riêng cho ATUS Clothing, kết hợp trang giới thiệu dịch vụ thêu
với cửa hàng WooCommerce. Nội dung thường ngày được quản lý trong WordPress Dashboard;
chủ shop không cần chỉnh sửa mã nguồn.

## Yêu cầu hệ thống

- WordPress 6.4 trở lên
- PHP 7.4 trở lên
- WooCommerce để quản lý sản phẩm, giỏ hàng và đơn hàng

## Cài đặt

1. Nén thư mục theme thành `atus-clothing-wordpress.zip`.
2. Trong WordPress, vào **Giao diện → Thêm giao diện → Tải giao diện lên**.
3. Tải file ZIP, cài đặt và kích hoạt theme.
4. Cài đặt và kích hoạt WooCommerce.
5. Chạy trình thiết lập WooCommerce để cấu hình địa chỉ cửa hàng, thanh toán và vận chuyển.
6. Nếu cần dữ liệu ban đầu, vào **Giao diện → Cài đặt ATUS** và chọn
   **Nhập 18 sản phẩm mẫu**.

Trước khi mở bán, cần kiểm tra lại giá, tồn kho, màu sắc, kích cỡ, phương thức thanh
toán và chính sách vận chuyển của từng sản phẩm.

## Vận hành website

Dashboard có khối **Quản lý website ATUS** với các đường dẫn thường dùng.

- **Giao diện → Tùy biến → Nội dung ATUS**: sửa nội dung trang chủ, dịch vụ, FAQ,
  thông tin liên hệ, thông tin pháp lý và hình ảnh chính.
- **Giao diện → Menu**: quản lý menu điều hướng.
- **Sản phẩm**: thêm hoặc sửa sản phẩm, ảnh, giá, màu, kích cỡ và tồn kho.
- **WooCommerce → Đơn hàng**: theo dõi và xử lý đơn hàng.
- **Bài viết**: đăng tin tức, hướng dẫn và chương trình khuyến mãi.

Trang chủ tự lấy tối đa 18 sản phẩm đã xuất bản từ WooCommerce. Khi chưa có sản phẩm,
website hiển thị trạng thái đang cập nhật thay vì dữ liệu mẫu cố định. Ba bài viết mới
nhất tự động xuất hiện trong mục **Chuyện mới từ ATUS**.

Nên giữ một tài khoản Administrator cho người bảo trì. Chủ shop có thể sử dụng vai trò
Shop Manager để quản lý sản phẩm và đơn hàng mà không có quyền sửa mã nguồn hoặc cấu
hình hệ thống quan trọng.

## Cấu trúc chính

- `front-page.php`: trang chủ ATUS.
- `header.php` và `footer.php`: layout dùng chung toàn website.
- `page.php`: trang nội dung WordPress.
- `single.php`: bài viết chi tiết.
- `archive.php`, `journal.php`, `search.php`: danh sách và tìm kiếm bài viết.
- `woocommerce.php`: wrapper giao diện WooCommerce.
- `functions.php`: thiết lập theme, Customizer, WooCommerce và công cụ nhập dữ liệu mẫu.
- `styles.css`, `services.css`: giao diện website.
- `script.js`, `services.js`: tương tác phía trình duyệt.

## Triển khai tự động

Workflow `.github/workflows/deploy.yml` chạy khi:

- tạo pull request vào `main` — chỉ kiểm tra theme;
- push commit lên `main` — kiểm tra và triển khai production;
- chạy thủ công bằng `workflow_dispatch`.

Quy trình kiểm tra cú pháp PHP và các file bắt buộc của theme. Nếu thành công, mã nguồn
được đóng gói và truyền qua SSH vào thư mục theme trên host.

### GitHub Environment

Tạo Environment tên `production` tại **Settings → Environments** và cấu hình:

- `DEPLOY_HOST`: tên miền hoặc địa chỉ IP của SSH server.
- `DEPLOY_PORT`: cổng SSH; để trống sẽ dùng cổng `22`.
- `DEPLOY_USER`: tài khoản SSH dùng để triển khai.
- `DEPLOY_PATH`: đường dẫn tuyệt đối tới theme, ví dụ
  `/home/account/public_html/wp-content/themes/atus-clothing`.
- `DEPLOY_SSH_KEY`: private key dành riêng cho GitHub Actions.
- `DEPLOY_KEY_PASSPHRASE`: passphrase của private key; có thể để trống.
- `DEPLOY_KNOWN_HOSTS`: host key đã được xác minh của server.
- `HEALTHCHECK_URL`: URL kiểm tra sau triển khai; không bắt buộc.

Có thể bật **Required reviewers** cho Environment nếu muốn duyệt thủ công trước mỗi lần
triển khai production.

### Phạm vi triển khai

Pipeline chỉ cập nhật mã nguồn theme. Quy trình không thay đổi database, sản phẩm, đơn
hàng, thư viện Media, plugin hoặc `wp-config.php`.

Workflow không dùng cơ chế xóa đồng bộ. File đã xóa khỏi Git có thể vẫn còn trên host;
nếu cần xóa, hãy xác nhận chính xác `DEPLOY_PATH` rồi xóa thủ công trên server.

## Kiểm tra trước khi phát hành

```bash
find . -type f -name '*.php' -not -path './.git/*' -print0 | xargs -0 -n1 php -l
node --check script.js
node --check services.js
git diff --check
```

Sau khi push lên `main`, theo dõi workflow **Validate and deploy WordPress theme** trong
tab **Actions**. Website chỉ được cập nhật khi cả job kiểm tra và job deploy hoàn tất.
