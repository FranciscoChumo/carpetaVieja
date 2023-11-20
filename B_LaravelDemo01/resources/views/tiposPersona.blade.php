<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <div style="margin-bottom: 25px">
        <form action="{{ url ('persona')}}" method="post">
            @csrf
            <input type="text" name="tp" placeholder="Tipo">
            <input type="submit" value="Guardar">
        </form>

    </div>


    <table border="1">
        <thead>
            <tr> 
                <td> # </td>
                <td> Tipo </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipos as $item)
                <tr>
                    <td> {{ $loop->index + 1 }}</td>
                    <td> {{ $item->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

   

</body>
</html>