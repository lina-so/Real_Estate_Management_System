
@extends('layouts.app')


@section('content')

<h1>
  your favoraite 
  </h1>

  <div>
      @if ($favoraite->count()>0)
      @foreach($favoraite as $fav)
            <div class="container1 item">
                <div class="listing-item">
                    <div class="left-image">
                    <a href="#"><img src="" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                    <a href="#"><h4>{{$fav->property_type }}</h4></a>
                    <h6>by: {{$fav->user_id}}</h6>
                    <ul class="rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li>(24) Reviews</li>
                    </ul>
                    <span class="price"><div class="icon"><img src="images/listing-icon-01.png" alt=""></div> ${{$fav->price}}/ month with taxes</span>
                    <span class="details">Details: <em>{{$fav->area}} sq ft</em></span>
                    <ul class="info">
                        <li><img src="images/listing-icon-02.png" alt=""> {{$fav->number_of_rooms}} Bedrooms</li>
                        <li><img src="images/listing-icon-03.png" alt=""> {{$fav->number_of_path_rooms}} Bathrooms</li>
                    </ul>
                    <div class="main-white-button">
                        <div class="content">
                            <a href="#"><i class="fa fa-eye"></i>View Details</a>
                        </div>
                        <div class="content">
                            <a href="#"><i class=""></i>Delete</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    @endforeach
      @else
          <h4>There is no realestate in your favoraite.</h4>
      @endif
  </div>
@endsection


