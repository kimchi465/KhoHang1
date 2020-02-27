<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                {{ __('freshfruit.pages.all') }}
                </button>

                @foreach($danhsachloai as $loai)
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".loai-{{ $loai->l_ma }}">
                    {{ $loai->l_ten }}
                </button>
                @endforeach
            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <!-- <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Filter
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div> -->
            </div>

            <!-- Search product -->
            <div class="panel-search w-full p-t-10 p-b-15">
            <form action="{{ route('frontend.home')}}">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>

                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="{{ __('freshfruit.pages.search') }}">
                </div>
            </form>
            </div>

            
        </div>

        <div class="row isotope-grid">
            @foreach($data as $index=>$sp)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item loai-{{ $sp->l_ma }}">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-sp-ma="{{ $sp->sp_ma }}">
                        {{ __('freshfruit.pages.quickView') }}
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{ $sp->sp_ten }}
                            </a>

                            <span class="stext-105 cl3">
                                {{ $sp->sp_gia }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Modal quick view -->
                @include('frontend.widgets.product-quick-view', ['sp' => $sp, 'hinhanhlienquan' => $danhsachhinhanhlienquan])
            </div>
            @endforeach
        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                {{ __('freshfruit.pages.loadMore') }}
            </a>
        </div>
    </div>
</div>