import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CrearpeliculaComponent } from './crearpelicula.component';

describe('CrearpeliculaComponent', () => {
  let component: CrearpeliculaComponent;
  let fixture: ComponentFixture<CrearpeliculaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CrearpeliculaComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CrearpeliculaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
