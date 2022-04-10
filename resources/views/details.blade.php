@extends('layouts.app')


@section('content')

            <div class="container2">
                <div class="content">
                    <div class="content-header">
                        <div class="content-header-left">
                            <h2>{{ __('public.' .  $details->property_type) }}</h2>
                            <i></i><p> {{$details->address}}</p>
                            <ul>
                                <li> {{$details->number_of_rooms}} @lang('public.Rooms')</li>
                                <li> {{$details->number_of_path_rooms}} @lang('public.pathrooms')</li>
                                <li>{{$details->area}}m2 @lang('public.Area')</li>
                            </ul>
                        </div>
                        <div class="content-header-right">
                            <span>{{$details->price}}$</span>
                            <span>{{ __('public.' .  $details->state) }}</span>
                        </div>
                    </div>
                </div>

                <div class="content-body">
                    <div class="images">
                        <img src="" alt="">
                        <a href="{{url('liked/'.$details->id.'/')}}" class="addToFavoraite"><i class="fa fa-heart" data-product-id="{{$details->id}}"></i>@lang('public.add to favoraite')</a>
                        <a href="{{url('reserve/'.$details->id.'/')}}" class="reserve"><i class="fa fa-heart" data-product-id="{{$details->id}}"></i>@lang('public.Reserve')</a>
                    </div>
                    <div class="agent-info">
                        <h3>@lang('public.Contact Listing Agent')</h3>
                        <i></i><p>{{$user->email}}</p>
                         <a href=""><button>@lang('public.Send E-mail')</button></a>
                    </div>
                </div>

                <div class="details">
                    <h3>@lang('public.details')</h3>
                    <table>
                        <tbody>
                            <tr>
                            <td>@lang('public.purpose')</td>
                            <td>{{ __('public.' .  $details->state) }}</td>
                            </tr>
                            <tr>
                            <td>@lang('public.city')</td>
                            <td>{{ __('public.' .  $details->city) }}</td>
                            </tr>
                            <tr>
                            <td>@lang('public.floor')</td>
                            <td>{{$details->floor}}</td>
                            </tr>
                            <tr>
                            <td>@lang('public.Area')</td>
                            <td>{{$details->area}}m2</td>
                            </tr>
                            <tr>
                            <td> @lang('public.Ownership')</td>
                            <td>Agent</td>
                            </tr>
                            <tr>
                            <td> @lang('public.Type')</td>
                            <td>{{ __('public.' .  $details->property_type) }}</td>
                            </tr>
                            <tr>
                            <td> @lang('public.number_of_rooms')</td>
                            <td> {{$details->number_of_rooms}}</td>
                            </tr>
                            <tr>
                            <td> @lang('public.number_of_path_rooms') </td>
                            <td> {{$details->number_of_path_rooms}}</td>
                            </tr>
                            <tr>
                            <td> @lang('public.Property Type')</td>
                            <td>{{ __('public.' .  $details->type) }}</td>
                            </tr>
                            <tr>
                            <td> @lang('public.price')</td>
                            <td>{{$details->price}}$</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

 @include('not-logged')
       

@endsection


@section('scripts')
    <script>
        $(document).on('click','.addToFavoraite',function(e){
            e.preventDefault();

            @guest()
                $('.not-looggedin-model').css('diplay','blok');
            @endguest
            $.ajax({
                type:'post',
                url:"{{url('liked/'.$details->id.'/')}}",
                data:{
                    'realId':$(this).attr('data-product-id'),
                },
                success:function(response)
                {
                    swal(response.status);
                }
            });
        });
    </script>

<script>
        $(document).on('click','.reserve',function(e){
            e.preventDefault();

            @guest()
                $('.not-looggedin-model').css('diplay','blok');
            @endguest
            $.ajax({
                type:'post',
                url:"{{url('reserve/'.$details->id.'/')}}",
                data:{
                    'realId':$(this).attr('data-product-id'),
                },
                success:function(response)
                {
                    swal(response.status);
                }
            });
        });
    </script>
@endsection
