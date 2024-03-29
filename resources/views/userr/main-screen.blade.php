@extends('layouts.index')
@section('mainContentUser')

<div class="newproducts-w3agile">
    <h3>Top selling offers</h3>
    @foreach ($book as $book )
 <div class="container">
    <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left-1">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid1">
                            
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="products.html"><img style="width:100px" title=" " alt=" " src="{{asset('uimages/'.$book->image)}}"></a>
                                            <p>{{$book->name}}</p>
                                            <p>{{$book->title}}</p>
                                            <div class="stars">
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                            </div>
                                                <h4>{{$book->price}}$</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="business" value=" ">
                                                    <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                                                    <input type="hidden" name="amount" value="35.99">
                                                    <input type="hidden" name="discount_amount" value="1.00">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <input type="hidden" name="return" value=" ">
                                                    <input type="hidden" name="cancel_return" value=" ">
                                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                 </figure>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="clearfix"> </div>
        </div>
    </div>
 @endforeach

</div>

@endsection('mainContentUser')
