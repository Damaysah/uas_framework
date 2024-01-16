
    <h1>DATA DOSEN</h1>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
    
        th, td {
            padding: 10px; /* Adjust the padding as needed */
            border: 1px solid #ddd; /* Add border for better visibility */
        }
    </style>
    
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>NAMA DOSEN</th>
                <th>FOTO DOSEN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nip }}</td>
                <td>{{ $dosen->nama_dosen }}</td>
                <td>
                    @if ($dosen->foto_dosen)
            <img src="{{ asset('fotos/' . $dosen->foto_dosen) }}" alt="Foto Dosen" style="max-width: 100px;">
        @else
            <p>No Photo</p>
        @endif
                </td>
            </tr>
            @endforeach
            <!-- Add more <tr> elements for additional rows if needed -->
        </tbody>
    </table>
