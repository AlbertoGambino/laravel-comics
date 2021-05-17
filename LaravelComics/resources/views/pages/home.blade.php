@extends('layouts.main-layout')

@section('content')

<div class="jumbotron">

</div>

<div class="card-collector">

    <div class="justify">
        @foreach ($data as $item)
            <div class="card">

                <div class="card-image">

                    <img src="{{$item['thumb']}}" alt="">

                </div>
                <div class="card-title">

                    {{$item['series']}}

                </div>


            </div>
        @endforeach

    </div>
    <div class="load-more">

        LOAD MORE

    </div>



</div>
<div class="information">

    <div class="justify">

        <div class="information-icon">

            <img src="{{asset('/storage/assets/buy-comics-digital-comics.png')}}" alt="">

        </div>
        <div class="information-title">

            DIGITAL COMICS

        </div>
        <div class="information-icon">

            <img src="{{asset('/storage/assets/buy-comics-merchandise.png')}}" alt="">

        </div>
        <div class="information-title">

            DC MERCHANDISE

        </div>
        <div class="information-icon">

            <img src="{{asset('/storage/assets/buy-comics-subscriptions.png')}}" alt="">

        </div>
        <div class="information-title">

            SUBSCRIPTION

        </div>
        <div class="information-icon">

            <img src="{{asset('/storage/assets/buy-comics-shop-locator.png')}}" alt="">

        </div>
        <div class="information-title">

            COMIC SHOP LOCATOR

        </div>
        <div class="information-icon">

            <img src="{{asset('/storage/assets/buy-dc-power-visa.svg')}}" alt="">

        </div>
        <div class="information-title">

            DC POWER VISA

        </div>


    </div>


</div>


@endsection
