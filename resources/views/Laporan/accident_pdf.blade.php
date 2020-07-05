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
                <th>Insiden</th>
                <th>Tindak Lanjut</th>
                <th>Catatan</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($satpam as $s)
            <tr class="tr-shadow">
                
                <td style="color: black"> {{$s ->profils['Name']}}</td>
                <td style="color: black">
                    <span >{{ $s -> client->name }}</span>
                </td>
                @foreach ($s ->accident as $item)
                <td style="color: black">
                    {{ $item['Incident'] }}
                </td>
                <td style="color: black"> {{ $item['Tindak_lanjut'] }} </td>
                <td style="color: black"> <textarea name="catatan" id="" >{{ $item['note']}}</textarea></td>
                
                
                @endforeach
            </tr>
            <tr class="spacer"></tr>
          @endforeach               
        </tbody>
    </table>

</body>
</html>