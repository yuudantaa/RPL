@extends("layouts/main")
@section("title","home")
@section('home')
<div class="row">
  <div class="col-md-4">
      <div class="card shadow" style="width: 18rem;">
          <div class="card-body">
              <h5 class="card-title">Total Karyawan</h5>
              <h4 class="card-subtitle mb-2 text-muted">500</h4>
          </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="card shadow" style="width: 18rem;">
          <div class="card-body">
              <h5 class="card-title">Total Gaji Per Bulan</h5>
              <h4 class="card-subtitle mb-2 text-muted">4000000</h4>
          </div>
      </div>
  </div>

  <div class="col-md-6">
    <div class="card shadow" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Total Perusahaan</h5>
            <h4 class="card-subtitle mb-2 text-muted">4</h4>
        </div>
    </div>
</div>


@endsection