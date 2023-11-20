import { Component } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { ApiService } from 'src/app/services/api.service';

@Component({
  selector: 'app-edit',
  templateUrl: './edit.component.html',
  styleUrls: ['./edit.component.scss']
})
export class EditComponent {
  nombre_canal!:any
  numero_seguidores!:any
  url!:any
  id!:any
  constructor(private route: ActivatedRoute,private apiService:ApiService,private router:Router) {
     // Utiliza el snapshot para obtener el valor actual del parámetro id
     this.id = this.route.snapshot.paramMap.get('id');

     // Si esperas cambios en el valor del parámetro a lo largo del tiempo, puedes suscribirte a los cambios
     this.route.paramMap.subscribe(params => {
       this.id = params.get('id');
       this.apiService.buscarUno(this.id).subscribe((data:any)=>{
        console.log(data)
        this.nombre_canal=data.video.nombre_canal;
        this.numero_seguidores=data.video.nombre_canal;
        this.url=data.video.url;
       })
     });
  }
  actualizar(){
    const body={
      "nombre_canal":this.nombre_canal,
      "numero_seguidores":this.numero_seguidores,
      "url":this.url
    }
    this.apiService.actualizar(this.id,body).subscribe((data)=>{
      alert('se actualizo correctamente')
      this.router.navigate(['/'])
    })
  }
}
