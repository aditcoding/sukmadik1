@extends('dashboard.layout')

@section('dashboardsection')
    <h1>Welcome Back Mahasiswa Polije</h1>

    <div class="table-responsive mb-4">
        <h5>Jadwal Perkuliahan</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-light">
            <tr>
{{--                <th>No</th>--}}
                <th>Hari</th>
                <th>Jam</th>
                <th>Durasi</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen Koordinator</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jadwals as $index => $jadwal)
                @php
                    $duration = '-';
                    $jam = '-';

                    try {
                        if ($jadwal->start && $jadwal->end) {
                            $start = \Carbon\Carbon::parse($jadwal->start);
                            $end = \Carbon\Carbon::parse($jadwal->end);

                            $jam = $start->format('H:i') . ' - ' . $end->format('H:i');
                            $diff = $start->diffInMinutes($end);

                            if ($diff > 0) {
                                $duration = $diff . ' menit';
                            }
                        }
                    } catch (\Exception $e) {
                        // Lak Error, nilai default '-'
                    }
                @endphp
                <tr>
{{--                    <td>{{ $index + 1 }}</td>--}}
                    <td>{{ $jadwal->jadwal->Hari ?? '-' }}</td>
                    <td>{{ $jam }}</td>
                    <td>{{ $duration }}</td>
                    <td>{{ $jadwal->matkul->nama_matkul ?? '-' }}</td>
                    <td>{{ $jadwal->sks ?? '-' }}</td>
                    <td>{{ $jadwal->dosen->nama ?? '-' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
