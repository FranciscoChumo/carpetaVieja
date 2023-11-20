import { Component } from '@angular/core';
import {  Router } from '@angular/router';
import { ApiService } from 'src/app/service/api.service';

@Component({
  selector: 'app-crear',
  templateUrl: './crear.component.html',
  styleUrls: ['./crear.component.css']
})
export class CrearComponent {
  nombre_canal!:any
  numero_seguidores!:any
  url!:any
  // creamos un constructor  de tipo privado creamnos una variable y llamamos a nuestra clase de ApiService
  // creamos una variavle para que se importe el Router
  constructor (private apiService:ApiService, private router:Router ){}
crear(){
  console.log(this.nombre_canal)
  console.log(this.numero_seguidores)
  console.log(this.url)
// se crea un const para que nno aya errores 
  const body={
  "nombre_canal":this.nombre_canal,
  "numero_seguidores":this.numero_seguidores,
  "url":this.url
  }
  this.apiService.crear(body).subscribe((data:any)=>{
    alert('se creo el video')
    this.router.navigate(['/'])
  })
}
// aki esta esta nuestra alerta con el mismo nombre 

}
