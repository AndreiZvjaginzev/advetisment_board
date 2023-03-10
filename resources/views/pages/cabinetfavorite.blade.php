@extends('templates.'.$template)

@section('content')






<div id="main" class="mbg">
    
    <div class="container page-add ">
        <div class="bl-tb container-tb">
            <!-- Начало контента -->
            <div class="col-md-9">
            <h2>Избранное</h2>
            <div class="offerlist">
                @foreach($user->favoriteadverts as $advert)
                    <div class="cl-line pos-rel"></div>
                    <div id="message_30" class="offer bl-tb">
                        <div class="offer-photo bl-cell al-top pos-rel">
                            <div class="pos-rel ov-h">
                                <a title="{{ $advert->title }}" href="#">
                                    <div class="carousel-img br3 brazzers-daddy">
                                        <div class="carousel-more pos-abs c-f s12">Ещё 1 фото</div>
                                        <div class="tmb-wrap">
                                            <div class="tmb-wrap-table">
                                                <div class="active"></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Диски колесные алюминиевые R17-20" src="/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_1.webp" style="display: none;">
                                            </div>
                                            <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                <img alt="Диски колесные алюминиевые R17-20" src="/assets/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_2.webp" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                        <div class="offer-title bl-cell al-top pos-rel">
                            <h3>
                                <a class="f-m a-hov" title="{{ $advert->title }}" href="#">{{ $advert->title }}</a>
                            </h3>
                            <div class="offer-location s13 f-l c-7">{{ $advert->category->name }} 
                                <br>
                                @if($advert->region !== null)
                                    {{ $advert->region->name }}
                                @endif
                            </div>
                            <div class="magazin-l">
                                <a class="btn btn-default s13" href="/shops/7-zapchasti-all.html" title="Запчасти ALL">Запчасти ALL</a>
                            </div>  
                            <div class="offer-details pos-abs">
                                <span class="offer-date bl-inl al-top s13 f-l c-7">{{ $advert->created_at }}</span>
                            </div>
                        </div>
                        <div class="offer-price bl-cell al-top pos-rel text-right">
                            <div class="price bl-inl al-top s16 f-m">
                                <span class="currency">₽</span>
                                {{ $advert->price }}
                            </div>
                            <div class="offer-actions pos-abs">
                                <div class="btn-group"></div>
                                <span class="notepad ic-star" data-id="30" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div><!--/offerlist-->
                    
            </div>

            <!-- </div> -->
            <!-- Конец контента -->

            <div class="col-md-3">
                <div class="bl-cell al-top bl-right">
                    <div class="sidebar_right pos-rel">
                        <!-- Sidebar начало -->
                            {!! $widget_cabinet_aside !!}
                        <!-- Sidebar конец -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection