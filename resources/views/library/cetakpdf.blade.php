<h2>Tabel Genre</h2>

<table style="width:50%; border:solid;"  id="example">
        <tr>
            <td style="width:5%;"> <b>ID</b> </th>
            <td style="width:24%;"> <b>Nama</b> </th>
        </tr>
            
    @foreach($datas as $key=>$value)
        <tr>
            <td">{{ $loop->iteration }}</td>
            <td">{{ $value->nama }}</td>
        </tr>
    @endforeach
</table>