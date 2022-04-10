
@extends('layouts.app')


@section('content')

<div class="container2">
        <div class="header-content">
            <!-- <p>Active Listings +1,500 Over</p> -->
            <h1>@lang('public.Finds Nearby Places & Things')</h1>
            <button><a href="">@lang('public.Search Now')</a></button>
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
					<h2>@lang('public.add desire')</h2>
					<form  action="/desire" method="POST" enctype="multipart/form-data">
                    @csrf
				    
						<div class="Box">
							<select  name="country">
						    	<option value="">@lang('public.Select city')</option>
								<option value="2">@lang('public.Harasta')</option>
								<option value="1">@lang('public.Doma')</option>
								<!-- <option value="Sednaya">Sednaya</option> -->
							</select>
                        </div>
						<div class="Box">
							<input type="text" placeholder=@lang('public.address') name="address">
						</div>
						<div class="Box">
							<input type="Number"placeholder=@lang('public.floor') name="floor">
						</div>
						<div class="Box">
							<input type="number" placeholder=@lang('public.Area') name="area">
						</div>
						<div class="Box">
							<input type="number" step=0.01  placeholder=@lang('public.price') name="price">
						</div>
						<div class="Box">
							<input type="number" placeholder=@lang('public.number_of_rooms') name="number_of_rooms">
						</div>
						<div class="Box">
							<input type="number"  placeholder=@lang('public.number_of_path_rooms') name="number_of_path_rooms">
						</div>

						<div class="Box">
                            <select  name="state">
                                <option value="Sale">@lang('public.sale')</option>
                                <option value="Rent">@lang('public.rent')</option>
                            </select>
                        </div>
                        <div class="Box">
                            <select name="type">
                                <option value="court">@lang('public.court')</option>
                                <option value="tabo">@lang('public.tabo')</option>
                            </select>
                        </div>
                        <div class="Box">
                            <select name="property_type">
                                <option value="Villa">@lang('public.villa')</option>
                                <option value="Flat">@lang('public.flat')</option>
                                <option value="Shop">@lang('public.shop')</option>
                                <option value="Land">@lang('public.land')</option>
                            </select>
                        </div>
                     
						<div class="save">
                            <button type="submit">@lang('public.save')</button>
                        </div>
						
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
