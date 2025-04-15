@extends('components.layout')
@section('content')
    <h1>Pasien</h1>

    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                   placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    @if($periksas->isEmpty())
                        <p>Tidak ada data periksa.</p>
                    @else
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Tanggal Periksa</th>
                                <th>Catatan Dokter</th>
                                <th>Biaya periksa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($periksas as $p)
                                {{--<td>{{ $loop->iteration }}</td>--}}
                                @php
                                    $pasienName = isset($p->pasien) ? $p->pasien->name : 'N/A';
                                @endphp
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $pasienName }}</td>
                                    <td>{{ $p->tgl_periksa ?? 'N/A' }}</td>
                                    <td>{{ $p->catatan ?? 'N/A' }}</td> {{-- Removed unnecessary dot --}}
                                    <td>{{ $p->biaya_periksa ?? 'N/A' }}</td> {{-- Removed unnecessary dot --}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
