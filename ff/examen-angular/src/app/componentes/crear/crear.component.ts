import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { ApiService } from 'src/app/services/api.service';

@Component({
  selector: 'app-crear',
  templateUrl: './crear.component.html',
  styleUrls: ['./crear.component.scss']
})
export class CrearComponent {
  nombre_canal!:any
  numero_seguidores!:any
  url!:any
  constructor(private apiService:ApiService,private router:Router){}
  crear(){
    console.log(this.nombre_canal)
    console.log(this.numero_seguidores)
    console.log(this.url)
    const body={
      "nombre_canal":this.nombre_canal,
      "numero_seguidores":this.numero_seguidores,
      "url":this.url
    }
    this.apiService.crear(body).subscribe((data:any)=>{
      alert('se creó el video')
      this.router.navigate(['/'])
    })
  }
}
