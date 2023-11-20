import { Component } from '@angular/core';
import { ApiService } from 'src/app/service/api.service';

@Component({
  selector: 'app-ver',
  templateUrl: './ver.component.html',
  styleUrls: ['./ver.component.css']
})
export class VerComponent {
  videos!:any
constructor(private apiService:ApiService ){
  this.apiService.obtenerTodos().subscribe((data:any)=>{
   console.log(data.videos)
   this.videos=data.videos;
  })
}
}
