import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CrearComponent } from './componentes/crear/crear.component';
import { VerComponent } from './componentes/ver/ver.component';

const routes: Routes = [
  {
    path:'',
    component:VerComponent
  },
  {
    path:'crear',
    component:CrearComponent
  },
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
