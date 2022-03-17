<header>
    <div class="new-home-2020">
        <div class="home-center">
            <div class="banner-home-slide">
                
    
                <form action="/microservice-architecture-router/Product/ProductSearch/Index" method="post" novalidate="novalidate">
                    <div class="home-search">
                        <div class="home-search-tool">
                            <ul class="home-search-tab">
                                <li class="actived" ptype="38">Nhà đất bán</li>
                                <li ptype="49">Nhà đất cho thuê</li>
                            </ul>
                            <div class="home-search-content">
                                <div class="home-search-control">
                                    <div class="search-cate">
                                        <div class="select-custom">
                                            <o id="lblCurrCate">Tất cả nhà đất</o>
                                        </div>
                                        <div id="divCatagoryReOptions" class="advance-select-options">
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-input">
                                        <input type="text" id="txtSearch" placeholder="Tìm kiếm địa điểm, khu vực" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" name="txtSearch">
                                        <input type="hidden" name="Keyword">
                                    </div>
                                    <div class="search-button">
                                        <input type="button" class="btn-home-search" value="Tìm kiếm" id="btnSearch">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="home-filter home-filter-1 m-t-10">
                                    <div id="divCity" class="search-filter advance-select-box">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Trên toàn quốc</span>
                                        </span>
                                        <input id="hdCboCity" name="CityCode" type="hidden" value="">
                                        <input data-val="true" data-val-required="The DistrictId field is required." id="hdCboDistrict" name="DistrictId" type="hidden" value="0">
                                        <div id="divCityOptions" class="custom-scroll advance-select-options advance-options">
                                            <ul class="advance-options level">
                                                <li vl="CN" class="advance-options">Trên toàn quốc</li>
                                            </ul>
                                        </div>
                                    </div>
                
                                    <div id="divPrice" class="search-filter advance-select-box">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Mức giá</span>
                                        </span>
                                        <input data-val="true" data-val-required="The PriceId field is required." id="hdCboPrice" name="PriceId" type="hidden" value="-1">
                                        <div id="divPriceOptions" class="advance-select-options advance-price-options advance-options">
                                            <div class="custom-slider">
                                                <input class="min-value advance-options" data-val="true" data-val-number="The field MinPrice must be a number." decimal="true" id="txtPriceMinValue" maxlength="6" name="MinPrice" numbersonly="true" placeholder="Từ" type="text" value="">
                                                <span>-</span>
                                                <input class="min-value advance-options" data-val="true" data-val-number="The field MaxPrice must be a number." decimal="true" id="txtPriceMaxValue" maxlength="6" name="MaxPrice" numbersonly="true" placeholder="Đến" type="text" value="">
                                                <div id="price-slider-range" class="price-filter-range" name="rangeInput"></div>
                                            </div>
                                            <ul class="advance-options">
                                                        <li vl="0" class="advance-options  ">Thỏa thuận</li>
                                                        <li vl="1" class="advance-options  ">&lt; 500 triệu</li>
                                                        <li vl="2" class="advance-options  ">500 - 800 triệu</li>
                                                        <li vl="3" class="advance-options  ">800 triệu - 1 tỷ</li>
                                                        <li vl="4" class="advance-options  ">1 - 2 tỷ</li>
                                                        <li vl="5" class="advance-options  ">2 - 3 tỷ</li>
                                                        <li vl="6" class="advance-options  ">3 - 5 tỷ</li>
                                                        <li vl="7" class="advance-options  ">5 - 7 tỷ</li>
                                                        <li vl="8" class="advance-options  ">7 - 10 tỷ</li>
                                                        <li vl="9" class="advance-options  ">10 - 20 tỷ</li>
                                                        <li vl="10" class="advance-options  ">20 - 30 tỷ</li>
                                                        <li vl="11" class="advance-options  ">&gt; 30 tỷ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divArea" class="search-filter advance-select-box">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Diện tích</span>
                                        </span>
                                        <input data-val="true" data-val-required="The AreaId field is required." id="hdCboArea" name="AreaId" type="hidden" value="-1">
                                        <div id="divAreaOptions" class="advance-select-options advance-area-options advance-options">
                                            <div class="custom-slider">
                                                <input class="min-value advance-options" decimal="true" id="txtAreaMinValue" maxlength="6" name="MinArea" numbersonly="true" placeholder="Từ" type="text" value="">
                                                <span>-</span>
                                                <input class="min-value advance-options" decimal="true" id="txtAreaMaxValue" maxlength="6" name="MaxArea" numbersonly="true" placeholder="Đến" type="text" value="">
                                                <span>m²</span>
                                                <div id="area-slider-range" class="price-filter-range" name="rangeInput"></div>
                                            </div>
                                            <ul class="advance-options">
                                                <li vl="-1" class="advance-options">Diện tích</li>
                                                        <li vl="0" class="advance-options ">Chưa xác định</li>
                                                        <li vl="1" class="advance-options ">&lt;= 30 m2</li>
                                                        <li vl="2" class="advance-options ">30 - 50 m2</li>
                                                        <li vl="3" class="advance-options ">50 - 80 m2</li>
                                                        <li vl="4" class="advance-options ">80 - 100 m2</li>
                                                        <li vl="5" class="advance-options ">100 - 150 m2</li>
                                                        <li vl="6" class="advance-options ">150 - 200 m2</li>
                                                        <li vl="7" class="advance-options ">200 - 250 m2</li>
                                                        <li vl="8" class="advance-options ">250 - 300 m2</li>
                                                        <li vl="9" class="advance-options ">300 - 500 m2</li>
                                                        <li vl="10" class="advance-options ">&gt;= 500 m2</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divProject" class="search-filter advance-select-box">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Dự án</span>
                                        </span>
                                        <input data-val="true" data-val-required="The ProjectId field is required." id="hdCboProject" name="ProjectId" type="hidden" value="0">
                                        <div id="divProjectOptions" class="custom-scroll advance-select-options advance-options">
                                            <ul class="advance-options">
                                                <li vl="0" class="advance-options">Dự án</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-action search-action1">
                                        <a href="javascript:void(0)" class="m-r-10 filter-more">
                                            <img src="https://file4.batdongsan.com.vn/images/newhome/icon-down-arrow.png">
                                            Thêm
                                        </a>
                                        <a href="javascript:void(0)" class="action-reset-search-form">
                                            <img src="https://file4.batdongsan.com.vn/images/newhome/search-reset.png">
                                            Xóa
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="home-filter home-filter-2 slideClose">
                                    <div id="divWard" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Phường xã</span>
                                        </span>
                                        <input data-val="true" data-val-required="The WardId field is required." id="hdCboWard" name="WardId" type="hidden" value="0">
                                        <div id="divWardOptions" class="custom-scroll advance-select-options advance-options">
                                            <ul class="advance-options">
                                                <li vl="0" class="advance-options">Phường xã</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divStreet" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Đường phố</span>
                                        </span>
                                        <input data-val="true" data-val-required="The StreetId field is required." id="hdCboStreet" name="StreetId" type="hidden" value="0">
                                        <div id="divStreetOptions" class="custom-scroll advance-select-options advance-options">
                                            <ul class="advance-options">
                                                <li vl="0" class="advance-options">Đường phố</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divBedRoom" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Số phòng</span>
                                        </span>
                                        <input data-val="true" data-val-required="The RoomId field is required." id="hdCboBedRoom" name="RoomId" type="hidden" value="-1">
                                        <div id="divBedRoomOptions" class="advance-select-options advance-options">
                                            <ul class="advance-options">
                                                <li vl="-1" class="advance-options">Số phòng</li>
                                                        <li vl="0" class="advance-options ">Không xác định</li>
                                                        <li vl="1" class="advance-options ">1+</li>
                                                        <li vl="2" class="advance-options ">2+</li>
                                                        <li vl="3" class="advance-options ">3+</li>
                                                        <li vl="4" class="advance-options ">4+</li>
                                                        <li vl="5" class="advance-options ">5+</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divHomeDirection" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content">Hướng nhà</span>
                                        </span>
                                        <input data-val="true" data-val-required="The DirectionId field is required." id="hdCboHomeDirection" name="DirectionId" type="hidden" value="-1">
                                        <div id="divHomeDirectionOptions" class="advance-select-options advance-options">
                                            <ul class="advance-options">
                                                <li vl="-1">Hướng nhà</li>
                                                        <li vl="0" class="advance-options ">KXĐ</li>
                                                        <li vl="1" class="advance-options ">Đông</li>
                                                        <li vl="2" class="advance-options ">Tây</li>
                                                        <li vl="3" class="advance-options ">Nam</li>
                                                        <li vl="4" class="advance-options ">Bắc</li>
                                                        <li vl="5" class="advance-options ">Đông-Bắc</li>
                                                        <li vl="6" class="advance-options ">Tây-Bắc</li>
                                                        <li vl="7" class="advance-options ">Tây-Nam</li>
                                                        <li vl="8" class="advance-options ">Đông-Nam</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-action search-action2">
                                        <a href="javascript:void(0)" class="filter-less">
                                            <img src="https://file4.batdongsan.com.vn/images/newhome/up-arrow.png"> Thu gọn
                                        </a>
                                        <a href="javascript:void(0)" class="action-reset-search-form">
                                            <img src="https://file4.batdongsan.com.vn/images/newhome/search-reset.png"> Xóa
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagoryRe" name="SubCateId" type="hidden" value="0">
                    <input data-val="true" data-val-required="The CateId field is required." id="hdCboCatagory" name="CateId" type="hidden" value="0">
                    <div id="home-autocomplete"></div>
                </form>
    
            </div>
        </div>
    </div>
</header><?php /**PATH D:\xampp72\htdocs\bds\resources\views/frontend/inc/seachbds.blade.php ENDPATH**/ ?>