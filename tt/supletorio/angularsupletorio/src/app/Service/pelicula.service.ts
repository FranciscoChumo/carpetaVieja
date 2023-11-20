import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class PeliculaService {

  api = 'http://127.0.0.1:8000/api';

  constructor(private http:HttpClient) { }

CreatePelicula(body:any){
  return this.http.post(`${this.api}/peliculas/`,body);
}
AllPelicula(){
  return this.http.get(`${this.api}/peliculas/`);
}
OnePelicula(id:any){
  return this.http.get(`${this.api}/peliculas/${id}`);
}
UpdatePelicula(id:any, body:any){
  return this.http.put(`${this.api}/peliculas/${id}`, body);
}
DeletePelicula(id:any){
  return this.http.delete(`${this.api}/peliculas/${id}`);
}
}
