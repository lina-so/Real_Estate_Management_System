@extends('layouts.app')


@section('content')

            <div class="container2">
                <div class="content">
                    <div class="content-header">
                        <div class="content-header-left">
                            <h2>  {{$details->property_type}}</h2>
                            <i></i><p> {{$details->location}}</p>
                            <ul>
                                <li> {{$details->number_of_rooms}} Rooms</li>
                                <li> {{$details->number_of_path_rooms}} pathrooms</li>
                                <li>{{$details->area}}m2 Size</li>
                            </ul>
                        </div>
                        <div class="content-header-right">
                            <span>{{$details->price}}$</span>
                            <span>{{$details->state}}</span>
                        </div>
                    </div>
                </div>

                <div class="content-body">
                    <div class="images">
                        <img src="" alt="">
                        <a href=""><button><i></i>Add To Favoraite</button></a>
                    </div>
                    <div class="agent-info">
                        <h3>Contact Listing Agent</h3>
                        <i></i><p>{{$user->email}}</p>
                         <a href=""><button>Send E-mail</button></a>
                    </div>
                </div>

                <div class="details">
                    <h3>Details</h3>
                    <table>
                        <tbody>
                            <tr>
                            <td>purpose</td>
                            <td>{{$details->state}}</td>
                            </tr>
                            <tr>
                            <td>city</td>
                            <td>{{$details->city}}</td>
                            </tr>
                            <tr>
                            <td>Floor</td>
                            <td>{{$details->floor}}</td>
                            </tr>
                            <tr>
                            <td>Area</td>
                            <td>{{$details->area}}m2</td>
                            </tr>
                            <tr>
                            <td> Ownership</td>
                            <td>Agent</td>
                            </tr>
                            <tr>
                            <td> Type</td>
                            <td>{{$details->property_type}}</td>
                            </tr>
                            <tr>
                            <td> Country</td>
                            <td>{{$details->location}}</td>
                            </tr>
                            <tr>
                            <td> Number Of Rooms</td>
                            <td> {{$details->number_of_rooms}}</td>
                            </tr>
                            <tr>
                            <td> Number Of Pathrooms </td>
                            <td> {{$details->number_of_path_rooms}}</td>
                            </tr>
                            <tr>
                            <td> Property Type</td>
                            <td>{{$details->type}}</td>
                            </tr>
                            <tr>
                            <td> Price</td>
                            <td>{{$details->price}}$</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
 

@endsection

