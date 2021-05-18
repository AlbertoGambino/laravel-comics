@extends('layouts.main-layout')

@section('content')

    <div class="blu-divider">

        <div class="element-image">

            <img src="{{$elem['thumb']}}" alt="">

        </div>

    </div>
    <div class="white-space">

        <div class="justify">

            <div class="comics-content">

                <div class="comics-data">

                    <div class="com-title">

                        <h1>{{$elem['title']}}</h1>

                    </div>
                    <div class="com-price">

                        <div class="available">

                            <div class="usprice">

                                <span class="price-span">U.S. Price: </span>{{$elem['price']}}

                            </div>
                            <div class="us-available">

                                AVAILABLE

                            </div>
                            <div class="us-check">

                                Check Availability

                            </div>

                        </div>



                    </div>
                    <div class="com-description">

                        <p>{{$elem['description']}}</p>

                    </div>

                </div>
                <div class="comics-advertisment">


                    <img src="{{asset('/storage/assets/adv.jpg')}}" alt="">


                </div>



            </div>

        </div>

    </div>
    <div class="grey-talent">

        <div class="justify">

            <div class="table-left">

                <div class="talent">

                    <h2>Talent</h2>

                </div>
                <div class="art-by">

                    <div class="art">

                        Art by:

                    </div>
                    <div class="for-art">

                        @foreach ($elem['artists'] as $artist)

                            {{$artist}},

                        @endforeach

                    </div>

                </div>
                <div class="written-by">

                    <div class="written">

                        Written by:

                    </div>
                    <div class="for-written">

                        @foreach ($elem['writers'] as $writer)

                            {{$writer}},

                        @endforeach

                    </div>

                </div>


            </div>
            <div class="table-right">

                <div class="specs">

                    <h2>Specs</h2>

                </div>
                <div class="specs-series">

                    <div class="series">

                        Series:


                    </div>
                    <div class="series-name">

                        {{$elem['series']}}

                    </div>

                </div>
                <div class="specs-usprice">

                    <div class="price">

                        U.S. Price:

                    </div>
                    <div class="real-price">

                        {{$elem['price']}}

                    </div>

                </div>
                <div class="specs-sale">

                    <div class="on-sale">

                        On Sale Date:

                    </div>
                    <div class="sale">

                        {{$elem['sale_date']}}

                    </div>

                </div>


            </div>

        </div>


    </div>




@endsection
