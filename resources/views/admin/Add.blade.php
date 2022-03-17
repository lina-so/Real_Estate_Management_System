
@extends('layouts.app')


@section('content')

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
					<h2>Add Realestate</h2>
					<form  action="/Add" method="POST" enctype="multipart/form-data">
                    @csrf
						<div class="inputBox">
							<input type="text" placeholder="location" name="location">
						</div>
						<div class="inputBox">
							<input type="Number" placeholder="floor" name="floor">
						</div>
						<div class="inputBox">
							<input type="text" placeholder="City" name="city">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="Area" name="Area">
						</div>
						<div class="inputBox">
							<input type="number" step=0.01  placeholder="price" name="price">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="Number of Rooms" name="Number of Rooms">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="Number of PathRooms" name="Number of PathRooms">
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
                            <input type="file" id="image" name="image"  >  
                        </div>
						<div class="save">
                            <button type="submit">save</button>
                        </div>
						
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection
