import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { ProductoService } from 'src/app/service/producto.service';

ProductoService
@Component({
  selector: 'app-crear',
  templateUrl: './crear.component.html',
  styleUrls: ['./crear.component.css']
})
export class CrearComponent {
  nombre!:any
  precio!:any
  cantidad_stock!:any
  constructor(private apiService:ProductoService,private router:Router){}
  crear(){
    console.log(this.nombre)
    console.log(this.precio)
    console.log(this.cantidad_stock)
    const body={
      "nombre":this.nombre,
      "precio":this.precio,
      "cantidad_stock":this.cantidad_stock
    }
    this.apiService.crear(body).subscribe((data:any)=>{
      alert('se agrego un nuevo producto')
      this.router.navigate(['/'])
    })
  }
}
