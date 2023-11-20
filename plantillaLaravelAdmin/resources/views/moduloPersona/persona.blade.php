@extends('app')
@section('estilo')
     <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('contenido')
<div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">:: Datos de la fruta ::</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ url('fruta')}}">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="number"name="cantidad"  class="form-control" placeholder="Cantidad">
            </div>
            <div class="form-group">
              <input type="text" name="proveedor"  class="form-control" placeholder="Proveedor">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>

    </div>
</div>
<div class="row">
  <div class="card col-md-12 ">
    <div class="card-header">
      <h3 class="card-title">:: Listado de frutas ::</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr style="text-align: center">
          <th>Items</th>
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Proveedor</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($frutas as $item)
          <tr style="text-align: center">
            <td>{{$loop->index+1}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->cantidad}}</td>
            <td>{{$item->proveedor}}</td>
            <td>
              <a href="#" class="text-muted">
                 <i class="fas fa-edit"></i>
              </a>
              <form method="post" action="{{ url('frutas', $item->id)}}">
                @method('delete')
                @csrf
                <button  type="submit" style="border: none" >
                  <i class="fas fa-trash"></i>
               </button>
              </form>
          </td>
          </tr> 


          @endforeach
  
        </tbody>
   
      </table>
    </div>
    <!-- /.card-body -->
  </div>

</div>

@endsection

@section('script')
  <!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
