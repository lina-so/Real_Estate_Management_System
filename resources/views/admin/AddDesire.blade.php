
@extends('layouts.app')


@section('content')

<div class="container2">
        <div class="header-content">
            <p>Active Listings +1,500 Over</p>
            <h1>Finds Nearby Places & Things</h1>
            <button><a href="">Search Now</a></button>
        </div>
    </div>

    <div class="section1">
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box1">
			<!-- <div class="square" style="--i: 0;"></div>
			<div class="square" style="--i: 1;"></div>
			<div class="square" style="--i: 2;"></div>
			<div class="square" style="--i: 3;"></div>
			<div class="square" style="--i: 4;"></div> -->
			<div class="container2">
				<div class="form1">
					<h2>Add Realestate</h2>
					<form  action="/Add" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="Box">
						<select  name="country">
							<option value="Paramkeh">Paramkeh</option>
							<!-- <option value="AL-tal">AL-tal</option>
							<option value="Harasta">Harasta</option>
							<option value="Doma">Doma</option>
							<option value="Rankous">Rankous</option>
							<option value="Dummar">Dummar</option>
							<option value="Hamak">Hamak</option> -->
							<option value="Sednaya">Sednaya</option>
						</select>
                        </div>
						<div class="Box">
							<input type="text" placeholder="address" name="address">
						</div>
						<div class="Box">
							<input type="Number" placeholder="floor" name="floor">
						</div>
						<div class="Box">
							<input type="number" placeholder="Area" name="area">
						</div>
						<div class="Box">
							<input type="number" step=0.01  placeholder="price" name="price">
						</div>
						<div class="Box">
							<input type="number" placeholder="Number of Rooms" name="number_of_rooms">
						</div>
						<div class="Box">
							<input type="number" placeholder="Number of PathRooms" name="number_of_path_rooms">
						</div>

						<div class="Box">
                            <select  name="state">
                                <option value="Sale">Sale</option>
                                <option value="Rent">Rent</option>
                            </select>
                        </div>
                        <div class="Box">
                            <select name="type">
                                <option value="court">court</option>
                                <option value="tabo">tabo</option>
                            </select>
                        </div>
                        <div class="Box">
                            <select name="property_type">
                                <option value="Villa">Villa</option>
                                <option value="Flat">Flat</option>
                                <option value="Shop">Shop</option>
                                <option value="Land">Land</option>
                            </select>
                        </div>
                       
						<div class="Box">
							<label for="">Cover</label>
                            <input type="file" id="image" name="cover"  >  
                        </div>
                        <div class="Box">
							<label for="">Images</label>
                            <input type="file" id="image" name="image[]" multiple >  
                        </div>
						<div class="save">
                            <button type="submit">save</button>
                        </div>
						
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
