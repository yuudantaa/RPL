@extends("layouts/main")
@section("title","daftarKaryawan")
@section("daftarKaryawan")
<div class="card">
    <div class="card-body">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection