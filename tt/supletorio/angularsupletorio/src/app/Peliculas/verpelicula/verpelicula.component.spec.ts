import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VerpeliculaComponent } from './verpelicula.component';

describe('VerpeliculaComponent', () => {
  let component: VerpeliculaComponent;
  let fixture: ComponentFixture<VerpeliculaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ VerpeliculaComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VerpeliculaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
