import { Component } from '@angular/core';
import { DomSanitizer } from '@angular/platform-browser';
import { ApiService } from 'src/app/services/api.service';

@Component({
  selector: 'app-ver',
  templateUrl: './ver.component.html',
  styleUrls: ['./ver.component.scss']
})
export class VerComponent {
  videos!:any
  buscar!:any
  constructor(private apiService:ApiService,private _sanitizer: DomSanitizer
    ){
    this.apiService.obtenerTodos().subscribe((data:any)=>{
      console.log(data.videos)
      this.videos=data.videos;
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
