@extends('dashboard.layout')

@section('dashboardsection')
    <h1>Welcome Back Sir Alex Ferguson</h1>

    <div class="table-responsive mb-4">
        <h5>Jadwal Perkuliahan</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Durasi</th>
                <th>Mata Kuliah</th>
                <th>Dosen Koordinator</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jadwals as $index => $jadwal)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $jadwal->hari }}</td>
                    <td>{{ $jadwal->start }} - {{ $jadwal->end }}</td>
                    <td>{{ \Carbon\Carbon::parse($jadwal->start)->diffInMinutes($jadwal->end) }} menit</td>
                    <td>{{ $jadwal->matkul->nama_matkul ?? '-' }}</td>
                    <td>{{ $jadwal->dosen->name ?? '-' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
