import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { CrearpeliculaComponent } from './Peliculas/crearpelicula/crearpelicula.component';
import { PeliculaComponent } from './Peliculas/pelicula/pelicula.component';
import { VerpeliculaComponent } from './Peliculas/verpelicula/verpelicula.component';

const routes: Routes = [
  {path: '', component:AppComponent},
  {path: 'pelicula',component:PeliculaComponent,children:[
  {path: 'crear', component:CrearpeliculaComponent},
  {path: 'ver', component:VerpeliculaComponent}
  ]},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
