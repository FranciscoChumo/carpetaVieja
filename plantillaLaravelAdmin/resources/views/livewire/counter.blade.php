<div>
    {{-- Success is as dangerous as failure. --}}
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
              
                <button  wire:click="delete({{ $item->id }})" style="border: none" >
                  <i class="fas fa-trash"></i>
               </button>
              
          </td>
          </tr> 


          @endforeach
  
        </tbody>
   
      </table>
    </div>
    <!-- /.card-body -->
  </div>

</div>
</div>
