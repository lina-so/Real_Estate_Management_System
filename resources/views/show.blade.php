
@extends('layouts.app')


@section('content')

    @foreach($reals as $real)
            <div class="container1 item">
                <div class="listing-item">
                    <div class="left-image">
                    <a href="#"><img src="{{asset('storage/app/images/'.$real->userFolderName . '/cover.jpg')}}" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                    <a href="#"><h4>{{$real->property_type }}</h4></a>
                    <h6>by: {{$real->user_id}}</h6>
                    <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                    </ul>
                    <span class="price"><div class="icon"><img src="images/listing-icon-01.png" alt=""></div> ${{$real->price}}/ month with taxes</span>
                    <span class="details">Details: <em>{{$real->area}} sq ft</em></span>
                    <ul class="info">
                        <li><img src="images/listing-icon-02.png" alt=""> {{$real->number_of_rooms}} Bedrooms</li>
                        <li><img src="images/listing-icon-03.png" alt=""> {{$real->number_of_path_rooms}} Bathrooms</li>
                    </ul>
                    <div class="main-white-button">
                        <a href="contact.html"><i class="fa fa-eye"></i>View Details</a>
                    </div>
                    </div>
                </div>
            </div>
    @endforeach

@endsection