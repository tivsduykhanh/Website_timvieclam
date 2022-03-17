<form action="/search" method="GET" class="serach-form-area">
	<div class="row justify-content-center form-wrap">
			<div class="col-lg-4 form-cols">
					<input type="search" class="form-control" name="search"
							placeholder="Bạn muốn tìm kiếm cái gì?" value="">
			</div>
			<div class="col-lg-3 form-cols">
					<div class="default-select" id="default-selects"">
						<select name="searchtinhthanh">
									<option value="">Tất cả tỉnh thành</option>
							@foreach ($tinhthanhs as $tinhthanh)
									<option value={{$tinhthanh->id}}>{{$tinhthanh->tentinhthanh}}</option>
							@endforeach
						</select>
					</div>
			</div>
			<div class="col-lg-3 form-cols">
				<div class="default-select" id="default-selects2">
						<select name="searchloainganh">
								<option value="">Tất cả loại ngành</option>
								@foreach ($loainganhs as $loainganh)
										<option value={{$loainganh->id}}>{{$loainganh->tennganh}}</option>
								@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-2 form-cols">
					<button type="submit" class="btn btn-info">
							<span class="lnr lnr-magnifier"></span> Search
					</button>
			</div>
	</div>
</form>