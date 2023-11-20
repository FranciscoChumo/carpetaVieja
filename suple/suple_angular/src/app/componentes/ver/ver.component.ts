import { Component } from '@angular/core';
import { ProductoService } from 'src/app/service/producto.service';
import { DomSanitizer } from '@angular/platform-browser';

@Component({
  selector: 'app-ver',
  templateUrl: './ver.component.html',
  styleUrls: ['./ver.component.css']
})
export class VerComponent {
  producto!:any
  buscar!:any
  constructor(private apiService:ProductoService,private _sanitizer: DomSanitizer
    ){
    this.apiService.obtenerTodos().subscribe((data:any)=>{
      console.log(data.producto)
      this.producto=data.producto;
    })
  }
  getVideoIframe(url:any) {
    let video, results;

    if (url === null) {
        return '';
    }
    results = url.match('[\\?&]v=([^&#]*)');
    video   = (results === null) ? url : results[1];

    return this._sanitizer.bypassSecurityTrustResourceUrl('https://www.youtube.com/embed/' + video);
}
}
