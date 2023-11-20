import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { VerComponent } from './componentes/ver/ver.component';
import { CrearComponent } from './componentes/crear/crear.component';
import { EditComponent } from './componentes/edit/edit.component';

const routes: Routes = [
  {
    path:'',
    component:VerComponent
  },
  {
    path:'crear',
    component:CrearComponent
  },
  {
    path:'edit/:id',
    component:EditComponent
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
