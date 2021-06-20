<!DOCTYPE html>

<html>
<!-- Page header -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <title>Client Menu</title>
    <link rel="stylesheet" href="clientmenu.css">
</head>

<body>
    <!-- Body header -->
    <header id="body-header">
        <a href="../SE_project/mainPage.html">
            <img class="logo" src="../images/Nova.jpg" alt="Logo">
        </a>
        <form class="search-container">
            <input class="search-box" type="search" placeholder="Tìm kiếm" size="50">
            <button class="search-icon">
                <i class="fas fa-search"></i>
            </button>
        </form>
<<<<<<< HEAD:Menu/clientmenu.html
=======
        <form class="filter-top-container">
            <select class="filter-product-top">
                <option>Bữa sáng</option>
                <option>Bữa trưa</option>
                <option>Bữa tối</option>
            </select>
            <select class="filter-product-top">
                <option>Dưới 100.000đ</option>
                <option>Trên 100.000đ đến 300.000đ</option>
                <option>Trên 300.000đ đến 500.000đ</option>
                <option>Trên 500.000đ</option>
            </select>
        </form>
        <br>
        <form class="filter-bottom-container">
            <select class="filter-product-bottom">
                <option>Trà Đào</option>
                <option>Trà Vải</option>
                <option>Coca-cola</option>
                <option>Pepsi</option>
                <option>Heniken</option>
            </select>
            <select class="filter-product-bottom">
                <option>Bánh táo nướng</option>
                <option>Bánh Mochi Nhật Bản</option>
                <option>Bánh Tiramisu Ý</option>
                <option>Bánh Tapioca Brazil</option>
                <option>Bánh Macaron Pháp</option>
                <option>Bánh Gateau St. Honore</option>
                <option>Bánh trifle Anh quốc</option>
            </select>
        </form>
>>>>>>> main:Menu/clientmenu/clientmenu.php
        <a class="menu-cart" href="../SE_project/cart.html">
            <i class="fas fa-shopping-cart"></i>
            <h3 class="cart-name">Giỏ hàng</h3>
        </a>
    </header>
    <div class="clearfix"></div>
    <!-- Danh mục sản phẩm -->
    <section class="client-menu">
        <article class="product">
            <header class="product-header">
                <a href="#">
                    <img class="select" src="../images/Ga_Dot_La_Truc_O_Thum/hinh-3.jpg" alt="Chicken">
                </a>
            </header>
            <div class="content">
                <h2 class="name">Gà Đốt Lá Chúc Ô Thum</h2>
                <h2 class="price">Giá: 300.000đ/phần</h2>
                <h5 class="decription">
                    Gà Đốt Lá Chúc Ô Thum là một món ăn đặt sản của vùng Bảy Núi ở An Giang. Thực khách muốn thưởng thức
                    <br> gà đốt lá chúc Ô Thum, thì phải chờ đợi tối thiểu 40 phút để đầu bếp thực hiện các công đoạn chế biến. Ăn gà
                    <br> đốt lá chúc Ô Thum, thực khách cần phải kiên nhẫn chờ đợi nhưng khi món ăn lên, hương vị đậm đà, thơm
                    <br> ngon của món ăn sẽ bù đắp lại công chờ đợi một cách xứng đáng.
                </h5>
            </div>
            <footer class="content">
                <a class="btn1">Thêm vào giỏ hàng</a>
                <a href="fooddetail.html" class="btn2">Xem chi tiết</a>
            </footer>
        </article>
        <div class="clearfix"></div>
        <article class="product">
            <header class="product-header">
                <a href="#">
                    <img class="select" src="../images/Banh_Xeo/hinh-3.jpg" alt="BanhXeo">
                </a>
            </header>
            <div class="content">
                <h2 class="name">Bánh Xèo Miền Tây</h2>
                <h2 class="price">Giá: 90.000đ/phần</h2>
                <h5 class="decription">
                    Bánh xèo miền Tây là sự kết hợp hài hòa giữa thứ bột gạo quen thuộc cùng thịt ba chỉ béo ngậy, tôm tươi
                    <br> sống, đậu xanh thơm ngon và giá sạch. Sau đó, hỗn hợp bột này được tráng trên những chảo nóng tạo
                    <br> ra một âm thanh "xèo xèo" rất vui tai, nghe thôi cũng đã đủ thèm thuồng.
                </h5>
            </div>
            <footer class="content">
                <a class="btn1">Thêm vào giỏ hàng</a>
                <a href="#" class="btn2">Xem chi tiết</a>
            </footer>
        </article>
        <div class="clearfix"></div>
        <article class="product">
            <header class="product-header">
                <a href="#">
                    <img class="select" src="../images/Ca_Hu_Kho_To/hinh-3.jpg" alt="CaKho">
                </a>
            </header>
            <div class="content">
                <h2 class="name">Cá Hú Kho Tộ</h2>
                <h2 class="price">Giá: 100.000đ/phần</h2>
                <h5 class="decription">
                    Cơm trắng, cá kho tộ và canh chua là những món tạo thành bữa ăn đặc trưng của người miền Nam. Cái vị
                    <br> ngọt mềm, thơm ngậy của thịt cá, chút mằn mặn của nước mắm se se vị cay của ớt đã tạo nên hương
                    <br> vị đặc trưng của món ăn này.
                </h5>
            </div>
            <footer class="content">
                <a class="btn1">Thêm vào giỏ hàng</a>
                <a href="#" class="btn2">Xem chi tiết</a>
            </footer>
        </article>
        <div class="clearfix"></div>
        <!-- Chuyển trang -->
        <div class="page-move">
            <a href="#" class="move">
                <i class="fas fa-angle-right"></i>
            </a>
            <a href="#" class="move">
                    ...
                </a>
            <a href="#" class="move">
                    3
                </a>
            <a href="#" class="move">
                    2
                </a>
            <a href="#" class="move">
                    1
                </a>
            <a href="#" class="move">
                <i class="fas fa-angle-left"></i>
            </a>
        </div>
    </section>
    <div class="confirm-order-modal">
        <div id="confirm-order-container">
            <h2 class="confirm-order-content">
                Hãy chọn số lượng cho món ăn này
            </h2>
            <div class="confirm-order-number">
                <button class="minus"><i class="fas fa-minus"></i></button>
                <span class="number">1</span>
                <button class="plus"><i class="fas fa-plus"></i></button>
            </div>
            <div class="confirm-order-btn">
                <a class="confirm-btn">Xác nhận</a>
                <a class="cancle-btn">Hủy</a>
            </div>
        </div>
    </div>
    <footer class="contact">
        <article class="contact-info">
            <h4 class="contact-text"><i class="fas fa-location-arrow"> Address: </i> Đại học bách khoa TPHCM, Thủ Đức, TPHCM</h4>
            <h4 class="contact-text"><i class="fas fa-envelope"> Email: </i> hau.pham1304@hcmut.edu.vn</h4>
            <h4 class="contact-text"><i class="fas fa-phone"> Telephone: </i> 0943765795</h4>
        </article>
    </footer>
    <!-- File JavaScript -->
    <script src="clientmenu.js"></script>
</body>

</html>