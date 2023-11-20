import { Component } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';
import { PeliculaService } from 'src/app/Service/pelicula.service';

@Component({
  selector: 'app-crearpelicula',
  templateUrl: './crearpelicula.component.html',
  styleUrls: ['./crearpelicula.component.css']
})
export class CrearpeliculaComponent {

  file!:any;
  constructor(private pelicula:PeliculaService, private route:Router){}

  peliculaForm= new FormGroup({
    nombreP: new FormControl(''),
    url_video: new FormControl(''),
    tipoP: new FormControl(''),
    url: new FormControl(''),
    imagen_id: new FormControl(''),
  })

  onFileSelected(event:any) {
    this.file = event.target.files[0];
 }

 registroPelicula(Form:any){
    console.log(Form);
    const body:any=new FormData();
    body.append('nombreP',this.peliculaForm.get('nombreP')?.value);
    body.append('imagenP',this.file);
    body.append('url_video',this.peliculaForm.get('url_video')?.value);
    body.append('tipoP',this.peliculaForm.get('tipoP')?.value);
    this.pelicula.CreatePelicula(body).subscribe((data:any)=>{
      console.log(data);
      alert('Se creo la Pelicula.');
    } ,(e)=>{console.log(e);});
  }
}
