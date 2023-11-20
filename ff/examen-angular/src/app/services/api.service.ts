import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private api="http://127.0.0.1:8000/api/"
  constructor(private httpClient:HttpClient) { }
  obtenerTodos(){
    return this.httpClient.get(this.api+"videos");
  }
  crear(body:any){
    return this.httpClient.post(this.api+"videos",body);

  }
  buscarUno(id:any){
    return this.httpClient.get(this.api+"videos/"+id);

  }
  actualizar(id:any,body:any){
    return this.httpClient.put(this.api+"videos/"+id,body);

  }
}
