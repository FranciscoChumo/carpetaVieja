import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { VerComponent } from './componente/ver/ver.component';
import { CrearComponent } from './componente/crear/crear.component';
import { EditComponent } from './componente/edit/edit.component';
import { FormsModule } from '@angular/forms';
import {HttpClientModule} from '@angular/common/http'
@NgModule({
  declarations: [
    AppComponent,
    VerComponent,
    CrearComponent,
    EditComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    //pasamos formsmodule para que no salga error con el ng module
    FormsModule,
    //pasamos HttpClientModule para que no salga error con el HttpClient
    HttpClientModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
