import { Component } from '@angular/core';
import { DomSanitizer, SafeResourceUrl  } from '@angular/platform-browser';
import { Router } from '@angular/router';
import { PeliculaService } from 'src/app/Service/pelicula.service';

@Component({
  selector: 'app-verpelicula',
  templateUrl: './verpelicula.component.html',
  styleUrls: ['./verpelicula.component.css']
})
export class VerpeliculaComponent {

  searchTerm!:any;
  videos!:any;

  constructor(private pelicula:PeliculaService, private route:Router, private _sanitizer: DomSanitizer){}

  ngOnInit(): void {
    this.pelicula.AllPelicula().subscribe((res:any)=>{
      console.log(res.Peliculas)
       this.videos=res.Peliculas
       console.log(this.videos)
    }, (e)=>{console.log(e);})
  }

  getVideoIframe(url:any) {
    var video, results;

    if (url === null) {
        return '';
    }
    results = url.match('[\\?&]v=([^&#]*)');
    video   = (results === null) ? url : results[1];

    return this._sanitizer.bypassSecurityTrustResourceUrl('https://www.youtube.com/embed/' + video);
}

}
