import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
//para crear servicios ponermos en la cmd ng g s y el nombre
export class ApiService {
  //aki ponemos la url de laravel o de nuestra api
   private api="http://127.0.0.1:8000/api/"
   //nos muestra un errror por que no lo hemos puesto en app.module.ts
  constructor(private httpClient:HttpClient) { }
  obtenerTodos (){
    // el tipo poniendo api mas la ruta que tenemos en laravel 
   return this.httpClient.get(this.api+"videos"); 
  }
  crear (body:any){
    // se cambia aque tipo es get o post o put o delete
    //se pone una variable porque en la funcion crear que esta un request en laravel  
    return this.httpClient.post(this.api+"videos",body); 

  }
  buscarUno (id:any){
    //este es de tipo get para buscar necesita el id ise  lo ponemos co nun any ya que la ruta busca por id
    return this.httpClient.get(this.api+"videos/"+id); 

  }
  actualizar (id:any,body:any){
    // como en el de actualizar en laravel tiene request y actualizar por id 
    return this.httpClient.put(this.api+"videos/"+id,body); 

  }
}
