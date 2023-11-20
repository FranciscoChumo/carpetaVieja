import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http'
import { AppRoutingModule } from './app-routing.module';
import { Ng2SearchPipeModule } from 'ng2-search-filter';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { NavComponent } from './Shared/nav/nav.component';
import { PeliculaComponent } from './Peliculas/pelicula/pelicula.component';
import { CrearpeliculaComponent } from './Peliculas/crearpelicula/crearpelicula.component';
import { VerpeliculaComponent } from './Peliculas/verpelicula/verpelicula.component';

@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    PeliculaComponent,
    CrearpeliculaComponent,
    VerpeliculaComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    ReactiveFormsModule,
    FormsModule,
    Ng2SearchPipeModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
