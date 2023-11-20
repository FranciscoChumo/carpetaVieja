import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CrearComponent } from './componentes/crear/crear.component';
import { VerComponent } from './componentes/ver/ver.component';
import { FormsModule } from '@angular/forms';
import {HttpClientModule} from '@angular/common/http'
import { ChannelFilterPipe } from './buscar.pipe';

@NgModule({
  declarations: [
    AppComponent,
    CrearComponent,
    VerComponent,
    ChannelFilterPipe
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
