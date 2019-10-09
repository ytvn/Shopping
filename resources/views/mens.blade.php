@extends('layouts.full')

@section('content')
<div class="page-head">
    <div class="container">
        <h3>Men's Wear</h3>
    </div>
</div>
<!-- mens -->
<div class="men-wear">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="filter-price">
                <h3>Filter By Price</h3>
                <ul class="dropdown-menu6">
                    <li>
                        <div id="slider-range"></div>
                        <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                    </li>
                </ul>
                <!---->
                <script type='text/javascript'>//<![CDATA[
                    $(window).load(function () {
                        $("#slider-range").slider({
                            range: true,
                            min: 0,
                            max: 9000,
                            values: [1000, 7000],
                            slide: function (event, ui) {
                                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                            }
                        });
                        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

                    });//]]>

                </script>
                <script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
                <!---->
            </div>
            <div class="css-treeview">
                <h4>Categories</h4>
                <ul class="tree-list-pad">
                    <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Men's
                            Wear</label>
                        <ul>
                            <li><input type="checkbox" id="item-0-0" /><label for="item-0-0">Ethinic Wear</label>
                                <ul>
                                    <li><a href="{{$url->getMens()}}">Shirts</a></li>
                                    <li><a href="{{$url->getMens()}}">Caps</a></li>
                                    <li><a href="{{$url->getMens()}}">Shoes</a></li>
                                    <li><a href="{{$url->getMens()}}">Pants</a></li>
                                    <li><a href="{{$url->getMens()}}">SunGlasses</a></li>
                                    <li><a href="{{$url->getMens()}}">Trousers</a></li>
                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-0-1" /><label for="item-0-1">Party Wear</label>
                                <ul>
                                    <li><a href="{{$url->getMens()}}">Shirts</a></li>
                                    <li><a href="{{$url->getMens()}}">Caps</a></li>
                                    <li><a href="{{$url->getMens()}}">Shoes</a></li>
                                    <li><a href="{{$url->getMens()}}">Pants</a></li>
                                    <li><a href="{{$url->getMens()}}">SunGlasses</a></li>
                                    <li><a href="{{$url->getMens()}}">Trousers</a></li>
                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-0-2" /><label for="item-0-2">Casual Wear</label>
                                <ul>
                                    <li><a href="{{$url->getMens()}}">Shirts</a></li>
                                    <li><a href="{{$url->getMens()}}">Caps</a></li>
                                    <li><a href="{{$url->getMens()}}">Shoes</a></li>
                                    <li><a href="{{$url->getMens()}}">Pants</a></li>
                                    <li><a href="{{$url->getMens()}}">SunGlasses</a></li>
                                    <li><a href="{{$url->getMens()}}">Trousers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">Best
                            Collections</label>
                        <ul>
                            <li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">New
                                    Arrivals</label>
                                <ul>
                                    <li><a href="{{$url->getMens()}}">Shirts</a></li>
                                    <li><a href="{{$url->getMens()}}">Shoes</a></li>
                                    <li><a href="{{$url->getMens()}}">Pants</a></li>
                                    <li><a href="{{$url->getMens()}}">SunGlasses</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2">Best Offers</label>
                        <ul>
                            <li><input type="checkbox" id="item-2-0" /><label for="item-2-0">Summer Discount
                                    Sales</label>
                                <ul>
                                    <li><a href="{{$url->getMens()}}">Shirts</a></li>
                                    <li><a href="{{$url->getMens()}}">Shoes</a></li>
                                    <li><a href="{{$url->getMens()}}">Pants</a></li>
                                    <li><a href="{{$url->getMens()}}">SunGlasses</a></li>
                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-2-1" /><label for="item-2-1">Exciting Offers</label>
                                <ul>
                                    <li><a href="{{$url->getMens()}}">Shirts</a></li>
                                    <li><a href="{{$url->getMens()}}">Shoes</a></li>
                                    <li><a href="{{$url->getMens()}}">Pants</a></li>
                                    <li><a href="{{$url->getMens()}}">SunGlasses</a></li>
                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-2-2" /><label for="item-2-2">Flat Discounts</label>
                                <ul>
                                    <li><a href="{{$url->getMens()}}">Shirts</a></li>
                                    <li><a href="{{$url->getMens()}}">Shoes</a></li>
                                    <li><a href="{{$url->getMens()}}">Pants</a></li>
                                    <li><a href="{{$url->getMens()}}">SunGlasses</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="community-poll">
                <h4>Community Poll</h4>
                <div class="swit form">
                    <form>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More
                                    convenient for shipping and delivery</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label>
                            </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label>
                            </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label>
                            </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to
                                    choose</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label>
                            </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back
                                    guaranteed</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div>
                        </div>
                        <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 products-right">
            <h5>Product Compare(0)</h5>
            <div class="sort-grid">
                <div class="sorting">
                    <h6>Sort By</h6>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">Default</option>
                        <option value="null">Name(A - Z)</option>
                        <option value="null">Name(Z - A)</option>
                        <option value="null">Price(High - Low)</option>
                        <option value="null">Price(Low - High)</option>
                        <option value="null">Model(A - Z)</option>
                        <option value="null">Model(Z - A)</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>Showing</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">7</option>
                        <option value="null">14</option>
                        <option value="null">28</option>
                        <option value="null">35</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-top">
                <script src="{{asset('js/responsiveslides.min.js')}}"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider3").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });
                    });
                </script>
                <div id="top" class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <img class="img-responsive" src="{{asset('images/men1.jpg')}}" alt=" " />
                        </li>
                        <li>
                            <img class="img-responsive" src="{{asset('images/men2.jpg')}}" alt=" " />
                        </li>
                        <li>
                            <img class="img-responsive" src="{{asset('images/men3.jpg')}}" alt=" " />
                        </li>
                        <li>
                            <img class="img-responsive" src="{{asset('images/men4.jpg')}}" alt=" " />
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-bottom">
                <div class="col-sm-4 men-wear-left">
                    <img class="img-responsive" src="{{asset('images/men3.jpg')}}" alt=" " />
                </div>
                <div class="col-sm-8 men-wear-right">
                    <h4>Exclusive Men's Collections</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit. </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- col 4 -->

            @php

            $n1=$n2=$n3=0;
            if(count($products)>=2) $n1=2;
            else $n1=0;

            if(count($products)>=6) $n2=6;
            else $n2=0;

            if(count($products)>=10) $n3=10;
            else $n3=0;

            @endphp

            @for($i=0;$i<=$n1;$i++) <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src={{$products[$i]->src}} alt="" class="pro-image-front">
                        <img src={{$products[$i]->src}} alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{$url->getSingle()}}/{{$products[$i]->id}}/{{$products[$i]->id}}"
                                    class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="{{$url->getSingle()}}/{{$products[$i]->id}}">{{$products[$i]->title}}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">{{$products[$i]->priceold}}</span>
                            <del>{{$products[$i]->pricespecial}}</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
        </div>
        @endfor
        <!-- end col 4 -->
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="single-pro">

        @for($i=3;$i<=$n2;$i++) <div class="col-md-3 product-men">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                    <img src={{$products[$i]->src}} alt="" class="pro-image-front">
                    <img src={{$products[$i]->src}} alt="" class="pro-image-back">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="{{$url->getSingle()}}/{{$products[$i]->id}}" class="link-product-add-cart">Quick
                                View</a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>
                </div>
                <div class="item-info-product ">
                    <h4><a href="{{$url->getSingle()}}/{{$products[$i]->id}}">{{$products[$i]->title}}</a></h4>
                    <div class="info-product-price">
                        <span class="item_price">{{$products[$i]->priceold}}</span>
                        <del>{{$products[$i]->pricespecial}}</del>
                    </div>
                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                </div>
            </div>
    </div>
    @endfor

    @for($i=7;$i<=$n3;$i++) <div class="col-md-3 product-men yes-marg">
        <div class="men-pro-item simpleCart_shelfItem">
            <div class="men-thumb-item">
                <img src={{$products[$i]->src}} alt="" class="pro-image-front">
                <img src={{$products[$i]->src}} alt="" class="pro-image-back">
                <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                        <a href="{{$url->getSingle()}}/{{$products[$i]->id}}" class="link-product-add-cart">Quick
                            View</a>
                    </div>
                </div>
                <span class="product-new-top">New</span>
            </div>
            <div class="item-info-product ">
                <h4><a href="{{$url->getSingle()}}/{{$products[$i]->id}}">{{$products[$i]->title}}</a></h4>
                <div class="info-product-price">
                    <span class="item_price">{{$products[$i]->priceold}}</span>
                    <del>{{$products[$i]->pricespecial}}</del>
                </div>
                <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
            </div>
        </div>
</div>
@endfor


<div class="clearfix"></div>
</div>
<div class="pagination-grid text-right">
    <ul class="pagination paging">

        @if($page<1 ||$page>=$max_page)
        <script>window.location = "{{$url->getMens()}}{{$url->getClothings()."/1"}}"</script>
        @endif
        <li><a href="{{$page-1}}" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
        <li class="active" id="x"><a href="{{$page}}">{{$page}}<span class="sr-only">(current)</span></a></li>
        @if($page>=$max_page)
        <script>
            document.getElementById("x").innerHTML = "";
        </script>
        @for($i=$max_page-4;$i<=$max_page-1;$i++) <li><a href="{{$i}}">{{$i}}</a></li>
            @endfor
            <li class="active"><a href="{{$page}}">{{$page}}<span class="sr-only">(current)</span></a></li>
            @endif
            @for($i=$page+1;$i<=$page+4;$i++) @if($i>$max_page)
                @break
                @endif
                <li><a href="{{$i}}">{{$i}}</a></li>
                @endfor
                <li><a href="{{$page+1}}" aria-label="Next"><span aria-hidden="true">»</span></a></li>
    </ul>
</div>
</div>
</div>
<!-- //mens -->
@endsection
