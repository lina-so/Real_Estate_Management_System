
@extends('layouts.app')


@section('content')
<h1>Update Your Realestate page</h1>

<div class="container">
        <div class="header-content">
            <p>Active Listings +1,500 Over</p>
            <h1>Finds Nearby Places & Things</h1>
            <button><a href="">Search Now</a></button>
        </div>
    </div>

    <section>
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box">
			<div class="square" style="--i: 0;"></div>
			<div class="square" style="--i: 1;"></div>
			<div class="square" style="--i: 2;"></div>
			<div class="square" style="--i: 3;"></div>
			<div class="square" style="--i: 4;"></div>
			<div class="container">
				<div class="form">
					<h2>Update Your Realestate</h2>
					@foreach ($realestate as $real )
					<form  action="{{route('update-realestate',$real->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
						<div class="inputBox">
							<input type="text" placeholder="location" name="location"  value ="{{$real->location}}">
						</div>
						<div class="inputBox">
							<input type="Number" placeholder="floor" name="floor"  value ="{{$real->floor}}">
						</div>
						<div class="inputBox">
							<input type="text" placeholder="City" name="city"  value ="{{$real->city}}">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="Area" name="area"  value ="{{$real->area}}">
						</div>
						<div class="inputBox">
							<input type="number" step=0.01  placeholder="price" name="price"  value ="{{$real->price}}">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="Number of Rooms" name="number_of_rooms"  value ="{{$real->number_of_rooms}}">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="Number of PathRooms" name="number_of_path_rooms"  value ="{{$real->number_of_path_rooms}}">
						</div>

                        <div class="inputBox">
                            <select name="property_type">
                                <option value="Villa">Villa</option>
                                <option value="Flat">Flat</option>
                                <option value="Shop">Shop</option>
                                <option value="Land">Land</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <select  name="state">
                                <option value="Sale">Sale</option>
                                <option value="Rent">Rent</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <select name="type">
                                <option value="court">court</option>
                                <option value="taboo">taboo</option>
                            </select>
                        </div>
						<div class="inputBox">
							<label for="">Cover</label>
                            <input type="file" id="image" name="cover"  >  
                        </div>
                        <div class="inputBox">
							<label for="">Images</label>
                            <input type="file" id="image" name="image[]" multiple >  
                        </div>
						<div class="save">
                            <button type="submit">Update</button>
                        </div>
						
					</form>
					@endforeach
				</div>
			</div>
		</div>
	</section>



@endsection
   
