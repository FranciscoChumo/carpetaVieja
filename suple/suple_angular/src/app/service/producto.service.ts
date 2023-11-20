import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ProductoService {
  private api="http://127.0.0.1:8000/api/"
  constructor(private httpClient:HttpClient) { }
  obtenerTodos(){
    return this.httpClient.get(this.api+"producto");
  }
  crear(body:any){
    return this.httpClient.post(this.api+"producto",body);

  }
  buscarUno(id:any){
    return this.httpClient.get(this.api+"producto/"+id);

  }
}
