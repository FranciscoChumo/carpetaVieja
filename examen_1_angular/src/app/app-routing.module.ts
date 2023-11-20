import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { VerComponent } from './componente/ver/ver.component';
import { CrearComponent } from './componente/crear/crear.component';
import { EditComponent } from './componente/edit/edit.component';

const routes: Routes = [
  //el path es para nuestra ruta
  {
    path:'',
    component:VerComponent
  },
  {
    path:'crear',
    component:CrearComponent
  },
  {
    path:'edit',
    component:EditComponent
  }

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
