<?php
    include "./head.php";
?>
<div class="header">
    <div class="logo">
        <a href="./" title="Decox Design | Thiết kế nội thất căn hộ chung cư đẹp tại Tp HCM">
            <img src="./image/logoheader.png" alt="Decox Design | Thiết kế nội thất căn hộ chung cư đẹp tại Tp HCM">
        </a>
    </div>

    <div class="brandbut">
        <a title="Chi nhánh Decox Design" id="brandtop">Chi nhánh</a>

        <ul class="ulbrand brandtop">
            <li><a href="tphcm" title="TPHCM">TPHCM</a></li>
            <li><a href="ha-noi" title="Hà Nội">Hà Nội</a></li>
            <li><a href="nha-trang" title="Nha Trang">Nha Trang</a></li>
            <li><a href="da-nang" title="Đà Nẵng">Đà Nẵng</a></li>
            <li><a href="ha-long" title="Hạ Long">Hạ Long</a></li>
            <li><a href="phu-quoc" title="Phú Quốc">Phú Quốc</a></li>
            <li><a href="binh-duong" title="Bình Dương">Bình Dương</a></li>
            <li><a href="dong-nai" title="Đồng Nai">Đồng Nai</a></li>
            <li><a href="d" title="Đà Lạt">Đà Lạt</a></li>
            <li><a href="hai-phong" title="Hải Phòng">Hải Phòng</a></li>
        </ul>
    </div>

    <div class="search">
        <form action="index.php?page=dta_sanpham" name="frmSearch" method="get" class="formsearch">
            <input type="hidden" name="page" value="dta_sanpham">
            <input type="test" name="tukhoa" value="" id="search-text" placeholder="Nhập từ khóa...">
            <button type="submit" onclick="this.form.submit()" value="Tìm kiếm"></button>
        </form>
    </div>


    <div class="category">
        <div class="infomation">
            <a href="#" title="Đăng ký tư vấn">Đăng ký tư vấn</a>
            <a href="#" title="Tin tức">Tin tức</a>
        </div>
        <ul class="linemenu">
            <li><a href="#" title="Mẫu nhà đẹp"><img src="https://decoxdesign.com/upload/loaisp/icon/mau-nha-dep.svg"
                        alt="Mẫu nhà đẹp">
                    <p>Mẫu nhà đẹp</p>
                </a></li>
            <li><a href="#" title="Phòng khách"><img src="https://decoxdesign.com/upload/loaisp/icon/phong-khach.svg"
                        alt="Phòng khách">
                    <p>Phòng khách</p>
                </a></li>
            <li><a href="#" title="Phòng bếp"><img src="https://decoxdesign.com/upload/loaisp/icon/phong-bep.svg"
                        alt="Phòng bếp">
                    <p>Phòng bếp</p>
                </a></li>
            <li><a href="#" title="Phòng ngủ"><img src="https://decoxdesign.com/upload/loaisp/icon/phong-ngu.svg"
                        alt="Phòng ngủ">
                    <p>Phòng ngủ</p>
                </a></li>
            <li><a href="#" title="Trẻ em"><img src="https://decoxdesign.com/upload/loaisp/icon/tre-em.svg"
                        alt="Trẻ em">
                    <p>Trẻ em</p>
                </a></li>
            <li><a href="#" title="Giặt phơi"><img src="https://decoxdesign.com/upload/loaisp/icon/giat-phoi.svg"
                        alt="Giặt phơi">
                    <p>Giặt phơi</p>
                </a></li>
            <li><a href="wc" title="Rest Room"><img src="https://decoxdesign.com/upload/loaisp/icon/rest-room.svg"
                        alt="Rest Room">
                    <p>Rest Room</p>
                </a></li>
        </ul>
        <div id="menumb_div" class="owl-carousel"><a href="#" title="Mẫu nhà đẹp"><img
                    src="https://decoxdesign.com/upload/loaisp/icon/mau-nha-dep.svg" alt="Mẫu nhà đẹp">
                <p>Mẫu nhà đẹp</p>
            </a><a href="#" title="Phòng khách"><img src="https://decoxdesign.com/upload/loaisp/icon/phong-khach.svg"
                    alt="Phòng khách">
                <p>Phòng khách</p>
            </a><a href="#" title="Phòng bếp"><img src="https://decoxdesign.com/upload/loaisp/icon/phong-bep.svg"
                    alt="Phòng bếp">
                <p>Phòng bếp</p>
            </a><a href="#" title="Phòng ngủ"><img src="https://decoxdesign.com/upload/loaisp/icon/phong-ngu.svg"
                    alt="Phòng ngủ">
                <p>Phòng ngủ</p>
            </a><a href="#" title="Trẻ em"><img src="https://decoxdesign.com/upload/loaisp/icon/tre-em.svg"
                    alt="Trẻ em">
                <p>Trẻ em</p>
            </a><a href="#" title="Giặt phơi"><img src="https://decoxdesign.com/upload/loaisp/icon/giat-phoi.svg"
                    alt="Giặt phơi">
                <p>Giặt phơi</p>
            </a><a href="wc" title="Rest Room"><img src="https://decoxdesign.com/upload/loaisp/icon/rest-room.svg"
                    alt="Rest Room">
                <p>Rest Room</p>
            </a></div>
    </div>

    <a class="togglemenu">Menu</a>

    <nav class="subnav">
        <ul class="listmenu">
            <li><a href="cong-ty-thiet-ke-noi-that" title="Theo phong cách">Giới thiệu</a></li>
            <li class="active"><a onclick="showMenuMobile(this)" data-name="chung-cu" title="Chung cư">Chung cư</a></li>

            <li><a onclick="showMenuMobile(this)" data-name="nha-pho" title="Nhà phố">Nhà phố</a></li>

            <li><a onclick="showMenuMobile(this)" data-name="biet-thu" title="Biệt thự">Biệt thự</a></li>

            <li><a onclick="showMenuMobile(this)" data-name="nha-hang" title="Nhà hàng - Cafe">Nhà hàng - Cafe</a></li>

            <li><a onclick="showMenuMobile(this)" data-name="showroom" title="Showroom">Showroom</a></li>

            <li><a onclick="showMenuMobile(this)" data-name="khach-san" title="Khách sạn">Khách sạn</a></li>

            <!--<li class="active">
            <a onclick="showMenuMobile(this)" data-name="thiet-ke" title="Mẫu thiết kế">Mẫu thiết kế</a>
        </li>-->
            <li>
                <a onclick="showMenuMobile(this)" data-name="theo-dien-tich" title="Theo diện tích">Theo diện tích</a>
            </li>
            <li>
                <a onclick="showMenuMobile(this)" data-name="theo-so-phong" title="Theo số phòng">Theo số phòng</a>
            </li>
            <li>
                <a onclick="showMenuMobile(this)" data-name="theo-phong-cach" title="Theo phong cách">Theo phong
                    cách</a>
            </li>
            <li>
                <a onclick="showMenuMobile(this)" data-name="theo-tinh-thanh" title="Theo tỉnh thành">Theo tỉnh
                    thành</a>
            </li>

            <li><a href="thiet-ke-noi-that" title="">Thiết kế nội thất</a></li>

            <li><a href="thiet-ke-kien-truc" title="">Thiết kế kiến trúc</a></li>

            <li><a href="thi-cong-noi-that" title="">Công Trình Thực Tế</a></li>

            <li><a href="video-channel" title="Video Decox Design">Video Channel</a></li>
            <li> <a href="thiet-ke-noi-that-gia-re" title="Nội thất tiết kiệm">Nội thất tiết kiệm</a></li>

            <li><a href="tin-tuc-noi-that" title="">Tin tức</a></li>

            <li><a href="tuyen-dung" title="">Tuyển dụng</a></li>

            <li><a href="khuyen-mai" title="">Khuyến mãi</a></li>

            <li><a href="tu-van-thiet-ke-noi-that" title="">Tư vấn thiết kế</a></li>


        </ul>

        <div class="nav-r nav-chung-cu active">
            <ul class="category-mb">
                <li> <a href="thiet-ke-noi-that-safira" title="Safira Khang Điền"><span class="new">New</span> <i><img
                                src="upload/loaisp/icon/safira.jpg" alt="Safira Khang Điền"></i> <span>Safira Khang
                            Điền</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-vinhomes-grand-park" title="Vinhomes Grand Park"><span
                            class="new">New</span> <i><img src="upload/loaisp/icon/vinhomes-grand-park.jpg"
                                alt="Vinhomes Grand Park"></i> <span>Vinhomes Grand Park</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-palm-heights" title="Palm Heights"><span class="new">New</span> <i><img
                                src="upload/loaisp/icon/palm-heights.jpg" alt="Palm Heights"></i> <span>Palm
                            Heights</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-hado-centrosa" title="Hado Centrosa"><span class="new">New</span>
                        <i><img src="upload/loaisp/icon/hado-centrosa.png" alt="Hado Centrosa"></i> <span>Hado
                            Centrosa</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-kingdom-101" title="Kingdom 101"><span class="new">New</span> <i><img
                                src="upload/loaisp/icon/kingdom-101.jpg" alt="Kingdom 101"></i> <span>Kingdom 101</span>
                    </a> </li>

                <li> <a href="thiet-ke-noi-that-feliz-en-vista" title="Feliz En Vista"><span class="new">New</span>
                        <i><img src="upload/loaisp/icon/feliz-en-vista.jpg" alt="Feliz En Vista"></i> <span>Feliz En
                            Vista</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-mizuki-park" title="Mizuki Park"><span class="new">New</span> <i><img
                                src="upload/loaisp/icon/mizuki-park.jpg" alt="Mizuki Park"></i> <span>Mizuki Park</span>
                    </a> </li>

                <li> <a href="thiet-ke-noi-that-celadon-city" title="Celadon City"><span class="new">New</span> <i><img
                                src="upload/loaisp/icon/celadon-city.jpg" alt="Celadon City"></i> <span>Celadon
                            City</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-sunwah-pearl" title="Sunwah Pearl"><span class="new">New</span> <i><img
                                src="upload/loaisp/icon/sunwah-pearl.jpg" alt="Sunwah Pearl"></i> <span>Sunwah
                            Pearl</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-monarchy" title="Monarchy"><span class="new">New</span> <i><img
                                src="upload/loaisp/icon/monarchy.jpg" alt="Monarchy"></i> <span>Monarchy</span> </a>
                </li>

                <li> <a href="thiet-ke-noi-that-botanica" title="Botanica"> <i><img
                                src="upload/loaisp/icon/botanica.jpg" alt="Botanica"></i> <span>Botanica</span> </a>
                </li>

                <li> <a href="thiet-ke-noi-that-cityland" title="Cityland"> <i><img
                                src="upload/loaisp/icon/cityland.jpg" alt="Cityland"></i> <span>Cityland</span> </a>
                </li>

                <li> <a href="thiet-ke-noi-that-diamond-island" title="Diamond Island"> <i><img
                                src="upload/loaisp/icon/diamond-island.jpg" alt="Diamond Island"></i> <span>Diamond
                            Island</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-diamond-lotus" title="Diamond Lotus"> <i><img
                                src="upload/loaisp/icon/diamond-lotus.jpg" alt="Diamond Lotus"></i> <span>Diamond
                            Lotus</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-estella" title="Estella"> <i><img
                                src="upload/loaisp/icon/estella-heights.jpg" alt="Estella"></i> <span>Estella</span>
                    </a> </li>

                <li> <a href="thiet-ke-noi-that-golden-mansion" title="Golden Mansion"> <i><img
                                src="upload/loaisp/icon/golden-mansion.jpg" alt="Golden Mansion"></i> <span>Golden
                            Mansion</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-gold-view" title="Gold View"> <i><img
                                src="upload/loaisp/icon/gold-view.jpg" alt="Gold View"></i> <span>Gold View</span> </a>
                </li>

                <li> <a href="thiet-ke-noi-that-green-valley" title="Green Valley"> <i><img
                                src="upload/loaisp/icon/green-valley.jpg" alt="Green Valley"></i> <span>Green
                            Valley</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-hausneo" title="Hausneo"> <i><img src="upload/loaisp/icon/hausneo.png"
                                alt="Hausneo"></i> <span>Hausneo</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-lancaster" title="Lancaster"> <i><img
                                src="upload/loaisp/icon/lancaster.jpg" alt="Lancaster"></i> <span>Lancaster</span> </a>
                </li>

                <li> <a href="thiet-ke-noi-that-masteri-an-phu" title="Masteri An Phú"> <i><img
                                src="upload/loaisp/icon/masteri-an-phu.jpg" alt="Masteri An Phú"></i> <span>Masteri An
                            Phú</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-masteri-thao-dien" title="Masteri Thảo Điền"> <i><img
                                src="upload/loaisp/icon/masteri-thao-dien.jpg" alt="Masteri Thảo Điền"></i>
                        <span>Masteri Thảo Điền</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-masteri-millennium" title="Masteri Millennium"> <i><img
                                src="upload/loaisp/icon/masteri-millennium.jpg" alt="Masteri Millennium"></i>
                        <span>Masteri Millennium</span> </a> </li>

                <li> <a href="midtown-phu-my-hung" title="Midtown Phú Mỹ Hưng"> <i><img
                                src="upload/loaisp/icon/midtown-phu-my-hung.jpg" alt="Midtown Phú Mỹ Hưng"></i>
                        <span>Midtown Phú Mỹ Hưng</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-my-vien" title="Mỹ Viên"> <i><img src="upload/loaisp/icon/my-vien.svg"
                                alt="Mỹ Viên"></i> <span>Mỹ Viên</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-orchad-parkview" title="Orchad Parkview"> <i><img
                                src="upload/loaisp/icon/orchad-parkview.jpg" alt="Orchad Parkview"></i> <span>Orchad
                            Parkview</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-orchard-garden" title="Orchard Garden"> <i><img
                                src="upload/loaisp/icon/orchard-garden.jpg" alt="Orchard Garden"></i> <span>Orchard
                            Garden</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-richmond-city" title="Richmond City"> <i><img
                                src="upload/loaisp/icon/richmond-city.png" alt="Richmond City"></i> <span>Richmond
                            City</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-richstar" title="Richstar"> <i><img
                                src="upload/loaisp/icon/richstar.jpg" alt="Richstar"></i> <span>Richstar</span> </a>
                </li>

                <li> <a href="thiet-ke-noi-that-riviera-point" title="Riviera Point"> <i><img
                                src="upload/loaisp/icon/riviera-point.jpg" alt="Riviera Point"></i> <span>Riviera
                            Point</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-river-gate" title="River Gate"> <i><img
                                src="upload/loaisp/icon/river-gate.jpg" alt="River Gate"></i> <span>River Gate</span>
                    </a> </li>

                <li> <a href="thiet-ke-noi-that-saigon-mia" title="Saigon Mia"> <i><img
                                src="upload/loaisp/icon/saigon-mia.jpg" alt="Saigon Mia"></i> <span>Saigon Mia</span>
                    </a> </li>

                <li> <a href="thiet-ke-noi-that-saigon-pearl" title="Saigon Pearl"> <i><img
                                src="upload/loaisp/icon/saigon-pearl.jpg" alt="Saigon Pearl"></i> <span>Saigon
                            Pearl</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-saigon-south-residences" title="Saigon South Residences"> <i><img
                                src="upload/loaisp/icon/saigon-south-residences.jpg" alt="Saigon South Residences"></i>
                        <span>Saigon South Residences</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-sunrise-cityview" title="Sunrise Cityview"> <i><img
                                src="upload/loaisp/icon/sunrise-cityview.jpg" alt="Sunrise Cityview"></i> <span>Sunrise
                            Cityview</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-sunrise-riverside" title="Sunrise Riverside"> <i><img
                                src="upload/loaisp/icon/sunrise-riverside.jpg" alt="Sunrise Riverside"></i>
                        <span>Sunrise Riverside</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-the-sun-avenue" title="The Sun Avenue"> <i><img
                                src="upload/loaisp/icon/the-sun-avenue.jpg" alt="The Sun Avenue"></i> <span>The Sun
                            Avenue</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-vinhomes-central-park" title="Vinhomes Central Park"> <i><img
                                src="upload/loaisp/icon/vinhomes-central-park.jpg" alt="Vinhomes Central Park"></i>
                        <span>Vinhomes Central Park</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-viva-riverside" title="Viva Riverside"> <i><img
                                src="upload/loaisp/icon/viva-riverside.jpg" alt="Viva Riverside"></i> <span>Viva
                            Riverside</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-vinhomes-golden-river" title="Vinhomes Golden River"> <i><img
                                src="upload/loaisp/icon/vinhomes-golden-river.png" alt="Vinhomes Golden River"></i>
                        <span>Vinhomes Golden River</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-wilton-tower" title="Wilton Tower"> <i><img
                                src="upload/loaisp/icon/wilton-tower.jpg" alt="Wilton Tower"></i> <span>Wilton
                            Tower</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-du-an-khac" title="Dự án khác"> <i><img
                                src="upload/loaisp/icon/du-an-khac.png" alt="Dự án khác"></i> <span>Dự án khác</span>
                    </a> </li>

            </ul>
        </div>

        <div class="nav-r nav-nha-pho ">
            <ul class="category-mb">
                <li> <a href="thiet-ke-noi-that-nha-pho-2-tang" title="Nhà Phố 2 Tầng"> <i><img
                                src="upload/loaisp/icon/nha-pho-2-tang.svg" alt="Nhà Phố 2 Tầng"></i> <span>Nhà Phố 2
                            Tầng</span> </a> </li>

                <li> <a href="thiet-ke-noi-that-nha-pho" title="Nhà Phố 3 Tầng"> <i><img
                                src="upload/loaisp/icon/nha-pho-3-tang.svg" alt="Nhà Phố 3 Tầng"></i> <span>Nhà Phố 3
                            Tầng</span> </a> </li>

            </ul>
        </div>

        <div class="nav-r nav-biet-thu ">
            <ul class="category-mb">
                <li> <a href="thiet-ke-noi-that-villa" title="Villa"> <i><img src="upload/loaisp/icon/villa.svg"
                                alt="Villa"></i> <span>Villa</span> </a> </li>

                <li> <a href="thiet-ke-bungalow" title="Bungalow"> <i><img src="upload/loaisp/icon/bungalow.svg"
                                alt="Bungalow"></i> <span>Bungalow</span> </a> </li>

            </ul>
        </div>

        <div class="nav-r nav-nha-hang ">
            <ul class="category-mb">
                <li> <a href="thiet-ke-nha-hang" title="Nhà Hàng"> <i><img src="upload/loaisp/icon/nha-hang.svg"
                                alt="Nhà Hàng"></i> <span>Nhà Hàng</span> </a> </li>

                <li> <a href="cafe" title="Cafe"> <i><img src="upload/loaisp/icon/cafe.svg" alt="Cafe"></i>
                        <span>Cafe</span> </a> </li>

            </ul>
        </div>

        <div class="nav-r nav-showroom ">
            <ul class="category-mb">
                <li> <a href="thiet-ke-noi-that-showroom" title="Showroom"> <i><img
                                src="upload/loaisp/icon/showroom-my-pham.svg" alt="Showroom"></i> <span>Showroom</span>
                    </a> </li>

            </ul>
        </div>

        <div class="nav-r nav-khach-san ">



        </div>



        <div class="nav-r nav-theo-dien-tich">
            <ul class="category-mb">
                <li class="one"> <a href="thiet-ke-can-ho-nho" title="Căn hộ nhỏ"> <span>Căn hộ nhỏ</span> </a> </li>

                <li class="one"> <a href="chung-cu-50-60m2" title="50-60m2"> <span>50-60m2</span> </a> </li>

                <li class="one"> <a href="thiet-ke-noi-that-chung-cu-70m2" title="70m2"> <span>70m2</span> </a> </li>

                <li class="one"> <a href="chung-cu-80-90m2" title="80-90m2"> <span>80-90m2</span> </a> </li>

                <li class="one"> <a href="chung-cu-100-120m2" title="100-120m2"> <span>100-120m2</span> </a> </li>

                <li class="one"> <a href="chung-cu-tren-120m2" title="Trên 120m2"> <span>Trên 120m2</span> </a> </li>

            </ul>
        </div>
        <div class="nav-r nav-theo-so-phong">
            <ul class="category-mb">
                <li class="one"> <a href="1-phong-ngu" title="1 phòng ngủ"> <span>1 phòng ngủ</span> </a> </li>

                <li class="one"> <a href="2-phong-ngu" title="2 phòng ngủ"> <span>2 phòng ngủ</span> </a> </li>

                <li class="one"> <a href="3-phong-ngu" title="3 phòng ngủ"> <span>3 phòng ngủ</span> </a> </li>

            </ul>
        </div>

        <div class="nav-r nav-theo-phong-cach">
            <ul class="category-mb">
                <li class="one"> <a href="thiet-ke-noi-that-hien-dai" title="Phong cách hiện đại - Modern style">
                        <span>Phong cách hiện đại - Modern style</span> </a> </li>

                <li class="one"> <a href="phong-cach-scandinavian" title="Phong cách Bắc Âu - Scandinavian style">
                        <span>Phong cách Bắc Âu - Scandinavian style</span> </a> </li>

                <li class="one"> <a href="thiet-ke-noi-that-toi-gian" title="Phong cách tối giản - Minimalism style">
                        <span>Phong cách tối giản - Minimalism style</span> </a> </li>

                <li class="one"> <a href="phong-cach-industrial" title="Phong cách công nghiệp - Industrial style">
                        <span>Phong cách công nghiệp - Industrial style</span> </a> </li>

                <li class="one"> <a href="phong-cach-dong-duong" title="Phong cách đông dương - Indochine style">
                        <span>Phong cách đông dương - Indochine style</span> </a> </li>

                <li class="one"> <a href="phong-cach-ban-co-dien" title="Phong cách bán cổ điển - Neoclassical style">
                        <span>Phong cách bán cổ điển - Neoclassical style</span> </a> </li>

                <li class="one"> <a href="thiet-ke-noi-that-co-dien" title="Phong cách cổ điển - Classic style">
                        <span>Phong cách cổ điển - Classic style</span> </a> </li>

            </ul>
        </div>

        <div class="nav-r nav-theo-tinh-thanh">
            <ul class="category-mb">
                <li class="one"> <a href="du-an-decox-tphcm" title="TPHCM"> <span>TPHCM</span> </a> </li>

                <li class="one"> <a href="du-an-decox-ha-noi" title="Hà Nội"> <span>Hà Nội</span> </a> </li>

                <li class="one"> <a href="du-an-decox-nha-trang" title="Nha Trang"> <span>Nha Trang</span> </a> </li>

                <li class="one"> <a href="du-an-decox-da-nang" title="Đà Nẵng"> <span>Đà Nẵng</span> </a> </li>

                <li class="one"> <a href="du-an-decox-ha-long" title="Hạ Long"> <span>Hạ Long</span> </a> </li>

                <li class="one"> <a href="du-an-decox-phu-quoc" title="Phú Quốc"> <span>Phú Quốc</span> </a> </li>

                <li class="one"> <a href="du-an-decox-binh-duong" title="Bình Dương"> <span>Bình Dương</span> </a> </li>

                <li class="one"> <a href="du-an-decox-dong-nai" title="Đồng Nai"> <span>Đồng Nai</span> </a> </li>

                <li class="one"> <a href="du-an-decox-d" title="Đà Lạt"> <span>Đà Lạt</span> </a> </li>

                <li class="one"> <a href="du-an-decox-hai-phong" title="Hải Phòng"> <span>Hải Phòng</span> </a> </li>

            </ul>
        </div>
    </nav>
</div>