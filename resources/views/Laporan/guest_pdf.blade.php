<!DOCTYPE html>
<html>
<head>
	<title>Cetak laporan Kejadian satpam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Cetak laporan Kejadian satpam</h4>

	</center>

	<table class='table table-bordered'>
                        
        <thead>
            <tr>
                
                <th>Nama Satpam</th>
                <th>Kantor</th>
                <th>Alamat</th>
                <th>No Telp.</th>
                <th>Keperluan</th>
                <th>Perusahaan Tamu</th>
                <th>Gambar</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($satpam as $s)
            <tr class="tr-shadow">
                
                <td style="color: black"> {{$s ->profils['Name']}}</td>
                <td style="color: black">
                    <span >{{ $s -> client->name }}</span>
                </td>
                @foreach ($s ->guest as $item)
                <td style="color: black">
                    <span >{{ $item['address']}}</span>
                </td>
                <td style="color: black"> {{ $item['phone_num']}}</td>
                <td style="color: black"> {{ $item['requirement']}}</td>
                <td style="color: black"> {{ $item['company']}}</td>
                <td> <img src="file_attachment/fetch_image{{ $item['id'] }}" width="75"></td>
                
                @endforeach
            </tr>
            <tr class="spacer"></tr>
            @endforeach         
        </tbody>
    </table>

</body>
</html>